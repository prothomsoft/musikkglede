<?
require_once("model/components/session.inc.php");
$objAppSession=new AppSession();
$SN = $objAppSession->getSession('SN');
require_once("model/components/translator.inc.php");
$sLang = $objAppSession->getSession('sLang');
$oT = new Translator('template3',$sLang);
?>

		<!-- BEGIN CAROUSEL -->
		<section class="carousel">
			<div class="container">
		        <div class="row">
		            <div class="col-lg-12">
		                <div class="row carousel-holder">
		                    <div class="col-md-12">
		                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		                            <ol class="carousel-indicators">
		                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
		                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
		                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>		                                
		                            </ol>
		                            <div class="carousel-inner">
		                                <div class="item active">
		                                	<a href="<?=$SN;?>products.html"><img class="slide-image" src="<?=$SN?>images/home-slider1.jpg" alt=""></a>
		                                </div>
		                                <div class="item">
		                                    <a href="<?=$SN;?>products.html"><img class="slide-image" src="<?=$SN?>images/home-slider2.jpg" alt=""></a>
		                                </div>
		                                <div class="item">
		                                    <a href="<?=$SN;?>products.html"><img class="slide-image" src="<?=$SN?>images/home-slider3.jpg" alt=""></a>
		                                </div>		                                
		                            </div>
		                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
		                                <span class="glyphicon glyphicon-chevron-left"></span>
		                            </a>
		                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
		                                <span class="glyphicon glyphicon-chevron-right"></span>
		                            </a>
		                        </div>
		                    </div>
		                </div>
					</div>
		        </div>
		    </div>
	    </section>
	    <!-- END CAROUSEL -->