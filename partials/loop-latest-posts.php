<?php
$args = array( 'numberposts' => 1 );
$lastposts = get_posts( $args ); ?>
<div id="latestContainer">
<?php
foreach($lastposts as $post) : setup_postdata($post); ?>
    <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
	<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
    <?php
$feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );

?>
    <p style="background: url('<?php echo $feat_image;?>'); background-size: cover;"><span><?php echo wp_strip_all_tags( get_the_content()); ?></span></p>


<?php endforeach; ?>
</div>
