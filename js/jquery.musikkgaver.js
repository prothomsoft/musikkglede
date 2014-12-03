$(document).ready(function() {
		
	// --------------->
	// Button -------->
	// --------------->
	$("a", ".save").button({
        text: true
	});
	
	$("a", ".search").button({
        text: true
	});
	
	
	$("a", ".siteButton").button({
        text: true
	});
	
	$("a", "#loginNoIcon").click(function() {
		$('#divLogin').dialog('open');
		$('#formLoginEmail').focus();
		return false; 
	});
	
	$("a", "#Book").button({
        text: true
	});
	
	$("a", "#logout").button({
        icons: {
            primary: 'ui-icon-power'
        },
        text: true
	});	
	
	$("a", ".login").click(function() {
		$('#divLogin').dialog('open');
		$('#formLoginEmail').focus();
		return false; 
	});
	
	$("a", "#register").click(function() {
		$('#divRegistration').dialog('open');
		$('#formRegistrationEmail').focus();
		return false; 
	});
	
	$("a", ".contact").click(function() {
		$('#divContact').dialog('open');
		$('#formContactName').focus();
		if($("#form_NameFirst").val() != undefined && $("#form_NameLast").val() != undefined) {
			$('#formContactName').val($("#form_NameFirst").val() + " " + $("#form_NameLast").val());
		}
		$('#formContactEmail').val($("#form_Email").val());
		return false; 
	});
	
	$(".contact").click(function() {
		$('#divContact').dialog('open');
		$('#formContactName').focus();
		if($("#form_NameFirst").val() != undefined && $("#form_NameLast").val() != undefined) {
			$('#formContactName').val($("#form_NameFirst").val() + " " + $("#form_NameLast").val());
		}
		$('#formContactEmail').val($("#form_Email").val());
		return false; 
	});
	
	$("input:submit").button();
	
	$("a", ".shoppingCartButtonDisabled").button({
        text: true,
        disabled: true
	});
	
	$("#signUpLink").click(function() {
			$("#divLogin").dialog("close");
			$('#divRegistration').dialog('open');
			$('#formRegistrationEmail').focus();
			return false;
	});
	
	// --------------->
	// Preloader ----->
	// --------------->
	$("#isLoading").ajaxStart(function() {
		$(this).show();
	});
	
	$("#isLoading").ajaxStop(function() {
		$(this).hide();
	});
	
	$("#showPreloader").click(function() {
		$("#isLoading").show();
	});
	
	$("#hidePreloader").click(function() {
		$("#isLoading").hide();
	});
	
	$("#isLoading").css("position", "absolute");
	 
	$(window).scroll(function() {
	    $("#isLoading").css("top", $(window).scrollTop() + "px");
	});
	
	// --------------->
	// Dialog Forms -->
	// --------------->
	function updateTips(t) {
		$(".validateTips").show();
		$(".validateTips").text(t).addClass('ui-state-highlight');
		setTimeout(function() {
			$(".validateTips").removeClass('ui-state-highlight', 500);
		}, 500);
	}
	
	function removeFieldsHighlight(fields) {
		$(".validateTips").hide();
		fields.removeClass('ui-state-error');
	}
	
	function removeFieldsContent(fields) {
		$(".validateTips").hide();
		fields.val('');
	}
	
	// Login Form Starts -->
	var formLoginFields = $([]).add($("#formLoginEmail")).add($("#formLoginPassword"));
	$('#divLogin').dialog('destroy');
	$('#divLogin').dialog({
		autoOpen: false,
		height: 280,
		width: 370,
		modal: true,
		resizable: false,
		open: function(event, ui) {
			$('#selectedRowId').val();
		},
		buttons: {
			
			"Avbryt": function() {
				removeFieldsHighlight(formLoginFields);
				removeFieldsContent(formLoginFields);
				$("#divLogin").dialog("close"); 
			},
			"Glemt passord": function() {
				$("#divLogin").dialog("close");
				$('#divForgotPassword').dialog('open');
				$('#formForgotPasswordEmail').focus();
			},
			"Logg inn": function() {
				divLoginSubmit();
			}			
		}
	});
	
	$('#divLogin').find('input').keypress(function(e) {
		if ((e.which && e.which == 13) || (e.keyCode && e.keyCode == 13)) {
			divLoginSubmit();
		}
	});
	
	function divLoginSubmit() {
		$.post(  
			$("#form_SN").val() + "index.php?event=executeLogin",  
			$("#formLogin").serialize(),  
			function(data){
		   	  if (data.validationResult) {
		   		    removeFieldsHighlight(formLoginFields);
		   		    removeFieldsContent(formLoginFields);
		   		  	$("#divLogin").dialog("close");
		   		  	if (data.userType == "admin") {
		   	  			$('#executeLoginAdmin').submit();
		   		  	}
		   		  	if (data.userType == "client_profil") {
		   		  		$('#executeLoginClientProfile').submit();
		   		  	}
		   		  	if (data.userType == "client_basket") {
		   		  		$('#executeLoginClientBasket').submit();
		   		  	}
				} else {
					removeFieldsHighlight(formLoginFields);
					updateTips(data.errorMessage);
					$("#" + data.fieldName + "").addClass('ui-state-error');
				}  
		  	},  
		  	"json"  
		 );
	}
	// Login Form End -->
	
	// Registration Form Starts -->
	var formRegistrationFields = $([]).add($("#formRegistrationEmail")).add($("#formRegistrationPassword"));
	$('#divRegistration').dialog('destroy');
	$('#divRegistration').dialog({
		autoOpen: false,
		height: 400,
		width: 350,
		modal: true,
		resizable: false,
		open: function(event, ui) {
			$('#selectedRowId').val();
		},
		buttons: {
			"Avbryt": function() {
				removeFieldsHighlight(formRegistrationFields);
				removeFieldsContent(formRegistrationFields);
				$("#divRegistration").dialog("close");				
			},
			"Registrer": function() {
				divRegistrationSubmit();
			}			
		}
	});

	$('#divRegistration').find('input').keypress(function(e) {
		if ((e.which && e.which == 13) || (e.keyCode && e.keyCode == 13)) {
			divRegistrationSubmit();
		}
	});
	
	function divRegistrationSubmit() {
		$.post(  
			$("#form_SN").val() + "index.php?event=executeRegistration",  
			$("#formRegistration").serialize(),  
			function(data){
		   	  if (data.validationResult) {
		   		  	removeFieldsHighlight(formRegistrationFields);
		   		  	removeFieldsContent(formRegistrationFields);
		   		  	$('#divRegistrationConfirm').dialog('open');
		   		  	$("#divRegistration").dialog("close");
				} else {
					removeFieldsHighlight(formRegistrationFields);
					updateTips(data.errorMessage);
					$("#" + data.fieldName + "").addClass('ui-state-error');
				}  
		  	},  
		  	"json"  
		  );
	}
	// Registration Form End -->
	
	$("a", ".search").click(function() {
		if($('#searchKey').val() == "") {
			alert("Skriv inn søkeordet");
			return false; 	
		}
		$("#searchForm").submit();
		return false;
	});
	
	// Registration Form Confirm Starts -->
	$('#divRegistrationConfirm').dialog('destroy');
	$('#divRegistrationConfirm').dialog({
		autoOpen: false,
		height: 220,
		width: 350,
		modal: true,
		resizable: false,
		buttons: {
			"Lukk": function() { 
				$(this).dialog("close"); 
			} 
		}
	});
	// Registration Form Confirm Ends -->
	
	// Contact Form Starts -->
	var formContactFields = $([]).add($("#formContactName")).add($("#formContactEmail")).add($("#formContactMessage"));
	$('#divContact').dialog('destroy');
	$('#divContact').dialog({
		autoOpen: false,
		height: 400,
		width: 350,
		modal: true,
		resizable: false,
		open: function(event, ui) {
			$('#selectedRowId').val();
		},
		buttons: {
			"Avbryt": function() {
				removeFieldsHighlight(formContactFields);
				removeFieldsContent(formContactFields);
				$("#divContact").dialog("close");				
			},
			"Send": function() {
				divContactSubmit();
			}			
		}
	});
	
	$('#divContact').find('input').keypress(function(e) {
		if ((e.which && e.which == 13) || (e.keyCode && e.keyCode == 13)) {
			divContactSubmit();
		}
	});
	
	function divContactSubmit() {
		$.post(  
			$("#form_SN").val() + "index.php?event=executeContact",  
			$("#formContact").serialize(),  
			function(data){
		   	  if (data.validationResult) {
		   		  	removeFieldsHighlight(formContactFields);
		   		  	removeFieldsContent(formContactFields);
		   		  	$('#divContactConfirm').dialog('open');
					$("#divContact").dialog("close");
				} else {
					removeFieldsHighlight(formContactFields);
					updateTips(data.errorMessage);
					$("#" + data.fieldName + "").addClass('ui-state-error');
				}  
		  	},  
		  	"json"  
		  );
	}
	
	// Contact Form Ends -->
	
	// Contact Form Confirm Starts -->
	$('#divContactConfirm').dialog('destroy');
	$('#divContactConfirm').dialog({
		autoOpen: false,
		height: 180,
		width: 350,
		modal: true,
		resizable: false,
		buttons: {
			"Lukk": function() { 
				$(this).dialog("close"); 
			} 
		}
	});
	// Contact Form Confirm Ends -->
	
	// ForgotPassword Form Starts -->
	var formForgotPasswordFields = $([]).add($("#formForgotPasswordEmail"));
	$('#divForgotPassword').dialog('destroy');
	$('#divForgotPassword').dialog({
		autoOpen: false,
		height: 200,
		width: 350,
		modal: true,
		resizable: false,
		open: function(event, ui) {
			$('#selectedRowId').val();
		},
		buttons: {
			"Avbryt": function() {
				removeFieldsHighlight(formForgotPasswordFields);
				removeFieldsContent(formForgotPasswordFields);
				$("#divForgotPassword").dialog("close");				
			},
			"Send passord": function() {
				divForgotPasswordSubmit();
			}			
		}
	});

	$('#divForgotPassword').find('input').keypress(function(e) {
		if ((e.which && e.which == 13) || (e.keyCode && e.keyCode == 13)) {
			divForgotPasswordSubmit();
		}
	});
	
	function divForgotPasswordSubmit() {
		$.post(  
			$("#form_SN").val() + "index.php?event=executeForgotPassword",  
			$("#formForgotPassword").serialize(),  
			function(data){
		   	  if (data.validationResult) {
		   		  	removeFieldsHighlight(formForgotPasswordFields);
		   		  	removeFieldsContent(formForgotPasswordFields);
		   		  	$("#divForgotPassword").dialog("close");
		   		    $('#divForgotPasswordConfirm').dialog('open');
				} else {
					removeFieldsHighlight(formForgotPasswordFields);
					updateTips(data.errorMessage);
					$("#" + data.fieldName + "").addClass('ui-state-error');
				}  
		  	},  
		  	"json"  
		  );
	}
	// ForgotPassword Form End -->
	
	// ForgotPassword Confirm Starts -->
	$('#divForgotPasswordConfirm').dialog('destroy');
	$('#divForgotPasswordConfirm').dialog({
		autoOpen: false,
		height: 180,
		width: 350,
		modal: true,
		resizable: false,
		buttons: {
			"Lukk": function() { 
				$(this).dialog("close"); 
			} 
		}
	});
	// ForgotPassword Form Confirm Ends -->
	
	
	// radio - only to replace image
	$(".customerType input:radio").click(function() {
		var customerType = $('input[name=customerType]:checked').val();
		if(customerType == "Company") {
			$(".shoppingCartButtonCheckout img").attr("src", $("#form_SN").val() + "images/checkout_company.png");
		} else {
			$(".shoppingCartButtonCheckout img").attr("src", $("#form_SN").val() + "images/checkout.png");
			
		}
	});
	
	
	// radio
	$(".deliveryType input:radio").click(function() {
		var shipPrice = $("#shipPrice").html();
		var cartWeightTotal = $("#cartWeightTotal").val();
		var customerType = $('input[name=customerType]:checked').val();
		var deliveryType = $('input[name=deliveryType]:checked').val();
		var cartTotal = $("#cartTotal").html();
		var finalPrice = "";
		
		if(deliveryType == "Post") {
			// if we come from Appointment then we need to set ship price again base on cartWeightTotal.
			if(cartWeightTotal >= 0 && cartWeightTotal < 999) {
				shipPrice = "80.00";
			} else if (cartWeightTotal >= 1000 && cartWeightTotal < 1999) {
				shipPrice = "110.00";
			} else if (cartWeightTotal >= 2000 && cartWeightTotal < 9599) {
				shipPrice = "150.00";
			} else if (cartWeightTotal >= 9600 && cartWeightTotal < 24999) {
				shipPrice = "260.00";
			} else if (cartWeightTotal >= 25000 && cartWeightTotal < 35000) {
				shipPrice = "370.00";
			}
			finalPrice = parseFloat(cartTotal) + parseFloat(shipPrice);	
		} else {
			finalPrice = parseFloat(cartTotal);
			shipPrice = 0;
		}
		
		$("#shipPrice").html(shipPrice);
		$("#finalPrice").html(to2DecWithComma(finalPrice));
		
		saveShoppingCartState(shipPrice, customerType, deliveryType, "");
	});
		
}); 

