<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=iso-8859-1"/>
<?php 
$url=basename($_SERVER['PHP_SELF'], ".php");
$valid=array("demo", "screenshot", "about", "support", "contribute");
if(in_array($url, $valid)) $title = ucfirst($url);
else $title = "Open Source Web based SMS Management";
?>
<title>Kalkun / <?php echo $title;?></title>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
<link rel="stylesheet" type="text/css" href="media/css/style.css"/>
</head>
<body>

<div id="header-wrap">
	<div id="header">
		<a href="./" title="Home"><img src="media/images/logo.png"></a>
		<div id="menu">
		<a href="demo.php">Demo</a>
		<a href="screenshot.php">Screenshots</a>
		<a href="support.php">Support</a>
		<a href="contribute.php">Contribute</a>
		<a href="about.php">About</a>
		</div>
	</div>
</div>
