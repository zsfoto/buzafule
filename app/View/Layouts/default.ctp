<!DOCTYPE html>
<html lang="hu" prefix="og: http://ogp.me/ns#" class="home">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo $about['About']['page_title']; ?></title>
	<meta http-equiv="cache-control" content="max-age=0" />
	<meta http-equiv="cache-control" content="no-cache" />
	<meta http-equiv="Cache-Control" content="no-store" />
	<meta http-equiv="expires" content="0" />
	<meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
	<meta http-equiv="pragma" content="no-cache" />
	<meta name="description" content="<?php echo $about['About']['meta_description']; ?>" />
	<meta name="keywords" content="<?php echo $about['About']['meta_keywords']; ?>" />
	<link rel="icon" href="/favicon.ico">
	<link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
	<link rel="manifest" href="/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">

<?php /*
	<meta name="description" content="Búzafűlé ingyenes kiszállítás."/>
	<meta property="og:locale" content="hu_HU" />
	<meta property="og:locale:alternate" content="hu_HU" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="Búzafűlé | Rendeljen ingyenes kiszállítással | Búzafűlé-Horváth" />
	<meta property="og:description" content="Búzafűlé. Ingyenes kiszállítással." />
	<meta property="og:url" content="http://buzafule-horvath.hu/" />
	<meta property="og:site_name" content="Búzafűlé - Horváth" />
*/ ?>
	
<?php if($about['About']['og_title'] != ''){?>
	<meta property="og:title" content="<?php echo $about['About']['og_title']; ?>" />
<?php } ?>
<?php //if($about['About']['og_description'] != ''){?>
	<meta property="og:description" content="<?php echo $about['About']['og_description']; ?>" />	
<?php //} ?>

	<meta property="og:image:width" content="504" />
	<meta property="og:image:height" content="264" />
	<meta property="og:locale" content="hu_HU">

<?php if( file_exists(WWW_ROOT."images".DS."ogimage1.jpg")) { ?>
	<meta property="og:image" content="http://<?php echo $_SERVER['HTTP_HOST']; ?>/images/ogimage1.jpg" />
<?php } ?>
<?php if( file_exists(WWW_ROOT."images".DS."ogimage2.jpg")) { ?>
	<meta property="og:image" content="http://<?php echo $_SERVER['HTTP_HOST']; ?>/images/ogimage2.jpg" />
<?php } ?>
<?php if( file_exists(WWW_ROOT."images".DS."ogimage3.jpg")) { ?>
	<meta property="og:image" content="http://<?php echo $_SERVER['HTTP_HOST']; ?>/images/ogimage3.jpg" />
<?php } ?>
<?php if( file_exists(WWW_ROOT."images".DS."ogimage4.jpg")) { ?>
	<meta property="og:image" content="http://<?php echo $_SERVER['HTTP_HOST']; ?>/images/ogimage4.jpg" />
<?php } ?>
<?php if( file_exists(WWW_ROOT."images".DS."ogimage5.jpg")) { ?>
	<meta property="og:image" content="http://<?php echo $_SERVER['HTTP_HOST']; ?>/images/ogimage5.jpg" />
<?php } ?>
	<meta property="og:type" content="website" />
	<meta property="og:url" content="http://<?php echo $_SERVER['HTTP_HOST']; ?>" />
	<meta property="og:site_name" content="<?php echo $about['About']['pagetitle'] ; ?>">

