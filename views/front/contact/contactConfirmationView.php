<?
require_once("model/components/session.inc.php");
$objAppSession=new AppSession();
$SN = $objAppSession->getSession('SN');
$sLang = $objAppSession->getSession('sLang');
require_once("model/components/translator.inc.php");
$sLang = $objAppSession->getSession('sLang');
$oT = new Translator('template3',$sLang);
?>

<?$sendto = "musikkglede@musikkglede.no";

$Name = $event->getArg('Name');
$Company = $event->getArg('Company');
$Email = $event->getArg('Email');
$CompanyAddress = $event->getArg('CompanyAddress');
$Content = $event->getArg('Content');

$headers = "From: \"=?UTF-8?B?" . base64_encode($Name) ."?=\" <" . $Email . ">\r\n";
	//$headers = "From: " . $email . "\r\n";
	$headers .="Mime-Version: 1.0\r\n";
	$headers.="Content-Type: text/plain; charset=UTF-8";
	//$headers .= "Content-Transfer-Encoding: quoted-printable";
	//$header.="Content-Transfer-Encoding: 8bit\r\n";
	//$headers .= "From: \"$imie\" <".$email.">\r\n";
	//$headers .= "Reply-To:".$email."\r\n";
	//$headers .= "X-Priority: 1\r\n";
	//$headers .= "X-MSMail-Priority: High\r\n";
	$tresc = "Your Name: ".$Name."\n";
	$tresc .= "Company name: ".$Company."\n";
	$tresc .= "Email Address: ".$Email."\n";
	$tresc .= "Phone number: ".$CompanyAddress."\n";
	$tresc .= "Message: ".$Content."\n";
	
	//konwertowanie z utf-8 na iso 8859-2
	$temat =  "=?UTF-8?B?".base64_encode("Contact from musikkglede.no")."?=";
	//$tresc = stripslashes($tresc);
	//$tresc = strtr($tresc, "\xA5\x8C\x8F\xB9\x9C\x9F", "\xA1\xA6\xAC\xB1\xB6\xBC");
	//$temat = stripslashes($temat);
	//$temat = strtr($temat, "\xA5\x8C\x8F\xB9\x9C\x9F", "\xA1\xA6\xAC\xB1\xB6\xBC");
	//wysyłanie maila
	//$message = wordwrap($message, 70);
	$wyslane = mail($sendto, $temat ,$tresc,$headers);
	//echo $headers . "\n\n\n\n\n" . $tresc;
?>

<div class="site-center-content cms">

	
	<div class="cms subpage_head">
		<div>
			<h3><font color="#666"><?=$oT->gL("txtContact")?></font></h3>
		</div>
	</div>
	<div class="ui-helper-clearfix spacer12"></div> <!-- end .ui-helper-clearfix spacer -->

	<div class="site-center-content">
		<p>
			<?if($wyslane) {?>
					<?=$oT->gL("txtMessageSend")?>
				<?} else {?>
					<?=$oT->gL("txtMessageNotSend")?>
				<?}?>
			</p>
	</div>
	
	<div class="ui-helper-clearfix spacer">
	</div> <!-- end .ui-helper-clearfix spacer -->
	
	<div class="ui-widget formButtons">
		<span class="siteButton"><a href="<?=$SN;?>musikkpedagogikk.html"><?=$oT->gL("txtStart")?></a></span>
	</div>
</div>
<div class="ui-helper-clearfix spacer"></div>