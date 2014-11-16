
<div class="ui-widget-header ui-corner-all center-header">
	Produkt - Product Preview
</div>

<?if ($event->getArg('message') != "") {?>
<div class="ui-helper-clearfix spacer"></div>
<div class="ui-state-error ui-corner-all" style="padding: 8px;">
	<p><span class="ui-icon ui-icon-alert" style="float: left; margin-right: .3em;"></span> 
	<strong>Warning:</strong> <?=$event->getArg('message');?></p> 
</div>
<?}?>

<div class="ui-helper-clearfix spacer"></div>

<div class="ui-widget">
	<?php echo $event->getArg('productWizardNavigation')?>
</div>

<div class="ui-helper-clearfix spacer"></div>

<?$productId = $event->getArg('productId');
	$objProductDao = new ProductDao();
	$objProduct = $objProductDao->read($productId);?>

<div class="center-content" style="width=790px;  padding:0px;">
				<div class="ui-helper-clearfix spacer">
				</div> <!-- end .ui-helper-clearfix spacer -->

        <!--grid-->
			<div class="productGrid4" style="float:left">
            	<div class="ui-widget-content-grey ui-corner-bottom center-content" style="background: transparent;  border: 0px;">
					<p style="text-align:center; height:200px; padding: 15px 0px 15px 0px;"><a href="../produkt/<?=$objProduct->getSeoName();?>/<?=$objProduct->getProductId()?>.html"><img src="../upload/thumb/<?=$objProduct->getImgDriveName();?>" alt="<?=$objProduct->getName();?> - <?=htmlspecialchars_decode($objProduct->getProducerName());?>"/></a></p>						
				</div>
			</div>
		
			<div style="float:right; width:560px;">
            	<div class="ui-widget-content ui-corner-all center-content" style="background: transparent; border: 0px;">    
    				<h1 style="padding-bottom:0px;"><?=$objProduct->getName();?></h1>
					<h2><?=htmlspecialchars_decode($objProduct->getExtName());?></h2>
					<h3>Price: 
						<?if ($objProduct->getPriceOld() != 0) {?>
							<strong><strike><font color="#84B0CF">$<?=$objProduct->getPriceOld();?></font></strike></strong>&nbsp;&nbsp;
							<strong><font color="#84B0CF">$<?=$objProduct->getPrice();?></font></strong>
							  </h3><br/> <br/>
						<?} else {?>
							<strong><font color="#84B0CF">$<?=$objProduct->getPrice();?></font></strong>
							</h3> <br/> <br/>
						<?}?>	
					
					
					<? if($objProduct->getIsAvailable() == 1) {?>
						<a href="../executeAddShoppingCartAction<?=$urlExtension?>/<?=$objProduct->getProductId()?>.html"><img src="../images/button_bg_green_70.png" alt="add to shopping cart"/></a>&nbsp;
					<?} else {?>
						<img src="../images/button_bg_green_70_grey.png" alt="add to shopping cart" />&nbsp;
					<?}?>
					<a href="<?=$SN;?>produkty<?=$urlExtension;?>.html"> <img src="../images/button_bg_continue.png" alt="Przejdź do <?=$objProduct->getProductCategoryLevelTwoSeoName();?>"/></a>
				</div>
				   
             
                
				<div class="ui-helper-clearfix spacer">
				</div> <!-- end .ui-helper-clearfix spacer -->
				
				<?if ($objProduct->getLongDescription() != "&lt;br /&gt;" && $objProduct->getLongDescription() != "") {?>
					<div class="ui-widget-content ui-corner-all center-content"  style="background: transparent; border: 0px;">
						<?=htmlspecialchars_decode($objProduct->getLongDescription());?>
					</div>
					
					<div class="ui-helper-clearfix spacer">
					</div> <!-- end .ui-helper-clearfix spacer -->
				<?}?>
				
				<?if ($objProduct->getPreviewDescription() != "&lt;br /&gt;" && $objProduct->getPreviewDescription() != "") {?>
					<div class="ui-widget-content ui-corner-all center-content"  style="background: transparent; border: 0px;">
						<?=htmlspecialchars_decode($objProduct->getPreviewDescription());?>
					</div>
					
					<div class="ui-helper-clearfix spacer">
					</div> <!-- end .ui-helper-clearfix spacer -->
				<?}?>
				
				<?if ($objProduct->getContactDescription() != "&lt;br /&gt;" && $objProduct->getContactDescription() != "") {?>
					<div class="ui-widget-content ui-corner-all center-content"  style="background: transparent; border: 0px;">
						<?=htmlspecialchars_decode($objProduct->getContactDescription());?>
					</div>
					<div class="ui-helper-clearfix spacer">
					</div> <!-- end .ui-helper-clearfix spacer -->
				<?}?>
				
			</div>

</div>
	

<div class="ui-helper-clearfix spacer">
</div> <!-- end .ui-helper-clearfix spacer -->

	
<div class="ui-helper-clearfix spacer"></div>

<div class="ui-widget formButtons">
	<form name="f1" method="post" action="index.php">
	      <input type="hidden" name="event" id="event" value="showProductStep5">
	      <input type="hidden" name="productId" id="productId" value="<?=$event->getArg('productId');?>">
	 </form>
	<span class="wizardButton"><a href="javascript:$('#event').val('executeWizardClose');$('#productId').val('<?=$event->getArg("productId");?>');document.f1.submit();">Save Changes</a></span>
</div>	