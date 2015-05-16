<?php
$args = array( 'numberposts' => 1 );
$lastposts = get_posts( $args ); ?>
<div id="latestContainer">
<?php
foreach($lastposts as $post) : setup_postdata($post); ?>
	<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
	<p><?php the_post_thumbnail();?></p>


<?php endforeach; ?>
</div>
