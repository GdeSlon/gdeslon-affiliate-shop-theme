<?php
global $query_string;
parse_str($query_string, $queryParams);
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
get_template_part('gdeslon_archive')
?>