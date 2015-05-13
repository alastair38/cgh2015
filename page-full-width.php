<?php
/*
Template Name: Full Width (No Sidebar)
*/
?>

<?php get_header(); ?>
			
			<div id="content">
			
				<div id="inner-content" class="">
			
				    <div id="main" class="large-12 medium-12 columns" role="main">
					
						<?php get_template_part( 'partials/loop', 'home-page' ); ?>
					    					
    				</div> <!-- end #main -->
				    
				</div> <!-- end #inner-content -->

                <ul id="categoryList" class="columns">
                <?php wp_list_categories('title_li=&hide_empty=0'); ?>
                </ul>
			</div> <!-- end #content -->


<?php get_footer(); ?>
