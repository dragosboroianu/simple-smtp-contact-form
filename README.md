# PHP/HTML/CSS/JS/SMTP Contact Form 
Most of the websites have a contact form. However, many of them are sending the contact messages using the mail(); function, and that is not reliable anymore. When you send email using plain mail(); the message is sent without autenthications and directly from the server IP address, because of this, the chances to be considered SPAM are quite big.
Sending the messages using SMTP should be mandatory nowadays. SMTP is part of the application layer of the TCP/IP protocol. Using a process called "store and forward," SMTP moves your email on and across networks. It works closely with something called the Mail Transfer Agent (MTA) to send your communication to the right computer and email inbox.

SMTP provides a set of codes that simplify the communication of email messages between email servers (the network computer that handles email coming to you and going out). It's a kind of shorthand that allows a server to break up different parts of a message into categories the other server can understand. When you send a message out, it's turned into strings of text that are separated by the code words (or numbers) that identify the purpose of each section

Anyway, sending with SMTP and autenthications, you are actually sending the messages using an existing e-mail address - this way you have more chances to see the contact messages in your inbox without beeing filtered/blocked/rejected by the email services providers. I'm in the web hosting industry for 10+ years, and I'm surprised to see "developers" that don't know how to switch from mail(); to SMTP. So, the purpose is to offer them a little help in this matter with this SMTP contact form example. Feel free to download it and use it. Cheers!

- Easy integration/instructions into your current PHP site
- Progressively enhanced (fully functional without JS or CSS)
- Field type validation
- Required field validation
- Repeat submission prevention
- No database required
- Mobile Friendly
- No Refresh Page and save your bandwith

Server & Browser Support

- PHP5+
- IE10+
- Latest Chrome,Firefox,Safari
