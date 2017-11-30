<header>

    <nav>
        <?php if ($logo = get_field('tree_ms_logo', 'option')): ?>
            <div class="logo">
            <a href="<?php bloginfo('wpurl'); ?>"><img src="<?php echo $logo; ?>" alt="Treehouse
            Logo"></a>
            </div>
        <?php endif; ?>

        <div class="menu">
           <?php wp_nav_menu(array ( 'menu' => 'primary-navigation', 'theme_location' => 'primary-navigation' )); ?>
        </div>
    </nav>
</header>
<main>