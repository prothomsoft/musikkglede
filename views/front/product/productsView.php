<?
require_once("model/components/session.inc.php");
$objAppSession=new AppSession();
$SN = $objAppSession->getSession('SN');
?>

<?$arrProductCategoryPlain = $event->getArg("arrProductCategoryPlain");?>
<?foreach($arrProductCategoryPlain as $objProductCategoryPlain) {
	if($objProductCategoryPlain->getProductCategorySeoName() == $event->getArg("id1")) {
		$fatherCategoryName = $objProductCategoryPlain->getProductCategoryName();
		$productCategoryId = $objProductCategoryPlain->getProductCategoryId();
	}
	if($objProductCategoryPlain->getProductCategorySeoName() == $event->getArg("id2")) {
		$productCategoryName = str_replace("&nbsp; &nbsp;","",$objProductCategoryPlain->getProductCategoryName());
		$childrenCategoryName = $productCategoryName; 	
		$productCategoryId = $objProductCategoryPlain->getProductCategoryId();
	}	
}?>

<?
if($event->getArg("id1") != "" and $event->getArg("id2") != "") {
	$productCategorySeoName = "'".$event->getArg("id2")."'";
} elseif ($event->getArg("id1") != "" and $event->getArg("id2") == "") {
	
	// get all subcategories for this father category
	$productCategorySeoName = $event->getArg("id1");
	$objProductCategoryDao = new ProductCategoryDao();
	$objProductCategory = $objProductCategoryDao->readBySeoName($productCategorySeoName);
	
	// father categoryId
	$productCategoryId = $objProductCategory->getProductCategoryId();
	$objProductCategoryGateway = new ProductCategoryGateway();
	$arrProductCategory = $objProductCategoryGateway->findByFatherId($productCategoryId);
	
	if($arrProductCategory) {
		$inClause = "";
		foreach($arrProductCategory as $objProductCategory) {
			$inClause .= "'".$objProductCategory->getSeoName()."',";
		}
	}
	$inClause = substr_replace($inClause, "", -1);
	
	if($inClause != "") {
		$productCategorySeoName = $inClause;
	} else {
		$productCategorySeoName = "'".$event->getArg("id1")."'";
	}
	
} else {
	$productCategorySeoName = "'all'";
}
?>



<?// get productCategory Desc in this point
	$objProductCategoryDao = new ProductCategoryDao();
	$objProductCategory = $objProductCategoryDao->read($productCategoryId);
	$Descr = $objProductCategory->getDescr();
	$event->setArg("Descr", $Descr);?>

<div class="cms subpage_head">
	<div>
		<h3><font color="#666">
		<?if($fatherCategoryName != "" and $childrenCategoryName != "") {
			echo $childrenCategoryName;
			$event->setArg("childrenCategoryName", $childrenCategoryName);
			$event->setArg("fatherCategoryName", $fatherCategoryName);
		} elseif ($fatherCategoryName != "" and $childrenCategoryName == "") {
			echo $fatherCategoryName;	
			$event->setArg("fatherCategoryName", $fatherCategoryName);
		}?>
		</font></h3>
	</div>
</div>
<div class="ui-helper-clearfix spacer12"></div> <!-- end .ui-helper-clearfix spacer -->

<?$arrProducts = $event->getArg("arrProducts");?>

