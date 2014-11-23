<?
require_once("model/components/session.inc.php");
$objAppSession=new AppSession();
$SN = $objAppSession->getSession('SN');
require_once("model/components/translator.inc.php");
$sLang = $objAppSession->getSession('sLang');
$oT = new Translator('template3',$sLang);
?>

		<!-- BEGIN NAVIGATION -->
	    <header>
			<nav class="navbar navbar-default navbar-main navbar-main-slide" role="navigation">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="sr-only">Toggle navigation</span> 
							<span class="icon-bar"></span> 
							<span class="icon-bar"></span> 
							<span class="icon-bar"></span> 
						</button>
						<a href="<?=$SN?>musikkglede.html"><img src="<?=$SN?>images/musikkglede_logo.jpg" alt="Musikkglede"></a>
					</div>
					<ul class="nav navbar-nav navbar-nav navbar-right hidden-xs hidden-sm">
						<li class="search">
							<a href="javascript:void(0);" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="fa fa-search"></i></a>
						</li>
						<li class="menu-shop">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-shopping-cart"></i></a>
							<div class="dropdown-menu" style="padding:30px 10px 10px 10px;">
								<ul class="list-unstyled list-thumbs-pro">
									<li class="product">
										<div class="product-thumb-info">
											<a href="#" class="product-remove"><i class="fa fa-trash-o"></i></a>
											<div class="product-thumb-info-image">
												<a href="shop-product-detail1.html"><img alt="" width="60" src="<?=$SN?>images/instuments/piano.jpg"></a>
											</div>
											
											<div class="product-thumb-info-content">
												<h4><a href="shop-product-detail2.html">Denim shirt</a></h4>
												<span class="price">29.99 NOK</span>
											</div>
										</div>
									</li>
									<li class="product">
										<div class="product-thumb-info">
											<a href="#" class="product-remove"><i class="fa fa-trash-o"></i></a>
											<div class="product-thumb-info-image">
												<a href="shop-product-detail1.html"><img alt="" width="60" src="<?=$SN?>images/instuments/piano.jpg"></a>
											</div>
											
											<div class="product-thumb-info-content">
												<h4><a href="shop-product-detail2.html">Poplin shirt with fine pleated bands</a></h4>												
												<span class="price">29.99 NOK</span>
											</div>
										</div>
									</li>
									<li class="product">
										<div class="product-thumb-info">
											<a href="#" class="product-remove"><i class="fa fa-trash-o"></i></a>
											<div class="product-thumb-info-image">
												<a href="shop-product-detail1.html"><img alt="" width="60" src="<?=$SN?>images/instuments/piano.jpg"></a>
											</div>
											
											<div class="product-thumb-info-content">
												<h4><a href="shop-product-detail2.html">Contrasting shirt</a></h4>
												<span class="price">29.99 NOK</span>
											</div>
										</div>
									</li>
								</ul>
								<ul class="list-inline cart-subtotals text-right">
									<li class="cart-subtotal"><strong>Subtotal</strong></li>
									<li class="price"><span class="amount"><strong>431.00 NOK</strong></span></li>
								</ul>
								<div class="cart-buttons text-right">
									<button class="btn btn-white">View Cart</button>
									<button class="btn btn-primary">Checkout</button>
								</div>
							</div>
						</li>
					</ul>
					<div class="navbar-collapse collapse">
						<ul class="nav navbar-nav pull-right">
							<li><a href="shortcodes.html">OM OSS</a></li>
							<li><a href="shortcodes.html">SALGS- OG LEVERINGSVILKÅR</a></li>
							<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">KONTAKT</a>
								<ul class="dropdown-menu">
									<li><a href="#">KONTAKTSJEMA</a></li>
									<li><a href="#">KONTAKTINFORMASJON</a></li>
								</ul>
							</li>
						</ul>
					</div><!--/.nav-collapse --> 
				</div><!--/.container-fluid --> 
			</nav>
		</header>
	    <!-- END NAVIGATION -->