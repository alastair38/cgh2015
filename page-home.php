<?php
/*
Template Name: Home (No Sidebar)
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

                <?php
                $args = array(
                  'orderby' => 'name',
                  'order' => 'ASC',
                  'hide_empty' => 0
                  );
                $categories = get_categories($args);
                  foreach($categories as $category) {
                    echo '<li class="large-4 medium-4 small-12 columns"><a href="' . get_category_link( $category->term_id ) . '" aria-label="Follow link to view ' . $category->count . ' posts in ' . $category->name . '" title="' . sprintf( __( "View " . $category->count . " post(s) in %s" ), $category->name ) . '" ' . '>' . $category->name .'</a><span>' . $category->count . '</span></li>';
                    }
                ?>

                </ul>

                <div id="latestPosts" class="large-6 medium-6 small-12 columns">

						<?php get_template_part( 'partials/loop', 'latest-posts' ); ?>

    				</div> <!-- end #main -->

                <div id="latestPosts" class="large-6 medium-6 small-12 columns">

						<?php get_template_part( 'partials/loop', 'featured-page' ); ?>

    				</div> <!-- end #main -->

			</div> <!-- end #content -->


<?php get_footer(); ?>
