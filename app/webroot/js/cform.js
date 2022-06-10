$(document).ready(function(){ 

	$("#contactname").blur( function(){
		if(!isValidFullname( $("#contactname").val() ) ){
			//$("#contactname").select();
			$("#contactname").css('border','2px solid red');
			//alert('Kérem írja be a nevét!');
			return false;
		}else{
			$("#contactname").css('border','1px solid #b4c39b');
		}
	})

	$("#contactemail").blur( function(){
		if(!isValidEmail( $("#contactemail").val() ) ){
			//$("#contactemail").select();
			$("#contactemail").css('border','2px solid red');
			//alert('Kérem adja meg valós email címét!');
			return false;
		}else{
			$("#contactemail").css('border','1px solid #b4c39b');
		}
	})
	
	$("#contactphone").blur( function(){
		if(!isValidPhone( $("#contactphone").val() ) ){
			//$("contactphone").select();
			$("#contactphone").css('border','1px solid red');
			//alert('Kérem adja meg a telefonszámát! Csak számokat adjon meg!');
			return false;
		}else{
			$("#contactphone").css('border','1px solid #b4c39b');
		}
	})


//########################################### Üzenetküldés gomb kezelése ##############################################
	$("#contactsubmit").click(function(){
		var name 	= $("#contactname").val();
		var email 	= $("#contactemail").val();
		var phone 	= $("#contactphone").val();
		var message	= $("#contactmessage").val();
		
/*		
		$('#modal-title').html('Teszt fejléc');
		$('#modal-body').html('Üzenet szövege');
		$('#modal-cancel').html('Mégsem');
		$('#modal-ok').html('Megrendelem');
		$('#msgbox').modal('show');
*/
		
		if(!isValidFullname( name ) ){
			$('html, body').animate({
				scrollTop: $("#contactname").offset().top - 95
			}, 2000, 'easeInOutExpo');

			$("#contactname").css('border','2px solid red');
			//$.sweetModal('Kérem írja be a Nevét!');
			//file:///D:/www/sweet-modal-master/docs/index.html
			$.sweetModal({
				content: 'Kérem írja be a Nevét!',
				title: '',
				icon: $.sweetModal.ICON_WARNING,
				buttons: [
					{
						label: 'O.k.',
						classes: 'redB'
					}
				]
			});			
			return false;
		}else{
			$("#contactname").css('border','1px solid #b4c39b');
		}
		
		if(!isValidEmail( email ) ){
			$('html, body').animate({
				scrollTop: $("#contactname").offset().top - 95
			}, 2000, 'easeInOutExpo');
			$("#contactemail").css('border','2px solid red');
			//$.sweetModal('Kérem írja be az Email címét!');
			$.sweetModal({
				content: 'Kérem írja be az Email címét!',
				title: '',
				icon: $.sweetModal.ICON_WARNING,
				buttons: [
					{
						label: 'O.k.',
						classes: 'redB'
					}
				]
			});
			$("#contactemail").select();
			//alert('Kérem adja meg valós Emailt címét');
			return false;
		}else{
			$("#contactemail").css('border','1px solid #b4c39b');
		}
		
		if(!isValidPhone( phone ) ){
			$('html, body').animate({
				scrollTop: $("#contactphone").offset().top - 95
			}, 2000, 'easeInOutExpo');
			$("#contactphone").css('border','2px solid red');
			//$.sweetModal('Kérem adja meg a telefonszámát!\nCsak számokat adjon meg!');
			$.sweetModal({
				content: 'Kérem adja meg a telefonszámát!\nCsak számokat adjon meg!',
				title: '',
				icon: $.sweetModal.ICON_WARNING,
				buttons: [
					{
						label: 'O.k.',
						classes: 'redB'
					}
				]
			});
			$("#contactphone").select();
			//alert('Kérem adja meg a telefonszámát!\nCsak számokat adjon meg!');
			return false;
		}else{
			$("#contactphone").css('border','1px solid #b4c39b');
		}

		if( message.length <= 0){
			$('html, body').animate({
				scrollTop: $("#contactmessage").offset().top - 95
			}, 2000, 'easeInOutExpo');
			$("#contactmessage").css('border','2px solid red');
			//$.sweetModal('Kérem írja meg üzenetét!');
			$.sweetModal({
				content: 'Kérem írja meg üzenetét!',
				title: '',
				icon: $.sweetModal.ICON_WARNING,
				buttons: [
					{
						label: 'O.k.',
						classes: 'redB'
					}
				]
			});
			$("#contactmessage").select();
			//alert('Kérem írja meg üzenetét!');
			return false;
		}else{
			$("#contactmessage").css('border','1px solid #b4c39b');
		}


		//if (confirm('Küldhetem az üzenetet?')){
			
		$.sweetModal.confirm('','Elküldi az üzenetet?', function() {
		
			$("#contactsubmit").text("Üzenet küldése folyamatban...");
			
			$.ajax( { 
				type: "POST", 
				cache: false,
				dataType: 'json',
				url: "/messages/composemessage", 
				data: {
					"data":{
						"Message":{
							"name"		: name,
							"email"		: email,
							"phone"		: phone,
							"message"	: message
						}
					}
				},
				success: function(result){ 
					//alert(result.message);
					$.sweetModal({
						content: result.message,
						title: '',
						icon: $.sweetModal.ICON_SUCCESS,
						buttons: [
							{
								label: 'O.k.',
								classes: 'greenB'
							}
						]
					});						
					
					if(result.success){ 
						$("#contactname").val('');
						$("#contactemail").val('');
						$("#contactphone").val('');
						$("#contactmessage").val('');
						//$("#contactname").select();
						$("#contactsubmit").text("Üzenet küldése");
						$('html, body').animate({
							scrollTop: $("#contact").offset().top - 95
						}, 2000, 'easeInOutExpo');
					} 
					$("#contactname").select();
				} 
			})
			.done(function( data ) {
				//$("#messagetitle").text(oldtitle);
				//$("#messageloadercolor").fadeOut(500);
				//$("#messagesubmit").fadeIn(200);						
			});
			
			
		}, function() {
			/*
			$.sweetModal({
				content: 'Üzenetét nem küldte el!',
				title: '',
				icon: $.sweetModal.ICON_WARNING,
				buttons: [
					{
						label: 'O.k.',
						classes: 'greenB',
					}
				]
			});	
			*/
		});		
		//}	// if confirm

		return false; 
	}); 		
//########################################### /Üzenetküldés gomb kezelése ##############################################		

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
	// function isValidPhone(phone) { return (phone.length >= 1); }
	function isValidPhone(phone) { var regex  = /^[0-9]+$/; return regex.test(phone); } //csak számok */
	function isValidPostcode(input){ var RE = /^-{0,1}\d*\.{0,1}\d+$/; return (RE.test(input)); }	
	function isValidCity(city) { return city.length >= 1; }
	// function isValidStreet(street) { var regex  = /^[A-Za-z0-9]{2,}/; return regex.test(street); }
	function isValidStreet(street) { return (street.length >= 1); }
	function isValidCaptcha(captcha) { var regex  = /^[A-Za-z0-9]{5}/; return regex.test(captcha); }
	// function isValidMessage(message) { var regex  = /^[A-Za-z0-9]{5,}/; return regex.test(message); }
	function isValidMessage(message) { return message.length >= 1; }

	// Check Valid Input Quantity
	function isValidNumber(input){ var RE = /^-{0,1}\d*\.{0,1}\d+$/; return (RE.test(input)); }		




	//================================================================================================================
	//================================================================================================================
	//================================================================================================================
	//----- https://bootsnipp.com/snippets/featured/buttons-minus-and-plus-in-input -----------
	$('.btn-number').click(function(e){
		e.preventDefault();
		fieldName = $(this).attr('data-field');
		type      = $(this).attr('data-type');
		var input = $("input[name='"+fieldName+"']");
		var currentVal = parseInt(input.val());
		if (!isNaN(currentVal)) {
			if(type == 'minus') {
				if(currentVal > input.attr('min')) {
					input.val(currentVal - 1).change();
				} 
				if(parseInt(input.val()) == input.attr('min')) {
					$(this).attr('disabled', true);
				}
			} else if(type == 'plus') {
				if(currentVal < input.attr('max')) {
					input.val(currentVal + 1).change();
				}
				if(parseInt(input.val()) == input.attr('max')) {
					$(this).attr('disabled', true);
				}
			}
		} else {
			input.val(0);
		}
	});

	$('.input-number').focusin(function(){
		$(this).data('oldValue', $(this).val());
	});

	$('.input-number').change(function() {
		minValue =  parseInt($(this).attr('min'));
		maxValue =  parseInt($(this).attr('max'));
		valueCurrent = parseInt($(this).val());

		name = $(this).attr('name');
		if(valueCurrent >= minValue) {
			$(".btn-number[data-type='minus'][data-field='"+name+"']").removeAttr('disabled')
		} else {
			alert('Elérte a minimum mennyiséget');
			$(this).val($(this).data('oldValue'));
		}
		if(valueCurrent <= maxValue) {
			$(".btn-number[data-type='plus'][data-field='"+name+"']").removeAttr('disabled')
		} else {
			alert('Elérte a maximum mennyiséget');
			$(this).val($(this).data('oldValue'));
		}
	});

	$(".input-number").keydown(function (e) {
		// Allow: backspace, delete, tab, escape, enter and .
		if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
		// Allow: Ctrl+A
		(e.keyCode == 65 && e.ctrlKey === true) || 
		// Allow: home, end, left, right
		(e.keyCode >= 35 && e.keyCode <= 39)) {
			// let it happen, don't do anything
			return;
		}
		// Ensure that it is a number and stop the keypress
		if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
			e.preventDefault();
		}
	});
	//----- /.https://bootsnipp.com/snippets/featured/buttons-minus-and-plus-in-input -----------
	//================================================================================================================
	//================================================================================================================
	//================================================================================================================





	
});
				
function freset(){ 	
	$("#note").html('');
	document.getElementById('ajax-contact-form').reset();
	$("#fields").show();
};