<?
require_once("model/components/session.inc.php");
require_once("model/components/translator.inc.php");
$objAppSession=new AppSession();
$SN = $objAppSession->getSession('SN');
$sLang = $objAppSession->getSession('sLang');
$oT = new Translator('template3',$sLang);
?>

<?$objCmsContent = $event->getArg('objCmsContent'); ?>
<?$name = htmlspecialchars_decode($objCmsContent->getName());
	$longDescription = htmlspecialchars_decode($objCmsContent->getLongDescription());
	$shortDescription = $objCmsContent->getShortDescription();
	$ShortDescriptionTransEN = $objCmsContent->getShortDescriptionTransEN();
	$ShortDescriptionTransDE = $objCmsContent->getShortDescriptionTransDE();
	$ShortDescriptionTransRU  = $objCmsContent->getShortDescriptionTransRU();
	$Om1 = $objCmsContent->getOm1();
	$Om2 = $objCmsContent->getOm2();
	$Om3 = $objCmsContent->getOm3();
	$Om4 = $objCmsContent->getOm4();
	$Om5 = $objCmsContent->getOm5();
	$Om6 = $objCmsContent->getOm6();
	$Om7 = $objCmsContent->getOm7();
	$Om8 = $objCmsContent->getOm8();
	$Om9 = $objCmsContent->getOm9();
	$Om10 = $objCmsContent->getOm10();
	$Om11 = $objCmsContent->getOm11();
	$Om12 = $objCmsContent->getOm12();
	$Om13 = $objCmsContent->getOm13();
	$Om14 = $objCmsContent->getOm14();
	$Om15 = $objCmsContent->getOm15();
	$Om16 = $objCmsContent->getOm16();
	$Om17 = $objCmsContent->getOm17();
	$Om18 = $objCmsContent->getOm18();
	
	?>


	<?if ($objCmsContent->getCmsContentId() != "") { ?>
		<div class="cms subpage_head">
			<div>
				<h3><font color="#666"><?=$name;?></font></h3>
			</div>
		</div>
		<div class="ui-helper-clearfix spacer12"></div> <!-- end .ui-helper-clearfix spacer -->
		<div class="list-box cms"><?=$longDescription?></div>		
	<?} else {?>
			<div class="cms subpage_head">
			<div>
				<h3><font color="#666">-</font></h3>
			</div>
		</div>
		<div class="ui-helper-clearfix spacer12"></div> <!-- end .ui-helper-clearfix spacer -->
		<div class="list-box cms" style="padding-top:15px;">-</div>
	<?}?>
	

	<?if($shortDescription != "") {?>
		<div style="padding: 0px 0px 20px 41px;" >	
		<iframe width="655" height="491" src="<?=$shortDescription;?>" frameborder="0" allowfullscreen></iframe>
		</div>
	<?}?>
	
	<?if($ShortDescriptionTransEN != "") {?>
		<div style="padding: 0px 0px 20px 41px;" >	
		<iframe width="655" height="491" src="<?=$ShortDescriptionTransEN;?>" frameborder="0" allowfullscreen></iframe>
		</div>
	<?}?>
	
	<?if($ShortDescriptionTransDE != "") {?>
		<div style="padding: 0px 0px 20px 41px;" >	
		<iframe width="655" height="491" src="<?=$ShortDescriptionTransDE;?>" frameborder="0" allowfullscreen></iframe>
		</div>
	<?}?>
	
	<?if($ShortDescriptionTransRU != "") {?>
		<div style="padding: 0px 0px 20px 41px;" >	
		<iframe width="655" height="491" src="<?=$ShortDescriptionTransRU;?>" frameborder="0" allowfullscreen></iframe>
		</div>
	<?}?>
	
	
	<?if($Om1 != "") {?>
		<div style="padding: 0px 0px 20px 41px;" >	
		<iframe width="655" height="166" scrolling="no" frameborder="no" src="<?=$Om1;?>" frameborder="0" allowfullscreen></iframe>
		</div>
	<?}?>
	
	<?if($Om2 != "") {?>
		<div style="padding: 0px 0px 20px 41px;" >	
		<iframe width="655" height="166" scrolling="no" frameborder="no" src="<?=$Om2;?>" frameborder="0" allowfullscreen></iframe>
		</div>
	<?}?>
	
	<?if($Om3 != "") {?>
		<div style="padding: 0px 0px 20px 41px;" >	
		<iframe width="655" height="166" scrolling="no" frameborder="no" src="<?=$Om3;?>" frameborder="0" allowfullscreen></iframe>
		</div>
	<?}?>
	
	<?if($Om4 != "") {?>
		<div style="padding: 0px 0px 20px 41px;" >	
		<iframe width="655" height="166" scrolling="no" frameborder="no" src="<?=$Om4;?>" frameborder="0" allowfullscreen></iframe>
		</div>
	<?}?>
	
	<?if($Om5 != "") {?>
		<div style="padding: 0px 0px 20px 41px;" >	
		<iframe width="655" height="166" scrolling="no" frameborder="no" src="<?=$Om5;?>" frameborder="0" allowfullscreen></iframe>
		</div>
	<?}?>
	
	<?if($Om6 != "") {?>
		<div style="padding: 0px 0px 20px 41px;" >	
		<iframe width="655" height="166" scrolling="no" frameborder="no" src="<?=$Om6;?>" frameborder="0" allowfullscreen></iframe>
		</div>
	<?}?>
	
	<?if($Om7 != "") {?>
		<div style="padding: 0px 0px 20px 41px;" >	
		<iframe width="655" height="166" scrolling="no" frameborder="no" src="<?=$Om7;?>" frameborder="0" allowfullscreen></iframe>
		</div>
	<?}?>
	
	<?if($Om8 != "") {?>
		<div style="padding: 0px 0px 20px 41px;" >	
		<iframe width="655" height="166" scrolling="no" frameborder="no" src="<?=$Om8;?>" frameborder="0" allowfullscreen></iframe>
		</div>
	<?}?>
	
	<?if($Om9 != "") {?>
		<div style="padding: 0px 0px 20px 41px;" >	
		<iframe width="655" height="166" scrolling="no" frameborder="no" src="<?=$Om9;?>" frameborder="0" allowfullscreen></iframe>
		</div>
	<?}?>
	
	<?if($Om10 != "") {?>
		<div style="padding: 0px 0px 20px 41px;" >	
		<iframe width="655" height="166" scrolling="no" frameborder="no" src="<?=$Om10;?>" frameborder="0" allowfullscreen></iframe>
		</div>
	<?}?>
	
	<?if($Om11 != "") {?>
		<div style="padding: 0px 0px 20px 41px;" >	
		<iframe width="655" height="166" scrolling="no" frameborder="no" src="<?=$Om11;?>" frameborder="0" allowfullscreen></iframe>
		</div>
	<?}?>
	
	<?if($Om12 != "") {?>
		<div style="padding: 0px 0px 20px 41px;" >	
		<iframe width="655" height="166" scrolling="no" frameborder="no" src="<?=$Om12;?>" frameborder="0" allowfullscreen></iframe>
		</div>
	<?}?>
	
	<?if($Om13 != "") {?>
		<div style="padding: 0px 0px 20px 41px;" >	
		<iframe width="655" height="166" scrolling="no" frameborder="no" src="<?=$Om13;?>" frameborder="0" allowfullscreen></iframe>
		</div>
	<?}?>
	
	<?if($Om14 != "") {?>
		<div style="padding: 0px 0px 20px 41px;" >	
		<iframe width="655" height="166" scrolling="no" frameborder="no" src="<?=$Om14;?>" frameborder="0" allowfullscreen></iframe>
		</div>
	<?}?>
	
	<?if($Om15 != "") {?>
		<div style="padding: 0px 0px 20px 41px;" >	
		<iframe width="655" height="166" scrolling="no" frameborder="no" src="<?=$Om15;?>" frameborder="0" allowfullscreen></iframe>
		</div>
	<?}?>
	
	<?if($Om16 != "") {?>
		<div style="padding: 0px 0px 20px 41px;" >	
		<iframe width="655" height="166" scrolling="no" frameborder="no" src="<?=$Om16;?>" frameborder="0" allowfullscreen></iframe>
		</div>
	<?}?>
	
	<?if($Om17 != "") {?>
		<div style="padding: 0px 0px 20px 41px;" >	
		<iframe width="655" height="166" scrolling="no" frameborder="no" src="<?=$Om17;?>" frameborder="0" allowfullscreen></iframe>
		</div>
	<?}?>
	
	<?if($Om18 != "") {?>
		<div style="padding: 0px 0px 20px 41px;" >	
		<iframe width="655" height="166" scrolling="no" frameborder="no" src="<?=$Om18;?>" frameborder="0" allowfullscreen></iframe>
		</div>
	<?}?>
	
	<?$arrCmsContentPictures = $event->getArg("arrCmsContentPictures");?>
	<?if($arrCmsContentPictures) {?>
		<div class="galeria_photos ui-helper-clearfix"> 
		<?foreach($arrCmsContentPictures as $objCmsContentPicture) {?>
			<div class="galeria_photo_box">
				<div style="width:140px; height:160px">
				<center><a href="<?=$SN?>upload/proper/<?=$objCmsContentPicture->getImgDriveName();?>" title="<?=$objCmsContentPicture->getImgAltName();?>" rel="prettyPhoto[gallery<?=$objCmsContent->getCmsContentId();?>]" ><img src="<?=$SN?>upload/micro/<?=$objCmsContentPicture->getImgDriveName();?>"/></a>
				<p style="font-size:11px;"><?=$objCmsContentPicture->getImgAltName();?></p>
				</center>
				</div>
				
				
			</div>
			
		<?}?>
		</div>
	<?}?>