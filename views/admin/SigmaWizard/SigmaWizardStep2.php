<div class="ui-widget-header ui-corner-all center-header">
	News Entry - Picture
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
	<?php echo $event->getArg('SigmaWizardNavigation')?>
</div>

<div class="ui-helper-clearfix spacer"></div>

<div class="ui-widget-content ui-corner-all center-content">
	<div style="height:50px;">
		<div style="float:left">
			<input type="file" name="uploadify" id="uploadify" />
		</div>
		<div id="fileQueue" style="float:right;">
		</div>
	</div>
	<div class="ui-helper-clearfix spacer"></div>
	<div id="filesUploaded"></div>
	
	<div class="ui-helper-clearfix spacer"></div>
	
	<form name="f1" method="post" action="index.php">
		<input type="hidden" name="event" id="event" value="">
	    <input type="hidden" name="SigmaId" id="SigmaId" value="<?=$event->getArg('SigmaId')?>">
	</form>
	
</div>

<div class="ui-helper-clearfix spacer"></div>

<div class="ui-widget formButtons">
	<span class="wizardButton"><a href="javascript:$('#event').val('executeSigmaWizardClose');$('#SigmaId').val('<?=$event->getArg("SigmaId");?>');document.f1.submit();">Save Changes</a></span>
</div>