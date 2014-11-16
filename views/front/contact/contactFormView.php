<?
require_once("model/components/session.inc.php");
$objAppSession=new AppSession();
$SN = $objAppSession->getSession('SN');
require_once("model/components/translator.inc.php");
$sLang = $objAppSession->getSession('sLang');
$oT = new Translator('template3',$sLang);
?>

<div class="site-center-content cms">

		<?if ($event->getArg('message') != "") {?>
		<div class="ui-state-error ui-corner-all" style="padding: 8px;">
			<p style="color:#FFF"><span class="ui-icon ui-icon-alert" style="float: left; margin-right: .3em;"></span> 
				
				<strong><?=$oT->gL("txtWarning")?>:</strong>
			
				<?if($event->getArg("message") == "txtName") {
					echo "Fornavn er et obligatorisk felt";
				}?>
				
				<?if($event->getArg("message") == "txtCompanyAddress") {
					echo "Phone er et obligatorisk felt';";
				}?>
				
				<?if($event->getArg("message") == "txtEmail") {
					echo "Email er et obligatorisk felt";
				}?>
				
				<?if($event->getArg("message") == "txtEmailIncorrect") {
					echo "Entered Email is not correct";
				}?>
			 
		</div>
		<div class="ui-helper-clearfix spacer"></div>
		<?}?>
		
		<form name="f4" action="<?=$SN?>executeContactAction.html" method="post">
		
		
		<div class="cms subpage_head">
			<div>
				<h3><font color="#666"><?=$oT->gL("txtContact")?></font></h3>
			</div>
		</div>
		<div class="ui-helper-clearfix spacer12"></div> <!-- end .ui-helper-clearfix spacer -->
		
		<div class="site-center-content">
			<?$labelName = $oT->gL("txtYourName");
			//$labelPosition = "Job Title";
			//$labelPhone = "Your Contact Number";
			$labelEmail = $oT->gL("txtYourEmail");
			$labelCompany = $oT->gL("txtCompanyName");
			$labelCompanyAddress = $oT->gL("txtPhoneNumber");
			$labelComments = $oT->gL("txtMessage");
			$labelSend = $oT->gL("txtSend");
			$labelCancel = $oT->gL("txtCancel");?>
		</div>
		
		<div class="center-content">
			
			
			<fieldset>
				<label for="formNewsletterName"><?=$labelName?>: <font color="red">*</font></label>
				<input style="width:300px" type="text" name="Name" value="<?=$event->getArg('Name');?>" id="formNewsletterName" class="text ui-widget-content ui-corner-all  <?if ($event->getArg("missingField") == "Name") echo "ui-state-error"?>" />		
			</fieldset>
			
			<fieldset>
				<label for="formNewsletterCompany"><?=$labelCompany;?>:</label>
				<input style="width:300px" type="text" name="Company" value="<?=$event->getArg('Company');?>" id="formNewsletterCompany" class="text ui-widget-content ui-corner-all  <?if ($event->getArg("missingField") == "Company") echo "ui-state-error"?>" />		
			</fieldset>
			  
			<fieldset>
				<label for="formNewsletterEmail"><?=$labelEmail;?>: <font color="red">*</font></label>
				<input style="width:300px" type="text" name="Email" value="<?=$event->getArg('Email');?>" id="formNewsletterEmail" class="text ui-widget-content ui-corner-all  <?if ($event->getArg("missingField") == "Email") echo "ui-state-error"?>" />		
			</fieldset>
			
			<fieldset>
				<label for="formNewsletterCompanyAddress"><?=$labelCompanyAddress;?>: <font color="red">*</font></label>
				<input style="width:300px" type="text" name="CompanyAddress" value="<?=$event->getArg('CompanyAddress');?>" id="formNewsletterCompanyAddress" class="text ui-widget-content ui-corner-all  <?if ($event->getArg("missingField") == "CompanyAddress") echo "ui-state-error"?>" />		
			</fieldset>
			
			<fieldset style="width:300px;">
			<label for="formContent"><?=$labelComments;?>:</label>
				<textarea name="Content" id="formContent" cols="36" rows="3" class="text ui-widget-content ui-corner-all  <?if ($event->getArg("missingField") == "CompanyAddress") echo "ui-state-error"?>><?=$event->getArg('Content');?>"></textarea><br/><br/>
			</fieldset>
			
			</form>
		</div>
				
		<div class="center-content">
			<p style="padding-left:10px"><font color="red">*</font> Obligatoriske felt</p>
		</div>
		
		<div class="ui-helper-clearfix spacer">
		</div> <!-- end .ui-helper-clearfix spacer -->
		
		<div class="ui-widget formButtons" style="text-align:left; padding-left:20px;">
			<span class="siteButton"><a href="javascript:document.f4.submit();"><?=$labelSend?></a></span>
			<span class="siteButton"><a href="<?=$SN;?>ekopoint_start.html"><?=$labelCancel?></a></span>
		</div>
</div>