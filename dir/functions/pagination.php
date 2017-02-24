<?php
function pagination($pages = '', $range = 2){
	$showitems = ($range * 2)+1;
	global $paged;
	if(empty($paged)) $paged = 1;
	if($pages == ''){
		global $wp_query;
		$pages = $wp_query->max_num_pages;
		if(!$pages) $pages = 1;
	}
	if(1 != $pages){
		echo '<ul class="pagination text-center">';
		if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo '<li class="page-item"><a href="'.get_pagenum_link(1).'" class="page-link">First</a></li>';
		if($paged > 1 && $showitems < $pages) echo '<li class="page-item"><a href="' .get_pagenum_link($paged - 1). '" rel="prev" class="page-link">Previous</a></li>';

		for ($i=1; $i <= $pages; $i++){
			if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems )){
				echo ($paged == $i)? '<li class="page-item active"><a href="#" class="page-link">'. $i .'</a></li>' : '<li><a href="'.get_pagenum_link($i).'" class="page-link">'.$i.'</a></li>';
			}
		}
		if ($paged < $pages && $showitems < $pages) echo '<li class="page-item"><a href="'.get_pagenum_link($paged + 1).'" rel="next" class="page-link">Next</a></li>';
		if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo '<li class="page-item"><a href="'.get_pagenum_link($pages).'" class="page-link">Last</a></li>';
		echo '</ul>';
	}
}
?>