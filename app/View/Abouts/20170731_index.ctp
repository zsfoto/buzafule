	<div class="main1"></div>	
	<header>
		<a href="/" class="logo">
			<h1 class="txt1"><?php echo $about['About']['pagetitle'] ; ?></h1>
			<div class="txt2"><?php echo $about['About']['motto'] ; ?></div>
		</a><br />
		<iframe style="margin: 5px 10px 0px 70px;" src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.buzafule-horvath.hu&amp;width&amp;layout=button_count&amp;action=like&amp;show_faces=true&amp;share=true&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:21px;" allowTransparency="true"></iframe>
	</header>
<?php if($about['About']['facebook_url'] != '' || $about['About']['youtube_url'] != ''){ ?>
	<ul class="icons">
		<?php if( $about['About']['facebook_url'] != '') { ?>
		<li><a href="<?php echo $about['About']['facebook_url']; ?>" target="_blank"><img src="/images/social_facebook.png" alt="Ugrás a búzafűlé facebook oldalára" title="Ugrás a facebook oldalra"></a></li>
		<?php } ?>
		<?php if( $about['About']['youtube_url'] != '') { ?>
		<li><a href="<?php echo $about['About']['youtube_url']; ?>" target="_blank"><img src="/images/social_youtube.png" alt="Ugrás a búzafűlé youtube oldalára" alt="Ugrás a youtube oldalra"></a></li>
		<?php } ?>
	</ul>
<?php } ?>

	<div class="px1"></div> <!-- Csíkozás -->

	<nav class="menu">
		<ul id="menu">
			<li class="nav1"><a href="#!/page_PRICES"><span class="over"></span><span class="txt1">Ártáblázat</span><span class="txt2">Ártáblázat</span></a></li>
			<li class="nav2"><a href="#!/page_MAINPAGE"><span class="over"></span><span class="txt1"><?php echo $about['About']['menu1'] ; ?></span><span class="txt2"><?php echo $about['About']['menu1'] ; ?></span></a></li>
			<li class="nav3"><a href="#!/page_WHEAT-GRASS-JUICE"><span class="over"></span><span class="txt1"><?php echo $about['About']['menu2'] ; ?></span><span class="txt2"><?php echo $about['About']['menu2'] ; ?></span></a></li>
			<li class="nav4"><a href="#!/page_ORDER"><span class="over"></span><span class="txt1"><?php echo $about['About']['menu3'] ; ?></span><span class="txt2"><?php echo $about['About']['menu3'] ; ?></span></a></li>
			<li class="nav5"><a href="#!/page_DELIVERY"><span class="over"></span><span class="txt1"><?php echo $about['About']['menu4'] ; ?></span><span class="txt2"><?php echo $about['About']['menu4'] ; ?></span></a></li>
			<?php /* ?>
			<li class="nav5"><a href="#!/page_GALLERY"><span class="over"></span><span class="txt1"><?php echo $about['About']['menu5'] ; ?></span><span class="txt2"><?php echo $about['About']['menu5'] ; ?></span></a></li>
			<?php */ ?>
			<li class="nav6"><a href="#!/page_CONTACTS"><span class="over"></span><span class="txt1"><?php echo $about['About']['menu6'] ; ?></span><span class="txt2"><?php echo $about['About']['menu6'] ; ?></span></a></li>
			<!--li class="nav5"><a href="#!/page_ADS"><span class="over"></span><span class="txt1">Google</span><span class="txt2">Google</span></a></li-->
		</ul>
	</nav>

	<div class="main3">

		<!--content -->
		<article id="content">
			<ul>

				<li id="page_SPLASH"></li>

				<!-- ######################################################################################################################################################## -->
				<!-- ############################################################ Főoldal ################################################################################### -->
				<!-- ######################################################################################################################################################## -->
				<li id="page_MAINPAGE">
				<a href="#!/page_SPLASH" class="close"><span></span></a>
				<div class="box">
				<h2><?php echo $about['About']['menu1']; ?></h2>
				
				<div class="scroll-pane"><div style="width: 565px;">

					<strong class="text" style="text-align: justify;">
						<?php echo $about['About']['mainpage_text']; ?> 
					</strong>
					<br />
					<!-- Búzafűlé -->
					<?php if(file_exists(WWW_ROOT."images".DS."thumbnail1.jpg")){ ?>
					<a href="#!/page_WHEAT-GRASS-JUICE"><img src="/images/thumbnail1.jpg" alt="Búzafűlé" title="Búzafűlé" class="left border1 border2 img2" style="width: 120px; float: left;"></a>
					<?php } ?>
					<div class="tableX">
						<strong class="text" style="font-size: 16px">
						<?php echo $about['About']['menu2']; ?>
						</strong>					
						<p class="text" style="text-align: justify;">
							<?php echo ereg_replace("\n","<br />",$about['About']['mainpage_text1']); ?> 
							<a href="#!/page_WHEAT-GRASS-JUICE">tovább >></a>
						</p>
					</div>
					<div class="clear"></div><br>	
					<!-- /Búzafűlé -->
					
					<!-- Rendelés -->
					<?php if(file_exists(WWW_ROOT."images".DS."thumbnail2.jpg")){ ?>
					<a href="#!/page_ORDER"><img src="/images/thumbnail2.jpg" alt="Búzafűlé online megrendelése" title="Búzafűlé online megrendelése" class="right border1 border2 img4" style="width: 120px; float: righr;"></a>
					<?php } ?>
					<div class="tableX">
						<strong class="text" style="font-size: 16px">
						<?php echo $about['About']['menu3']; ?>
						</strong>
						<p class="text" style="text-align: justify;">
							<?php echo ereg_replace("\n","<br />",$about['About']['mainpage_text2']); ?>  
							<a href="#!/page_ORDER">tovább >></a>
						</p>
					</div>
					<div class="clear"></div><br>
					<!-- /Rendelés -->
					
					<!-- Kiszállítás -->
					<?php if(file_exists(WWW_ROOT."images".DS."thumbnail3.jpg")){ ?>
					<a href="#!/page_DELIVERY"><img src="/images/thumbnail3.jpg" alt="Búzafűlé kiszállítása ingyenes az ország területén belül" title="Búzafűlé kiszállítása ingyenes az ország területén belül" class="left border1 border2 img2" style="width: 120px; float: left;"></a>
					<?php } ?>
					<div class="tableX">
						<strong class="text" style="font-size: 16px">
						<?php echo $about['About']['menu4']; ?>
						</strong>
						<p class="text" style="text-align: justify;">
							<?php echo ereg_replace("\n","<br />",$about['About']['mainpage_text3']); ?> 
							<a href="#!/page_DELIVERY">tovább >></a>
						</p>
					</div>
					<div class="clear"></div><br>
					<!-- /Kiszállítás -->		
					
					<!-- Galéria -->
					<?php /* if(file_exists(WWW_ROOT."images".DS."thumbnail4.jpg")){ ?>
					<a href="#!/page_GALLERY"><img src="/images/thumbnail4.jpg" class="right border1 border2 img4" style="width: 120px;"></a>
					<?php } ?>
					<div class="table">
						<strong class="text" style="font-size: 16px">
						<?php echo $about['About']['menu5']; ?>
						</strong>
						<p class="text">
							<?php echo ereg_replace("\n","<br />",$about['About']['mainpage_text4']); ?> 
							<a href="#!/page_GALLERY">tovább >></a>
						</p>
					</div>
					<div class="clear"></div><br>
					<?php */ ?>
					<!-- /Galéria -->
					
					<!-- Kapcsolat -->
					<?php if(file_exists(WWW_ROOT."images".DS."thumbnail5.jpg")){ ?>
					<a href="#!/page_CONTACTS"><img src="/images/thumbnail5.jpg" alt="Kapcsolat a búzafűlé termesztővel" title="Kapcsolat a búzafűlé termesztővel" class="right border1 border2 img4" style="width: 120px; float: right;"></a>
					<?php } ?>
					<div class="tableX">
						<strong class="text" style="font-size: 16px">
						<?php echo $about['About']['menu6']; ?>
						</strong>
						<p class="text" style="text-align: justify;">
							<?php echo ereg_replace("\n","<br />",$about['About']['mainpage_text5']); ?> 
							<a href="#!/page_CONTACTS">tovább >></a>
						</p>
					</div>
					<div class="clear"></div><br>
					<!-- /Kapcsolat -->

				</div></div>
				</div>
				</li>
			  
			  
				<!-- ######################################################################################################################################################## -->
				<!-- ############################################################ Búzafűlé ################################################################################## -->
				<!-- ######################################################################################################################################################## -->
				<li id="page_WHEAT-GRASS-JUICE">
					<a href="#!/page_SPLASH" class="close"><span></span></a>
					<div class="box">
						<h2><a href="#!/page_MAINPAGE"><img src="/images/back.png" alt="Vissza a búzafűlé főoldalra" title="Vissza a búzafűlé főoldalra" style="height: 30px; margin-right: 5px;"></a><?php echo $about['About']['menu2']; ?> </h2>

						<div class="scroll-pane"><div style="width: 565px;">

						<!-- Búzafűlé -->
						<?php if(file_exists(WWW_ROOT."images".DS."thumbnail1.jpg")){ ?>
						<img src="/images/thumbnail1.jpg" alt="Búzafűlé leírás" title="Búzafűlé leírás" class="left border1 border2 img2" style="width: 150px; margin-bottom: 6px; margin-right: 12px;">
						<?php } ?>
						<div class="tableX">
							<p class="text" style="text-align: justify;">
								<?php echo ereg_replace("\n","<br />",$about['About']['mainpage_text1']); ?>
							</p>
						</div>
						<div class="clear" style="margin-bottom: 10px;"></div>
						<!-- /Búzafűlé -->

						<div style="text-align: justify;">
							<strong class="text">
								<?php echo $texts[2]['Text']['name']; ?>
							</strong>
							<p class="text" style="text-align: justify;">
								<?php //echo ereg_replace("\n","<br />",$texts[2]['Text']['text']); ?>
								<?php echo $texts[2]['Text']['text']; ?>
							</p>
						</div>
						<div class="clear"></div>

						</div></div>
					</div>
				</li>

			  

				<!-- ######################################################################################################################################################## -->
				<!-- ############################################################ Rendelés ################################################################################## -->
				<!-- ######################################################################################################################################################## -->
				<li id="page_ORDER">
					<a href="#!/page_SPLASH" class="close"><span></span></a>
					<div class="box">
					<div class=""><div>
			  
					<h2><a href="#!/page_MAINPAGE"><img src="/images/back.png" alt="Vissza a búzafűlé főoldalra" title="Vissza a búzafűlé főoldalra" style="height: 30px; margin-right: 5px;"></a><span id="ordertitle"><?php echo $about['About']['menu3']; 
						?></span>&nbsp;<img id="orderloadercolor" src="/images/loadercolor.gif" style="width: 150px; height: 30px;" /></h2>

					<!-- Rendelés -->
					<?php if(file_exists(WWW_ROOT."images".DS."thumbnail2.jpg")){ ?>
					<img src="/images/thumbnail2.jpg" alt="Búzafűlé megrendelés interneten" title="Búzafűlé megrendelés interneten" class="left border1 border2 img2" style="width: 160px;">
					<?php } ?>

					<div class="table">
						<p class="text" style="text-align: justify; line-height: 16px;">
							<?php echo ereg_replace("\n","<br />",$about['About']['mainpage_text2']); ?>
						</p>
					</div>
					<div class="clear"></div>
					<!-- /Rendelés -->					
					
					<div class="clear"></div>
					<br />
						<div id="fields">
							<form id="ajax-contact-form" action="javascript:return false;">
							<div class="left">
								<label>* <?php echo $about['About']['order_name']; ?></label>                                              
								<INPUT id="ordername" type="text" name="name" value="<?php echo $name; ?>" style="padding: 0 5px; font-weight: bold;">

								<label>* <?php echo $about['About']['order_email']; ?></label>                                              
								<INPUT id="orderemail" type="email" name="orderemail" value="<?php echo $email; ?>" style="padding: 0 5px; font-weight: bold;">

								<label>* <?php echo $about['About']['order_phone']; ?></label>
								<INPUT id="orderphone" type="text" name="orderphone" value="<?php echo $phone; ?>" style="padding: 0 5px; font-weight: bold;">

								<label>* <?php echo $about['About']['order_postcode']; ?>, * <?php echo $about['About']['order_city']; ?></label>                                              
								<INPUT id="orderpostcode" type="text" name="orderpostcode" value="<?php echo $postcode; ?>" style="padding: 0 5px; font-weight: bold; width: 40px; text-align: center; ">
								<INPUT id="ordercity" type="text" name="ordercity" value="<?php echo $city; ?>" style="padding: 0 5px; font-weight: bold; width: 185px; ">

								<label>* <?php echo $about['About']['order_address']; ?></label>                                              
								<INPUT id="orderaddress" type="text" name="orderaddress" value="<?php echo $address; ?>" style="padding: 0 5px; font-weight: bold;">
							</div>
							<div class="left pad_left3">
								<label style="width: 300px;"><?php echo $about['About']['order_qty']; ?></label><i>(Maximum:&nbsp;<span id="pricecounts"><?php echo $pricecounts; ?>&nbsp;csomag</i></span>)
								<div style="width: 200px; height: 52px; padding-left: 20px; border: 0px solid red; margin-left: 40px;">
									<span id="price" style="display: none; visibility:hidden;"><?php echo $about['About']['price']; ?></span>
									<span id="order_confirm_message" style="display: none; visibility:hidden;"><?php echo $about['About']['order_confirm_message']; ?></span>
									<img id="minus" src="/images/minus.png" style="width: 20px; height: 20px; margin: 10px; margin-right: 10px; border: 1px dotted #8A8; padding: 5px; float: left;" />
									<INPUT id="quantity" type="text" name="qty" value="1" style="text-align: center; width:70px; height: 40px; font-size: 38px; font-weight: bold; padding: 5px; float: left;">
									<img id="plus" src="/images/plus.png" style="width: 20px; height: 20px; margin: 10px; margin-left: 10px; border: 1px dotted #8A8; padding: 5px; float: left;" />
								</div>								
								<br />
								<span style="font-size: 11px;">Fizetendő: </span><b><span id="owing" style="font-weight: bold; color: green;"><?php echo $prices[0]['Price']['price']; ?></span></b> <span style="font-size: 10px; font-weight: bold;">Ft.</span> -<a href="#!/page_PRICES" style="text-decoration: none;"><span style="font-size: 12px; font-weight: bold;">ÁRTÁBLÁZAT</span></a>- <b><span id="owingdiscount" style="color: red; font-size: 11px;">&nbsp;</span></b>
								
								<br />
								
								<div class="clear"></div>
								<label><?php echo $about['About']['order_message']; ?></label>
								<TEXTAREA id="ordermessage" NAME="content" style="padding: 5px; font-weight: bold; height: 70px;"></TEXTAREA>

								<div style="border: 1px solid #beb; height: 30px; padding: 2px; position: relative; margin-bottom: 5px;">
									<div style="position: absolute; top: 0px; left: 7px; margin-top: 0px;"><INPUT id="checboxterms" type="checkbox" name="phone" value="" style="width: 10px;" /></div>
									<div style="position: absolute; top: 9px; left: 30px; margin-top: 0px;"><a href="#!/page_TERMS-AND-CONDITIONS" style="text-decoration: none;">Szerződési&nbsp;feltételeket&nbsp;elfogadom</a></div>
								</div>
								
								<div class="clear"></div>
								<div class="left">
									<INPUT id="ordersubmit" class="submit" type="submit" name="submit" value="submit" id="submitorder" />
								</div>

								<div class="clear"></div>
							</div>
							</form>
						</div>
					</div></div>
					</div>
				</li>             


			  
				<!-- ######################################################################################################################################################## -->
				<!-- ############################################################ Szerződési feltételek ##################################################################### -->
				<!-- ######################################################################################################################################################## -->
				<li id="page_PRICES"> <!-- Mennyiség és ár -->
				<a href="#!/page_SPLASH" class="close"><span></span></a>
				<div class="box">
				<h2><a href="#!/page_ORDER"><img src="/images/back.png" alt="Vissza a búzafűlé megrendelés oldalra" title="Vissza a búzafűlé megrendelés oldalra" style="height: 30px; margin-right: 5px;"></a><?php echo $texts[4]['Text']['name']; ?></h2>
				
				<div class="scroll-pane"><div>
					<p class="text" style="text-align: justify;">
						<?php //echo ereg_replace("\n","<br />",$texts[0]['Text']['text']); ?>
					</p>
				
					<table width="" style="border: 1px solid #8c8; float: left; margin: 0 20px 15px 0; -moz-box-shadow: 5px 5px 5px #777; -webkit-box-shadow: 5px 5px 5px #777; box-shadow: 5px 5px 5px #777;">
						<tr>
							<th style="font-size: 16px; padding: 4px; vertical-align: bottom; border-bottom: 1px double #6a6; color: green; ">Rendelt<br />mennyiség</th>
							<th style="font-size: 16px; padding: 4px; vertical-align: bottom; border-bottom: 1px double #6a6; color: green; ">Ár</th>
							<th style="font-size: 16px; padding: 4px; vertical-align: bottom; border-bottom: 1px double #6a6; color: red; ">Megtakarítás</th>
						</tr>
						
						<?php $odd = true; foreach($prices as $price){ $odd = !$odd; ?>
						<tr<?php if($odd){ echo ' style="background: #f3fff3;"'; } ?>>
							<td style="padding: 4px; width: 90px; text-align: center; font-size: 14px; font-weight: bold;"><?php echo $price['Price']['quantity']; ?></td>
							<td style="padding: 4px; width: 90px; text-align: center; font-size: 14px; font-weight: bold;"><span id="quatityprice<?php echo $price['Price']['quantity']; ?>"><?php echo $price['Price']['price']; ?></span> Ft</td>
							<td style="padding: 4px; width: 90px; text-align: center; font-size: 14px; font-weight: bold; color: red;"><span id="quatitydiscount<?php echo $price['Price']['quantity']; ?>"><?php echo $price['Price']['discount']; ?></span> Ft</td>
						</tr>
						<?php } ?>
					</table>
					<strong class="text">
						<?php echo $texts[4]['Text']['name']; ?>
					</strong>
					<p class="text" style="text-align: justify;">
						<?php echo ereg_replace("\n","<br />",$texts[4]['Text']['text']); ?>
					</p>
				
				
				
				</div></div>
				</div>
				</li>
			  

			  
				<!-- ######################################################################################################################################################## -->
				<!-- ############################################################ Kiszállítás ############################################################################### -->
				<!-- ######################################################################################################################################################## -->				  
				<li id="page_DELIVERY">
				<a href="#!/page_SPLASH" class="close"><span></span></a>
				<div class="box">
				<h2><a href="#!/page_MAINPAGE"><img src="/images/back.png" alt="Vissza a búzafűlé főoldalra" title="Vissza a búzafűlé főoldalra" style="height: 30px; margin-right: 5px;"></a><?php echo $about['About']['menu4']; ?></h2>					

				<div class="scroll-pane"><div>
					
					<!-- Kiszállítás -->
					<?php if(file_exists(WWW_ROOT."images".DS."thumbnail3.jpg")){ ?>
					<img src="/images/thumbnail3.jpg" alt="Búzafűlé kiszállítás ingyenes az ország területén belül" title="Búzafűlé kiszállítás ingyenes az ország területén belül" class="left border1 border2 img2" style="width: 160px;">
					<?php } ?>
					<div class="table">
						<p class="text" style="text-align: justify;">
							<?php echo ereg_replace("\n","<br />",$about['About']['mainpage_text3']); ?>
						</p>
					</div>
					<div class="clear"></div><br>
					<!-- /Kiszállítás -->						
					
					<strong class="text">
						<?php echo $texts[3]['Text']['name']; ?>
					</strong>
					<p class="text" style="text-align: justify;">
						<?php echo ereg_replace("\n","<br />",$texts[3]['Text']['text']); ?>
					</p>
				</div></div>
				</div>
				</li>



