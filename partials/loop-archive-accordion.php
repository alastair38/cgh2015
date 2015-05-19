 <?php $query = new WP_Query( 'cat=10' ); ?>
<h3 class="page-title">Books <?php echo $query->post_count;?></h3>
<ul class="accordion" data-accordion role="tablist">
 <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

 <li class="accordion-navigation">
            <a href="#panel<?php the_ID(); ?>" title="<?php the_title_attribute(); ?>"> <h4> <?php the_title(); ?></h4><span class="fi-plus"></span></a>
            <div class="content" id="panel<?php the_ID(); ?>">
                Details: <?php the_content(); ?>
                <?php if( get_field('publisher') ): ?>
                <p>Publisher: <?php echo esc_html (get_field('publisher')); ?></p>
                <?php endif; ?>

                <?php if( get_field('publication_date') ): ?>
                <p>Publication Date: <?php echo esc_html (get_field('publication_date')); ?></p>
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

<?php $query = new WP_Query( 'cat=11' ); ?>
<h3 class="page-title">Papers <?php echo $query->post_count;?></h3>
<ul class="accordion" data-accordion role="tablist">
 <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

 <li class="accordion-navigation">
            <a href="#panel<?php the_ID(); ?>" title="<?php the_title_attribute(); ?>"> <h4> <?php the_title(); ?></h4><span class="fi-plus"></span></a>
            <div class="content" id="panel<?php the_ID(); ?>">
                Details: <?php the_content(); ?>
                <?php if( get_field('publisher') ): ?>
                <p>Publisher: <?php echo esc_html (get_field('publisher')); ?></p>
                <?php endif; ?>

                <?php if( get_field('publication_date') ): ?>
                <p>Publication Date: <?php echo esc_html (get_field('publication_date')); ?></p>
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



<?php joints_page_navi(); ?>
