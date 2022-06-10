<!DOCTYPE html>
<html>
	<head>
		<?php echo $this->Html->charset(); ?>
		<title>
			Búzafű-lé - Admin
			<?php //echo $title_for_layout; ?>
		</title>

		<?php
			echo $this->Html->meta('icon');

			// echo $this->Html->css('cake.generic');
			echo $this->Html->css(array('admin_reset','admin_text','admin_960','admin_grid','admin_layout','admin_nav'));
		?>
		<script src="/js/jquery-1.6.1.min.js"></script>
		<script>
			$( document ).ready(function() {
				var message = $( "#flashmessage").text();
				$( "#flashmessageicon").hide();
				$( "#tmp").fadeOut(5000, function(){
					$( "#flashmessageicon").css("visibility","visible");
					$( "#flashmessageicon").fadeIn(1000);
				});
			});
		</script>
		<!--script src="//tinymce.cachefly.net/4.1/tinymce.min.js"></script-->



		<script src="/js/tinymce/tinymce.min.js"></script>
		<script>
			tinymce.init({
				selector:'textarea',//Melyik textareara vonatkozik. <textarea class="tinymce" ...></trextarea>
				width	: "100%",
				height	: 400,
				menubar	: false,
				statusbar: false,
				theme : 'modern',
				language : 'hu_HU',			//Magyar
				entity_encoding : "raw",	//Ékezetes betűk maradnak ahogy vannak, nem lesznek átkódolva &ocute-ra
				forced_root_block : false,	//Bekezdések után nem tesz térközt
				// toolbar: "undo redo | styleselect | bold italic | link image"

				plugins: "textcolor hr link image spellchecker emoticons charmap preview code textpattern table print contextmenu insertdatetime",

				contextmenu: "link image inserttable | cell row column deletetable",


     textpattern_patterns: [
         {start: '*', end: '*', format: 'italic'},
         {start: '**', end: '**', format: 'bold'},
         {start: '#', format: 'h1'},
         {start: '##', format: 'h2'},
         {start: '###', format: 'h3'},
         {start: '####', format: 'h4'},
         {start: '#####', format: 'h5'},
         {start: '######', format: 'h6'},
         {start: '1. ', cmd: 'InsertOrderedList'},
         {start: '* ', cmd: 'InsertUnorderedList'},
         {start: '- ', cmd: 'InsertUnorderedList'}
    ],

				insertdatetime_formats: ["%H:%M", "%Y.%m.%d"],
				// insertdatetime_dateformat: "%Y.%m.%d",
				// insertdatetime_timeformat: "%H:%M",
				insertdatetime_element: true,



				toolbar: [
					"textpattern bold italic underline strikethrough alignleft aligncenter alignright alignjustify styleselect formatselect fontselect fontsizeselect cut copy paste bullist numlist outdent indent blockquote undo redo removeformat subscript superscript",
					"insertdatetime print table | code preview emoticons charmap | fontselect fontsizeselect | undo redo | styleselect | hr | colorselect | bold italic | link image | forecolor backcolor"
				],

				/*
				link_list: [
					{title: 'TinyMCE', value: 'http://www.tinymce.com'},
					{title: 'Moxiecode', value: 'http://www.moxiecode.com'},
					{title: 'TinyMCE resources', menu: [
						{title: 'TinyMCE documentation', value: 'http://www.tinymce.com/wiki.php'},
						{title: 'TinyMCE forum', value: 'http://www.tinymce.com/forum/index.php'}
					]}
				],
				target_list : [
					{title: "Semmi", value: "" },
					{title: "Helyben TOP", value: "_top" },
					{title: "Új lapon", value: "_blank" },
				],

				image_list: [
					{title: 'My image 1', value: 'http://www.tinymce.com/my1.gif', height: "200px", width: "300px"},
					{title: 'My image 2', value: 'http://www.moxiecode.com/my2.gif'}
				],
				image_advtab : true,
				*/
				fontsize_formats: "8pt 10pt 12pt 14pt 18pt 24pt 36pt 42pt 48pt",

				font_formats:
					"Andale Mono=andale mono,times;"+
					"Arial=arial,helvetica,sans-serif;"+
					"Arial Black=arial black,avant garde;"+
					"Book Antiqua=book antiqua,palatino;"+
					"Comic Sans MS=comic sans ms,sans-serif;"+
					"Courier New=courier new,courier;"+
					"Georgia=georgia,palatino;"+
					"Helvetica=helvetica;"+
					"Impact=impact,chicago;"+
					"mXy Swiss=Swis721CnBTRoman;"+
					"Symbol=symbol;"+
					"Tahoma=tahoma,arial,helvetica,sans-serif;"+
					"Terminal=terminal,monaco;"+
					"Times New Roman=times new roman,times;"+
					"Trebuchet MS=trebuchet ms,geneva;"+
					"Verdana=verdana,geneva;",


			});
		</script>


	</head>
	<body>
		<div class="container_16">
			<!--div class="grid_16">
				<h1 id="branding">
					<a href="">Búzafű-lé - Admin  <?php //echo AuthComponent::user('fullname')." (".AuthComponent::user('username').")"; ?></a>
				</h1>
			</div-->
			<div class="clear"></div>
			<div class="grid_16">
				<ul class="nav main">