<?php /* ?>
				<!-- ######################################################################################################################################################## -->
				<!-- ############################################################ Galéria ################################################################################### -->
				<!-- ######################################################################################################################################################## -->
				<li id="page_GALLERY">
				<a href="#!/page_SPLASH" class="close"><span></span></a>
				<div class="box">
					<h2><a href="#!/page_MAINPAGE"><img src="/images/back.png" style="height: 30px; margin-right: 5px;"></a><?php echo $about['About']['menu5']; ?></h2>	
					<div class="scroll-pane"><div>                  

					<!-- Galéria -->
					<?php if(file_exists(WWW_ROOT."images".DS."thumbnail4.jpg")){ ?>
					<img src="/images/thumbnail4.jpg" class="left border1 border2 img2" style="width: 160px;">
					<?php } ?>
					<div class="table">
						<strong class="text">
						<?php echo $about['About']['menu5']; ?>
						</strong>
						<p class="text">
							<?php echo ereg_replace("\n","<br />",$about['About']['mainpage_text4']); ?>
						</p>
					</div>
					<div class="clear"></div><br />
					<!-- /Galéria -->						
					
					<?php foreach( $photos as $photo ) { ?>
					
						<div style="width: 175px; height: 145px; border: 1px solid #ccc; overflow: hidden; float: left; margin: 0 5px 10px; padding: 3px;">
							<a href="/img/photos/<?php echo $photo['Photo']['id']; ?>.jpg" rel="prettyPhoto[gal1]" title="<?php echo $photo['Photo']['name']; ?>"><img src="/img/photos/<?php echo $photo['Photo']['id']; ?>_small.jpg" style="width: 174px; height: 120px;" /></a>
							<div style="margin-top: 5px; margin-left: -4px; padding: 2px 5px; font-weight: bold; width: 188px; border: 1px solid #ddd; overflow: hidden;"><?php 
								echo substr($photo['Photo']['name'],0,25);
								if(strlen($photo['Photo']['name'])>=25){
									echo ". . .";
								}
							?></div>
						</div>
					<?php } ?>

					<div class="clear"></div>
                  
				</div></div>
				</div>
				</li>				
<?php */ ?>
				
				
				<!-- ######################################################################################################################################################## -->
				<!-- ############################################################ Kapcsolat ################################################################################# -->
				<!-- ######################################################################################################################################################## -->
				<li id="page_CONTACTS">
				<a href="#!/page_SPLASH" class="close"><span></span></a>
				<div class="box">
				<div class=""><div>
			  
					<h2><a href="#!/page_MAINPAGE"><img src="/images/back.png" alt="Vissza a búzafűlé főoldalra" title="Vissza a búzafűlé főoldalra" style="height: 30px; margin-right: 5px;"></a><span id="messagetitle"><?php echo $about['About']['menu6']; 
					?></span>&nbsp;<img id="messageloadercolor" src="/images/loadercolor.gif" style="width: 150px; height: 30px;" /></h2>
					
					<!-- Kapcsolat -->
					<?php if(file_exists(WWW_ROOT."images".DS."thumbnail5.jpg")){ ?>
					<img src="/images/thumbnail5.jpg" class="left border1 border2 img2" alt="Kapcsoalt a búzafűlé termesztővel" title="Kapcsoalt a búzafűlé termesztővel" style="width: 160px;">
					<?php } ?>
					<div class="table">
						<p class="text" style="text-align: justify;">
							<?php echo ereg_replace("\n","<br />",$about['About']['mainpage_text5']); ?>
						</p>
					</div>
					<div class="clear"></div><br>
					<!-- /Kapcsolat -->					
					
					<h2><?php echo $about['About']['contact_title']; ?></h2>
					<p class="text"><?php echo $about['About']['contact_text']; ?></p>
					<div id="note"></div>
					<div id="fields">
						<form id="ajax-contact-form" action="javascript:return false;">
							<div class="left">
								<label><?php echo $about['About']['contact_name']; ?></label>                                              
								<INPUT id="contactname" type="text" name="name" value="" style="padding: 0 10px; font-weight: bold; width: 230px;">

								<label><?php echo $about['About']['contact_email']; ?></label>                                              
								<INPUT id="contactemail" type="text" name="email" value="" style="padding: 0 10px; font-weight: bold; width: 230px;">

								<label><?php echo $about['About']['contact_phone']; ?></label>                                              
								<INPUT id="contactphone" type="text" name="phone" value="" style="padding: 0 10px; font-weight: bold; width: 230px;">
							</div>
							<div class="left pad_left3">
								<label>* <?php echo $about['About']['contact_message']; ?></label>
								<TEXTAREA id="contactmessage" NAME="content" style="height: 180px; width: 300px; padding: 10px; font-weight: bold;"></TEXTAREA>
								<div class="clear"></div>
								<div class="left">
									<INPUT id="contactsubmit" class="submit" type="submit" name="submit" value="submit">
								</div>
								<div class="clear"></div>
							</div>
						</form>
					</div>
				</div></div>
				</div>
				</li>

				
				<!-- ######################################################################################################################################################## -->
				<!-- ############################################################ Szerződési feltételek ##################################################################### -->
				<!-- ######################################################################################################################################################## -->
				<li id="page_TERMS-AND-CONDITIONS"> <!-- szerződési feltételek -->
				<a href="#!/page_SPLASH" class="close"><span></span></a>
				<div class="box">
				<h2><a href="#!/page_ORDER"><img src="/images/back.png" alt="Vissza a búzafűlé megrendelés oldalra" title="Vissza a búzafűlé megrendelés oldalra" style="height: 30px; margin-right: 5px;"></a><?php echo $texts[0]['Text']['name']; ?></h2>

				<div class="scroll-pane"><div>
						<p class="text" style="text-align: justify;">
							<?php //echo ereg_replace("\n","<br />",$texts[0]['Text']['text']); ?>
							<div id="terms_and_conditions">
								<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
								<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
								<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
								<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
								<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
								<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
								<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
								<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
								<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
								<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
								<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
								<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
								<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
								<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
								<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
								<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
								<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
								<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
								<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
								<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
								<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
								<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
							</div>
						</p>
				</div></div>
				</div>
				</li>
			  
				
				
				<!-- ######################################################################################################################################################## -->
				<!-- ############################################################ Adatkezelési nyilatkozat ################################################################## -->
				<!-- ######################################################################################################################################################## -->
				<li id="page_PRIVACY"> <!-- Adatkezelési nyilatkozat -->
					<a href="#!/page_SPLASH" class="close"><span></span></a>
					<div class="box">
					<h2><?php echo $texts[1]['Text']['name']; ?></h2>
					
					<div class="scroll-pane"><div>
						<p class="text" style="text-align: justify;">
							<?php //echo ereg_replace("\n","<br />",$texts[1]['Text']['text']); ?>
							<div id="privacy_text">
								<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
								<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
								<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
								<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
								<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
								<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
								<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
								<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
								<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
								<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
								<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
								<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
								<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
								<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
								<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
								<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
								<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
								<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
								<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
								<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
								<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
								<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
							</div>
						</p>
					</div></div>
					</div>
				</li>                  
			  

				
				<!-- ######################################################################################################################################################## -->
				<!-- ############################################################ Szerződési feltételek ##################################################################### -->
				<!-- ######################################################################################################################################################## -->
				<li id="page_COOKIES"> <!-- szerződési feltételek -->
				<a href="#!/page_SPLASH" class="close"><span></span></a>
				<div class="box">
				<h2><a href="#!/page_ORDER"><img src="/images/back.png" alt="Vissza a búzafűlé megrendelés oldalra" title="Vissza a búzafűlé megrendelés oldalra" style="height: 30px; margin-right: 5px;"></a><?php echo $texts[6]['Text']['name']; ?></h2>

				<div class="scroll-pane"><div>
						<p class="text" style="text-align: justify;">
							<?php //echo ereg_replace("\n","<br />",$texts[0]['Text']['text']); ?>
							<div id="cookies">
								<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
								<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
								<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
								<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
								<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
								<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
								<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
								<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
								<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
								<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
								<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
								<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
								<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
								<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
								<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
								<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
								<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
								<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
								<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
								<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
								<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
								<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
							</div>
						</p>
				</div></div>
				</div>
				</li>


				<!-- ######################################################################################################################################################## -->
				<!-- ############################################################ Szerződési feltételek ##################################################################### -->
				<!-- ######################################################################################################################################################## -->
				<li id="page_IMPRESSUM"> <!-- szerződési feltételek -->
				<a href="#!/page_SPLASH" class="close"><span></span></a>
				<div class="box">
				<h2><a href="#!/page_ORDER"><img src="/images/back.png" alt="Vissza a búzafűlé megrendelés oldalra" title="Vissza a búzafűlé megrendelés oldalra" style="height: 30px; margin-right: 5px;"></a><?php echo $texts[7]['Text']['name']; ?></h2>

				<div class="scroll-pane"><div>
						<p class="text" style="text-align: justify;">
							<?php //echo ereg_replace("\n","<br />",$texts[0]['Text']['text']); ?>
							<div id="impressum">
								<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
								<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
								<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
								<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
								<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
								<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
								<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
								<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
								<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
								<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
								<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
								<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
								<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
								<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
								<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
								<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
								<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
								<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
								<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
								<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
								<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
								<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
							</div>
						</p>
				</div></div>
				</div>
				</li>


				
				<!-- ######################################################################################################################################################## -->
				<!-- ############################################################ Szerződési feltételek ##################################################################### -->
				<!-- ######################################################################################################################################################## -->
