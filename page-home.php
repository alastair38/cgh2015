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

                <ul id="categoryList" class="small-block-grid-1 medium-block-grid-2 large-block-grid-5 columns">

                <?php
                $args = array(
                  'orderby' => 'id',
                  'order' => 'ASC',
                  'hide_empty' => 0,
                  'parent' => 0
                  );
                $categories = get_categories($args);
                  foreach($categories as $category) {
                    echo '<li><a href="' . get_category_link( $category->term_id ) . '" aria-label="Follow link to view ' . $category->count . ' posts in ' . $category->name . '" title="' . sprintf( __( "View " . $category->count . " post(s) in %s" ), $category->name ) . '" ' . '>' . $category->name .'</a></li>';
                    }
                ?>

                <?php
                $page = get_page_by_title( 'Links' );
                $title = $page->post_title;
                ?>

                <li><a href="<?php echo get_the_permalink($page->ID); ?>"><?php echo $title;?></a></li>

                </ul>

                <div id="latestPosts" class="large-6 medium-6 small-12 columns">

						<?php get_template_part( 'partials/loop', 'latest-posts' ); ?>

    				</div> <!-- end #main -->

                <div id="latestPosts" class="large-6 medium-6 small-12 columns">

						<?php get_template_part( 'partials/loop', 'featured-page' ); ?>

    				</div> <!-- end #main -->

			</div> <!-- end #content -->


<?php get_footer(); ?>
