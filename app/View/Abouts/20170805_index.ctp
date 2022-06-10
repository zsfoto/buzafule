
	<div class="wrap" role="document">
		<div class="main front-page">
			<section class="text-light format-standard has-background-image bg-center-cover has-background-shadow first home type-home status-publish entry" style=" background-image: url(/img/wheatgrass-farm-1024x768.jpg);">
				<div class="container">
					<div class="row">

						<div id="prices" class="col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1 text-center section-image">
							
							<h3 class="no-shadow" style="text-align: center; color: green; margin-top: 16px;"><?php echo $about['About']['pagetitle'] ; ?></h3>
							<p style="text-align: center; color: green;"><?php echo $about['About']['motto'] ; ?></p>

							
							<h4 class="no-shadow" style="text-align: center;"><span style="color: green; font-weight: bold; font-size: 20px; font-family: Arial;"><?php echo $texts[4]['Text']['name']; ?></span></h4>
							<table id="table-price">
								<tr>
									<th>Rendelt<br />mennyiség</th>
									<th>Ár</th>
									<th>Megtakarítás</th>
								</tr>
								
<?php $odd = true; foreach($prices as $price){ $odd = !$odd; ?>
								<tr<?php if($odd){ echo ' style="background: #f3fff3;"'; } ?>>
									<td style="padding: 4px; width: 90px; text-align: center; font-size: 14px; font-weight: bold;"><?php echo $price['Price']['quantity']; ?></td>
									<td style="padding: 4px; width: 90px; text-align: center; font-size: 14px; font-weight: bold;"><span id="quatityprice<?php echo $price['Price']['quantity']; ?>"><?php echo $price['Price']['price']; ?></span>&nbsp;Ft</td>
									<td style="padding: 4px; width: 90px; text-align: center; font-size: 14px; font-weight: bold; color: red;"><span id="quatitydiscount<?php echo $price['Price']['quantity']; ?>"><?php echo $price['Price']['discount']; ?></span>&nbsp;Ft</td>
								</tr>
<?php } ?>
							</table>
							
							<div style="clear:both;" class="hidden-lg hidden-md hidden-sm"></div>
							
							<p class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<?php echo ereg_replace("\n","<br />",$texts[4]['Text']['text']); ?>
							</p>
							<p class="product-btn text-center">
								<a href="#order" class="btn btn-primary page-scroll">
									Megrendelés...
								</a>
							</p>




						</div>

