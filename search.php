<?php
global $paginationBase,$maxPageNum,$query_string, $wp_query;
parse_str($query_string, $queryParams);

$queryParams['paged'] = max(1, @$_REQUEST['page']);
query_posts($queryParams);

$paginationBase = site_url().'?s='.get_search_query();
$maxPageNum = $wp_query->max_num_pages;

get_template_part('gdeslon_archive')
?>