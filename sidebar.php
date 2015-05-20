<div class="large-12 columns">
	<ul id="sidebarLinks">
        <h3>Quick Links</h3>
                <?php
                $args = array(
                  'orderby' => 'name',
                  'order' => 'ASC',
                  'hide_empty' => 0,
                  'parent' => 0
                  );
                $categories = get_categories($args);
                  foreach($categories as $category) {
                    echo '<li><a href="' . get_category_link( $category->term_id ) . '" aria-label="Follow link to view ' . $category->count . ' posts in ' . $category->name . '" title="' . sprintf( __( "View " . $category->count . " post(s) in %s" ), $category->name ) . '" ' . '>' . $category->name .'</a></li>';
                    }
                ?>

                </ul>
</div>
