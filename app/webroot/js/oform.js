$(document).ready(function(){
//########################################### Input mező kezelése kezelése ##############################################
	//########################################### Input mező kezelése ##############################################

	//Alapadatok beállítása
	
	$("#checboxterms").prop('checked', false);
	$("#checboxgdpr").prop('checked', false);
	
	getCashOnDelivery();


//	$("#paymentType").change(function() {
	$("input[name='paymentType']:checked").change(function() {
		getCashOnDelivery();
	});

	//Hozzáad egyet a mennyiségből
	$("#plus").click(function(){
		var count = parseInt( $("#pricecounts").text() );
		var qty = parseInt( $("#quantity").val() );
		var newValue = 0;

		if(isValidNumber( qty )){
			newValue = parseInt( qty ) + 1;
			if(newValue < 1){ newValue = 1; }
			if(newValue > count){
				newValue = count;
				//flashMessage('Notice', count+' darabnál nem rendelhet többet! Kérem nézze át az <b>ártáblázatot</b>!');
			}
			$("#quantity").val(newValue);
		}else{
			$("#quantity").val('0');
		}

		getCashOnDelivery();

	});

	//Kivon egyet a mennyiségből
	$("#minus").click(function(){
		var count = parseInt( $("#pricecounts").text() );
		var qty = parseInt( $("#quantity").val() );
		var newValue = 0;

		if(isValidNumber( qty )){
			newValue = parseInt( $("#quantity").val() ) - 1;
			if(newValue < 0){ newValue = 0; }
			if(newValue > count){
				newValue = count;
				flashMessage('Notice', count+' darabnál nem rendelhet többet! Kérem nézze át az <b>ártáblázatot</b>!');
			}
			$("#quantity").val(newValue);
		}else{
			$("#quantity").val('0');
		}

		getCashOnDelivery();

	});

	//Input mezőbe való beíráskor ellenőrzi a tartalmat és a formát ;-)
	$("#quantity").blur(function(){
		var qty = parseInt( $("#quantity").val() );
		var count = parseInt( $("#pricecounts").text() );
		var newValue = 0;

		if(isValidNumber( qty )){
			newValue = parseInt( $("#quantity").val() );
			if(newValue < 1){ newValue = 1; }
			if(newValue > count){
				newValue = count;
				flashMessage('Notice', count+' darabnál nem rendelhet többet! Kérem nézze át az <b>ártáblázatot</b>!');
			}
			$("#quantity").val(newValue);

		}else{
			$("#quantity").val(0);
			//$("#quantity").select();
		}
		if($("#quantity").val() == '' || $("#quantity").val() == 'NaN' || $("#quantity").val() == '0'){	//Ha üre, akkor 0-t ír be
			$("#quantity").val(0);
		}
		if(($("#quantity").val().length > 1) &&  ($("#quantity").val() != 0)){
			$("#quantity").val( $("#quantity").val().replace(/^0+/, '') );
		}
		
		getCashOnDelivery();
		
	});

	//Fókusz esetén kijelölődik a tartalom
	$("#quantity").focus(function(){
		//$(this).select();
	});

//########################################### /Input mező kezelése kezelése ##############################################


//########################################### Megrendelés gomb kezelése ##############################################
	$("#ordersubmit").click(function(event){
		var name 	 	= $("#ordername").val();
		var email 	 	= $("#orderemail").val();
		var phone 	 	= $("#orderphone").val();
		var postcode 	= $("#orderpostcode").val();
		var city	 	= $("#ordercity").val();
		var address	 	= $("#orderaddress").val();
		var quantity 	= $("#quantity").val();
		var message	 	= $("#ordermessage").val();
		var lCheckboxes = true;
		var paymentType = 0;
		
		if($("#optionCashOnDelivery:checked").val()){
			paymentType = 1;
		}
		if($("#optionTransfer:checked").val()){
			paymentType = 2;
		}


		if(!isValidFullname( name ) ){
			$.sweetModal({
				content: 'Kérem írja be a Nevét',
				title: '',
				icon: $.sweetModal.ICON_WARNING,
				buttons: [
					{
						label: 'O.k.',
						classes: 'redB',
						action: function(sweetModal) {
							$('html, body').animate({
								scrollTop: $("#ordername").offset().top - 95
							}, 2000, 'easeInOutExpo');
							$("#ordername").css('border','2px solid red');
							$("#ordername").select();
						}
					}
				]
			});
			//alert('Kérem írja be a Nevét');
			return false;
		}else{
			$("#ordername").css('border','1px solid #b4c39b');
		}

		if(!isValidEmail( email ) ){
			$.sweetModal({
				content: 'Kérem adja meg a valós Emailt címét!',
				title: '',
				icon: $.sweetModal.ICON_WARNING,
				buttons: [
					{
						label: 'O.k.',
						classes: 'redB',
						action: function(sweetModal) {
							$('html, body').animate({
								scrollTop: $("#orderemail").offset().top - 95
							}, 2000, 'easeInOutExpo');
							$("#orderemail").css('border','2px solid red');
							$("#orderemail").select();
						}
					}
				]
			});
			//alert('Kérem adja meg a valós Emailt címét!');
			return false;
		}else{
			$("#orderemail").css('border','1px solid #b4c39b');
		}

		if(!isValidPhone( phone ) ){
			$.sweetModal({
				content: 'Kérem adja meg a Telefonszámát!',
				title: '',
				icon: $.sweetModal.ICON_WARNING,
				buttons: [
					{
						label: 'O.k.',
						classes: 'redB',
						action: function(sweetModal) {
							$('html, body').animate({
								scrollTop: $("#orderphone").offset().top - 95
							}, 2000, 'easeInOutExpo');
							$("#orderphone").css('border','2px solid red');
							$("#orderphone").select();
						}
					}
				]
			});
			//alert('Kérem adja meg a Telefonszámát!');
			return false;
		}else{
			$("#orderphone").css('border','1px solid #b4c39b');
		}

		if( isValidNumber( postcode ) ){
			var p = parseInt( postcode ) ;
			if( (p <= 1000) || (p >= 9999) ){
				$.sweetModal({
					content: 'Kérem adja meg az Irányítószámát!',
					title: '',
					icon: $.sweetModal.ICON_WARNING,
					buttons: [
						{
							label: 'O.k.',
							classes: 'redB',
							action: function(sweetModal) {
								$('html, body').animate({
									scrollTop: $("#orderpostcode").offset().top - 95
								}, 2000, 'easeInOutExpo');
								$("#orderpostcode").css('border','2px solid red');
								$("#orderpostcode").select();
							}
						}
					]
				});
				//alert('Kérem adja meg az Irányítószámát!');
				return false;
			}else{
				$("#orderpostcode").css('border','1px solid #b4c39b');
			}
		}else{
			$.sweetModal({
				content: 'Kérem adja meg az Irányítószámát!',
				title: '',
				icon: $.sweetModal.ICON_WARNING,
				buttons: [
					{
						label: 'O.k.',
						classes: 'redB',
						action: function(sweetModal) {
							$('html, body').animate({
								scrollTop: $("#orderpostcode").offset().top - 95
							}, 2000, 'easeInOutExpo');
							$("#orderpostcode").css('border','2px solid red');
							$("#orderpostcode").select();
						}
					}
				]
			});
			//alert('Kérem adja meg az Irányítószámát!');
			return false;
		}

		if(!isValidCity( city ) ){
			$.sweetModal({
				content: 'Kérem adja meg az Települését!',
				title: '',
				icon: $.sweetModal.ICON_WARNING,
				buttons: [
					{
						label: 'O.k.',
						classes: 'redB',
						action: function(sweetModal) {
							$('html, body').animate({
								scrollTop: $("#ordercity").offset().top - 95
							}, 2000, 'easeInOutExpo');
							$("#ordercity").css('border','2px solid red');
							$("#ordercity").select();
						}
					}
				]
			});
			//alert('Kérem adja meg a Települését!');
			return false;
		}else{
			$("#ordercity").css('border','1px solid #b4c39b');
		}

		if(!isValidStreet( address ) ){
			$.sweetModal({
				content: 'Kérem adja meg a Címét!',
				title: '',
				icon: $.sweetModal.ICON_WARNING,
				buttons: [
					{
						label: 'O.k.',
						classes: 'redB',
						action: function(sweetModal) {
							$('html, body').animate({
								scrollTop: $("#orderaddress").offset().top - 95
							}, 2000, 'easeInOutExpo');
							$("#orderaddress").css('border','2px solid red');
							$("#orderaddress").select();
						}
					}
				]
			});
			//alert('Kérem adja meg a Címét!');
			return false;
		}else{
			$("#orderaddress").css('border','1px solid #b4c39b');
		}

		if( !$('#checboxterms').prop('checked') ){
			/*	**** Zavaró, hogy elgördül
			$('html, body').animate({
				scrollTop: $("#checboxterms").offset().top - 120
			}, 2000, 'easeInOutExpo');
			*/
			$.sweetModal({
				content: 'Elküldés előtt a szerződési feltételeket el kell fogadni! (Jelölje be a kis négyzetet! Kattintson rá!)',
				title: '',
				icon: $.sweetModal.ICON_WARNING,
				buttons: [
					{
						label: 'O.k.',
						classes: 'redB'
					}
				]
			});
			//alert('Elküldés előtt a szerződési feltételeket el kell fogadni! (Jelölje be a kis négyzetet! Kattintson rá!)');
			$('#div-checkboxterms').css('border','2px solid red').css('padding','5px').css('height','40px').css('paddingLeft','15px');
			lCheckboxes = false;
		}else{
			$('#div-checkboxterms').css('border','0px solid red').css('padding','5px').css('height','40px').css('paddingLeft','15px');
		}

		if( !$('#checboxgdpr').prop('checked') ){
			/*	**** Zavaró, hogy elgördül
			$('html, body').animate({
				scrollTop: $("#checboxterms").offset().top - 120
			}, 2000, 'easeInOutExpo');
			*/
			$.sweetModal({
				content: 'Elküldés előtt az Adatkezelési nyilatkozatot el kell fogadni! (Jelölje be a kis négyzetet! Kattintson rá!)',
				title: '',
				icon: $.sweetModal.ICON_WARNING,
				buttons: [
					{
						label: 'O.k.',
						classes: 'redB'
					}
				]
			});
			//alert('Elküldés előtt a szerződési feltételeket el kell fogadni! (Jelölje be a kis négyzetet! Kattintson rá!)');
			$('#div-checkboxgdpr').css('border','2px solid red').css('padding','5px').css('height','40px').css('paddingLeft','15px');
			lCheckboxes = false;
		}else{
			$('#div-checkboxgdpr').css('border','0px solid red').css('padding','5px').css('height','40px').css('paddingLeft','15px');
		}

		if(!lCheckboxes){
			return false;
		}



		// var price = $("#price").text();
		var order_confirm_message = $("#order_confirm_message").text();
		var value = $("#quatityprice"+$("#quantity").val()).text();

		//order_confirm_message = order_confirm_message.replace('{egysegar}', price);
		order_confirm_message = order_confirm_message.replace('{mennyiseg}', quantity);
		order_confirm_message = order_confirm_message.replace('{ertek}', value);




		//if( !confirm("Szeretnék megrendelni "+quantity+" csomag búzafűlét.") ){
		//	return false;
		//}else{
		$.sweetModal.confirm('',"Szeretnék megrendelni "+quantity+" csomag búzafűlét.", function() {

			//---------------------------- Megrendelés elküldése a szervernek -------------------------
			$("#ordersubmit").fadeOut(200);
			oldtitle = $("#ordertitle").text();
			$("#ordersubmit").text("Rendelés feldolgozása");
			$("#orderloadercolor").fadeIn(500);
			
			$.ajax( {
				type: "POST",
				cache: false,
				dataType: 'json',
				url: "/orders/neworder",
				data: {
					"data":{
						"Order":{
							"name"		  : name,
							"phone"		  : phone,
							"email"		  : email,
							"postcode"	  : postcode,
							"city"		  : city,
							"address"	  : address,
							"message"	  : message,
							"quantity"	  : quantity,
							"payment_type": paymentType
						}
					}
				},
				success: function(result){

					if( result.success ){
						$("#quantity").val(0);
						$("#ordername").val('');
						$("#orderemail").val('');
						$("#orderphone").val('');
						$("#orderpostcode").val('');
						$("#ordercity").val('');
						$("#orderaddress").val('');
						$("#ordermessage").val('');
						$('#checboxterms').prop('checked', false);
						$("#ordersubmit").text("Megrendelés!");

						//Alapadatok beállítása
						$('#checboxgdpr').prop('checked', false);
						//$("#owing").text( $("#quatityprice"+$("#quantity").val()).text() );
						$("#owing").text( 0 );
						$("#owingdiscount").html( "&nbsp;" );

						//$("#qty").text( $("#quantity").val() );
						$("#qty").text( 0 );
						//$("#pkgprice").text( parseInt( $("#quatityprice"+$("#quantity").val()).text() ) );
						$("#pkgprice").text( parseInt( $("#quatityprice"+$("#quantity").val()).text() ) );
						
						getCashOnDelivery();
						
						// /.Alapadatok beállítása
						$.sweetModal({
							content: result.message,
							title: '',
							icon: $.sweetModal.ICON_SUCCESS,
							buttons: [
								{
									label: 'O.k.',
									classes: 'redB',
									action: function(sweetModal) {
										$('html, body').animate({
											scrollTop: $("#delivery").offset().top - 60
										}, 1000, 'easeInOutExpo');
									}
								}
							]
						});

						// flashMessage('Success', 'Success');
					} else {
						// flashMessage('Error', 'Error');
						$.sweetModal({
							content: 'Nem sikerült a megrendelést elküldeni! Kérem nézze át az adatokat és küldje el újra!',
							title: '',
							icon: $.sweetModal.ICON_ERROR,
							buttons: [
								{
									label: 'O.k.',
									classes: 'redB',
									action: function(sweetModal) {
										$('html, body').animate({
											scrollTop: $("#order").offset().top - 60
										}, 2000, 'easeInOutExpo');
									}
								}
							]
						});
					}


					//alert( result.message );

					// $("#ordertitle").text(oldtitle);
					// $("#orderloadercolor").fadeOut(500);
					// $("#ordersubmit").fadeIn(200);

				},
				error: function(result){

				}
			})
			.done(function( data ) {
				$("#ordertitle").text(oldtitle);
				$("#orderloadercolor").fadeOut(500);
				$("#ordersubmit").fadeIn(200);
			});

		}, function() {	// if Confirm-ELSE ág
			$.sweetModal({
				content: 'Megrendelését nem küldte el!',
				title: '',
				icon: $.sweetModal.ICON_WARNING,
				buttons: [
					{
						label: 'O.k.',
						classes: 'greenB',
					}
				]
			});
		});

		//}	// if Confirm

		return false;
	});
//########################################### /Kosárba gomb kezelése ##############################################


//########################################### Beviteli mezők ellenőrzése kilépéskor ##############################################
/*
	$("#ordername").blur( function(){
		if(!isValidFullname( $("#ordername").val() ) ){
			$("#ordername").select();
			$("#ordername").css('border','2px solid red');
			// flashMessage('Error', 'Kérem adja meg a<br /><b>Nevét</b>');
			return false;
		}else{
			$("#ordername").css('border','1px solid #b4c39b');
		}
	})

	$("#orderemail").blur( function(){
		if(!isValidEmail( $("#orderemail").val() ) ){
			$("#orderemail").select();
			$("#orderemail").css('border','2px solid red');
			// flashMessage('Error', 'Kérem adja meg a valós<br /><b>Email címét</b>');
			return false;
		}else{
			$("#orderemail").css('border','1px solid #b4c39b');
		}
	})

	$("#orderphone").blur( function(){
		if(!isValidPhone( $("#orderphone").val() ) ){
			$("#orderphone").select();
			$("#orderphone").css('border','2px solid red');
			// flashMessage('Error', 'Kérem adja meg a<br /><b>Telefonszámát</b>!<br />Csak számokat adjon meg!');
			return false;
		}else{
			$("#orderphone").css('border','1px solid #b4c39b');
		}
	})

	$("#orderpostcode").blur( function(){
		if(!isValidPostcode( $("#orderpostcode").val() ) ){
			$("#orderpostcode").select();
			$("#orderpostcode").css('border','2px solid red');
			// flashMessage('Error', 'Kérem adja meg a<br /><b>Irányítószámát</b>');
			return false;
		}else{
			$("#orderpostcode").css('border','1px solid #b4c39b');
		}
	})

	$("#ordercity").blur( function(){
		if(!isValidCity( $("#ordercity").val() ) ){
			$("#ordercity").select();
			$("#ordercity").css('border','2px solid red');
			// flashMessage('Error', 'Kérem adja meg a<br /><b>Települését</b>');
			return false;
		}else{
			$("#ordercity").css('border','1px solid #b4c39b');
		}
	})

	$("#orderaddress").blur( function(){
		if(!isValidCity( $("#orderaddress").val() ) ){
			$("#orderaddress").select();
			$("#orderaddress").css('border','2px solid red');
			// flashMessage('Error', 'Kérem adja meg a<br /><b>Címét</b> (Utca, hsz, ...)');
			return false;
		}else{
			$("#orderaddress").css('border','1px solid #b4c39b');
		}
	})
*/
//########################################### /Beviteli mezők ellenőrzése kilépéskor ##############################################






//#################################### Beviteli mezők ellenőrzése REGEX-szel ###########################################################################

	//#################################### FLASH MESSAGE meghívása egyszerűbb formában ###############################
	function flashMessage(type, message){
		if(type != '' && message != ''){
			if(type == 'Warning'){ 	$().toastmessage('showWarningToast', message)};
			if(type == 'Success'){ 	$().toastmessage('showSuccessToast', message)};
			if(type == 'Notice'){ 	$().toastmessage('showNoticeToast', message)};
			if(type == 'Error'){ 	$().toastmessage('showErrorToast', message)};
			if(type == 'staticWarning'){ $().toastmessage('showToast', { text : message, sticky : true, position : 'top-right', type : 'warning', closeText: '' });	}
			if(type == 'staticSuccess'){ $().toastmessage('showToast', { text : message, sticky : true, position : 'top-right', type : 'success', closeText: '' });	}
			if(type == 'staticNotice'){ $().toastmessage('showToast',  { text : message, sticky : true, position : 'top-right', type : 'notice', closeText: '' });	}
			if(type == 'staticError'){ $().toastmessage('showToast', 	 { text : message, sticky : true, position : 'top-right', type : 'error', closeText: '' });	}

		}
	}

	//#################################### STATIC MESSAGE meghívása egyszerűbb formában ###############################
	function staticMessage(type, message){
		if(type != '' && message != ''){
			if(type == 'Warning'){ $().toastmessage('showToast', { text : message, sticky : true, position : 'top-right', type : 'warning', closeText: '' });	}
			if(type == 'Success'){ $().toastmessage('showToast', { text : message, sticky : true, position : 'top-right', type : 'success', closeText: '' });	}
			if(type == 'Notice'){ $().toastmessage('showToast',  { text : message, sticky : true, position : 'top-right', type : 'notice', closeText: '' });	}
			if(type == 'Error'){ $().toastmessage('showToast', 	 { text : message, sticky : true, position : 'top-right', type : 'error', closeText: '' });	}
		}
	}

	function isValidUsername(username) { var regex  = /^[a-z0-9]{5,30}$/; return regex.test(username); }
		// Actual Regex is : ^.*(?=.{4,20})(?=.*\d)(?=.*[a-zA-Z]).*$
		// 1) Search for at least one digit in any position
		// 2) Search for at least one upper or lower case in any position
		// 3) Enforce password to consist of 4-10 characters
		//--- or ---
		// 1) 6-10 characters
		// 2) At least one alpha AND one number
		// 3) The following special chars are allowed (0 or more): !@#$%
		// Here's what I have:
		// It works on all my test cases, except it allows "a1234567890", "testIt!0987", and "1abcdefghijk", none of which should be allowed, since they contain more than 10 chars.
		//-- or --
		//((?=.*[0-9])(?=.*[a-z]) (?=.*[A-Z])(?=.*[@#*=])(?=[\\S]+$).{5,10})
		// Explanations:
		// (?=.*[0-9]) a digit must occur at least once
		// (?=.*[a-z]) a lower case letter must occur at least once
		// (?=.*[A-Z]) an upper case letter must occur at least once
		// (?=.*[@#*=]) a special character must occur at least once
		// (?=[\\S]+$) no whitespace allowed in the entire string
		// .{5,10} at least 5 to 10 characters
		//-- or --
		//^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$%^&+=])(?=\S+$).{8,}$
		// Explanation:
		// ^                 # start-of-string
		// (?=.*[0-9])       # a digit must occur at least once
		// (?=.*[a-z])       # a lower case letter must occur at least once
		// (?=.*[A-Z])       # an upper case letter must occur at least once
		// (?=.*[@#$%^&+=])  # a special character must occur at least once
		// (?=\S+$)          # no whitespace allowed in the entire string
		// .{8,}             # anything, at least eight places though
		// $                 # end-of-string
		//-- or --
		// Magyar dátum formátum: (19[0-9]{2}|[2][0-9][0-9]{2})[/ -.](0?[1-9]|1[12])[/ -.](0?[1-9]|[12][0-9]|3[01])
		// Idő formátum: ^([0-1][0-9]|[2][0-3]):([0-5][0-9])$
		// E-mail cím: ^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+.([a-zA-Z]{2,4})$
		// Jelszó: [0-9a-zA-Z]{6,32}

	// function isValidPassword(password) { var regex  = /^.*(?=.{4,20})(?=.*\d)(?=.*[a-zA-Z]).*$/; return regex.test(password); }
	// function isValidPassword(password) { var regex  = /^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$%^&+=])(?=\S+$).{8,}$/; return regex.test(password); }
	// function isValidPassword(password) { var regex  = /^[0-9a-zA-Z]{6,32}$/; regex.test(password); }
	function isValidPassword(password) { return password.length >= 5; }
	// function isValidFullname(fullname) { var regex = /^[a-zA-Z\\s]*$/; return true; return regex.test(fullname); }
	function isValidFullname(fullname) { return fullname.length >= 1; }
	function isValidEmail(email) { var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/; return regex.test(email); }
	// function isValidPhone(phone) { var regex  = /^[0-9][0-9][\/][0-9]{2,3}[-][0-9]{2}[-][0-9]{2}/; return regex.test(phone); }
	/* function isValidPhone(phone) { var regex  = /^[0-9]+$/; return regex.test(phone); } //Lazább forma megadás */
	function isValidPhone(phone) { return (phone.length >= 1); }
	function isValidPostcode(input){ var RE = /^-{0,1}\d*\.{0,1}\d+$/; return (RE.test(input)); }
	function isValidCity(city) { return city.length >= 1; }
	// function isValidStreet(street) { var regex  = /^[A-Za-z0-9]{2,}/; return regex.test(street); }
	function isValidStreet(street) { return (street.length >= 1); }
	function isValidCaptcha(captcha) { var regex  = /^[A-Za-z0-9]{5}/; return regex.test(captcha); }
	// function isValidMessage(message) { var regex  = /^[A-Za-z0-9]{5,}/; return regex.test(message); }
	function isValidMessage(message) { return message.length >= 1; }

	// Check Valid Input Quantity
	function isValidNumber(input){ var RE = /^-{0,1}\d*\.{0,1}\d+$/; return (RE.test(input)); }




});

