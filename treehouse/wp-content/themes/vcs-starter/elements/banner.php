<?php if($banner = get_field('tree_banner_content')): ?>
<div class="banner">
    <div class="overlay">
        <div class="banner-text">
       		<?php echo $banner; ?>
        </div>
    </div>
</div>
<?php endif; ?>