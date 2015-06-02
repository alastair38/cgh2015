<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
						
	<header class="article-header">	
		<h1 class="entry-title single-title" itemprop="headline"><?php the_title(); ?>
        <?php if( get_field('sub_headline') ): ?>
        <span><?php echo wp_kses (get_field('sub_headline'), array('br' => array(),'em' => array(),'strong' => array())); ?></span>
        <?php endif; ?>
        </h1>

    </header> <!-- end article header -->
					
    <section class="entry-content large-9 medium-9 small-12 columns" itemprop="articleBody">
        <?php if( get_field('publication') ): ?>
        <p><?php echo wp_kses (get_field('publication'), array('br' => array(),'em' => array(),'strong' => array())); ?></p>
        <?php endif; ?>
        <?php if( get_field('document') ): ?>
        <p id="download" aria-hidden="true">Download the publication <a href="<?php the_field( 'document' ); ?>" target="_blank" title="Download <?php the_title(); ?>" aria-label="Download <?php the_title(); ?>"><i class="fi-download"></i></a></p>
                <?php endif; ?>

		<div id="articleContent"><?php the_content(); ?></div>
	</section> <!-- end article section -->
						
	<footer class="article-footer">
		<p class="tags"><?php the_tags('<span class="tags-title">' . __('Tags:', 'jointstheme') . '</span> ', ', ', ''); ?></p>	</footer> <!-- end article footer -->

<div id="sidebar1" class="sidebar large-3 medium-3 small-12 columns" role="complementary">
<?php the_post_thumbnail('full'); ?>

    <?php get_template_part( 'partials/content', 'share' ); ?>

<?php get_sidebar(); ?>

</div>
													
</article> <!-- end article -->

