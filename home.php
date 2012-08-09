<?php
global $query_string, $wp_query;
parse_str($query_string, $queryParams);
$queryParams['paged'] = max(1, @$_REQUEST['page']);
$queryParams['post_type'] = array('ps_catalog');
$queryParams['meta_query'] = array(
	array(
		'key'     => 'show-on-main',
		'value'   => 1,
		'compare' => '=',
		'type'    => 'NUMERIC'
	)
);
query_posts($queryParams);
if (!have_posts())
{
	unset($queryParams['meta_query']);
	query_posts($queryParams);
}
global $paginationBase,$maxPageNum;
$paginationBase = site_url();
$maxPageNum = $wp_query->max_num_pages;

get_template_part('gdeslon_archive')
?>