<?php
global $paginationBase;
global $maxPageNum;
global $nextLabel;
global $prevLabel;
global $hidePagination;
global $currentPage;
$paginationBase = $paginationBase.(strpos($paginationBase,'?') !== FALSE ? '&' : '?').'page=%#%';
$params = array(
	'base'		=> $paginationBase,
	'current'	=> $currentPage ? $currentPage : max(1, @$_REQUEST['page']),
	'total'		=> $maxPageNum,
	'prev_text'	=> $prevLabel ? $prevLabel : 'Предыдущая',
	'next_text'	=> $nextLabel ? $nextLabel : 'Следующая',
);
if ($maxPageNum > 1):?>
<div class="pagination" <?php echo $hidePagination ? 'style="display:none"' : ''?>>
	<?php
	echo paginate_links($params);
	?>
</div>
<?php endif?>