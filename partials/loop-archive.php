
<div class="large-9 medium-9 small-12 columns">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


	<article id="post-<?php the_ID(); ?>" class="columns" role="article">


		<div class="large-12 medium-12 small-12 columns">
		<header class="article-header">
			<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
			</h2>
		</header> <!-- end article header -->
						
		<section class="entry-content" itemprop="articleBody">
            <?php
            $content = get_the_content();
    $trimmed_content = wp_trim_words( $content, 40, '...' );
            echo $trimmed_content;
?>
            <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">View Article</a>
		</section> <!-- end article section -->
		</div>
        <div class="large-12 medium-12 small-12 columns">
        <?php $firstImage = get_field('first_image');
        if( !empty($firstImage) ): ?>
        <img src="<?php echo $firstImage['url']; ?>"/>
        <?php endif; ?>

        </div>
	</article> <!-- end article -->

<?php endwhile; ?>	
					
<?php joints_page_navi(); ?>

<?php else : ?>

<?php endif; ?>
</div>
<div class="large-3 medium-3 small-12 columns">
<?php get_sidebar(); ?>
</div>
