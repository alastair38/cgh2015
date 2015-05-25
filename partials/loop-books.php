<div id="publications" class="large-9 columns">

 <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <h5><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h5>
    <article>
                <?php if( get_field('publication') ): ?>
                <p><?php echo esc_html (get_field('publication')); ?></p>
                <?php endif; ?>


    </article> <!-- end article section -->


 <?php endwhile;?>

 <?php wp_reset_postdata();
 else : ?>

 <?php endif; ?>



<?php joints_page_navi(); ?>

</div>
<div class="large-3 show-for-large-only columns">
<?php get_sidebar(); ?>
</div>
