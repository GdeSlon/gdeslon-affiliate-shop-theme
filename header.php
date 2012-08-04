<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
		"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">

	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>"/>
	<meta name="distribution" content="global"/>
	<meta name="robots" content="follow, all"/>
	<meta name="language" content="en"/>

	<title><?php wp_title(''); ?><?php if (wp_title('', false)) {
		echo ' :';
	} ?> <?php bloginfo('name'); ?></title>
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>" type="text/css" media="screen"/>
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.png"/>
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed"
		  href="<?php bloginfo('rss2_url'); ?>"/>
	<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed"
		  href="<?php bloginfo('atom_url'); ?>"/>
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>

	<?php
	if (is_singular())
		wp_enqueue_script('comment-reply');
	if (!isset($content_width))
		$content_width = 500;
	?>
	<?php wp_head(); ?>

	<script type="text/javascript"><!--//--><![CDATA[//><!--
	sfHover = function () {
		if (!document.getElementsByTagName) return false;
		var sfEls = document.getElementById("nav").getElementsByTagName("li");
		for (var i = 0; i < sfEls.length; i++) {
			sfEls[i].onmouseover = function () {
				this.className += " sfhover";
			}
			sfEls[i].onmouseout = function () {
				this.className = this.className.replace(new RegExp(" sfhover\\b"), "");
			}
		}
	}
	if (window.attachEvent) window.attachEvent("onload", sfHover);
	//--><!]]></script>
</head>
<body <?php body_class( $class );?>>
<div id="header">
	<div class="headerleft">
		<h1><a href="<?php echo home_url(); ?>/"><?php
			if ($vc_logo):?><img src="<?php echo $vc_logo;?>"/><?php
			else:
			bloginfo('name');
			endif
		?></a></h1>
		<?php if ($vc_desc == "true") {
	} else { ?><p><?php bloginfo('description'); ?></p><?php } ?>
	</div>
	<div class="headerright">
		<ul id="nav">
			<?php wp_nav_menu(array('menu_class' => 'nav', 'sort_column' => 'menu_order',
			'container_class' => 'container', 'menu_id' => 'nav', 'theme_location' => 'custom_menu')); ?>
		</ul>
	</div>
</div>
<div style="clear:both;"></div>
<div id="wrap">
	<?php if ($vc_banner) { ?>
	<div class="splash"><?php if ($vc_link) { ?><a href="<?php echo $vc_link;?>"><?php } ?><img
			src="<?php echo $vc_banner;?>"/><?php if ($vc_link) { ?></a><?php } ?></div><?php } ?>
