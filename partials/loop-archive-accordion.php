<div class="large-9 columns">
<?php $query = new WP_Query( 'category_name=books' ); ?>
<h3 class="sub-title">Books</h3>
<ul class="accordion" data-accordion role="tablist">
 <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

 <li class="accordion-navigation">
            <a href="#panel<?php the_ID(); ?>" title="<?php the_title_attribute(); ?>"> <h4> <?php the_title(); ?></h4><span class="fi-plus"></span></a>
            <div class="content" id="panel<?php the_ID(); ?>">
                <p><span>Details:</span>
                <?php $content = get_the_content();
                echo wp_kses($content, null); ?>
                </p>

                <?php if( get_field('publisher') ): ?>
                <p><span>Publisher:</span><?php echo esc_html (get_field('publisher')); ?></p>
                <?php endif; ?>

                <?php if( get_field('publication_date') ): ?>
                <p><span>Publication Date:</span> <?php echo esc_html (get_field('publication_date')); ?></p>
                <?php endif; ?>

                <?php if( get_field('document') ): ?>
                <p aria-hidden="true">Download the publication: <a href="<?php the_field( 'document' ); ?>" target="_blank" title="Download <?php the_title(); ?>" aria-label="Download <?php the_title(); ?>">
				<i class="fi-download"></i></a></p>
                <?php endif; ?>

            <div> <!-- end article section -->
</li>

 <?php endwhile;?>
</ul>
 <?php wp_reset_postdata();
 else : ?>

 <?php endif; ?>

<?php $query = new WP_Query( 'category_name=papers' ); ?>
<h3 class="sub-title">Papers</h3>
<ul class="accordion" data-accordion role="tablist">
 <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

 <li class="accordion-navigation">
            <a href="#panel<?php the_ID(); ?>" title="<?php the_title_attribute(); ?>"> <h4> <?php the_title(); ?></h4><span class="fi-plus"></span></a>
            <div class="content" id="panel<?php the_ID(); ?>">

                <p><span>Details:</span>
                <?php $content = get_the_content();
                echo wp_kses($content, null); ?>
                </p>

                <?php if( get_field('publisher') ): ?>
                <p><span>Publisher:</span><?php echo esc_html (get_field('publisher')); ?></p>
                <?php endif; ?>

                <?php if( get_field('publication_date') ): ?>
                <p><span>Publication Date:</span><?php echo esc_html (get_field('publication_date')); ?></p>
                <?php endif; ?>

                <?php if( get_field('document') ): ?>
                <p aria-hidden="true">Download the publication: <a href="<?php the_field( 'document' ); ?>" target="_blank" title="Download <?php the_title(); ?>" aria-label="Download <?php the_title(); ?>">
				<i class="fi-download"></i></a></p>
                <?php endif; ?>

     </div><!-- end content section -->
</li>

 <?php endwhile;?>
</ul>
 <?php wp_reset_postdata();
 else : ?>

 <?php endif; ?>

<?php joints_page_navi(); ?>

</div>
<div class="large-3 show-for-large-only columns">
<?php get_sidebar(); ?>
</div>
