<?
require_once("model/components/session.inc.php");
$objAppSession=new AppSession();
$SN = $objAppSession->getSession('SN');
require_once("model/components/translator.inc.php");
$sLang = $objAppSession->getSession('sLang');
$oT = new Translator('template3',$sLang);
?>

 
		<!-- Begin Main Slide -->
		<div role="main" class="main">
			<!-- Begin Main Slide -->
			<section class="main-slide">
				<div id="owl-main-demo" class="owl-carousel main-demo">
					<div class="item" id="item1"><img src="<?=$SN?>images/home-slider1.jpg" alt="Photo">
						<div class="item-caption">
							<div class="item-caption-inner">
								<p class="item-cat"><a href="#">Text</a></p>
								<h2>Up to 50% off<br>on selected items</h2>
								<a href="#" class="btn btn-white">Shop Now</a>
							</div>
						</div>
					</div>
					<div class="item" id="item2"><img src="<?=$SN?>images/home-slider2.jpg" alt="Photo">
						<div class="item-caption">
							<div class="item-caption-inner">
								<p class="item-cat"><a href="#">Text</a></p>
								<h2>25% off<br>for pink swim</h2>
								<a href="#" class="btn btn-white">Shop Now</a>
							</div>
						</div>
					</div>
					<div class="item" id="item3"><img src="<?=$SN?>images/home-slider3.jpg" alt="Photo">
						<div class="item-caption">
							<div class="item-caption-inner">
								<p class="item-cat"><a href="#">Text</a></p>
								<h2>Free shipping<br>on 50.00 NOK</h2>
								<a href="#" class="btn btn-white">Shop Now</a>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- End Main Slide -->	 		 
	