<?php if( AuthComponent::user('email') ) { ?>
					<li><a href="/admin/orders">Megrendelések</a></li>
					<li><a href="/admin/orders/dueindex">Esedékes email</a></li>
					<li><a href="/admin/messages">Üzenetek</a></li>
					<li>
						<a href="/admin/prices">Ártáblázat</a>
						<ul>
							<li><a href="/admin/prices">Ártáblázat</a></li>
							<li><a href="/admin/cash_on_deliveries">Utánvétek</a></li>
							<li><a href="/admin/texts/edit/5">Ártáblázat szöveg</a></li>
						</ul>
					</li>

					<li>
						<a href="#">Képek</a>
						<ul>
							<!--li><a href="/admin/photos">Galéria</a></li-->
							<li><a href="/admin/abouts/uploadslide">Slide képei</a></li>
							<li><a href="/admin/abouts/thumbnails">Főoldal kis képecskék</a></li>
							<li><a href="/admin/abouts/ogimages">Facebook megosztás képei</a></li>
						</ul>
					</li>


					<li>
						<a href="#">Szövegek</a>
						<ul>
							<li><a href="/admin/abouts/edit/1">Alapadatok</a></li>
							<li><a href="/admin/abouts/mainpage/1">Főoldal cimkék</a></li>
							<li><a href="/admin/abouts/facebook/1">Facebook & Google</a></li>
							<li><a href="/admin/texts/edit/3">Búzafűlé</a></li>
							<li><a href="/admin/texts/edit/4">Kiszállítás</a></li>
							<li><a href="/admin/texts/edit/1">Szerződési feltételek</a></li>
							<li><a href="/admin/texts/edit/2">Adatkezelési nyilatkozat</a></li>
							<li><a href="/admin/texts/edit/7">Cookie tájékoztató</a></li>
							<li><a href="/admin/texts/edit/8">Impresszum</a></li>
						</ul>
					</li>

<?php /*
					<li>
						<a href="#">Auto-Email</a>
						<ul>
							<li><a href="/admin/abouts/confirm">Visszaigazoló Email (Átualás)</a></li>
							<li><a href="/admin/abouts/shiping">Postázási Email</a></li>
							<li><a href="/admin/abouts/message/1">Kapcsolat üz. visszaig.</a></li>
							<li><a href="/admin/texts/edit/6">Esedékes megr. Email</a></li>
						</ul>
					</li>
*/ ?>

					<li>
						<a href="#">Auto-Email</a>
						<ul>
							<li><a href="/admin/texts/edit/10">Visszaigazolás (Átualás)</a></li>
							<li><a href="/admin/texts/edit/11">Visszaigazolás (Utánvét)</a></li>
							<li><a href="/admin/texts/edit/12">Postázási Email</a></li>
							<li><a href="/admin/texts/edit/13">Kapcsolat üz. visszaig.</a></li>
							<li><a href="/admin/texts/edit/6" >Esedékes megr. Email</a></li>
						</ul>
					</li>

			<li><a href="/admin/email_templates">Körlevelek</a></li>

			<!--li><a href="/admin/visitors">Látogatók</a></li-->
			<li><a href="/admin/users">Felhasználók</a></li>
			<li><a href="/admin/users/logout">Kijelentkezés</a></li>

					<!--li><a href="/admin/users/index">Adminisztrátorok</a></li-->
<?php } ?>

				</ul>
			</div>

			<div class="clear"></div>
			<br />

			<div class="grid_16">

				<?php if ($this->session->check('Message.flash')) {?>
				<div class="box" style="border: 0px solid #000;">
					<h2><a style="background-color:#080; color: #fff;" href="#" id="toggle-blockquote">Rendszerüzenet</a></h2>
					<div class="block" id="blockquote" style="position: relative;">
						<blockquote>
							<p>
								<span id="tmp"></span>
								<img id="flashmessageicon" src="/img/success.png" style="margin-top: -55px; margin-left: 0px; margin-right: 20px; height: 40px; position: relative; top: 0px; left: 0px; float: right; visibility: hidden;" />
								<span id="flashmessage" style="float: left; font-size: 16px; font-weight: bold; font-family: Arial; margin-top: -0px;"><?php echo $this->Session->flash(); ?></span>
								<?php echo $this->Session->flash('auth'); ?>
							</p>
						</blockquote>
					</div>
				</div>
				<?php } ?>

				<?php echo $this->fetch('content'); ?>

			</div>

			<div class="grid_4">
				<?php
					if( !AuthComponent::user('email') ) {
						echo $this->element('box_login');
					}
				?>
				<?php
					// if( AuthComponent::user('email') ) {
					if( isset( $_SESSION["email"] ) ) {
						// echo $this->element('box_tables');
					}
				?>

			</div>

			<div class="clear"></div>
			<div class="grid_16" id="site_info">
				<div class="box">
					<p>Búzafű-lé - Admin</p>
				</div>
			</div>
			<div class="clear"></div>
		</div>
		<script type="text/javascript" src="js/mootools-1.2.1-core.js"></script>
		<script type="text/javascript" src="js/mootools-1.2-more.js"></script>
		<script type="text/javascript" src="js/mootools-fluid16-autoselect.js"></script>

	</body>

</html>
