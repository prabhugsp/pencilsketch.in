$(function() {
	$('.error').hide();
	
	$('.submit-button').click(function() {
		$('.error').hide();
		
		var name = $('input#name').val();
		if(name == "") {
			$('label#name_error').show();
			$('input#name').focus();
			return false;
		}
		
		var email = $('input#email').val();
		if(email == "") {
			$('label#email_error').show();
			$('input#email').focus();
			return false;
		}
		
		var message = $('textarea#message').val();
		if(message == "") {
			$('label#message_error').show();
			$('textarea#message').focus();
			return false;
		}
		
		var userimage = $('input#uploaded_file').val();
		if(userimage == "") {
			$('label#uploaded_file_error').show();
			return false;
		}
		
		var mobile = $('input#mobile').val();
		
		
		var dataString = 'name='+ name + '&email=' + email + '&mobile=' + mobile + '&message=' + message + '&userimage' + userimage;
		  //alert (dataString);return false;
		  
		  $.ajax({
			type: "POST",
			url: "sendmail.php",
			data: dataString,
			success: function() {
			  $('#orderForm').html("<div id='message'></div>");
			  $('#message').html("<h2>Order Submitted!</h2>")
			  .append("<p>We will be in touch soon.</p>")
			  .hide()
			  .fadeIn(1500, function() {
				$('#message').append("<img id='checkmark' src='images/success.png' />");
				$('#orderForm').focus();
			  });
			}
		  });
		  return false;
	
	});
});