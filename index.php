<!DOCTYPE html>
<?php
/*~ index.php
.---------------------------------------------------------------------------.
|  Software: CONTACT FORM SMTP                                              |
|   Version: 1                                                              |
|   Contact: dragosboroianu.com											    |
|      Demo: https://demo-contact-form-smtp.dragosboroianu.com/			    |
|   Support: https://dragosboroianu.com/                                    |
| ------------------------------------------------------------------------- |
*/
session_start();
?>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>Simple PHP SMTP Contact Form</title>
		<meta name="description" content="Simple PHP SMTP Contact Form">
		<meta name="author" content="Dragos Boroianu">
		<meta name="viewport" content="width=device-width; initial-scale=1.0">
		<link href='http://fonts.googleapis.com/css?family=Raleway:500' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
		<script type="text/javascript" src="js/jquery-1.3.1.min.js"></script>
			<script type="text/javascript"> 
			function gostergizle()
			{
			$("div#container").show(100); 
			}
			function sendmessage(){ 
			var veriler = $('#contact_form').serialize(); 
			$.ajax({ 
			type: "POST", 
			url: "inc/send.php", 
			data: veriler, 
			success:function(cevap){ 
			$("#send").html(""+cevap); 
			$("div#container").hide(100); 
			} 
			})}; 
			function formReset(id) {
			$('#'+id).each(function(){
			this.reset();
			});
			}
			function kontrolet(){
        var name=$('#name').val();
			name=jQuery.trim(name);
		var email=$('#email').val();
			email=jQuery.trim(email);
		var mess=$('#text').val();
			mess=jQuery.trim(mess);
		var tel=$('#phone').val();
			tel=jQuery.trim(tel);
        var guvenlikKodu=$('#guvenlikKodu').val();
			guvenlikKodu=jQuery.trim(guvenlikKodu);        
        
			if(name==''){
			alert("Please check your name");
			} 	
			else if(email==''){
				alert("Please check your E-Mail");
				}
            else if (tel==''){
				alert("Please check your Phone");
				}
            else if (guvenlikKodu==''){
				alert("Security code is empty!");
				}
            else if(mess==''){
				alert("Please check your Message");
				}

			else { sendmessage() } 
				}
</script>
</head>

<body>
<br>
<br>
<br>
		
				
		<!-- Form -->
    <?php include "menu.php"; ?>		
		<div id="container">
			<h2>Demo SMTP Contact Form</h2>
	<form class="form" id="contact_form" name="contact_form" method="post" action="javascript:void(0);">
		<p class="name">
			<input type="text" name="name" id="name" placeholder="Ex: John Doe"  required/>
			<label for="name">Your complete name<font color="red">*</font></label>
		</p>
		<p class="email">
			<input type="text" name="email" id="email" placeholder="Ex: mail@google.com" required />
			<label for="email">E-mail<font color="red">*</font></label>
		</p>
		<p class="phone">
			<input type="text" name="phone" id="phone" placeholder="Ex: +123123123123"  required/>
			<label for="phone">Phone number<font color="red">*</font></label>
		</p>
		<p class="web">
			<input type="text" name="web" id="web" placeholder="Ex: dragosboroianu.com" />
			<label for="web">Website</label>
		</p>
		<p class="sec">
		<select  name="subject">
		  <option value="General">General</option>
		  <option value="product">Product Questions</option>
		  <option value="new">New Opportunities</option>
		  <option value="other">Other</option>
		</select>
		<label>What would you like to discuss?</label>
		</p>  	
    <input type="text" name="guvenlikKodu" id="guvenlikKodu" required />
    <label for="guvenlikKodu"></label>
 <img src="inc/captcha.php" />
		<p class="text">
			<textarea id="text" name="text" id="text"placeholder="Your Complete Message*"  required/></textarea>
		</p>
	
		<p class="submit">
			<input type="submit" onclick="kontrolet()" value="Send" />
			<input type="reset" value="Reset" />
		</p>
	</form>
	
	</div>
		
	<div style="margin-top: 50px" id="send"></div>
	
	
	
	<!-- Form -->
		
		
    <?php include "footer.php"; ?>
	</body>
</html>