<?php /*
	<meta name="twitter:card" content="summary"/>
	<meta name="twitter:description" content="Wheatgrass juice delivered coast-to-coast in the United States and Canada plus information about wheatgrass and the benefits of wheatgrass."/>
	<meta name="twitter:title" content="Wheatgrass Juice | Buy Online For Delivery | DynamicGreens"/>
	<meta name="twitter:site" content="@dynamicgreens"/>
	<meta name="twitter:domain" content="DynamicGreens Wheatgrass Juice"/>
	<meta name="twitter:creator" content="@dynamicgreens"/>
	<script type='application/ld+json'>{"@context":"http:\/\/schema.org","@type":"WebSite","url":"https:\/\/www.dynamicgreens.com\/","name":"DynamicGreens Wheatgrass Juice","alternateName":"DynamicGreens","potentialAction":{"@type":"SearchAction","target":"https:\/\/www.dynamicgreens.com\/?s={search_term_string}","query-input":"required name=search_term_string"}}</script>
	<script type='application/ld+json'>{"@context":"http:\/\/schema.org","@type":"Organization","url":"https:\/\/www.dynamicgreens.com\/","sameAs":["https:\/\/www.facebook.com\/DynamicGreens","https:\/\/www.instagram.com\/dynamicgreens\/","https:\/\/www.linkedin.com\/company\/dynamicgreens","https:\/\/plus.google.com\/+DynamicGreens","https:\/\/myspace.com\/dynamicgreens","https:\/\/www.youtube.com\/dynamicgreens","https:\/\/www.pinterest.com\/dynamicgreens\/","https:\/\/twitter.com\/dynamicgreens"],"name":"DynamicGreens Ltd.","logo":"https:\/\/www.dynamicgreens.com\/app\/uploads\/2014\/12\/dynamicgreens-logo-sm.png"}</script>
	<meta name="alexaVerifyID" content="5D4x9dynGlIG0cK1ThnE6YGdxmE" />
	<meta name="msvalidate.01" content="161618ad93234fc1bd6d0ef5435157ee" />
	<meta name="google-site-verification" content="KCHY_OlR9s2-UJDglUJs12K3sZiO6MZd8M8WxEq-89o" />
*/ ?>
	<link rel="stylesheet" href="/css/bootstrap.min.css">
	<link rel="stylesheet" href="/css/jquery.sweet-modal.min.css">	
	<link rel="stylesheet" href="/assets/css/pac.css">
	<link rel="stylesheet" href="/assets/css/layout.css" media="only screen and (min-width: 768px)">
	<link rel="stylesheet" href="/assets/css/woocommerce-layout.css">
	<link rel="stylesheet" href="/assets/css/woocommerce-smallscreen.css" media="only screen and (max-width: 768px)">
	<link rel="stylesheet" href="/assets/css/woocommerce.css">
	<link rel="stylesheet" href="/css/bootstrap-ninja-forms.css">
	<!--link rel="stylesheet" href="//jquery.fancybox.css"-->
	<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Merriweather%3A400%2C400italic%2C700%2C700italic">
	<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Lato%3A300%2C400%2C700%2C900">
	<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Lora%3A400italic">
	<link rel="stylesheet" href="/css/main.css">
	<link rel="stylesheet" href="/css/jetpack.css">
	<!--link rel="stylesheet" href="/css/jquery.fancybox.min.css"-->
	<link rel="stylesheet" href="/css/jquery.fancybox.css">
	<link rel="stylesheet" href="/css/jquery.cookiebar.css" type="text/css" media="all">
	
	<link rel="stylesheet" href="/plugins/icheck-bootstrap-master/icheck-bootstrap.min.css" />	
	
<?php /*
	<link rel="alternate" href="/" hreflang="hu" />
	<link rel="alternate" href="/en-ca/" hreflang="en-ca" />
	<link rel="alternate" href="/en-us/" hreflang="en-us" />
*/ ?>
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
    	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->



	<script src="/js/jquery.js"></script>
	
	<!-- COOKIE figyelmeztetés -->
	<script type="text/javascript" src="/js/jquery.cookiebar.js"></script>
<?php /*
	<script type="text/javascript">
		$(document).ready(function(){
			$.cookieBar({
				//message: 'A böngésződben cookie-kat (adatfájlokat) tárolunk a felhasználói élmény javítása érdekében.',
				//message: 'Ahogy a legtöbb weboldal, a miénk is sütiket (cookie-kat) használ a nagyobb felhasználói élmény érdekében. A böngészés folytatásával Ön hozzájárul a sütik használatához.',
				message: 'A böngészőjében cookie-kat (adatfájlokat) tárolunk. A böngészés folytatásával Ön hozzájárul a sütik használatához.',
				acceptText: 'Megértettem és elfogadom',
				declineButton: false,
				declineText: 'Cookie-k letiltása',
				policyButton: true,
				policyText: 'Tájékoztató',
				//policyURL: 'http://ec.europa.eu/cookies/index_hu.htm',
				policyURL: '/#!/page_COOKIES',
				bottom: true,
				fixed: true
			});
		});
	</script>		
*/ ?>


	<!-- Add fancyBox main JS and CSS files -->
	<script type="text/javascript" src="/js/jquery.fancybox.pack.js?v=2.1.5"></script>
	<link rel="stylesheet" type="text/css" href="/css/jquery.fancybox.css?v=2.1.5" media="screen" />
	<script type="text/javascript">
		$(document).ready(function() {
			$(".fancybox").fancybox({ // Change title type, overlay closing speed
				openEffect  : 'fade',
				closeEffect	: 'fade',
				closeClick : true,
				openEffect : 'none',
				helpers : {
					title : {
						type : 'inside'
					},
					overlay : {
						css : {
							'background' : 'rgba(80,112,80,0.85)'
						}
					}
				}
			});
		});
	</script>


	<!-- Global site tag (gtag.js) - Google Ads: 964378999 -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=AW-964378999"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'AW-964378999');
	</script>

	<!-- Event snippet for Hozzáadás a kosárhoz conversion page -->
	<script>
		gtag('event', 'conversion', {'send_to': 'AW-964378999/DpUvCLqTyI4DEPeC7csD'});
	</script>
	
