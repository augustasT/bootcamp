<div class="jumbotron" >
		<div class="container header">
			<nav class="navbar  navbar-light no-gutters d-flex justify-content-between">
				<div class="col-4 ">
					<!-- CUSTOM LOGO -->
					<?php if ($logo = get_field('illdy_ms_logo', 'option')): ?>
						<a href="<?php bloginfo('wpurl'); ?>" class="navbar-brand col-sm-4 col-xs-8 d-flex justify-content-between">
							 <img src="<?php echo $logo; ?>" alt="illdy logo" class="logo"> 
						</a>
					<?php endif; ?>
				</div>
				<button class='navbar-toggle'><i class="fa fa-bars text-right"></i></button>
				<!-- DESKTOP NAVBARAS -->
				 <?php wp_nav_menu(array ( 'menu' => 'primary-navigation', 'theme_location' => 'primary-navigation', 'container_class'=>'col-0 col-lg-7 ml-auto', 'menu_class' =>'menu-expanded row d-flex justify-content-between')); ?>				
			</nav> 				
		</div>	  
		
		<!-- MOBILE NAVBARAS -->
		<?php wp_nav_menu(array ( 'menu' => 'primary-navigation', 'theme_location' => 'primary-navigation', 'container_class'=>'container-fluid menu', 'menu_class' =>'navbar-nav  menu text-center' )); ?>

	

		<div id="greeting">
			<div class="justify-content-center">
				<div class="col-12">
					<h1>Clean<span class="yellow-dot">.</span>Slick<span class="yellow-dot">.</span>Pixel Perfect</h1>
				</div>
				<div >
					<p id="slogan" class="col-sm-12 col-md-9" >lldy is a great one-page theme, perfect for developers and designers but also for someone who just wants a new website for his business. Try it now!</p>			
					<button id="learn-more" class="button mx-auto  text-center main-buttons">Learn more</button>
					
					<button id="download" class="button mx-auto  text-center main-buttons">Download</button>				
				</div>
			</div>
		</div>
</div>
<!-- HEADER END -->