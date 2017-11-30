 <div class="professional-services">
    <?php if($services_title = get_field('tree_services_service_section_title')): ?>
        <h2><?php echo $services_title; ?></h2>
    <?php endif; ?>
    <?php if($services_subtitle = get_field('tree_services_service_section_subtitle')): ?>
        <h3><?php echo $services_subtitle; ?></h3>
    <?php endif; ?>

    <div class="services-blurbs">
        <?php if(have_rows('tree_services_service_information')): ?>
            <ul>
                <?php while(have_rows('tree_services_service_information')): the_row();
                    $service_icon = get_sub_field('tree_services_service_icon');
                    $service_title = get_sub_field('tree_services_service_title');
                    $service_desc = get_sub_field('tree_services_service_description');
                    ?>
                    <li><img src="<?php echo $service_icon?>" <br><h4><?php echo $service_title; ?></h4><br><?php echo $service_desc; ?></li>
                <?php endwhile; reset_rows()?>
            </ul>
        <?php endif; ?>
    </div>
</div>