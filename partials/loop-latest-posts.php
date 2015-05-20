<?php
$args = array( 'numberposts' => 1,
             'post__in'  => get_option( 'sticky_posts' ),
	         'ignore_sticky_posts' => 1
             );
$lastposts = get_posts( $args ); ?>
<div id="latestContainer">
<?php
foreach($lastposts as $post) : setup_postdata($post); ?>
    <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
    $title = get_the_title();
    $trimmed_title = wp_trim_words( $title, 8, '...' );
    ?>
	<h4><a href="<?php the_permalink(); ?>"><?php echo $trimmed_title; ?></a></h4>
    <?php
    $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );

?>
    <p style="background: url('<?php if ($feat_image) {
        echo $feat_image;
    } else {
        echo get_template_directory_uri() . '/library/images/amsterdam_low.jpg';
    }
?>'); background-size: cover;"><span><?php
    $content = get_the_content();
    $trimmed_content = wp_trim_words( $content, 20, null );

echo $trimmed_content; ?></span></p>


<?php endforeach; ?>
</div>
