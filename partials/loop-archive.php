
<div class="large-9 medium-12 small-12 columns">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


	<article id="post-<?php the_ID(); ?>" class="columns" role="article">

    <div class="large-3 medium-3 small-12 columns">
        <?php if ( has_post_thumbnail() ) {
        the_post_thumbnail();
        } else { ?>
        <img src="<?php echo get_template_directory_uri(); ?>/library/images/default_thumb.png" alt="<?php the_title(); ?>" />
        <?php } ?>


        </div>
		<div class="large-9 medium-9 small-12 columns">
		<header class="article-header">
			<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
			</h2>
		</header> <!-- end article header -->
						
		<section class="entry-content" itemprop="articleBody">
            <?php
            $content = get_the_content();
    $trimmed_content = wp_trim_words( $content, 40, null );
            echo $trimmed_content;
?>
		</section> <!-- end article section -->
		</div>
	</article> <!-- end article -->

<?php endwhile; ?>	
					
<?php joints_page_navi(); ?>

<?php else : ?>

<?php endif; ?>
</div>
<div class="large-3 show-for-large-only columns">
<?php get_sidebar(); ?>
</div>
