<div class="ui-widget-header ui-corner-all center-header">	Article entry - description </div>
<?if ($event->getArg('message') != "") {?>	<div class="ui-helper-clearfix spacer"></div>	<div class="ui-state-error ui-corner-all" style="padding: 8px;">		<p><span class="ui-icon ui-icon-alert" style="float: left; margin-right: .3em;"></span> 		<strong>Warning:</strong> <?=$event->getArg('message');?></p> 	</div><?}?>
<div class="ui-helper-clearfix spacer"></div>
<div class="ui-widget">	<?php echo $event->getArg('BetaWizardNavigation')?></div>
<div class="ui-helper-clearfix spacer"></div>
<form name="f1" method="post" action="index.php"><input type="hidden" name="event" id="event" value="showBetaStep2"><input type="hidden" name="BetaId" id="BetaId" value="<?=$event->getArg('BetaId')?>"><input type="hidden" name="LongDescription" id="LongDescription" value="<?=$event->getArg('LongDescription')?>"><input type="hidden" name="Description" id="Description" value="<?=$event->getArg('Description')?>"><input type="hidden" name="EventDate" id="EventDate" value="1"><div class="ui-widget-content ui-corner-all center-content">
	
	<div style="float:left; width:20%">
	
		<?if($event->getArg('BetaOrder') != 0) {
			$maxBetaOrder = $event->getArg("BetaOrder");
		} else {
			$maxBetaOrder = $event->getArg("maxBetaOrder");
			$maxBetaOrder = $maxBetaOrder + 1;
		}?>
		<fieldset >
			<label for="BetaOrder">Order <font color="red">*</font></label>
			<input style="width:80px" type="text" name="BetaOrder" id="BetaOrder" value="<?=$maxBetaOrder?>" class="text ui-widget-content ui-corner-all <?if ($event->getArg("missingField") == "BetaOrder") echo "ui-state-error"?>" />
		</fieldset>						<fieldset>			<label for="Name">Category</label>			<select name="ClubId" id="ClubId" style="width:220px; padding:2px; border: 1px solid #DEDEDE;">				<?if ($event->getArg('ClubId') == 0) {?>					<option value="0" selected>Arkiv</option>					<option value="1">Videoarkiv</option>				<?} else {?>					<option value="0">Arkiv</option>					<option value="1" selected>Videoarkiv</option>				<?}?>			</select>  	   		</fieldset>		
	</div>
	<div class="ui-helper-clearfix spacer"></div>
</div>

<div class="ui-helper-clearfix spacer"></div>
		
