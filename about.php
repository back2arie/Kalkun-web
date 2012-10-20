<?php include_once('header.php'); ?>

<script languange="javascript" src="media/js/jquery-1.3.2.min.js"></script>
<script languange="javascript">
$(document).ready(function(){
	$('a#about').click(function() {
		$('div#section-1').show();
		$('div#section-2').hide();
		$('div#section-3').hide();
		$('div#section-5').hide();
	});
	
	$('a#features').click(function() {
		$('div#section-1').hide();
		$('div#section-2').show();
		$('div#section-3').hide();
		$('div#section-5').hide();
	});	

	$('a#requirement').click(function() {
		$('div#section-1').hide();
		$('div#section-2').hide();
		$('div#section-3').show();
		$('div#section-5').hide();
	});		

	$('a#contact').click(function() {
		$('div#section-1').hide();
		$('div#section-2').hide();
		$('div#section-3').hide();
		$('div#section-5').show();
	});		
	
});
</script>

<div id="wrap">
<div id="shadow"></div>
<div id="content">
<div id="main">

<div id="section-1">
<h3>What is Kalkun?</h3>
<p>Kalkun is open source web-based SMS (<i>Short Message Service</i>) management, 
it use <a href="http://wammu.eu/smsd" target="_blank">gammu-smsd</a> as SMS gateway engine to deliver and retrieve messages from your phone/modem. 
Kalkun and gammu is two different things. you have to install and configure gammu at yourself. 
Kalkun only manage database that given by gammu. Take a look at the architecture :</p><br />
<div id="box_container"><span class="box">Kalkun</span>&nbsp;&#8660;&nbsp;<span class="box">DB Engine</span>&nbsp;&#8660;&nbsp;<span class="box">Gammu-SMSD</span>&nbsp;&#8660;&nbsp<span class="box">Phone/Modem</span></div><br />

<h3>What is the advantages?</h3>
<p>Since it web-based, you just need to put this software on one computer, let say it as your <i>server</i>.
And other computer on your network (or even on the internet, if you need so), just need a browser to use it. Another advantages is you don't need to worry about phone memory capacity, because your message is stored in the database.</p>

<h3>License</h3>
<p>Kalkun is released under <a href="http://www.gnu.org/copyleft/gpl.html" target="_blank">GNU General Public License</a>.
You're free to modify and/or redistribute the source code.</p>
</div>

<div id="section-2" class="hidden">
<h3>Features</h3>
<p>
<ul>
<li>Multiple database backend (Currently support MySQL, PostgreSQL and SQLite3)</li>
<li>Multiuser (each user have it's own inbox, outbox, folder, and phonebook)</li>
<li>Conversation, SMS is grouped by phone number</li>
<li>Manage SMS (Inbox, Outbox, Sent Items)</li>
<li>Sending SMS, by personal or group</li>
<li>Scheduled SMS, by datetime or delay</li>
<li>Manage Phonebook, by personal or group</li>
<li>Create signature on your message</li>
<li>Create and manage private folder</li>
<li>Quick reply, reply, forward message</li>
<li>Flash/Long SMS</li>
<li>Simple Auto Reply</li>
<li>Unicode support</li>
<li>Localization (Currently available on English, Bahasa, Czech, Portuguese, Italian, and Russian Language)</li>
</ul>
</p>

<p>Plugin :
<ul>
<li>Blacklist Number, block message from specific number</li>
<li>Server Alert, alert you whenever your service (eq: Web server, Mail server) is down</li>
<li>SMS Bomber, send bomb/spam message</li>
</ul></p>

<p>Please read <a href="http://github.com/back2arie/Kalkun/wiki/Frequently-Asked-Questions">CHANGELOG</a> for details.<br />
Any ideas to improve this features? feel free to contact us.</p>
</div>

<div id="section-3" class="hidden">
<h3>System Requirement</h3>
<p><b>Server side</b>, is computer where Kalkun placed/installed, you need: <ul>
<li>Web server: Apache 2.x or Lighttpd is recommended</li>
<li>PHP 5.x with: session, database library (depends on database engine you use), hash, json, curl (optional) extension/module enabled</li>
<li>PHP CLI</li>
<li>Database Engine (MySQL 5.x, PostgreSQL or SQLite3)</li>
<li>Gammu-SMSD, part of Gammu family</li>
</ul></p>

<p><b>Client side</b>, you just need a modern and supported web browser with javascript/AJAX and cookies enabled, here's the list:
<ul>
<li>Firefox 3.x or higher</li>
<li>Opera 9.x or higher</li>
<li>Safari 4.x or higher</li>
<li>Google Chrome 10.x or higher</li>
</ul>
<br />
</p>
</div>

<div id="section-5" class="hidden">
<h3>Contact</h3>
<p>
The best way to contact us is by <a href="support.php">mailing lists</a>, but incase you need to contact us personally please use the following contact:
<ul>
<li>Azhari Harahap: azhari&lt;at&gt;harahap.us</li>
<li>Kinshuk Bairagi: kinshuk1989&lt;at&gt;gmail.com</li>
</ul>
</p>
</div>

</div>
	
	<div id="sidebar">
		<div id="about_nav">
		<ul>
		<li><a id="about" href="#about">About Kalkun</a></li>
		<li><a id="features" href="#features">Features</a></li>
		<li><a id="requirement" href="#requirement">System Requirement</a></li>
		<li><a id="contact" href="#contact">Contact</a></li>		
		</ul>
		</div>		
	</div>
	<div style="clear: both">&nbsp;</div>
</div>
</div>

<?php include_once('footer.php'); ?>