<?
require_once("model/components/session.inc.php");
$objAppSession=new AppSession();
$SN = $objAppSession->getSession('SN');
require_once("model/components/translator.inc.php");
$sLang = $objAppSession->getSession('sLang');
$oT = new Translator('template3',$sLang);
?>

		<!-- BEGIN FOOTER -->
		<section class="footer">
		    <div class="container">
		        <footer>
		            <div class="upper-foot">
						<div class="row">
							<div class="col-xs-6 col-sm-3">
								<h2>Contact detail</h2>
								<address>
									<i class="fa fa-map-marker"></i> No.123 Pellentesque nec erat.<br>
									Aenean semper, neque non faucibus.<br>
									<i class="fa fa-phone"></i> Phone. (123) 456-7890<br>
									<i class="fa fa-fax"></i> Fax. (123) 456-7890<br>
									<i class="fa fa-envelope"></i> E-mail. <a href="mailto:#">first.last@example.com</a>
								</address>
							</div>
							<div class="col-xs-6 col-sm-6">
								<h2>Categories</h2>
								<ul class="list-inline tagclouds">
									<li><a href="<?=$SN?>products.html">Dans</a></li>
									<li><a href="<?=$SN?>products.html">Postkort</a></li>
									<li><a href="<?=$SN?>products.html">Skole / Kontor</a></li>
									<li><a href="<?=$SN?>products.html">Paraplyer</a></li>
									<li><a href="<?=$SN?>products.html">Handlenett / Vesker / Kofferter</a></li>
									<li><a href="<?=$SN?>products.html">Magneter</a></li>
									<li><a href="<?=$SN?>products.html">Pynt / Interiør</a></li>
									<li><a href="<?=$SN?>products.html">Smykker / Velvære</a></li>
									<li><a href="<?=$SN?>products.html">Kjøkken</a></li>
									<li><a href="<?=$SN?>products.html">Spill/ Spilledåser</a></li>
									<li><a href="<?=$SN?>products.html">Baby / Graviditet</a></li>
									<li><a href="<?=$SN?>products.html">Noter / Bøker / CD / DVD</a></li>
									<li><a href="<?=$SN?>products.html">Instrumenter</a></li>
									<li><a href="<?=$SN?>products.html">Gavekort</a></li>
									<li><a href="<?=$SN?>products.html">Diverse</a></li>
								</ul>									
							</div>
							<div class="col-xs-6 col-sm-3">
								<h2>Don’t miss out</h2>
								<p>In venenatis neque a eros laoreet eu placerat erat suscipit. Fusce cursus, erat ut scelerisque.</p>
								<form class="form-inline form-newsletter" role="form">
									<div class="form-group">
										<label class="sr-only" for="exampleInputEmail2">Email address</label>
										<input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter your email here">
									</div>
									<button type="submit" class="btn"><i class="fa fa-caret-right"></i></button>
								</form>
							</div>
						</div>
					</div>
					<div class="below-foot">
						<div class="row">
							<div class="col-xs-6 copyrights">
								<p>Copyright &copy; 2014 Musikkglede. All rights reserved. <a href="<?=$SN?>login.html">Login</a></p>
							</div>
							<?/*?>
							<div class="col-xs-6 text-right">
								<ul class="list-inline social-list">
									<li><a data-toggle="tooltip" data-placement="top" title="Facebook" href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a data-toggle="tooltip" data-placement="top" title="Twitter" href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a data-toggle="tooltip" data-placement="top" title="Google+" href="#"><i class="fa fa-google-plus"></i></a></li>
									<li><a data-toggle="tooltip" data-placement="top" title="Pinterest" href="#"><i class="fa fa-pinterest"></i></a></li>
									<li><a data-toggle="tooltip" data-placement="top" title="RSS" href="#"><i class="fa fa-rss"></i></a></li>
								</ul>
							</div>
							<?*/?>
						</div>
					</div>
		        </footer>
		    </div>
		</section>
	    <!-- END FOOTER -->