</head>

<body id="page-top" data-spy="scroll" data-target="navbar-fixed-top"> <?php /* class="home page page-template page-template-template-home page-template-template-home-php"> */ ?>

	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-44263034-6', 'auto');
	  ga('send', 'pageview');

	</script>

	<div id="fb-root"></div>
	<script>
	(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/hu_HU/sdk.js#xfbml=1&version=v2.0";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));
	</script>

	<header class="banner" role="banner">
		<div class="navbar navbar-inverse navbar-fixed-top navbar-primary">
			<div class="navbar-main-toolbar">
				<div class="container">
					<div class="navbar-header">
						<a href="#picmenu" class="page-scroll btn btn-outline-inverse btn-collapse navbar-btn collapsed" style="background: #060; color: white;">
							<i class="fa fa-bars"></i>Menü
						</a>
						<div class="navbar-left">
							<a class="navbar-brand" href="/">A természet ereje, az egészség itala!</a>
						</div>
						<a href="#order" class="page-scroll btn btn-outline-inverse navbar-btn btn-shop" style="background: #c00; color: white;">
							<i class="fa fa-shopping-cart"></i> Megrendelés
						</a>
					</div>

					<nav id="navbarCollapse" class="collapse navbar-collapse navbar-right" role="navigation">
						<div class="navbar-right">
							<ul id="menu-primary" class="nav navbar-nav nav-primary js-navbar-primary">
								<li class="menu-shop"><a class="page-scroll" title="Ártáblázat" href="#page-top">Ártáblázat</a></li>
								<li class="menu-products"><a class="page-scroll" title="Megrendelés" href="#order"><span class="fa fa-shopping-cart"></span> Megrendelés</a></li>
								<li class="menu-benefits"><a class="page-scroll" title="A búzafúléről" href="#wheatgrass">A búzafűléről</a></li>
								<li class="menu-about"><a class="page-scroll" title="Kiszállítás" href="#delivery">Kiszállítás</a></li>
								<li class="menu-contact"><a class="page-scroll" title="Kapcsolat" href="#contact">Kapcsolat</a></li>
							</ul>            
<?php /*
							<!--div class="navbar-form nav-form-search js-search-form">
								<div class="form-group" role="search">
									<form role="search" method="get" class="search-form" action="/">
										<label class="sr-only">Search for:</label>
										<div class="dropdown">
											<div class="input-group">
												<input type="search" autocomplete="off" value="" name="s" class="search-field form-control" placeholder="Search...">
												<span class="close-button input-group-btn">
													<a class="btn btn-primary" href="#" data-action="clear_search"><span>Keresés</span></a>
												</span>
											</div>
											<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu2">
												<li role="presentation" class="dropdown-header">Dropdown header</li>
											</ul>
										</div>
									</form>
								</div>            
							</div-->
*/ ?>
						</div>
					</nav>

				</div>
			</div>
		</div>
	</header>


	<?php echo $this->fetch('content'); ?>

	<div class="fancyboxdoc" style="position: relative; display: none; max-width: 90%; border: 3px solid gray;" id="fancyboy_impressum">
		<div style="position: ; top:0; left:0; width: 100%; background: lightgray; border: 1px solid gray; height: 40px;"></div>
		<div id="impressum"></div>
	</div>
	<div class="fancyboxdoc" style="position: relative; display: none; max-width: 90%; border: 3px solid gray;" id="fancyboy_cookies">
		<div style="position: fixed; top:0; left:0; width: 100%; background: lightgray; border: 1px solid gray; height: 40px;"></div>
		<div id="cookies"></div>
	</div>
	<div class="fancyboxdoc" style="position: relative; display: none; max-width: 90%; border: 3px solid gray;" id="fancyboy_privacy_text">
		<div style="position: fixed; top:0; left:0; width: 100%; background: lightgray; border: 1px solid gray; height: 40px;"></div>
		<div id="privacy_text"></div>
	</div>
	<div class="fancyboxdoc" style="position: relative; display: none; max-width: 90%; border: 3px solid gray;" id="fancyboy_terms_and_conditions">
		<div style="position: fixed; top:0; left:0; width: 100%; background: lightgray; border: 1px solid gray; height: 40px;"></div>
		<div id="terms_and_conditions"></div>
	</div>


	<script src="/js/cform.js"></script>
	<script src="/js/oform.js"></script>
	<script src="/js/head.js"></script>
	<script src="/js/bootstrap.min.js"></script>
	<script src="/js/jquery.easing.min.js"></script>
	<script src="/js/scrolling-nav.js"></script>
	<script src="/js/jquery.sweet-modal.min.js"></script>
	<script src="/js/jquery.fancybox.pack.js"></script>

	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/cookie-bar/cookiebar-latest.min.js?forceLang=hu&always=1&top=1"></script>

</body>
</html>
