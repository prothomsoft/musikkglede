<?
require_once("model/components/session.inc.php");
$objAppSession=new AppSession();
$SN = $objAppSession->getSession('SN');
require_once("model/components/translator.inc.php");
$sLang = $objAppSession->getSession('sLang');
$oT = new Translator('template3',$sLang);
?>

		<!-- BEGIN NAVIGATION -->
	    <section class="navigation">
	        <div class="container">
	            <div class="row">
	            	<div class="col-xs-10 col-sm-5 col-lg-4 col-md-4">
	            		<a href="<?=$SN;?>musikkglede.html"><img src="<?=$SN?>images/musikkglede_logo.jpg" alt=""></a>
	            	</div>
	                <div class="col-xs-2 col-sm-7 col-lg-8 col-md-8">
	                    <nav class="navbar navbar-default" role="navigation">
	                        <!-- Brand and toggle get grouped for better mobile display -->
	                        <div class="navbar-header">
	                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
	                                <span class="sr-only">Toggle navigation</span>
	                                <span class="icon-bar"></span>
	                                <span class="icon-bar"></span>
	                                <span class="icon-bar"></span>
	                            </button>
	                        </div>
	                        <!-- Collect the navigation links for toggling -->
	                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	                            <ul class="nav navbar-nav navbar-right">
	                                <li>
	                                    <a href="#">OM OSS</a>	                                    
	                                </li>
	                                <li><a href="#">SALGS- OG LEVERINGSVILKÅR</a>
	                                </li>
	                                <li class="dropdown">
	                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">KONTAKT</a>
	                                    <ul class="dropdown-menu">
	                                        <li><a href="#">KONTAKTSJEMA</a>
	                                        </li>
	                                        <li><a href="#">KONTAKTINFORMASJON</a>
	                                        </li>
	                                        
	                                    </ul>
	                                </li>	                                
	                            </ul>
	                        </div>                                                   
	                    </nav>
	                </div>
	            </div>
	        </div>
	    </section>
	    <!-- END NAVIGATION -->