<?php
/*
Template Name: About (No Sidebar)
*/
?>

<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="row">

				    <div id="main" class="large-12 medium-12 columns" role="main">

						<?php get_template_part( 'partials/loop', 'page' ); ?>

                        <hr>

                        <div class="large-3 medium-3 small-12 columns" id="profilePicture">
                        <?php

                        $image = get_field('profile_picture');

                        if( !empty($image) ): ?>

                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

                        <?php endif; ?>
                        </div>
                        <div class="large-9 medium-9 small-12 columns" id="contactDetails">
                        <?php if( get_field('name') ): ?>
                        <h3><?php the_field('name'); ?></h3>
                        <?php endif; ?>
                        <ul>
                         <li><?php if( get_field('email') ): ?>
                         Email: <a href="mailto:<?php the_field('email'); ?>"><i class="fi-mail"></i></a>
                        <?php endif; ?>
                        </li>
                         <li><?php if( get_field('phone_number') ): ?>
                        Phone: <?php the_field('phone_number'); ?>
                        <?php endif; ?>
                        </li>
                        </ul>
                        </div>
                         <p id="cv" class="large-12 medium-12 columns"><?php if( get_field('cv') ): ?>
                        <?php the_field('cv'); ?>
                        <?php endif; ?>
                        </p>

    				</div> <!-- end #main -->

				</div> <!-- end #inner-content -->

			</div> <!-- end #content -->


<?php get_footer(); ?>
