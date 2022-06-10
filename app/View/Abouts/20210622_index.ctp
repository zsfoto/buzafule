<?php
	$maintenance = false;
?>
	<div class="wrap" role="document">
		<div class="main front-page">
			<section class="text-light format-standard has-background-image bg-center-cover has-background-shadow first home type-home status-publish entry" style=" background-image: url(/img/wheatgrass-farm-1024x768.jpg);">
				<div class="container">
					<div class="row">

						<div id="prices" class="col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1 text-center section-image">

<?php if($maintenance){ ?>
							<h2 align="center" style="color:white; background: red; font-weight: bold;">Karbantartás!</h2>
							<p class="product-btn text-center" style="margin-top: 10px; background: red; color: white; padding: 15px; border: 5px dotted white; font-family: Arial; font-size: 20px;">
								Néhány perc türelmet kérünk.<br>Frissítse az oldalt kb. 10 perc múlva!<br>(pl.: F5-ös billentyűvel)<br>Türelmét és megértését köszönjük!
							<?php /*
								<a id="ordersubmit" href="#" onclick="return false;" class="btn btn-primary" style="background: green; font-size: 22px; font-weight: bold; padding: 10px 30px; border: 2px solid black;">
									Megrendelem!
								</a>
							*/ ?>
							</p>
<?php } ?>

							<h3 class="no-shadow" style="text-align: center; color: green; margin-top: 16px;"><?php echo $about['About']['pagetitle'] ; ?></h3>
							<p style="text-align: center; color: green;"><?php echo $about['About']['motto'] ; ?></p>


							<h4 class="no-shadow" style="text-align: center;"><span style="color: green; font-weight: bold; font-size: 20px; font-family: Arial;"><?php echo $texts[4]['Text']['name']; ?></span></h4>
							<div style="margin: 0px; margin-right: 10px;">
								<table id="table-price">
									<tr>
										<th>Rendelt<br />mennyiség</th>
										<th>Ár</th>
										<th>Megtakarítás</th>
										<th>Posta ktg.</th>
									</tr>

