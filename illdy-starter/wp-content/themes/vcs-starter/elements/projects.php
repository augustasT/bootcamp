<div class="container-fluid projects-section">
		
			<div class="projects-section-header justify-content-md-center">
				<?php if($title = get_field('illdy_projects_title')):?>
					<div class="section-name text-center"><?php echo $title; ?></div>
				<?php endif; ?>
				<?php if($subtitle = get_field('illdy_projects_subtitle')):?>
					<div class="description text-center">
						<?php echo $subtitle; ?>
					</div>
				<?php endif; ?>
			</div>
			
			<?php if(have_rows('illdy_projects_photos')): ?>
				
					<div class="projects row">
						<?php while(have_rows('illdy_projects_photos')): the_row(); ?>
						<?php $img = get_sub_field('illdy_projects_photo'); ?>
						<div class="project col-6 col-md-3 ">
							<a href="#">
								<img class="project-photo" src="<?php echo $img; ?>"></a>
						</div>
				<?php endwhile; reset_rows();?>

					</div>
			<?php endif; ?>
			
		
	</div>