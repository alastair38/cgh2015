
<?php
$page = get_page_by_title( 'About' );
$content = $page->post_content;
$trimmed_content = wp_trim_words( $content, 20, null );
$featured_image = wp_get_attachment_url( get_post_thumbnail_id($page->ID) );
?>
<div id="featuredPage">

	<h4><a href="<?php echo get_the_permalink($page->ID); ?>">What is Critical Global Health?</a></h4>
    <p style="background: url('<?php echo $featured_image;?>'); background-size: cover;"><span><?php echo $trimmed_content; ?></span></p>



</div>

