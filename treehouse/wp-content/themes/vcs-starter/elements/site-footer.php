</main>
 <footer>
    <div class="footer-content">
        <div class="copyright">
            <p>&copy; Copyright 2017 FreebiesXpress.com</p>
        </div>
        <div class="social-icons">
            
            <?php if(have_rows('tree_ms_social_media', 'option')): ?>
                <ul>
                    <?php while(have_rows('tree_ms_social_media', 'option')): the_row();
                    $social_url = get_sub_field('tree_ms_sm_link', 'option');
                    $social_icon = get_sub_field('tree_ms_sm_icon', 'option');
                    ?>
                    <li><a href="<?php echo $social_url; ?>" target="_blank"><img src="<?php echo $social_icon;?>"></a></li>
                <?php endwhile; reset_rows(); ?>
                </ul>
            <?php endif; ?>           
        </div>
    </div>

</footer>