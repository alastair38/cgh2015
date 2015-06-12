<?php
/*
Template Name: Links (No Sidebar)
*/
?>

<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="row">

				    <div id="main" class="large-12 medium-12 columns" role="main">

						<?php get_template_part( 'partials/loop', 'page' ); ?>


                        <ul class="large-9 medium-9 columns xoxo blogroll">
                        <?php wp_list_bookmarks('categorize=0&link_after=<i class="fi-bookmark"></i>&title_li=&category_before=&category_after=&show_images=1&show_description=1'); ?>
					   </ul>

                        <div class="large-3 medium-3 show-for-medium-up columns">
<?php get_sidebar(); ?>
</div>

    				</div> <!-- end #main -->

				</div> <!-- end #inner-content -->

			</div> <!-- end #content -->


<?php get_footer(); ?>
