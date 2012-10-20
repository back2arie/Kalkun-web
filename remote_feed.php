<style type="text/css">
body {
	font-family: "lucida grande", Tahoma, Verdana, "BitStream vera Sans";;
	font-size: 12px;
	margin: 0;
	padding: 0;
	line-height: 16px;
	color: #666;	
}

a {
	color: #86C0D2;
	text-decoration: underline;
}

a:hover {
	color: #86C0D2;
	text-decoration: none;	
}

h3 {
	color: #86C0D2;
	font-size: 13px;
	margin: 2px 0;
}

.footnote {
	color: #ccc;
	font-size: 11px;
}

</style>	

<?php
include_once('simplepie.inc');
//include_once('idna_convert.class.php');	
$feed = new SimplePie();
$feed->set_feed_url('http://azhari.harahap.us/tag/kalkun/feed');
$feed->enable_cache(false);
$feed->set_item_limit(2);
$feed->init();
$feed->handle_content_type();
?>

<div id="sp_results">
	<?php if ($feed->data): ?>
		<?php $items = $feed->get_items(0, 2); ?>
		<?php foreach($items as $item): ?>
			<div class="chunk">
				<h3><a target="_blank" href="<?php echo $item->get_permalink(); ?>"><?php echo $item->get_title(); ?></a><br />
				<span class="footnote"><?php echo $item->get_date('j M Y'); ?></span></h3>
				<p><?php echo $item->get_content(); ?></p>
			</div>
		<?php endforeach; ?>
		<?php else: ?>
		<p>Feed failed!.</p>
	<?php endif; ?>
</div>