<?php /*
				<li id="page_ADS"> <!-- Google adwords -->
				<a href="#!/page_SPLASH" class="close"><span></span></a>
				<div class="box">
				<h2><a href="#!/page_ORDER"><img src="/images/back.png" alt="Vissza a búzafűlé megrendelés oldalra" title="Vissza a búzafűlé megrendelés oldalra" style="height: 30px; margin-right: 5px;"></a>Google hirdetések</h2>

				<div class="scroll-pane"><div>
					<a href="http://bit.ly/1BFuPwK"><img src="http://s11.flagcounter.com/count/1BFuPwK/bg_FFFFFF/txt_000000/border_CCCCCC/columns_6/maxflags_48/viewers_0/labels_1/pageviews_1/flags_0/" alt="Flag Counter" border="0"></a>
					<!--iframe style="border: 1px solid red;"></iframe-->					

					/#
						URL: http://s11.flagcounter.com/flagcounter.cgi
						
						We have provided two versions of our code, customized with your selections. The first is an HTML code for websites, and the second is a code for posting to forums. Just copy and paste this to your website's source code wherever you'd like your Flag Counter to appear. Flag Counters are just images, so they will work on any website. 
						
						Code for websites (HTML):
						<a href="http://bit.ly/1BFuPwK"><img src="http://s11.flagcounter.com/count/1BFuPwK/bg_FFFFFF/txt_000000/border_CCCCCC/columns_8/maxflags_12/viewers_0/labels_1/pageviews_1/flags_0/" alt="Flag Counter" border="0"></a>
						
						Code for forums
						[URL=http://bit.ly/1BFuPwK][IMG]http://s11.flagcounter.com/count/1BFuPwK/bg_FFFFFF/txt_000000/border_CCCCCC/columns_8/maxflags_12/viewers_0/labels_1/pageviews_1/flags_0/[/IMG][/URL]
					#/ 
					
				</div></div>
				</div>
				</li>
*/ ?>
			  

			  
			</ul>
		</article>
		<!--content end --> 

		<div class="splash">
			<!-- a href="#!/page_SPLASH" class="close"><span></span></a -->
			<div class="box">
				<h2><a href="#!/page_ORDER"><img src="/images/back.png" alt="Vissza a búzafűlé megrendelés oldalra" title="Vissza a búzafűlé megrendelés oldalra" style="height: 30px; margin-right: 5px;"></a><?php echo $texts[4]['Text']['name']; ?></h2>
				
				<div class="scroll-pane">
					<div>
						<p class="text" style="text-align: justify;">
							<?php //echo ereg_replace("\n","<br />",$texts[0]['Text']['text']); ?>
						</p>
					
						<table width="" style="border: 1px solid #8c8; float: left; margin: 0 20px 15px 0; -moz-box-shadow: 5px 5px 5px #777; -webkit-box-shadow: 5px 5px 5px #777; box-shadow: 5px 5px 5px #777;">
							<tr>
								<th style="font-size: 16px; padding: 4px; vertical-align: bottom; border-bottom: 1px double #6a6; color: green; ">Rendelt<br />mennyiség</th>
								<th style="font-size: 16px; padding: 4px; vertical-align: bottom; border-bottom: 1px double #6a6; color: green; ">Ár</th>
								<th style="font-size: 16px; padding: 4px; vertical-align: bottom; border-bottom: 1px double #6a6; color: red; ">Megtakarítás</th>
							</tr>
							
							<?php $odd = true; foreach($prices as $price){ $odd = !$odd; ?>
							<tr<?php if($odd){ echo ' style="background: #f3fff3;"'; } ?>>
								<td style="padding: 4px; width: 90px; text-align: center; font-size: 14px; font-weight: bold;"><?php echo $price['Price']['quantity']; ?></td>
								<td style="padding: 4px; width: 90px; text-align: center; font-size: 14px; font-weight: bold;"><span id="quatityprice<?php echo $price['Price']['quantity']; ?>"><?php echo $price['Price']['price']; ?></span> Ft</td>
								<td style="padding: 4px; width: 90px; text-align: center; font-size: 14px; font-weight: bold; color: red;"><span id="quatitydiscount<?php echo $price['Price']['quantity']; ?>"><?php echo $price['Price']['discount']; ?></span> Ft</td>
							</tr>
							<?php } ?>
						</table>
						<strong class="text">
							<?php echo $texts[4]['Text']['name']; ?>
						</strong>
						<p class="text" style="text-align: justify;">
							<?php echo ereg_replace("\n","<br />",$texts[4]['Text']['text']); ?>
						</p>
					</div>
				</div>
			</div>				

		</div>           


		
		
