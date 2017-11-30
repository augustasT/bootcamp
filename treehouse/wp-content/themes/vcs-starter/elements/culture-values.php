<div class="culture-values">

    <?php if($culture_values_title = get_field('tree_culture_values_title')): ?>
        <h2><?php echo $culture_values_title; ?></h2>
    <?php endif; ?>

    <?php if($culture_values_subtitle = get_field('tree_culture_value_subtitle')): ?>
        <h3><?php echo $culture_values_subtitle; ?></h3>
    <?php endif; ?>
<div class="culture-blurbs">
    <?php if($culture_values_content = get_field('culture_values_content')): ?> 
        <?php echo $culture_values_content; ?>
    <?php endif; ?>
</div>
</div>