<?php /*
						<div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 text-center section-image">
							<a href="/">
								<img src="/img/logo.png">
							</a>
						</div>
						<div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 text-center section-content">
							<div class="entry-content">
								<span class="" style="display:block;clear:both;height: 0px;margin-top: -10px;border-top-width:0px;border-bottom-width:0px;"></span>
								<span class="" style="display:block;clear:both;height: 0px;padding-top: 10px;border-top-width:0px;border-bottom-width:0px;"></span>
							</div>
						</div>
*/ ?>
					</div>
				</div>
			</section>

			<!-- Képes menü a mobil megjelenítők számára -->
			<section id="picmenu" class="format-photos has-background-color home type-home status-publish entry hidden-sm hidden-md hidden-lg" style=" background-color: #1a4c00;">
				<div class="container">
					<div class="row">
						<div class="col-xs-6 col-sm-4 photo-cell" style="background-image: url(/img/juice-lifestyle-table-2-crop-300x225.jpg)">
							<a class="page-scroll" href="#page-top">Ártáblázat</a>
						</div>
						<div class="col-xs-6 col-sm-4 photo-cell" style="background-image: url(/img/hourglass-timer-crop-300x225.jpg)">
							<a class="page-scroll" href="#order">Megrendelés</a>
						</div>
						<div class="clearfix visible-xs-block"></div>
						<div class="col-xs-6 col-sm-4 photo-cell" style="background-image: url(/img/grass-close-up-crop-300x225.jpg)">
							<a class="page-scroll" href="#wheatgrass">Búzafűléről</a>
						</div>
						<div class="col-xs-6 col-sm-4 photo-cell" style="background-image: url(/img/fabric-plain-crop-300x225.jpg)">
							<a class="page-scroll" href="#delivery">Kiszállítás</a>
						</div>
						<div class="clearfix visible-xs-block"></div>
						<div class="col-xs-6 col-sm-4 photo-cell" style="background-image: url(/img/farm-tom-tractor-crop-300x225.jpg)">
							<a class="page-scroll" href="#contact">Kapcsolat</a>
						</div>
						<div class="col-xs-6 col-sm-4 photo-cell" style="background-image: url(/img/old-telephone-crop-300x225.jpg)">
							<a class="page-scroll" href="#contact">Szerződési feltételek</a>
						</div>
						<div class="clearfix visible-xs-block"></div>
					</div>
				</div>
			</section>





			<section id="order" class="text-light format-standard has-background-color post-10784 home type-home status-publish entry language-hu" style="background-color: #99b62b;">

				<div class="container">
					<div class="row">
						<div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 text- section-content">
							<div class="entry-content">
								<h1 style="color: #050; font-weight: bold;" >Megrendelés</h1>
								<p class="text" style="text-align: justify; line-height: 16px;">
									<?php echo ereg_replace("\n","<br />",$about['About']['mainpage_text2']); ?>
								</p>

								<form>
									<div class="form-group">
										<label style="color: black;" for="ordername">* <?php echo $about['About']['order_name']; ?></label>
										<input type="text" autocapitalize="word" class="form-control" id="ordername" name="name"  value="<?php echo $name; ?>" style="color: black; font-size: 20px; font-weight: bold;">
									</div>
									<div class="form-group">
										<label style="color: black;" for="orderemail">* <?php echo $about['About']['order_email']; ?></label>
										<input type="email" name="orderemail" class="form-control" id="orderemail" value="<?php echo $email; ?>" style="color: black; font-size: 20px; font-weight: bold;">
									</div>
									<div class="form-group">
										<label style="color: black;" for="orderphone">* <?php echo $about['About']['order_phone']; ?></label>
										<input type="tel" class="form-control" name="orderphone" id="orderphone" style="color: black; font-size: 20px; font-weight: bold;">
									</div>
									<div class="form-group">									
										<label style="color: black;" for="orderpostcode">* <?php echo $about['About']['order_postcode']; ?></label>
										<input type="number" min="1000" max="9999" class="form-control" name="orderpostcode" id="orderpostcode" value="<?php echo $postcode; ?>" style="color: black; font-size: 20px; font-weight: bold;">
									</div>
									<div class="form-group">
										<label style="color: black;" for="ordercity">* <?php echo $about['About']['order_city']; ?></label>
										<input type="text" class="form-control" id="ordercity" type="text" name="ordercity" value="<?php echo $city; ?>" style="color: black; font-size: 20px; font-weight: bold;">
									</div>
									<div class="form-group">
										<label style="color: black;" for="orderaddress">* <?php echo $about['About']['order_address']; ?></label>
										<input type="text" class="form-control" id="orderaddress" id="orderaddress" type="text" name="orderaddress" value="<?php echo $address; ?>" style="color: black; font-size: 20px; font-weight: bold;">
									</div>

									<div class="form-group">
										<div style="color: black; font-family: Arial; font-size: 16px; font-weight: bold; text-align: center;">(Mennyiség változtatásához használja<br>a <img src="/images/minus.png" style="width: 18px;"> és a <img src="/images/plus.png" style="width: 18px;"> gombokat!)</div>
										<div style="color: black; font-family: Arial; font-size: 16px; font-weight: bold; text-align: center;"><?php echo $about['About']['order_qty']; ?><br><i>(Maximum:&nbsp;<span id="pricecounts"><?php echo $pricecounts; ?>&nbsp;csomag</i></span>)</div>
										<div class="row">
											<span id="price" style="display: none; visibility:hidden;"><?php echo $about['About']['price']; ?></span>
											<span id="order_confirm_message" style="display: none; visibility:hidden;"><?php echo $about['About']['order_confirm_message']; ?></span>
										</div>

										<div class="row">
											<div class="col-lg-12" style="padding-left: 30px;">
												<div style="position: relative; height: 90px; padding: 10px; width: 260px;border: 0px solid lightgreen; margin: 0 auto;">
													<img id="minus" src="/images/minus.png" style="width: 50px; height: 50px; margin: 10px; margin-right: 10px; border: 1px dotted #8A8; padding: 5px; float: left;" />		
													<INPUT id="quantity" type="text" name="qty" value="1" readonly disabled style="text-align: center; width:70px; height: 40px; font-weight: bold; padding: 5px; float: left; margin: 10px; margin-top: 15px; color: black; font-family: Arial; font-size: 24px;">
													<img id="plus" src="/images/plus.png" style="width: 50px; height: 50px; margin: 10px; margin-left: 10px; border: 1px dotted #8A8; padding: 5px; float: left;" />
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-12 text-center">
												<div id="owingdiscount" style="color: red; font-weight: bold; color: red; font-size: 24px; font-family: Arial; text-align: center;">&nbsp;</div>
												<span style="font-size: 18px; font-family: Arial; color: black;">Fizetendő: </span><b>
													<span id="owing" style="background: green; color: white; padding: 5px; font-weight: bold; font-size: 24px; font-family: Arial;"><?php echo $prices[0]['Price']['price']; ?></span></b>
												<span style="font-size: 18px; font-weight: bold; color: black;">Ft.</span>
												<?php /* - <a class="page-scroll" href="#page-top" style="text-decoration: none;"><span style="font-weight: bold; color: green; font-size: 18px; font-family: Arial;">ÁRTÁBLÁZAT</span></a><br> */ ?>
												<p class="product-btn text-center" style="margin-top: 8px;">
													<a href="#page-top" class="btn btn-danger page-scroll">
														Ártáblázat
													</a>
												</p>
											</div>
										</div>
									</div>

									<div class="form-group">
										<label style="color: black;" for="ordermessage"><?php echo $about['About']['order_message']; ?></label>
										<textarea  autocapitalize="sentences" class="form-control" id="ordermessage" id="ordermessage" NAME="content" style="padding: 5px; font-weight: bold; height: 70px; font-size: 20px; color: black;"></textarea>
									</div>

									<div id="div-checkboxterms" class="checkbox" style="color: black; font-size: 16px; font-weight: bold; height: 30px; padding: 3px;">
										<label>
											<input id="checboxterms" type="checkbox"> Szerződési feltételeket elolvastam és elfogadom
										</label>
									</div>
									<!--INPUT id="ordersubmit" class="submit" type="submit" name="submit" value="submit" id="submitorder" /-->
									<div class="clear"></div>
									<!-- div style="font-size:20px; font-weight: bold; color: black; text-align: center;">A "Megrendelem" gomb megnyomásával ön megrendelési szándékát jelzi.</div -->
									<p class="product-btn text-center" style="margin-top: 10px;">
										<a id="ordersubmit" href="#" onclick="return false;" class="btn btn-primary" style="background: green; font-size: 20px;">
											Megrendelem!
										</a>
									</p>
								</form>								
								
							</div>
						</div>
					</div>
				</div>
			</section>




			<section id="wheatgrass" class="text-dark format-product has-background-image bg-center-cover home type-home status-publish entry language-hu" style="background: #efe;">
				<div class="container">
					<div class="row">
						<div class="col-sm-10 col-sm-offset-1 section-content text-justify">
							<div class="entry-content">
								<h2 class="entry-title">A búzafűléről</h2>
								<h4 class="p1"><?php echo $texts[2]['Text']['name']; ?></h4>
								<p><span class="s2">
								<?php echo $texts[2]['Text']['text']; ?>
								</span></p>
								<div class="row product-details">
									<div class="col-xs-12 text-center">
										<p class="product-btn">
											<a href="#order" class="btn btn-primary">
												Megrendelés
											</a>
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section id="delivery" class="text-dark format-product has-background-image bg-center-cover home type-home status-publish entry language-hu" style="background: #cfc;">
				<div class="container">
					<div class="row">
						<div class="col-sm-10 col-sm-offset-1 section-content text-justify">
							<div class="entry-content">
								<h2 class="entry-title">Kiszállítás</h2>
								<h4 class="p1"><?php echo $texts[3]['Text']['name']; ?></h4>
								<p><span class="s2">
								<?php echo $texts[3]['Text']['text']; ?>
								</span></p>
								<div class="row product-details">
									<div class="col-xs-12 text-center">
										<p class="product-btn">
											<a href="#order" class="btn btn-primary">
												Megrendelés
											</a>
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			
			
			<!--section id="delivery_old" class="text-dark format-product has-background-image bg-center-cover home type-home status-publish entry language-hu" style=" background-image: url(/img/wheatgrass-juice-table-1024x768.jpg);">
				<div class="container">
					<div class="row">
						<div class="col-sm-7 section-content">
							<div class="entry-content">
								<h2 class="entry-title">Kiszállítás</h2>
								<h4>FREE NEXT DAY DELIVERY</h4>
								<p><span class="s1">You pick the delivery date and before noon EST can choose tomorrow!
								Our no surprise prices include all shipping fees and taxes.</span></p>
							</div>
						</div>
					</div>
				</div>
			</section-->

			<section id="contact" class="text-light format-standard has-background-color home type-home status-publish entry language-hu" style="background-color: #fff;">

				<div class="container">
					<div class="row">
						<div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 text- section-content">
							<div class="entry-content">
								<h1 style="color: #050; font-weight: bold;">Kapcsolat</h1>
								<p style="text-align: justify; color: green; font-family: Arial;"><?php echo ereg_replace("\n","<br />",$about['About']['mainpage_text5']); ?></p>
								<form>
									<div class="form-group">
										<label style="color: black; float: left;" for="contactname">* <?php echo $about['About']['contact_name']; ?></label>
										<input required autocapitalize="word" type="text" class="form-control" id="contactname" name="contactnamename"  value="<?php echo $name; ?>" style="color: black; font-size: 20px; font-weight: bold;">
									</div>
									<div class="form-group">
										<label style="color: black; float: left;" for="contactemail">* <?php echo $about['About']['contact_email']; ?></label>
										<input required type="email" name="contactemail" class="form-control" id="contactemail" value="<?php echo $email; ?>" style="color: black; font-size: 20px; font-weight: bold;">
									</div>
									<div class="form-group">
										<label style="color: black; float: left;" for="contactphone">* <?php echo $about['About']['contact_phone']; ?></label>
										<input required type="tel" class="form-control" name="contactphone" id="contactphone" style="color: black; font-size: 20px; font-weight: bold;">
									</div>
									<div class="form-group">
										<label style="color: black; float: left;" for="contactmessage">* <?php echo $about['About']['contact_message']; ?></label>
										<textarea  autocapitalize="sentences" required  autocapitalize="sentences" class="form-control" id="contactmessage" id="contactmessage" name="content" style="padding: 5px; font-weight: bold; height: 170px; font-size: 20px; color: black;"></textarea>
									</div>

									<div class="clear"></div>
									<!-- div style="font-size:20px; font-weight: bold; color: black; text-align: center;">A "Megrendelem" gomb megnyomásával ön megrendelési szándékát jelzi.</div -->
									<p class="product-btn text-center" style="margin-top: 10px;">
										<a id="contactsubmit" href="#" onclick="return false;" class="btn btn-primary" style="background: green; font-size: 20px;">
											Üzenet küldése!
										</a>
									</p>
								</form>								
								
							</div>
						</div>
					</div>
				</div>
			</section>






			<section class="text-light format-standard has-background-color post-3086 home type-home status-publish entry language-hu" style=" background-color: #99b62b;">

				<footer class="footer" role="contentinfo">
					<div class="review-share-links">
						<div class="container">
							<div class="row">
								<div class="col-sm-6">
									<h4>Kérem ossze meg ismerőseivel</h4>
									<div class="btn-toolbar">
										<a href="http://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.dynamicgreens.com%2F&amp;t=Wheatgrass%20Juice%20%7C%20Buy%20Online%20For%20Delivery%20%7C%20DynamicGreens" class="btn btn-sm btn-link open-popup-window" title="Share this page to Facebook" target="_blank">
											<i class="fa fa-fw fa-lg fa-facebook"></i> Megosztom
										</a>
									</div>
								</div>
