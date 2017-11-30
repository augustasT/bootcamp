<div class="container services-section text-center">
  <?php if($title = get_field('illdy_services_title')): ?>
  	<div class="section-name "><?php echo $title; ?></div>
  <?php endif; ?>
  <?php if($subtitle = get_field('illdy_services_subtitle')): ?>
  	<div class="description">
  		<p><?php echo $subtitle; ?></p>
 		</div>
  <?php endif;?>
 
  <?php if(have_rows('illdy_services_service')): ?> 	
    <div class="row services">	
      <?php while(have_rows('illdy_services_service')): the_row(); ?>
        <?php 
          $icon = get_sub_field('illdy_service_logo');
          $service_title = get_sub_field('illdy_service_titile');
          $desc = get_sub_field('illdy_service_description');
          $color = get_sub_field('illdy_service_color');

        ?>
     
  			<div class="services col-12 col-md-4">
  				<p><i class="fa fa-<?php echo $icon; ?> services-icon"style="color: <?php echo $color; ?>" ></i></p>
  				<p class="services-name" style="color: <?php echo $color; ?>"> <?php echo $service_title; ?> </p>
  				<p class="description">
  					<?php echo $desc; ?>
  				</p>
  			</div>

      <?php endwhile; reset_rows(); ?>
    </div>
  <?php endif; ?>
</div>