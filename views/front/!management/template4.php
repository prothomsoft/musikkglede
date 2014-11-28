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
<!DOCTYPE html>
<html lang="en">
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
	    
	    <!-- Google Fonts -->
		<link href='http://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700,300' rel='stylesheet' type='text/css'>
	
		<!-- Bootstrap -->
		<link href="<?=$SN;?>bootstrap/css/bootstrap.min.css" rel="stylesheet">
	
		<!-- Icon Fonts -->
		<link href="<?=$SN;?>css/fonts/font-awesome/css/font-awesome.css" rel="stylesheet">
	
		<!-- Owl Carousel Assets -->
		<link href="<?=$SN;?>vendor/owl-carousel/owl.carousel.css" rel="stylesheet">
		<link href="<?=$SN;?>vendor/owl-carousel/owl.theme.css" rel="stylesheet">
		<link href="<?=$SN;?>vendor/owl-carousel/owl.transitions.css" rel="stylesheet">
		
		<!-- bxslider -->
		<link href="<?=$SN;?>vendor/bxslider/jquery.bxslider.css" rel="stylesheet">
	
		<!-- Theme -->
		<link href="<?=$SN;?>css/theme-animate.css" rel="stylesheet">
		<link href="<?=$SN;?>css/theme-elements.css" rel="stylesheet">
		<link href="<?=$SN;?>css/theme-blog.css" rel="stylesheet">
		<link href="<?=$SN;?>css/theme-shop.css" rel="stylesheet">
		<link href="<?=$SN;?>css/theme.css" rel="stylesheet">
		
		<!-- Colors-->
		<link href="<?=$SN;?>css/colors/orange/style.css" rel="stylesheet" id="layoutstyle">
	
		<!-- Theme Responsive-->
		<link href="<?=$SN;?>css/theme-responsive.css" rel="stylesheet">
	
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->					
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
			
			<?if ($event->getArg('nproductView') != "") {
				echo $event->getArg('nproductView');
			}?>
			
			<?if ($event->getArg('nShoppingCartView') != "") {
				echo $event->getArg('nShoppingCartView');
			}?>
			
			<?if ($event->getArg('loginFormView') != "") {
				echo $event->getArg('loginFormView');
			}?>
			
			<?if ($event->getArg('contactFormView') != "") {
				echo $event->getArg('contactFormView');
			}?>
			
			<?if ($event->getArg('cmsView') != "") {
				echo $event->getArg('cmsView');
			}?>
			
			<?if ($event->getArg('contactConfirmationView') != "") {
				echo $event->getArg('contactConfirmationView');
			}?>
		
			<?if ($event->getArg('footerView') != "") {
				echo $event->getArg('footerView');
			}?>
	
			<?if ($event->getArg('searchView') != "") {
				echo $event->getArg('searchView');
			}?>
			
			
			
			
			
			
			
			
	
		
		
		
		
		
		
		
		
		
		
		
		
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="<?=$SN;?>vendor/jquery.min.js"></script> 
		<!-- Include all compiled plugins (below), or include individual files as needed --> 
		<script src="<?=$SN;?>bootstrap/js/bootstrap.min.js"></script>
		<script src="<?=$SN;?>bootstrap/js/bootstrap-hover-dropdown.min.js"></script>
		<script src="<?=$SN;?>vendor/owl-carousel/owl.carousel.js"></script>
		<script src="<?=$SN;?>vendor/modernizr.custom.js"></script>
		<script src="<?=$SN;?>vendor/jquery.stellar.js"></script>
		<script src="<?=$SN;?>vendor/masonry.pkgd.min.js"></script>
		<script src="<?=$SN;?>vendor/jquery.pricefilter.js"></script>
		<script src="<?=$SN;?>vendor/bxslider/jquery.bxslider.min.js"></script>
		<script src="<?=$SN;?>vendor/mediaelement-and-player.js"></script>
		<script src="<?=$SN;?>vendor/waypoints.min.js"></script>
		
		<!-- Theme Initializer -->
		<script src="<?=$SN;?>js/theme.plugins.js"></script>
		<script src="<?=$SN;?>js/theme.js"></script>
		
	</body>

</html>