<?php /*
								<div class="col-sm-6">
									<h4>Read reviews or share your own</h4>
									<div class="btn-toolbar">
										<a href="//facebook.com/" class="btn btn-sm btn-link" title="Facebook" target="_blank">
											<i class="fa fa-fw fa-lg fa-facebook"></i> Facebook
										</a>
										<a href="//www.google.ca/search?q=DynamicGreens+Wheatgrass,+16128+Ninth+Line,+Whitchurch-Stouffville,+ON+L4A+7X4,+Canada&ludocid=16243370538728455942#lrd=0x89d52e177347714d:0xe16c0b71a3f47f06,1" class="btn btn-sm btn-link" title="Google" target="_blank">
											<i class="fa fa-fw fa-lg fa-google-plus"></i> Google            
										</a>
										<a href="//www.yelp.ca/biz/dynamicgreens-wheatgrass-whitchurch-stouffville" class="btn btn-sm btn-link" title="Yelp" target="_blank">
											<i class="fa fa-fw fa-lg fa-yelp"></i>
											Yelp            
										</a>
									</div>
								</div>
*/ ?>
							</div>
						</div>
					</div>

					<div class="container">
						<div class="row">
							<div class="col-sm-4 hidden-xs">
								<div class="widget text-center">
									<img src="/img/logo.png" alt="Búzafűlé Horváth" width="180">
								</div>
							</div>
							<div class="col-sm-4">
								<div class="widget nav_menu-2 widget_nav_menu">
									<h4>Megrendelés</h4>
									<ul id="menu-footer" class="menu">
										<li><a class="page-scroll" title="Megrendelés" href="#order">Megrendelés</a></li>
										<li><a class="page-scroll" title="Ártáblázat" href="#page-top">Ártáblázat</a></li>
									</ul>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="widget enhancedtextwidget-3 widget_text enhanced-text-widget">
									<h4>Kapcsolat</h4>
									<div class="textwidget widget-text">
										<ul class="list-unstyled">
											<li>
												<a href="tel:+18779100467">
													<strong>Toll Free </strong> 1-877-910-0467
												</a>
											</li>
											<li>
												<a href="sms:+19739100467">
													<strong>SMS</strong> Send Text From Mobile
												</a>
											</li>
											<li>
												<a href="tel:+19059100467">
													<strong>Local Phone</strong> 905-910-0467
												</a>
											</li>
											<li>
												<a href="mailto:email@dynamicgreens.com">
													<strong>Email</strong>@dynamicgreens.com
												</a>
											</li>
											<li>
												<a href="/email-newsletter/">
													<strong>Subscribe</strong> News & Offers
												</a>
											</li>
											<li>
												<strong>Follow</strong>
												<a href="/wheatgrass-blog/"> Blog 
												</a>|<a href="/social/"> Social Media</a>
											</li>
										</ul>
									</div>
								</div>
							</div>    
						</div>
						<div class="row">
							<div class="col-xs-12 text-center">
								<p class="copyright">
									&copy; 2017 <a href="buzafule-horvath.hu">Bűzafűlé, Horváth</a>
								</p>
							</div>
						</div>
					</div>
				</footer>
			</section>

		</div>

	</div>