<?php /* if(file_exists(WWW_ROOT."images".DS."slideimg1.jpg") || file_exists(WWW_ROOT."images".DS."slideimg2.jpg") || file_exists(WWW_ROOT."images".DS."slideimg3.jpg") || file_exists(WWW_ROOT."images".DS."slideimg4.jpg") || file_exists(WWW_ROOT."images".DS."slideimg5.jpg") || file_exists(WWW_ROOT."images".DS."slideimg6.jpg") ){ ?>
		<div class="splash">
			<div class="slider">
				<ul class="items">
				<?php if(file_exists(WWW_ROOT."images".DS."slideimg1.jpg")){ ?>
					<li><img src="/images/slideimg1.jpg" alt="Legolcsóbb búzafűlé ingyen kiszálíltás" title="Legolcsóbb búzafűlé ingyen kiszálíltás" /></li>
				<?php } ?>
				<?php if(file_exists(WWW_ROOT."images".DS."slideimg2.jpg")){ ?>					
					<li><img src="/images/slideimg2.jpg" alt="Legolcsóbb búzafűlé ingyen kiszálíltás" title="Legolcsóbb búzafűlé ingyen kiszálíltás" /></li>
				<?php } ?>
				<?php if(file_exists(WWW_ROOT."images".DS."slideimg3.jpg")){ ?>					
					<li><img src="/images/slideimg3.jpg" alt="Legolcsóbb búzafűlé ingyen kiszálíltás" title="Legolcsóbb búzafűlé ingyen kiszálíltás" /></li>                 
				<?php } ?>
				<?php if(file_exists(WWW_ROOT."images".DS."slideimg4.jpg")){ ?>					
					<li><img src="/images/slideimg4.jpg" alt="Legolcsóbb búzafűlé ingyen kiszálíltás" title="Legolcsóbb búzafűlé ingyen kiszálíltás" /></li>
				<?php } ?>
				<?php if(file_exists(WWW_ROOT."images".DS."slideimg5.jpg")){ ?>
					<li><img src="/images/slideimg5.jpg" alt="Legolcsóbb búzafűlé ingyen kiszálíltás" title="Legolcsóbb búzafűlé ingyen kiszálíltás" /></li>
				<?php } ?>
				<?php if(file_exists(WWW_ROOT."images".DS."slideimg6.jpg")){ ?>
					<li><img src="/images/slideimg6.jpg" alt="Legolcsóbb búzafűlé ingyen kiszálíltás" title="Legolcsóbb búzafűlé ingyen kiszálíltás" /></li>
				<?php } ?>
				</ul>
			</div>
		</div>           
<?php } */ ?>

	</div>

	<footer>
		<div class="copyright">
			<a href="#!/page_IMPRESSUM">Impresszum</a> &nbsp;|&nbsp;  
			<a href="#!/page_COOKIES">Cookie (Sütik) tájékoztató</a> &nbsp;|&nbsp;  
			<a href="#!/page_TERMS-AND-CONDITIONS"><?php echo $about['About']['link1_text']; ?></a> &nbsp;|&nbsp;  
			<a href="#!/page_PRIVACY"><?php echo $about['About']['link2_text']; ?></a> &nbsp;|&nbsp;  
			<?php echo $about['About']['copyright_text']; ?></div>
		<div class="clear"></div>
	</footer>
