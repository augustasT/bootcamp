<div class="container-fluid testimonials-section">		
		<div class="container-fluid testimonials">
			<?php if($title = get_field('illdy_testimonials_title')): ?>
				<div class="section-name text-white text-center "><?php echo $title; ?></div>
			<?php endif; ?>

			<?php if(have_rows('illdy_testimonials_content')): ?>
				<div class="row d-flex justify-content-center">
					<div class="col-12 col-md-9  carousel">
						<div class="owl-carousel owl-theme text-white">

							<?php while(have_rows('illdy_testimonials_content')): the_row();?>
								<?php 
									$name = get_sub_field('illdy_testimonials_name');
									$text = get_sub_field('illdy_testimonials_text');
									$photo = get_sub_field('illdy_testimonials_photo');
								?>
							    <div class="item">	
								    <div class="row">
								    	<img class="d-block testimonials-photo " src="<?php echo $photo; ?>" alt="First slide">
								  	</div>
								    <div class="quote d-flex justify-content-center">
								    	<q class="text-center"><?php echo $text; ?></q>
								    	<div class="arrow"></div>
								    </div>								    
								    <h6 class="text-center"><?php echo $name; ?></h6>
							    </div>
							<?php endwhile; reset_rows();?>

						</div>
					</div>		
				</div>	
			<?php endif; ?>			
		</div>
	</div>