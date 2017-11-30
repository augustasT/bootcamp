<div class="heavy-lifting">
    <div class="img-box">
        <?php if($left_image = get_field('tree__heavy_lifting_left_image')): ?>
            <img src="<?php echo $left_image; ?>" />
        <?php endif; ?>
    </div>    
    <div class="text-box">
        <div class="text-box-content">
            <?php if($right_content = get_field('tree_heavy_lifting_right_content')): ?>
                <?php echo $right_content; ?>
            <?php endif; ?>
        </div>
    </div>
</div>