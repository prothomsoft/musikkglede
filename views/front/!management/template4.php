<?
require_once("model/components/session.inc.php");
require_once("model/components/translator.inc.php");
require_once("model/components/MenuBuilderPL.inc.php");
require_once("model/components/MenuBuilderEN.inc.php");
$objAppSession=new AppSession();
$SN = $objAppSession->getSession('SN');
$sLang = $objAppSession->getSession('sLang');
$oT = new Translator('template3',$sLang);

	$title = "Musikkglede";
	$keywords = "Musikkglede";
	$description = "Musikkglede";
	$url = "";
	$image = "";
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title><?=$title;?></title>
		<meta name="keywords" content="<?=$keywords?>" />
		<meta name="description" content="<?=$description;?>" />
		<link rel="shortcut icon" href="" />
		<meta property="og:title" content="<?=$title?>"/>
	    <meta property="og:type" content="article"/>
	    <meta property="og:url" content="<?=$url?>"/>
	    <meta property="og:image" content="<?=$image?>"/>
	    <meta property="og:site_name" content="Musikkglede"/>
	    <meta property="fb:admins" content="543999369"/>
	    <meta property="og:description" content="<?=$description?>"/>
	    <link href="<?=$SN;?>styles/main.min.css" rel="stylesheet">
	    <link href="<?=$SN;?>styles/animate.css" rel="stylesheet">
	    <link href="<?=$SN;?>font-awesome/css/font-awesome.min.css" rel="stylesheet">
	    <link href='http://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>
	    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700,300' rel='stylesheet' type='text/css'>				
	</head>
	
	<body>
	
		<?if ($event->getArg('navigationView') != "") {
			echo $event->getArg('navigationView');
		}?>
		
		<?if ($event->getArg('carouselView') != "") {
			echo $event->getArg('carouselView');
		}?>
		
		<?if ($event->getArg('productCategoriesView') != "") {
			echo $event->getArg('productCategoriesView');
		}?>
		
		<?if ($event->getArg('nproductsView') != "") {
			echo $event->getArg('nproductsView');
		}?>
		
		<?if ($event->getArg('loginFormView') != "") {
			echo $event->getArg('loginFormView');
		}?>
		
		<?if ($event->getArg('footerView') != "") {
			echo $event->getArg('footerView');
		}?>
		
		
	    
		<script src="<?=$SN;?>js/jquery.min.js" type="text/javascript"></script>
		<script src="js/scripts.min.js"></script>
	</body>

</html>