<?php $odd = true; foreach($prices as $price){ $odd = !$odd; ?>
									<tr<?php if($odd){ echo ' style="background: #c0ffc0;"'; } ?>>
										<td style="padding: 5px; width: 90px; text-align: center; font-size: 14px; font-weight: bold;"><?php echo $price['Price']['quantity']; ?></td>
										<td style="padding: 5px; width: 90px; text-align: center; font-size: 14px; font-weight: bold;"><span id="quatityprice<?php echo $price['Price']['quantity']; ?>"><?php echo $price['Price']['price']; ?></span>&nbsp;Ft</td>
										<td style="padding: 5px; width: 90px; text-align: center; font-size: 14px; font-weight: bold; color: red;"><span id="quatitydiscount<?php echo $price['Price']['quantity']; ?>"><?php echo $price['Price']['discount']; ?></span>&nbsp;Ft</td>
										<td style="padding: 5px; width: 90px; text-align: center; font-size: 14px; font-weight: bold;"><span id="quatitydeliveryprice<?php echo $price['Price']['quantity']; ?>"><?php echo $price['Price']['delivery_price']; ?></span>&nbsp;Ft</td>
									</tr>
<?php } ?>
								</table>
							</div>

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
						<div class="col-xs-6 col-sm-4 photo-cell" style="background-image: url(/img/arak.jpg)">
							<a class="page-scroll" href="#page-top"></a>
						</div>
						<div class="col-xs-6 col-sm-4 photo-cell" style="background-image: url(/img/megrendeles.png)">
							<a class="page-scroll" href="#order">Megrendelés</a>
						</div>
						<div class="clearfix visible-xs-block"></div>
						<div class="col-xs-6 col-sm-4 photo-cell" style="background-image: url(/img/menu_buzafule.jpg)">
							<a style="font-weight: 900;" class="page-scroll" href="#wheatgrass">Búzafűléről</a>
						</div>
						<div class="col-xs-6 col-sm-4 photo-cell" style="background-image: url(/img/kiszallitas.jpg)">
							<a class="page-scroll" href="#delivery">Kiszállítás</a>
						</div>
						<div class="clearfix visible-xs-block"></div>
						<div class="col-xs-6 col-sm-4 photo-cell" style="background-image: url(/img/kapcsolat.jpg)">
							<a class="page-scroll" href="#contact">Kapcsolat</a>
						</div>
						<div class="col-xs-6 col-sm-4 photo-cell" style="background-image: url(/img/szerzodesi-feltetelek.jpg)">
							<a href="/texts/fancybox/1" class="fancybox fancybox.iframe" data-fancybox-group="Text1">Szerződési feltételek</a>
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
								<p style="text-align: justify; line-height: 16px; color: black; font-family: Arial;">
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
										<input type="text" class="form-control" id="orderaddress" type="text" name="orderaddress" value="<?php echo $address; ?>" style="color: black; font-size: 20px; font-weight: bold;">
									</div>

									<div class="form-group">
										<label style="color: black;" for="ordermessage"><?php echo $about['About']['order_message']; ?></label>
										<textarea  autocapitalize="sentences" class="form-control" id="ordermessage" name="content" style="padding: 5px; font-weight: bold; height: 70px; font-size: 20px; color: black;"></textarea>
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

												<div class="form-group" style="color: black; font-family: Arial; margin-bottom: 0px;">
													A(z) <span id="qty" style="font-weight: bold; color: darkgreen; font-size: 28px;">1</span> csomag ára: <span id="pkgprice" style="font-weight: bold; color: darkgreen; font-size: 28px;"><?php echo $about['About']['price']; ?></span> Ft<br>
													<div id="owingdiscount" style="color: red; font-weight: bold; color: white; background: green; font-size: 24px; font-family: Arial; text-align: center; margin-top: 0px;">&nbsp;</div>
													+ Szállítási költség: <span id="deliveryprice" style="font-weight: bold;"><?php echo $about['About']['deliveryprice']; ?></span> Ft.<br>
												</div>

												<span style="font-size: 18px; font-family: Arial; color: black;">Fizetendő: </span><b>
													<span id="owing" style="background: green; color: white; padding: 5px; font-weight: bold; font-size: 24px; font-family: Arial;"><?php echo $prices[0]['Price']['price']; ?></span></b>
												<span style="font-size: 18px; font-weight: bold; color: black;">Ft.</span>
												<?php /* - <a class="page-scroll" href="#page-top" style="text-decoration: none;"><span style="font-weight: bold; color: green; font-size: 18px; font-family: Arial;">ÁRTÁBLÁZAT</span></a><br> */ ?>
<?php /*
												<p class="product-btn text-center" style="margin-top: 8px;">
													<a href="#page-top" class="btn btn-danger page-scroll">
														Ártáblázat
													</a>
												</p>
*/ ?>
											</div>
										</div>
									</div>

									<div id="div-checkboxterms" class="checkbox text-center" style="color: black; font-size: 16px; font-weight: bold; height: 30px; padding: 3px; text-align: center;">
										<label>
											<input id="checboxterms" type="checkbox"> Szerződési feltételeket elolvastam és elfogadom
										</label>
									</div>
									<!--INPUT id="ordersubmit" class="submit" type="submit" name="submit" value="submit" id="submitorder" /-->
									<div class="clear"></div>
									<!-- div style="font-size:20px; font-weight: bold; color: black; text-align: center;">A "Megrendelem" gomb megnyomásával ön megrendelési szándékát jelzi.</div -->
