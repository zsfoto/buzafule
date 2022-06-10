<!DOCTYPE html>
<html lang="hu">
<head>
	<title><?php echo $about['About']['page_title']; ?></title>
	<meta charset="utf-8">
	
	<meta http-equiv="cache-control" content="max-age=0" />
	<meta http-equiv="cache-control" content="no-cache" />
	<meta http-equiv="Cache-Control" content="no-store" />
	<meta http-equiv="expires" content="0" />
	<meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
	<meta http-equiv="pragma" content="no-cache" />

	<meta name="description" content="<?php echo $about['About']['meta_description']; ?>" />
	<meta name="keywords" content="<?php echo $about['About']['meta_keywords']; ?>" />
	
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

<?php /* ?>	
	<meta name="description" content="Lamb with fava beans and black trumpet mushrooms">
	<meta property="og:description" content="Lamb with fava beans and black trumpet mushrooms">
	
	<meta property="og:image" content="http://example.com/lamb-full.jpg">
	<meta property="og:image:type" content="image/jpeg">
	<meta property="og:image:width" content="3523">
	<meta property="og:image:height" content="2372">

	<meta property="og:image" content="http://example.com/logo.jpg">
	<meta property="og:image:type" content="image/png">
	<meta property="og:image:width" content="1024">
	<meta property="og:image:height" content="1024">	

	<meta property="fb:app_id" content="123456789012345">
	

 1 down vote
	

The docs have been updated again!

og:image can now be as big as you like - whoop

They have recommended the following:

    at least 600x315 pixels
    Ideally 1.91:1 in ratio
    no bigger than 5mb in file size
    but AS BIG AS YOU LIKE!



Use images that are at least 1200 x 630 pixels for the best display on high resolution devices. At the minimum, you should use images that are 600 x 315 pixels to display link page posts with larger images.

<?php */ ?>
	
	
	
<?php /* ?>	
<html prefix="og: http://ogp.me/ns#">
<head>
<meta property="og:image" content="http://yourwebsite.com/images/yourimage.jpg"/>
<meta property="og:image:width" content="500" />
<meta property="og:image:height" content="500" />
<meta property="og:title" content="your website page title"/>
<meta property="og:url" content="http://yourwebsite.com"/>
<meta property="og:site_name" content="site name and content etc"/>
<meta property="og:description"content="description of site" />
<meta property="og:type" content="Website"/>	
	
<?php */ ?>	
	<link rel="stylesheet" href="/css/style.css" type="text/css" media="all">
	<link rel="stylesheet" href="/css/jquery.cookiebar.css" type="text/css" media="all">
	<link href='http://fonts.googleapis.com/css?family=Oswald:400,700,300&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="/js/main.js"></script>

	<!--[if lt IE 8]>
		<div style=' clear: both; text-align:center; position: relative;z-index:100;'>
			<a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
				<img src="/images/warning_bar.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
			</a>
		</div>
	<![endif]-->


	<!-- COOKIE figyelmeztetés -->
	<script type="text/javascript" src="/js/jquery.cookiebar.js"></script>
	<script type="text/javascript">
/*
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
*/
	</script>		



</head>
<body>
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

	<div class="spinner"></div>

	<div class="extra">

		<?php echo $this->fetch('content'); ?>
		
		
	</div>

</body>
</html>
