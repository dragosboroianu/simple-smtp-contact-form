<!DOCTYPE html>
<!--
/*~ how.html
.---------------------------------------------------------------------------.
|  Software: CONTACT FORM SMTP                                              |
|   Version: 1                                                              |
|   Contact: dragosboroianu.com											    |
|      Demo: https://demo-contact-form-smtp.dragosboroianu.com/			    |
|   Support: https://dragosboroianu.com/                                    |
| ------------------------------------------------------------------------- |
*/
-->
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
		<script type="text/javascript" src="js/jquery-1.3.1.min.js"></script>

</head>

<body>
<br>
<br>
<br>
    <?php include "menu.php"; ?>
    
		<div id="container2">
			<h2>How to Use?</h2>
			<p>First, include the code your page for SECURITY image</p>
            <textarea readonly>
<?php echo"<?php session_start(); ?>" ?>
			</textarea>
            <p>Include jQuery on your page</p>
            <textarea readonly>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.6.4.min.js"></script>
            </textarea>
			
            <p>This code should be included between <b>HEAD TAG</b> to control by jQuery</p>
            <textarea id="how" readonly>
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
            </textarea>
            
            
            <p>This <b>CONTACT FORM</b> codes in <b>index.php</b>:</p>
            <textarea style="height:425px" readonly>
            <form class="form" id="contact_form" name="contact_form" method="post" action="javascript:void(0);">
		<p class="name">
			<input type="text" name="name" id="name" placeholder="Your Name*"  required/>
			<label for="name">Name Surname<font color="red">*</font></label>
		</p>
		<p class="email">
			<input type="email" name="email" id="email" placeholder="mail@example.com*" required />
			<label for="email">Email<font color="red">*</font></label>
		</p>
		<p class="phone">
			<input type="tel" name="phone" id="phone" placeholder="+00123456789*"  required/>
			<label for="phone">Phone<font color="red">*</font></label>
		</p>
		<p class="web">
			<input type="url" name="web" id="web" placeholder="www.example.com" />
			<label for="web">Website</label>
		</p>
		<p class="sec">
		<select  name="subject">
		  <option value="General">General</option>
		  <option value="product">Product Support</option>
		  <option value="new">New Business</option>
		  <option value="other">Other</option>
		</select>
		<label>Contact Reason</label>
		</p>  	
    <input type="text" name="guvenlikKodu" id="guvenlikKodu" required />
    <label for="guvenlikKodu"></label>
 <img src="inc/captcha.php" />
		<p class="text">
			<textarea id="text" name="text" id="text"placeholder="Your Message*"  required/><textarea>
		</p>
	
		<p class="submit">
			<input type="submit" onclick="kontrolet()" value="Send" />
			<input type="reset" value="Reset" />
		</p>
	</form>
	
	</div>
		
	<div style="margin-top: 80px" id="send"></div>
            </textarea>
            
            
	<p> Values you have to change as per your server in <b>inc/send.php</b></p>
            <textarea style="height:110px" readonly>
$mail->Host     = "mail.your-domain.com"; // SMTP servers
$mail->SMTPAuth = true;     // turn on SMTP authentication
$mail->Username = "email@your-domain.com";  // SMTP username
$mail->Password = "email-password"; // SMTP password
$mail->From     = "email@your-domain.com"; // it must be a match with SMTP username
$mail->Fromname = "Your Name"; // from name
$mail->AddAddress("email@your-domain.com","Your Name"); // SMTP username , Name Surname
            </textarea>
	</div>

			</div>
		
    <?php include "footer.php"; ?>

	</body>
</html>
