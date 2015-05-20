
<!-- This is the nav that will show for mobile/small devices -->
<div class="large-12 columns">
	<div class="fixed contain-to-grid">
		<nav class="tab-bar" data-options="scrolltop:false; is_hover: true" role="navigation" data-tabbar>
			<section class="middle tab-bar-section">
				 <h3 class="site-title" tabindex="-1"><a href="<?php echo home_url(); ?>" rel="nofollow"><?php bloginfo('name'); ?></a></h3>
                 <span class="show-for-medium-up"><?php joints_top_nav(); ?></span>
			</section>
			<section class="left-small">
				<a href="#navigation" class="left-off-canvas-toggle menu-icon" aria-label="navigation menu" ><span></span></a>
			</section>
		</nav>
	</div>
</div>
						
<aside class="left-off-canvas-menu" role="navigation" id="navigation">
	<ul class="off-canvas-list">
		<li><label>Menu</label></li>
			<?php joints_main_nav(); ?>    
	</ul>
</aside>
			
<a href="#exit" class="exit-off-canvas"><span>Press to Exit Menu</span></a>
