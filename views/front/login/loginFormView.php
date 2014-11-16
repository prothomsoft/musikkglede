<?
require_once("model/components/session.inc.php");
$objAppSession=new AppSession();
$SN = $objAppSession->getSession('SN');
require_once("model/components/translator.inc.php");
$sLang = $objAppSession->getSession('sLang');
$oT = new Translator('template3',$sLang);
?>

		<!-- BEGIN LOGIN -->
		<section class="login" style="padding-bottom:50px">
			<div class="container">
			    <div class="starter-template">
			        <div class="form-login">
			        		<?php if($event->getArg("id1") == 'formLoginEmail') {?>
			                 <div class="alert alert-danger">
				                 <a href="#" class="close" data-dismiss="alert">x</a>
				                 Login or Pasword is wrong. Please try again.				        		 
				             </div>
				             <?php }?>				                          
					     <form name="loginForm" action="<?=$SN;?>index.php?event=executeLogin" method="POST">
					        <div class="form-group">
					            <label for="inputLogin">Login</label>
					            <input type="login" class="form-control" id="inputLogin" name="login">
					        </div>
					        <div class="form-group">
					            <label for="inputPassword">Password</label>
					            <input type="password" class="form-control" id="inputPassword" name="password">
					        </div>
					        <button type="submit" class="btn btn-primary">Login</button>				        
					    </form>
		            </div>
			 	</div>
			</div>
		</section>
	    <!-- END LOGIN -->