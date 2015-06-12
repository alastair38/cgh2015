<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="slider" id="frontPagecontent">
      <?php get_template_part( 'partials/loop', 'slider' ); ?>
</div>



	<article id="post-<?php the_ID(); ?>"  class="large-6 medium-8 small-12 columns" role="article" itemscope itemtype="http://schema.org/WebPage">

		<header class="article-header">

			<h1 class=""></h1>
		</header> <!-- end article header -->

	    <section class="entry-content" itemprop="articleBody">
		    <?php the_content(); ?>
		    <?php wp_link_pages(); ?>
		</section> <!-- end article section -->

		<footer class="article-footer">

		</footer> <!-- end article footer -->


	</article> <!-- end article -->

<?php endwhile; endif; ?>
