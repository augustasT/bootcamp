<div class="container-fluid news-section">
		<div class="container ">
			<div class="text-center">
				<div class="section-name text-white">Latest News</div>
				<div class="description">
					If you are interested in the latest articles in the industry, take a sneak peek at our blog. You have nothing to loose!
				</div>
				<div>
					<a href="#"><button class="btn blog-button"><i class="fa fa-chevron-circle-right blog-icon"></i> See Blog</button></a>
				</div>
			</div>

			<div class="cards row">
			<?php 
				$temp = $wp_query; $wp_query= null;
				$wp_query = new WP_Query(); 
				$wp_query->query('posts_per_page=3' . '&paged='.$paged);
				while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

								

			
				<div class="col-12 col-sm-6 col-md-4">
					<div class="card">
					
					  	<img title="card-img-top" alt="thumb image" class="wp-post-image" 
             src="<?=wp_get_attachment_url( get_post_thumbnail_id() ); ?>" style="width:100%; height:auto;">		  	
					  	
					 	<div class="card-body">
					   		<h4 class="card-title">
					   			<a href="#">
					   				<?php the_title(); ?>
					   			</a>
					   		</h4>
					    	<p class="card-text text-left">
					    		<?php echo get_the_excerpt(); ?>
					    	</p>
					    	<a href="#" class="card-btn">
					    		<i class="fa fa-chevron-circle-right card-icon"></i> Read more
					    	</a>
					  	</div>
					</div>
				</div>

				
				
					<?php endwhile; ?>
				<?php wp_reset_postdata(); wp_reset_query();?>

			</div>

		</div>
		

		
				

				

	</div>