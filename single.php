<?php get_header(); ?>
			
			<div id="content">

				<div id="inner-content" class="row">
			
					<div id="main" class="large-12 medium-12 columns first" role="main">
					
					    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<?php if( get_field('publication') ):
                    get_template_part( 'partials/loop', 'single-publication' ); else :
                    get_template_part( 'partials/loop', 'single' );
                    endif; ?>

					    <?php endwhile; else : ?>
					
					   		<?php get_template_part( 'partials/content', 'missing' ); ?>

					    <?php endif; ?>


			
					</div> <!-- end #main -->


                    <div class="small-12 columns"><?php comments_template(); ?></div>

				</div> <!-- end #inner-content -->


    
			</div> <!-- end #content -->

<?php get_footer(); ?>