<?if($arrProducts) {?>
	<?$counter = 1;?>
	<?foreach($arrProducts as $objProduct) {?>
		
		<?$urlExtension = "";?>
		<?if($objProduct->getProductCategoryLevelTwoSeoName() != "") {
			$urlExtension = "/".$objProduct->getProductCategoryLevelOneSeoName()."/".$objProduct->getProductCategoryLevelTwoSeoName();
		} else {
			$urlExtension = "/".$objProduct->getProductCategoryLevelOneSeoName();
		}?>
		
		<?if ($counter % 4 == 0) {?>
			<div class="productGrid" style="padding-right:0px">
				<div class="ui-widget-header ui-corner-top center-content" style="background: #e5e5e5;">
						<table width="100%"><tr><td height="50px"><p style="text-align:center; color:#000;"><?=$objProduct->getName();?></p></td></tr></table>						
				</div>
				<div class="ui-widget-content ui-corner-all center-content">
					<p style="text-align:center; height:150px; padding: 10px 0px 10px 0px;"><a title="<?=$objProduct->getProductType()?>" href="<?=$SN?>produkt/<?=$objProduct->getSeoName();?>/<?=$objProduct->getProductId()?>.html"><img style="border: 1px dotted #e5e5e5;z-index:-1;" src="<?=$SN?>upload/micro/<?=$objProduct->getImgDriveName();?>" alt="<?=$objProduct->getName();?> - <?=htmlspecialchars_decode($objProduct->getProducerName());?>" /></a></p>
					<p style="text-align:center">
						<?if ($objProduct->getPriceOld() != 0) {?>
							<strong><strike><font color="#000000"><?=$objProduct->getPriceOld();?> NOK</font></strike></strong>&nbsp;&nbsp;&nbsp;
							<strong><font color="#000000"><?=$objProduct->getPrice();?> NOK</font></strong>
						<?} else {?>
							<strong><font color="#000000"><?=$objProduct->getPrice();?> NOK</font></strong>
						<?}?>
					</p>
					<p style="text-align:center">&nbsp;</p>
					<p style="text-align:center">
						<a title="<?=$objProduct->getProductType()?>" href="<?=$SN?>produkt/<?=$objProduct->getSeoName();?>/<?=$objProduct->getProductId()?>.html"><img src="<?=$SN?>images/button_bg_pink_70.png" alt="wiecej"/></a><br/><br/>
						<? if($objProduct->getIsAvailable() == 1) {?>
							<a title="" href="<?=$SN?>executeAddShoppingCartAction<?=$urlExtension?>/<?=$objProduct->getProductId()?>.html"><img src="<?=$SN?>images/button_bg_green_70.png" alt=""/></a>
						<?} else {?>
							<img src="<?=$SN?>images/button_bg_green_70_grey.png" alt=""/>&nbsp;
						<?}?>
					</p>					
					<p style="text-align:center">&nbsp;</p>
				</div>
			</div>
		<?} else {?>
			<div class="productGrid">
				<div class="ui-widget-header ui-corner-top center-content" style="background: #e5e5e5;">
						<table width="100%"><tr><td height="50px"><p style="text-align:center; color:#000;"><?=$objProduct->getName();?></p></td></tr></table>						
				</div>
				<div class="ui-widget-content ui-corner-bottom center-content">
					<p style="text-align:center; height:150px; padding: 10px 0px 10px 0px;"><a title="<?=$objProduct->getProductType()?>" href="<?=$SN?>produkt/<?=$objProduct->getSeoName();?>/<?=$objProduct->getProductId()?>.html"><img style="border: 1px dotted #e5e5e5;z-index:-1;" src="<?=$SN?>upload/micro/<?=$objProduct->getImgDriveName();?>" alt="<?=$objProduct->getName();?> - <?=htmlspecialchars_decode($objProduct->getProducerName());?>" /></a></p>
					<p style="text-align:center">
						<?if ($objProduct->getPriceOld() != 0) {?>
							<strong><strike><font color="#000000"><?=$objProduct->getPriceOld();?> NOK</font></strike></strong>&nbsp;&nbsp;&nbsp;
							<strong><font color="#000000"><?=$objProduct->getPrice();?> NOK</font></strong>
						<?} else {?>
							<strong><font color="#000000"><?=$objProduct->getPrice();?> NOK</font></strong>
						<?}?>						
					</p>
					<p style="text-align:center">&nbsp;</p>
					<p style="text-align:center">
						<a title="<?=$objProduct->getProductType()?>" href="<?=$SN?>produkt/<?=$objProduct->getSeoName();?>/<?=$objProduct->getProductId()?>.html"><img src="<?=$SN?>images/button_bg_pink_70.png" alt="wiecej"/></a><br/><br/>
						<? if($objProduct->getIsAvailable() == 1) {?>
							<a title="" href="<?=$SN?>executeAddShoppingCartAction<?=$urlExtension?>/<?=$objProduct->getProductId()?>.html"><img src="<?=$SN?>images/button_bg_green_70.png" alt=""/></a>
						<?} else {?>
							<img src="<?=$SN?>images/button_bg_green_70_grey.png" alt=""/>&nbsp;
						<?}?>
					</p>					
					<p style="text-align:center">&nbsp;</p>
				</div>
			</div>
		<?}?>
		<?$counter = $counter + 1;?>
	<?}?>
<?}?>

</div>