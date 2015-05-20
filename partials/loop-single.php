<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
						
	<header class="article-header">	
		<h1 class="entry-title single-title" itemprop="headline"><?php the_title(); ?></h1>
		<?php get_template_part( 'partials/content', 'byline' ); ?>
    </header> <!-- end article header -->
					
    <section class="entry-content large-9 columns" itemprop="articleBody">

		<?php the_content(); ?>
	</section> <!-- end article section -->
						
	<footer class="article-footer">
		<p class="tags"><?php the_tags('<span class="tags-title">' . __('Tags:', 'jointstheme') . '</span> ', ', ', ''); ?></p>	</footer> <!-- end article footer -->

<div id="sidebar1" class="sidebar large-3 medium-3 columns" role="complementary">
<?php the_post_thumbnail('full'); ?>

<?php if( get_field('document') ): ?>
                <p aria-hidden="true">Download the publication: <a href="<?php the_field( 'document' ); ?>" target="_blank" title="Download <?php the_title(); ?>" aria-label="Download <?php the_title(); ?>">
				<i class="fi-download"></i></a></p>
                <?php endif; ?>
<?php get_sidebar(); ?>

</div>
													
</article> <!-- end article -->

