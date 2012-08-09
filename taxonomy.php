<?php
if (get_queried_object()->taxonomy == 'ps_category')
{
	global $paginationBase,$maxPageNum,$query_string, $wp_query;
	parse_str($query_string, $queryParams);

	$queryParams['paged'] = max(1, @$_REQUEST['page']);
	query_posts($queryParams);

	$paginationBase = get_term_link(get_queried_object());
	$maxPageNum = $wp_query->max_num_pages;

	get_template_part('gdeslon_archive');
}
else
{
	get_template_part('index');
}
?>