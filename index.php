<?php include_once('header.php'); ?>
<?php
if ($lines = @file('CURRENT'))
{
	$version = $lines[0];
	$codename = $lines[1];
}
$file_tar_gz = "kalkun_".$version.".tar.gz";
$file_tar_bz2 = "kalkun_".$version.".tar.bz2";
$file_zip = "kalkun_".$version.".zip";
$url_path = "http://sourceforge.net/projects/kalkun/files/kalkun/".$version."/";
$url_path_tar_gz = $url_path.$file_tar_gz."/download";
$url_path_tar_bz2 = $url_path.$file_tar_bz2."/download";
$url_path_tar_zip = $url_path.$file_zip."/download";
$file_path = "/home/frs/project/k/ka/kalkun/kalkun/".$version."/";
$size_tar_gz = /*filesize($file_path.$file_tar_gz);*/ '922.9KB';
$size_tar_bz2 = /*filesize($file_path.$file_tar_bz2);*/ '852.3KB';
$size_tar_zip = /*filesize($file_path.$file_zip);*/ '1.2MB';
?>
<div id="wrap">
	<div id="shadow"></div>
	<div id="content">
		<div id="testimonial" style="padding: 3px;"><i>&#34;I think Kalkun is great because it is easy to configure, easy to customize, easy to use, and any target hardware used.&#34;</i>&nbsp;(<b>Simon Nandor</b> - <a href="http://www.simonszoft.hu/">Software Engineer</a>).
		</div>

		<div id="main">
		<a href="screenshot.php" title="More Screenshots"><img id="screen" src="media/images/scr.png" /></a>
		
		<div id="news">
		<h3>News</h3>
		<iframe src="http://managesms.net/back2arie/remote_feed.php" frameborder="0" scrolling="no" height="650" width="100%">
			<p>Your browser does not support iframes.</p>
		</iframe>
		<p><a href="http://azhari.harahap.us/tag/kalkun/">See all posts</a></p>
		</div>
		
		</div>
	
		<div id="sidebar">			
			<h3>Manage your SMS easily</h3>
			<p>Kalkun is open source web-based SMS (Short Message Service) management, it use gammu-smsd (part of gammu family) as SMS gateway engine to deliver and retrieve messages from your phone/modem. <br /><a href="about.php">Learn more about Kalkun...</a></p>
			
			<div id="dl-button">
				Download Version <?php echo $version;?> (<?php echo $codename;?>)<br />
				<a title="<?php echo $file_tar_gz;?> (<?php echo $size_tar_gz;?>)" href="<?php echo $url_path_tar_gz;?>"><small>tar.gz</small></a> | 
				<a title="<?php echo $file_tar_bz2;?> (<?php echo $size_tar_bz2;?>)" href="<?php echo $url_path_tar_bz2;?>"><small>tar.bz2</small></a> | 
				<a title="<?php echo $file_zip;?> (<?php echo $size_tar_zip;?>)" href="<?php echo $url_path_tar_zip;?>"><small>zip</small></a>
			</div>
			<div><a href="http://github.com/back2arie/Kalkun/wiki/Changelog">Changelog</a></div>
			<div>&nbsp;</div>
			
			<div>
			<strong>Features</strong>
			<ul>
			<li>Multiple database backend</li>
			<li>Multiuser</li>
			<li>Conversation</li>
			<li>Flash SMS</li>
			<li>Custom folder management</li>
			<li>Phonebook management</li>
			<li>SMS bomber</li>
			<li>SMS advertisement</li>
			<li>SMS content/member</li>
			<li>Simple Auto Reply</li>
			<li>Unicode support</li>
			</ul>
			<a href="about.php">Complete features list...</a>
			</div>
			
			<div>&nbsp;</div>
			<div>
			<iframe src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fpages%2FKalkun%2F136612446404796&amp;width=240&amp;colorscheme=light&amp;show_faces=true&amp;stream=true&amp;header=true&amp;height=427" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:240px; height:427px;" allowTransparency="true"></iframe>		
			</div>			
		</div>
		<div style="clear: both">&nbsp;</div>
	</div>
	
</div>

<?php include_once('footer.php'); ?>