<?php if($maintenance){ ?>
									<h2 align="center" style="color:white; background: red; font-weight: bold;">Karbantartáss!</h2>
									<p class="product-btn text-center" style="margin-top: 10px; background: red; color: white; padding: 15px; border: 5px dotted white; font-family: Arial; font-size: 20px;">
										A megrendelés pár perc múlva elérhető!<br>Frissítse az oldalt kb. 10 perc múlva!<br>(pl.: F5-ös billentyűvel)<br>Türelmét és megértését köszönjük!<br>
										<br>A megrendelés gomb kizárólag tesztelési céllal van az oldalon. Kérem a karbantartás alatt ne nyomja meg.<br>
										<br>
										<a id="ordersubmit" href="#" onclick="return false;" class="btn btn-primary" style="background: green; font-size: 22px; font-weight: bold; padding: 10px 30px; border: 2px solid black;">
											Megrendelem!
										</a>
									</p>

<?php }else{ ?>
									<p class="product-btn text-center" style="margin-top: 10px;">
										<a id="ordersubmit" href="#" onclick="return false;" class="btn btn-primary" style="background: green; font-size: 22px; font-weight: bold; padding: 10px 30px; border: 2px solid black;">
											Megrendelem!
										</a>
									</p>
<?php } ?>

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
											<a href="#order" class="btn btn-primary page-scroll">
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
											<a href="#order" class="btn btn-primary page-scroll">
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
									<iframe style="border: 0px solid black; height: 30px; margin: 5px 10px 0px 70px;" src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.buzafule-horvath.hu&amp;width&amp;layout=button_count&amp;action=like&amp;show_faces=true&amp;share=true&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:21px;" allowTransparency="true"></iframe>

<?php /*
									<div class="btn-toolbar">
										<a href="http://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fbuzafule-horvath.hu" class="btn btn-sm btn-link open-popup-window" title="Megosztás a facebookon" target="_blank">
											<i class="fa fa-fw fa-lg fa-facebook"></i> Megosztom
										</a>
									</div>
*/ ?>
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
									<h4>Dokumentumok</h4>
									<ul id="menu-footer" class="menu">
										<li><a href="/texts/fancybox/8" class="fancybox fancybox.iframe" data-fancybox-group="Text8">Impresszum</a></li>
										<li><a href="/texts/fancybox/7" class="fancybox fancybox.iframe" data-fancybox-group="Text7">Cookie szabályzat</a></li>
										<li><a href="/texts/fancybox/2" class="fancybox fancybox.iframe" data-fancybox-group="Text2">Adatkezelési&nbsp;nyilatkozat</a></li>
										<li><a href="/texts/fancybox/1" class="fancybox fancybox.iframe" data-fancybox-group="Text1">Szerződési&nbsp;feltételek</a></li>
<?php /*
										<li><a data-fancybox data-src="#fancyboy_cookies" title="Cookie szabályzat" href="javascript:;">Cookie szabályzat</a></li>
										<li><a data-fancybox data-src="#fancyboy_privacy_text" title="Adatkezelési nyilatkozat" href="javascript:;">Adatkezelési&nbsp;nyilatkozat</a></li>
										<li><a data-fancybox data-src="#fancyboy_terms_and_conditions" title="Szerződési feltételek" href="javascript:;">Szerződési&nbsp;feltételek</a></li>
*/ ?>
									</ul>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="widget enhancedtextwidget-3 widget_text enhanced-text-widget">
									<h4>Kapcsolat</h4>
									<div class="textwidget widget-text">
										<ul class="list-unstyled">
											<li>
												<a class="page-scroll" href="#contact">
													<strong>Horváth István</strong> őstermelő
												</a>
											</li>
											<li>
												<a class="page-scroll" href="#contact">
													tel.: <strong>+36 20/931-07-94</strong>
												</a>
											</li>
											<li>
												<a class="page-scroll" href="#contact">
													<strong>agrarkereskedohaz</strong>@gmail.com
												</a>
											</li>

										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-12 text-center">
								<p class="copyright">
									&copy; 2017 <a href="http://buzafule-horvath.hu">Bűzafűlé, Horváth</a>
								</p>
							</div>
						</div>
					</div>
				</footer>
			</section>

		</div>

	</div>

<?php /*
	<div id="msgbox" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Bezár"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="gridSystemModalLabel"><span id="modal-title"></span></h4>
				</div>

				<div class="modal-body">

					<div class="row">
						<div class="col-md-12">
							<span id="modal-body"></span>
						</div>
					</div>

				</div>

				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal" style="float: left;"><span id="modal-cancel">Mégsem</span></button>
					<button type="button" class="btn btn-primary"><span id="modal-ok">O.k.</span></button>
				</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
*/ ?>



