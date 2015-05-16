<div class="large-12 columns show-for-medium-up">
	<div class="contain-to-grid fixed">
	     <h3 class="site-title"><a href="<?php echo home_url(); ?>" rel="nofollow"><?php bloginfo('name'); ?></a></h3>
		<nav class="top-bar" data-topbar data-options="scrolltop:false; is_hover: true" role="navigation" data-topbar>



			<section class="top-bar-section">

				<?php joints_main_nav(); ?>
			</section>
		</nav>
	</div>
</div>

<!-- This is the nav that will show for mobile/small devices -->
<div class="large-12 columns show-for-small-only">
	<div class="fixed contain-to-grid">
		<nav class="tab-bar">
			<section class="middle tab-bar-section">
				 <h3 class="mobile-title"><a href="<?php echo home_url(); ?>" rel="nofollow"><?php bloginfo('name'); ?></a></h3>
			</section>
			<section class="left-small">
				<a href="#navigation" class="left-off-canvas-toggle menu-icon" aria-label="navigation menu" ><span></span></a>
			</section>
		</nav>
	</div>
</div>
						
<aside class="left-off-canvas-menu show-for-small-only" role="navigation" id="navigation">
	<ul class="off-canvas-list">
		<li><label>Navigation</label></li>
			<?php joints_main_nav(); ?>    
	</ul>
</aside>
			
<a class="exit-off-canvas"></a>
