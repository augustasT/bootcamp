<div class="container-fluid counter-section" id="counter"">
	<div class="container row mx-auto text-center" >
		<div class="counter-projects counter col-12 col-sm-4 " data-number = "<?php echo get_field('illdy_counter_1_number');?>">
			<div id="number-roll-projects" class="col-12"></div>					
			<div class="counter-name col-12"><?php echo get_field('illdy_counter_1_name'); ?></div>
		</div>
		<div class="counter-clients counter col-12 col-sm-4 " data-number = "<?php echo get_field('illdy_counter_2_number');?>">
			<div id="number-roll-clients" class="col-12"></div>
			<div class="counter-name col-12"><?php echo get_field('illdy_counter_2_name'); ?></div>
		</div>
		<div class="counter-coffees counter col-12 col-sm-4 " data-number = "<?php echo get_field('illdy_counter_3_number');?>">
			<div id="number-roll-coffees" class="col-12"></div>
			<div class="counter-name col-12"><?php echo get_field('illdy_counter_3_name'); ?></div>
		</div>
	</div>		
</div>