<div class="ui-widget-content ui-corner-all center-content">
	<fieldset>
		<label for="Name">Title</label>
		<input type="text" name="Name" id="Name" value="<?echo htmlspecialchars_decode($event->getArg('Name'));?>" class="text ui-widget-content ui-corner-all <?if ($event->getArg("missingField") == "Name") echo "ui-state-error"?>" />
	</fieldset>
	
	<fieldset>
		<label for="Keyword">Sub Title</label>
		<input type="text" name="Keyword" id="Keyword" value="<?echo htmlspecialchars_decode($event->getArg('Keyword'));?>" class="text ui-widget-content ui-corner-all <?if ($event->getArg("missingField") == "Keyword") echo "ui-state-error"?>" />
	</fieldset>			<fieldset>		<label for="Ot1">Video Text</label>		<input type="text" name="Ot1" id="Ot1" value="<?echo htmlspecialchars_decode($event->getArg('Ot1'));?>" class="text ui-widget-content ui-corner-all <?if ($event->getArg("missingField") == "Ot1") echo "ui-state-error"?>" />	</fieldset>		<fieldset>		<label for="Om1">YouTube Code: http://www.youtube.com/embed/aTbLh4JdDTA</label>		<input type="text" name="Om1" id="Om1" value="<?echo htmlspecialchars_decode($event->getArg('Om1'));?>" class="text ui-widget-content ui-corner-all <?if ($event->getArg("missingField") == "Om1") echo "ui-state-error"?>" />	</fieldset>		<fieldset>		<label for="Ot2">Video Text</label>		<input type="text" name="Ot2" id="Ot2" value="<?echo htmlspecialchars_decode($event->getArg('Ot2'));?>" class="text ui-widget-content ui-corner-all <?if ($event->getArg("missingField") == "Ot2") echo "ui-state-error"?>" />	</fieldset>		<fieldset>		<label for="Om2">YouTube Code: http://www.youtube.com/embed/aTbLh4JdDTA</label>		<input type="text" name="Om2" id="Om2" value="<?echo htmlspecialchars_decode($event->getArg('Om2'));?>" class="text ui-widget-content ui-corner-all <?if ($event->getArg("missingField") == "Om2") echo "ui-state-error"?>" />	</fieldset>		<fieldset>		<label for="Ot3">Video Text</label>		<input type="text" name="Ot3" id="Ot3" value="<?echo htmlspecialchars_decode($event->getArg('Ot3'));?>" class="text ui-widget-content ui-corner-all <?if ($event->getArg("missingField") == "Ot3") echo "ui-state-error"?>" />	</fieldset>		<fieldset>		<label for="Om3">YouTube Code: http://www.youtube.com/embed/aTbLh4JdDTA</label>		<input type="text" name="Om3" id="Om3" value="<?echo htmlspecialchars_decode($event->getArg('Om3'));?>" class="text ui-widget-content ui-corner-all <?if ($event->getArg("missingField") == "Om3") echo "ui-state-error"?>" />	</fieldset>		<fieldset>		<label for="Ot4">Video Text</label>		<input type="text" name="Ot4" id="Ot4" value="<?echo htmlspecialchars_decode($event->getArg('Ot4'));?>" class="text ui-widget-content ui-corner-all <?if ($event->getArg("missingField") == "Ot4") echo "ui-state-error"?>" />	</fieldset>		<fieldset>		<label for="Om4">YouTube Code: http://www.youtube.com/embed/aTbLh4JdDTA</label>		<input type="text" name="Om4" id="Om4" value="<?echo htmlspecialchars_decode($event->getArg('Om4'));?>" class="text ui-widget-content ui-corner-all <?if ($event->getArg("missingField") == "Om4") echo "ui-state-error"?>" />	</fieldset>		<fieldset>		<label for="Ot5">Video Text</label>		<input type="text" name="Ot5" id="Ot5" value="<?echo htmlspecialchars_decode($event->getArg('Ot5'));?>" class="text ui-widget-content ui-corner-all <?if ($event->getArg("missingField") == "Ot5") echo "ui-state-error"?>" />	</fieldset>		<fieldset>		<label for="Om5">YouTube Code: http://www.youtube.com/embed/aTbLh4JdDTA</label>		<input type="text" name="Om5" id="Om5" value="<?echo htmlspecialchars_decode($event->getArg('Om5'));?>" class="text ui-widget-content ui-corner-all <?if ($event->getArg("missingField") == "Om5") echo "ui-state-error"?>" />	</fieldset>		<fieldset>		<label for="Ot6">Video Text</label>		<input type="text" name="Ot6" id="Ot6" value="<?echo htmlspecialchars_decode($event->getArg('Ot6'));?>" class="text ui-widget-content ui-corner-all <?if ($event->getArg("missingField") == "Ot6") echo "ui-state-error"?>" />	</fieldset>		<fieldset>		<label for="Om6">YouTube Code: http://www.youtube.com/embed/aTbLh4JdDTA</label>		<input type="text" name="Om6" id="Om6" value="<?echo htmlspecialchars_decode($event->getArg('Om6'));?>" class="text ui-widget-content ui-corner-all <?if ($event->getArg("missingField") == "Om6") echo "ui-state-error"?>" />	</fieldset>		<fieldset>		<label for="Ot7">Video Text</label>		<input type="text" name="Ot7" id="Ot7" value="<?echo htmlspecialchars_decode($event->getArg('Ot7'));?>" class="text ui-widget-content ui-corner-all <?if ($event->getArg("missingField") == "Ot7") echo "ui-state-error"?>" />	</fieldset>		<fieldset>		<label for="Om7">YouTube Code: http://www.youtube.com/embed/aTbLh4JdDTA</label>		<input type="text" name="Om7" id="Om7" value="<?echo htmlspecialchars_decode($event->getArg('Om7'));?>" class="text ui-widget-content ui-corner-all <?if ($event->getArg("missingField") == "Om7") echo "ui-state-error"?>" />	</fieldset>		<fieldset>		<label for="Ot8">Video Text</label>		<input type="text" name="Ot8" id="Ot8" value="<?echo htmlspecialchars_decode($event->getArg('Ot8'));?>" class="text ui-widget-content ui-corner-all <?if ($event->getArg("missingField") == "Ot8") echo "ui-state-error"?>" />	</fieldset>		<fieldset>		<label for="Om8">YouTube Code: http://www.youtube.com/embed/aTbLh4JdDTA</label>		<input type="text" name="Om8" id="Om8" value="<?echo htmlspecialchars_decode($event->getArg('Om8'));?>" class="text ui-widget-content ui-corner-all <?if ($event->getArg("missingField") == "Om8") echo "ui-state-error"?>" />	</fieldset>		<fieldset>		<label for="Ot9">Video Text</label>		<input type="text" name="Ot9" id="Ot9" value="<?echo htmlspecialchars_decode($event->getArg('Ot9'));?>" class="text ui-widget-content ui-corner-all <?if ($event->getArg("missingField") == "Ot9") echo "ui-state-error"?>" />	</fieldset>		<fieldset>		<label for="Om9">YouTube Code: http://www.youtube.com/embed/aTbLh4JdDTA</label>		<input type="text" name="Om9" id="Om9" value="<?echo htmlspecialchars_decode($event->getArg('Om9'));?>" class="text ui-widget-content ui-corner-all <?if ($event->getArg("missingField") == "Om9") echo "ui-state-error"?>" />	</fieldset>		<fieldset>		<label for="Ot10">Video Text</label>		<input type="text" name="Ot10" id="Ot10" value="<?echo htmlspecialchars_decode($event->getArg('Ot10'));?>" class="text ui-widget-content ui-corner-all <?if ($event->getArg("missingField") == "Ot10") echo "ui-state-error"?>" />	</fieldset>		<fieldset>		<label for="Om10">YouTube Code: http://www.youtube.com/embed/aTbLh4JdDTA</label>		<input type="text" name="Om10" id="Om10" value="<?echo htmlspecialchars_decode($event->getArg('Om10'));?>" class="text ui-widget-content ui-corner-all <?if ($event->getArg("missingField") == "Om10") echo "ui-state-error"?>" />	</fieldset>			
</div>
	
<div class="ui-helper-clearfix spacer"></div>
		
<div class="ui-widget-content ui-corner-all center-content">
		<fieldset style="width:750px;">
			<label for="ShortDescription">Text</label>
			<textarea name="ShortDescription" id="ShortDescription" cols="91" rows="15" class="wymeditor"><?echo htmlspecialchars_decode($event->getArg('ShortDescription'));?></textarea>			
		</fieldset>		
</div>

<div class="ui-helper-clearfix spacer"></div>

<div class="ui-widget formButtons">
	<input type="submit" value="Add Pictures" class="wymupdate">
	<span class="wizardButton wymupdate"><a href="javascript:$('#event').val('executeBetaWizardClose');$('#BetaId').val('<?=$event->getArg("BetaId");?>');document.f1.submit();">Save Changes</a></span>
</div>
</form>				