function to2DecWithComma(num) {
	num="" + Math.floor(num*100.0 + 0.5)/100.0;
	
	var i=num.indexOf(".");
	
	if ( i<0 ) num+=".00";
	else {
	num=num.substring(0,i) + "." + num.substring(i + 1);
	i=(num.length - i) - 1;
	if ( i==0 ) num+="00";
	else if ( i==1 ) num+="0";
	else if ( i>2 ) num=num.substring(0,i + 3);
	}

	return num;
}

function doClear(theText) {
     if (theText.value == theText.defaultValue) {
         theText.value = "";
     }
 }
 
function submitToUrl(url) {
	var shipPrice = $("#shipPrice").html();
	var customerType = $('input[name=customerType]:checked').val();
	var deliveryType = $('input[name=deliveryType]:checked').val();
	
	saveShoppingCartState(shipPrice, customerType, deliveryType, url);	
}

function saveShoppingCartState(shipPrice, customerType, deliveryType, url) {
	$.ajax({
	   type: "POST",
	   url: $("#form_SN").val() + "index.php?event=saveShoppingCartState",
	   data: "shipPrice=" + shipPrice + "&customerType=" + customerType + "&deliveryType=" + deliveryType,
	   success: function(msg){
	   		if (url != "") {
	   			document.f1.action = url;
				document.f1.target='_self';
				document.f1.submit();			
	   		}
	   }
	 });
}

function disableEnterKey(e)
{
	 var key;     
     if(window.event)
          key = window.event.keyCode; //IE
     else
          key = e.which; //firefox     
     
     return (key != 13);
}

function save_box_submit() {
	var email = document.getElementById('email').value;
	if(email == ''){
		alert('Epost er et obligatorisk felt.');
	} else {
		document.getElementById('formNewsletter').submit();
	}
}