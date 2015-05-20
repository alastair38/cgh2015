<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="row">

				    <div id="main" class="large-12 medium-12 columns first" role="main">


						    <h1 class="page-title">
							    <?php single_cat_title(); ?>
					    	</h1>

					    	<!-- To see additional archive styles, visit the /partials directory -->
					    	<?php get_template_part( 'partials/loop', 'publications' ); ?>



    				</div> <!-- end #main -->

	    			<?php get_sidebar(); ?>

                </div> <!-- end #inner-content -->

			</div> <!-- end #content -->

<?php get_footer(); ?>
