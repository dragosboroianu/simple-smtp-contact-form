<!DOCTYPE html>
<!--
/*~ about.html
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
			<h2>What is this and why should I need this?</h2>
Most of the websites have a contact form. However, many of them are sending the contact messages using the mail(); function, and that is not reliable anymore. When you send email using plain mail(); the message is sent without autenthications and directly from the server IP address, because of this, the chances to be considered SPAM are quite big. 
<p>
Sending the messages using SMTP should be mandatory nowadays. SMTP is part of the application layer of the TCP/IP protocol. Using a process called "store and forward," SMTP moves your email on and across networks. It works closely with something called the Mail Transfer Agent (MTA) to send your communication to the right computer and email inbox.
<p>
SMTP provides a set of codes that simplify the communication of email messages between email servers (the network computer that handles email coming to you and going out). It's a kind of shorthand that allows a server to break up different parts of a message into categories the other server can understand. When you send a message out, it's turned into strings of text that are separated by the code words (or numbers) that identify the purpose of each section
<p>

Anyway, sending with SMTP and autenthications, you are actually sending the messages using an existing e-mail address - this way you have more chances to see the contact messages in your inbox without beeing filtered/blocked/rejected by the email services providers.

I'm in the web hosting industry for 10+ years, and I'm surprised to see "developers" that don't know how to switch from mail(); to SMTP. So, the purpose is to offer them a little help in this matter with this SMTP contact form example. Feel free to download it and use it. Cheers!
			<p><li>Easy integration/instructions into your current PHP site</li>
<li>Progressively enhanced (fully functional without JS or CSS)</li>
<li>Field type validation</li>
<li>Required field validation</li>
<li>Repeat submission prevention</li>
<li>No database required</li>
<li>Mobile Friendly</li>
<li>No Refresh Page and save your bandwith</li></p>
<p><b>Server & Browser Support</b></p>
<li>PHP5+</li>
	<li>IE10+</li>
		<li>Latest Chrome,Firefox,Safari</li>
			<p></p>
			</div>
		
    <?php include "footer.php"; ?>

	</body>
</html>
