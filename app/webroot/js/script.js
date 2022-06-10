function start(){ 
	
	$('.px1').css({marginLeft:'-100%'}).stop().delay(200).animate({marginLeft:'0'},800,'easeInOutExpo');
	$('.menu').css({marginLeft:'-292px'}).stop().delay(1000).animate({marginLeft:'0'},800,'easeOutExpo');
	
	$.ajax( { 
		type: "POST", 
		cache: false,
		dataType: 'json',
		url: "/texts/getMyText/1", //Adatkezelési nyilatkozat = 1
		success: function(result){ 
			$('#terms_and_conditions').html( result.text );
		},
		error: function(result){
			$('#terms_and_conditions').html( 'Nem sikerült a szöveg lekérése a szerverről. Kérem töltse újra az oldalt, frissítsen! (F5)' );
		}							
	});

	$.ajax( { 
		type: "POST", 
		cache: false,
		dataType: 'json',
		url: "/texts/getMyText/2", //Adatkezelési nyilatkozat = 2
		success: function(result){ 
			$('#privacy_text').html( result.text );
		},
		error: function(result){
			$('#privacy_text').html( 'Nem sikerült a szöveg lekérése a szerverről. Kérem töltse újra az oldalt, frissítsen! (F5)' );
		}							
	});

	$.ajax( { 
		type: "POST", 
		cache: false,
		dataType: 'json',
		url: "/texts/getMyText/7", //Cookie tájékoztató = 7
		success: function(result){ 
			$('#cookies').html( result.text );
		},
		error: function(result){
			$('#cookies').html( 'Nem sikerült a szöveg lekérése a szerverről. Kérem töltse újra az oldalt, frissítsen! (F5)' );
		}							
	});

	$.ajax( { 
		type: "POST", 
		cache: false,
		dataType: 'json',
		url: "/texts/getMyText/8", //Impresszum = 8
		success: function(result){ 
			$('#impressum').html( result.text );
		},
		error: function(result){
			$('#impressum').html( 'Nem sikerült a szöveg lekérése a szerverről. Kérem töltse újra az oldalt, frissítsen! (F5)' );
		}							
	});

	
};

function showSplash(){
	setTimeout(function () {
		$('.splash').css({visibility:'visible'}).stop().animate({marginLeft:0},800,'easeOutExpo');


	}, 500);
	
};
function hideSplash(){ 
	
	
	$('.splash').stop().animate({marginLeft:2000},800,'easeInOutExpo', function(){ $(this).css({visibility:'hidden'}); });

   
};
function hideSplashQ(){	
	
	$('.splash').css({visibility:'hidden', marginLeft:2000});

	
};

///////////////////

$(document).ready(function() {
	
	/////// icons
	$(".icons li").find("a").css({opacity:0.25});
	$(".icons li a").hover(function() {
		$(this).stop().animate({opacity:1 }, 400, 'easeOutExpo');		    
	},function(){
	    $(this).stop().animate({opacity:0.25 }, 400, 'easeOutExpo' );		   
	});
	
	// slider
	$('.slider')._TMS({
			show:0,
			pauseOnHover:false,
			duration:800,
			preset:'diagonalExpand',
            easing:"easeInOutExpo",
			pagination:true,//'.pagination',true,'<ul></ul>'
			pagNums:false,
			slideshow:20000,
			numStatus:false,
			banners:false,    // false 'fromLeft', 'fromRight', 'fromTop', 'fromBottom', 'fade'
			waitBannerAnimation:true,
			bannerEasing:'easeInOutExpo',
			bannerDuration:1000
	});	
	
	/////// close
	$(".close span").css({opacity:0});
	$(".close").hover(function() {
		$(this).find("span").stop().animate({opacity:1 }, 400, 'easeOutExpo');		    
	},function(){
	    $(this).find("span").stop().animate({opacity:0 }, 400, 'easeOutExpo' );		   
	});
	
	///////// video1
	$('.video1').hover(function(){
		$(this).find("img").stop().animate({backgroundColor:"#8fae5e"},400);
	}, function(){
		$(this).find("img").stop().animate({backgroundColor:"#ffffff"},400);
	});
	
	///////// photo1
	$('.photo1').hover(function(){
		$(this).find("img").stop().animate({backgroundColor:"#ece951"},400);
	}, function(){
		$(this).find("img").stop().animate({backgroundColor:"#ffffff"},400);
	});
	
	
	
	// for lightbox
	$("a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'normal',theme:'dark',social_tools:false,allow_resize: true,default_width: 500,default_height: 344});

	$("#orderloadercolor").fadeOut(1);
	$("#messageloadercolor").fadeOut(1);

	
 });  ////////




$(window).load(function() {
						
	
						
	// scroll
	$('.scroll-pane').jScrollPane({
		showArrows: true,
		verticalGutter: 12,
		verticalDragMinHeight: 92,
		verticalDragMaxHeight: 92
	});	
	
	
	
	//content switch	
	$('#content>ul>li').eq(0).css({'visibility':'hidden'});	
	var content = $('#content');	
	content.tabs({
        show:1,
        preFu:function(_){
    	   _.li.css({display:'none',left:2000});
		   //$('.main3').css({display:'none',opacity:0});
		   //$('.close').css({display:'none',opacity:0});
        },
        actFu:function(_){
			if(_.curr){
				_.curr.css({display:'block', left:2000}).stop().animate({left:0},800, 'easeInOutExpo');	                
			}   
			if(_.prev){
				_.prev.stop().animate({left:2000},800, 'easeInOutExpo', function(){ _.prev.css({display:'none'}); });
			}
            		
			//console.log(_.pren, _.n);			
            if ( (_.n == 0) && (_.pren != -1) ){
                showSplash();
            }
            if ((_.pren == 0) && (_.n>0)){
                hideSplash();  
            }
			if ( (_.pren == undefined) && (_.n >= 1) ){
                _.pren = -1;
                hideSplashQ();
            }
  		}
    });
	//content switch navs
	var nav = $('.menu');	
    nav.navs({
		useHash:true,
        defHash: '#!/page_SPLASH',
        //defHash: '#!/page_PRICES',
        hoverIn:function(li){ 
			//$('> a .over',li).stop(true).animate({top:0},400, 'easeOutExpo');
			$('> a .over',li).stop().animate({width:268},400, 'easeOutCubic');
			$('.txt1',li).stop().animate({left:-292},400, 'easeOutExpo');
			$('.txt2',li).stop().animate({left:0},400, 'easeOutExpo');
        },
        hoverOut:function(li){	
		    if (!li.hasClass('with_ul') || !li.hasClass('sfHover')) {
				$('.txt1',li).stop().animate({left:0},400, 'easeOutExpo');
     			$('.txt2',li).stop().animate({left:-292},400, 'easeOutExpo'); 
				$('> a .over',li).stop().animate({width:0},400, 'easeOutCubic');
			};
        }
    })    
    .navs(function(n){	
   	    content.tabs(n);
   	});	
	//////////////////////////
	

	
	
}); /// load

////////////////

$(window).load(function() {	
	setTimeout(function () {					
  		$('.spinner').fadeOut();
		$('body').css({overflow:'inherit'});
		start();
	}, 100);	
	var qwe = setTimeout(function () {$("#jquery_jplayer").jPlayer("play");}, 2000);	
	
});