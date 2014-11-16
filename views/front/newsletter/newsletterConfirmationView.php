<?
require_once("model/components/session.inc.php");
$objAppSession=new AppSession();
$SN = $objAppSession->getSession('SN');
$sLang = $objAppSession->getSession('sLang');
require_once("model/components/translator.inc.php");
$oT = new Translator('template3',$sLang);

?>

<div class="site-center-content cms">
	<div class="cms subpage_head">
		<div>
			<h3><font color="#666"><?=$oT->gL("txtNewsletterConfirmation")?></font></h3>
		</div>
	</div>
	<div class="ui-helper-clearfix spacer12"></div> <!-- end .ui-helper-clearfix spacer -->

	<div class="site-center-content">
		<p><?=$oT->gL("txtYourEmailWasAdded")?></p>
	</div>
	
	<div class="ui-helper-clearfix spacer">
	</div> <!-- end .ui-helper-clearfix spacer -->
	
	<div class="ui-widget formButtons">
		<span class="siteButton"><a href="<?=$SN;?>musikkpedagogikk.html"><?=$oT->gL("txtStart")?></a></span>
	</div>
</div>
<div class="ui-helper-clearfix spacer"></div>