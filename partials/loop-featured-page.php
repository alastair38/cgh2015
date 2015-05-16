
<?php
$page = get_page_by_title( 'About' );
$content = $page->post_content;
$trimmed_content = wp_trim_words( $content, 20, null );
?>
<div id="featuredPage">

	<h4><a href="<?php echo get_the_permalink($page->ID); ?>">What is Critical Global Health?</a></h4>
	<p><?php echo $trimmed_content; ?></p>

</div>

