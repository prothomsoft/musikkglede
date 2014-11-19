<?$objAppSession = new AppSession();
	$arrShoppingCartItems = $objAppSession->getSession("ShoppingCartItems");
	$arrProduct = $event->getArg('arrProduct');
	$SN = $objAppSession->getSession('SN');
	$sLang = $objAppSession->getSession('sLang');
	require_once("model/components/translator.inc.php");
	$oT = new Translator('template3',$sLang);
?>

<!-- SHOPPING_CART -->
<section class="shopping_cart">
	<div class="container">				
		<div class="row">
			<!-- .shop-navbar -->
            <div class="col-md-3">
                <div class="row">
                    <div class="col-md-12">
                        <div class="widget-box sidebar">                                    
                            <ul class="wdgt-ul">
                                <li>
                                    <a href="<?=$SN?>products.html">Dans</a>                                            
                                </li>
                                <li>
                                    <a href="<?=$SN?>products.html">Postkort</a>                                            
                                </li>
                                <li>
                                    <a href="<?=$SN?>products.html">Skole / Kontor</a>                                            
                                </li>
                                <li>
                                    <a href="<?=$SN?>products.html">Paraplyer</a>                                            
                                </li>
                                <li>
                                    <a href="<?=$SN?>products.html">Handlenett / Vesker / Kofferter</a>                                            
                                </li>
                                <li>
                                    <a href="<?=$SN?>products.html">Magneter</a>                                            
                                </li>
                                <li>
                                    <a href="<?=$SN?>products.html">Pynt / Interiør</a>                                            
                                </li>
                                <li>
                                    <a href="<?=$SN?>products.html">Smykker / Velvære</a>                                            
                                </li>
                                <li>
                                    <a href="<?=$SN?>products.html">Kjøkken</a>                                            
                                </li>
                                <li>
                                    <a href="<?=$SN?>products.html">Spill/ Spilledåser</a>                                            
                                </li>
                                <li>
                                    <a href="<?=$SN?>products.html">Baby / Graviditet</a>                                            
                                </li>
                                <li>
                                    <a href="<?=$SN?>products.html">Noter / Bøker / CD / DVD</a>                                            
                                </li>
                                <li>
                                    <a href="<?=$SN?>products.html">Instrumenter</a>                                            
                                </li>
                                <li>
                                    <a href="<?=$SN?>products.html">Gavekort</a>                                            
                                </li>
                                <li>
                                    <a href="<?=$SN?>products.html">Diverse</a>                                            
                                </li>                                        
                            </ul>
                        </div>
                    </div>                                                   
                </div>
            </div>
			
			<div class="col-md-9">
				<div class="row">
					<div class="col-md-12">	                	
						<form method="post" action="">
							<table cellspacing="0" class="shop_table" width="100%">
								<thead>
									<tr>
										<th class="product-thumbnail">
											Produkter
										</th>
										<th class="product-name">
											&nbsp;
										</th>
										<th class="product-price">
											Pris
										</th>
										<th class="product-quantity">
											Antall
										</th>
										<th class="product-subtotal">
											Totalt
										</th>
										<th class="product-remove">
											Fjern
										</th>
									</tr>
								</thead>
								<tbody>
									
									<tr class="cart_table_item">
										<td class="product-thumbnail">
											<a href="shop-product-sidebar.html">
												<img alt="" width="80" src="<?=$SN?>images/instuments/piano.jpg">
											</a>
										</td>
										<td class="product-name">
											<a href="shop-product-sidebar.html">Linen shirt with ribbon at the front</a>
										</td>
										<td class="product-price">
											<span class="amount">299.00 NOK</span>
										</td>
										<td class="product-quantity">
											<input type="text" title="Qty" value="1" name="quantity" size="2">
										</td>
										<td class="product-subtotal">
											<span class="amount">299.00 NOK</span>
										</td>
										<td class="product-remove">
											<a title="Remove this item" class="remove" href="#">
												<i class="fa fa-times-circle"></i>
											</a>
										</td>
									</tr>
									
									<tr class="cart_table_item">										
										<td class="product-thumbnail">
											<a href="shop-product-sidebar.html">
												<img alt="" width="80" src="<?=$SN?>images/instuments/piano.jpg">
											</a>
										</td>
										<td class="product-name">
											<a href="shop-product-sidebar.html">Poplin shirt with fine pleated bands</a>
										</td>
										<td class="product-price">
											<span class="amount">72.00 NOK</span>
										</td>
										<td class="product-quantity">
											<input type="text" title="Qty" value="1" name="quantity" size="2">
										</td>
										<td class="product-subtotal">
											<span class="amount">72.00 NOK</span>
										</td>
										<td class="product-remove">
											<a title="Remove this item" class="remove" href="#">
												<i class="fa fa-times-circle"></i>
											</a>
										</td>
									</tr>
									
									<tr class="cart_table_item">										
										<td class="product-thumbnail">
											<a href="shop-product-sidebar.html">
												<img alt="" width="80" src="<?=$SN?>images/instuments/piano.jpg">
											</a>
										</td>
										<td class="product-name">
											<a href="shop-product-sidebar.html">Contrasting shirt</a>
										</td>
										<td class="product-price">
											<span class="amount">60.00 NOK</span>
										</td>
										<td class="product-quantity">
											<input type="text" title="Qty" value="1" name="quantity" size="2">
										</td>
										<td class="product-subtotal">
											<span class="amount">60.00 NOK</span>
										</td>
										<td class="product-remove">
											<a title="Remove this item" class="remove" href="#">
												<i class="fa fa-times-circle"></i>
											</a>
										</td>
									</tr>
									
									<tr class="cart_table_item">
										<td colspan="2">
											&nbsp;
										</td>
										<td class="product-price">
											Totalt
										</td>
										<td class="product-quantity">
											1
										</td>
										<td class="product-subtotal">
											<span class="amount">1395.00 NOK</span>
										</td>
										<td class="product-remove">
											&nbsp;
										</td>
									</tr>
									
								</tbody>
							</table>
						</form>						
					</div>
				</div>
				
				
				
				<div class="row">
					<div class="col-md-12" style="text-align:right; padding:30px 15px 30px 0px;">
						<div><a href="<?=$SN?>shopping_cart.html" class="btn btn-default width_help" role="button">Oppdater handlekurv</a></div>						
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-12">
						<table cellpadding="0" cellspacing="0" border="0">
							<tr>
								<td><strong>Velg ønsket betalingsmetode:</strong></td>
							</tr>																		
							<tr>
								<td width="99%">
									<div class="customerType">
										<p style="text-align:left">
	                                    	<input type="radio" name="customerType" id="customerType" value="Private" style="width:20px" checked="checked" />
	                                    	<span id="customerType1">Privatkunde (betal med kort/paypal)</span><br/>
											<input type="radio" name="customerType" id="customerType" value="Company" style="width:20px;"  />
											<span id="customerType2">Bedrift/skolekunde (faktura)</span>
										</p>
									</div>
								</td>
							</tr>
						</table>
					
						<table cellpadding="0" cellspacing="0" border="0">
							<tr>
								<td><strong>Velg ønsket leveringsmetode:</strong></td>
							</tr>																		
							<tr>
								<td width="99%">
									<div class="deliveryType">
										<p style="text-align:left">
											<input type="hidden" name="cartWeightTotal" id="cartWeightTotal" value="3000" />
											<input type="radio" name="deliveryType" id="deliveryType" value="Post" style="width:20px" checked="checked" />
											<span id="deliveryType1">Post (porto blir lagt til prisen)</span><br/>
											<input type="radio" name="deliveryType" id="deliveryType" value="Appointment" style="width:20px;" />
											<span id="deliveryType2">Hent varen selv etter avtale (ta kontakt)</span>
										</p>
									</div>
								</td>
							</tr>
						</table>
									
						<table cellpadding="0" cellspacing="0" border="0">
							<tr>
								<td><p><strong><font color="#000000">Fraktkostnad: <span id="shipPrice">150.00</span> NOK</font></strong></p></td>
							</tr>
							<tr>
								<td><p><strong><font color="#000000">Totalt: <span id="finalPrice">2940.00</span> NOK</font></strong></p></td>
							</tr>
						</table>
					</div>
				</div>
			
				<div class="row">
					<div class="col-md-12" style="text-align:center; padding-top:20px;">
						<a href="<?=$SN?>products.html" class="btn btn-default width_help" role="button">Fortsett å handle</a>
						<a href="<?=$SN?>shopping_cart.html" class="btn btn-default width_help" role="button">Gå till kassen</a>
					</div>					
				</div>
			
		</div>
	</div>
</section>
<!-- END SHOPPING_CART -->