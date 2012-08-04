<!-- begin r_sidebar -->

<div id="sidebar">
	<?php if (function_exists('nzshpcrt_shopping_basket')) { ?>
	<div class="widget">
		<?php echo nzshpcrt_shopping_basket(); ?>
	</div>
	<?php } ?>
	<ul id="sidebarwidgeted">
		<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar')) : ?>





		<li id="text-widget">
			<div class="widget">
				<h2>Text Widget</h2>

				<p>This is an example of a text widget that you can place to describe a particular product or service.
				   Use it as a way to get your visitors interested, so they can click through and read more about
				   it.</p>
			</div>
		</li>

		<li id="recent-posts">
			<div class="widget">
				<h2>Recent Posts</h2>
				<ul>
					<?php wp_get_archives('type=postbypost&limit=5'); ?>
				</ul>
			</div>
		</li>

		<li id="archives">
			<div class="widget">
				<h2>Archives</h2>
				<ul>
					<?php wp_get_archives('type=monthly'); ?>
				</ul>
			</div>
		</li>

		<li id="links">
			<div class="widget">
				<h2>Links</h2>
				<ul>
					<?php wp_list_bookmarks('title_li=&categorize=0'); ?>
				</ul>
			</div>
		</li>

		<li id="meta">
			<div class="widget">
				<h2>Admin</h2>
				<ul>
					<?php wp_register(); ?>
					<li><?php wp_loginout(); ?></li>
					<li><a href="http://www.wordpress.org/">WordPress</a></li>
					<?php wp_meta(); ?>
					<li><a href="http://validator.w3.org/check?uri=referer">XHTML</a></li>
				</ul>
			</div>
		</li>

		<?php endif; ?>
	</ul>

</div>

<!-- end r_sidebar -->