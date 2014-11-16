<?
require_once("model/components/session.inc.php");
$objAppSession=new AppSession();
$SN = $objAppSession->getSession('SN');
?>


<div class="cms subpage_head">
	<div>
		<h3><font color="#666">Account activation</font></h3>
	</div>
</div>
<div class="ui-helper-clearfix spacer12"></div> <!-- end .ui-helper-clearfix spacer -->

<div class="ui-widget-content ui-corner-bottom center-content">
	<?$activationStatus = $event->getArg("activationStatus");?>
	<?if($activationStatus == "success") {?>
		Your account was activated !!!<br/><br/>
		<span class="login">
			<a href="#">Click here</a> to login.
		</span>
	<?}?>
	<?if($activationStatus == "fail") {?>
		Your account has been already activated !!!
	<?}?>	
</div>		