<div id="second-section" class="container">
		<div class="about-section-header col-11 mx-auto justify-content-md-center">
			<h3 class="section-name col-12 text-center">About</h3>	
			<?php if($about_description = get_field('illdy_about_description')):?>		
				<p class="description col-11 description-about"><?php echo $about_description; ?></p>
			<?php endif; ?>
		</div>


		
	<div class="skills row mx-auto">

		<?php if(have_rows('illdy_about_progress_bars')): ?>	
			<?php while(have_rows('illdy_about_progress_bars')): the_row();?>
				<?php 
					$name = get_sub_field('illdy_about_progressbars_name');
					$percentage = get_sub_field('illdy_about_progressbars_percentage');					
					$color = get_sub_field('lldy_about_progressbars_color');
					$icon = get_sub_field('illdy_about_progressbars_font_awesome_icon');
					
				?>
			
				<div class="col-md-4 col-11" data-name = "<?php echo $name; ?>" data-color = "<?php echo $color; ?>" data-icon = "<?php echo $icon; ?>" data-percentage = "<?php echo $percentage; ?>">				
					<div class="grey-line" >
						<div class="colored-line"></div>
						<div class="param">
							<div class="bubble"></div>
							<div class="percentage">
								<div class="percent"><?php echo $percentage; ?>%</div>
								<div class="triangle"></div>
							</div>
						</div>
						
					</div>	
					
					<div class="skill-name row no-gutters">
						<i class="fa fa-<?php echo $icon; ?> skill-symbol col-1"></i>
						<p class="skill col"><?php echo $name; ?></p>
					</div>
				</div>
			<?php endwhile; reset_rows();?>
		<?php endif; ?>			
		

	</div>
	
			<!-- <div id="typography" class="col-md-4 col-11 " >
				
				<div class="grey-line" >
					<div class="colored-line colored-line-typography "></div>
					<div class="param-typography">
						<div class="bubble bubble-typography "></div>
						<div class="percentage typography-percentage">
							<div class="percent typography-percent">60%</div>
							<div class="triangle typography-triangle"></div>
						</div>
					</div>
				</div>	
				
				<div class="skill-name skill-typography row no-gutters">
					<i class="fa fa-font skill-symbol col-1"></i>
					<p class="skill col">Typography</p>
				</div>
			</div>
 -->

			<!-- <div id="design" class="col-md-4 col-11 " >				
				<div class="grey-line">					
					<div class="colored-line colored-line-design"></div>
					<div class="param-design">
						<div class="bubble bubble-design"></div>
						<div class="percentage design-percentage">
							<div class="percent design-percent">82%</div>
							<div class="triangle design-triangle"></div>
						</div>
					</div>
				</div>				
				<div class="skill-name skill-design row no-gutters">
					<i class="fa fa-pencil skill-symbol col-1"></i>
					<p class="skill col">Design</p>
				</div>
			</div>


			<div id="development" class="col-md-4 col-11">				
				<div class="grey-line">
					<div class="colored-line colored-line-development"></div>
					<div class="param-development">
						<div class="bubble bubble-development"></div>
						<div class="percentage development-percentage">
							<div class="percent development-percent">86%</div>
							<div class="triangle development-triangle"></div>
						</div>
					</div>
				</div>				
				
				<div class="skill-name skill-development row no-gutters">
					<i class="fa fa-code skill-symbol col-1"></i>
					<p class="skill col">Development</p>
				</div>
				
			</div> -->


		
</div>