function freset(){
	$("#note").html('');
	document.getElementById('ajax-contact-form').reset();
	$("#fields").show();
};

$('input[type=radio][name=paymentType]').change(function() {
	getCashOnDelivery();
});

function getCashOnDelivery(){
	
	var qty = $('#quantity').val();
	var paymentType = 0;
	
	if($("#optionCashOnDelivery:checked").val()){
		paymentType = 1;
	}
	if($("#optionTransfer:checked").val()){
		paymentType = 2;
	}

	if(qty<1){
		$(".qty-ok").hide(500, function(){
			$("#orderbutton").hide(0, function(){
				$("#pleaseScroll").show(500);
			});
		});
	}else{

		$("#pleaseScroll").hide(500, function(){
			if(paymentType > 0){					// Ha ki van választva a pötty, akkor megjelenhet
				$("#orderbutton").show(500);
				$("#paymentBorder").css('border', '5px solid green');
				$("#paymentText").hide(500);
				
			}else{
				$("#orderbutton").hide(200);
				$("#paymentBorder").css('border', '5px solid red');
				$("#paymentText").show(500);
			}
		});
	}

	$.ajax( {
		type: "POST",
		cache: false,
		dataType: 'json',
		url: "/abouts/getCashOnDelivery",
		data: {
			"data":{
				"Order":{
					"qty"		  : qty,
					"paymentType" : paymentType
				}
			}
		},
		success: function(result){
			if( result.success ){
				//$("#qty").text( qty );
				$("#qty").text( qty );
				$("#quantity").text( 0 );
				$("#pkgprice").text( result.price );
				$("#owingdiscount").text( result.discount );
				$("#deliveryprice").text( result.delivery_price );
				$("#owing").text( result.owing );				
				$("#labelCashOnDelivery").text(result.cashOndeliveryPaymentOptionText);
				$("#CashOnDelivery").text(result.cashOnDelivery);
				$(".qty-ok").show(500);
			} else {
				$("#qty").text( 0 );
				$("#quantity").text( 0 );
				$("#pkgprice").text('0');
				$("#labelCashOnDelivery").text('Hiba...');
				$("#CashOnDelivery").text('0');
				$(".qty-ok").hide(500);
				$("#orderbutton").hide();
				// alert('Hiba a szerverrel való kommunikációban! Kérem frissítse az oldalt a Ctrl+F5 billentyűvel!')
			}
		}
	});
	
}
		
		