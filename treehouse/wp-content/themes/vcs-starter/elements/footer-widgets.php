<div class="footer-widgets">
    <div class="footer-widgets-container">
        <div class="footer-widget-1">
            <?php if ($contact_us_title = get_field('tree_contact_us_title')): ?>
                <h4><?php echo $contact_us_title; ?></h4>
            <?php endif; ?>
            <?php if(have_rows('tree_contact_info')): ?>
                <ul>
                    <?php while (have_rows('tree_contact_info')): the_row();
                        $contact_icon = get_sub_field('tree_contact_icon');
                        $contact_link = get_sub_field('tree_contact_link');
                    ?>
                    <li><img src="<?php echo $contact_icon; ?>"><?php echo $contact_link; ?></li>
                    <?php endwhile; reset_rows(); ?>
                </ul>
            <?php endif; ?>           
        </div>
        <div class="footer-widget-2">
            <?php if ($fb_feed_title = get_field('tree_facebook_feed_title')): ?>
                <h4><?php echo $fb_feed_title; ?></h4>
            <?php endif; ?>
            <?php if ($fb_feed = get_field('tree_facebook_feed')): ?>
                <?php echo $fb_feed; ?>
            <?php endif; ?>         
        </div>
        <div class="footer-widget-3">
            <?php if ($twitter_feed_title = get_field('tree_twitter_feed_title')): ?>
                <h4><?php echo $twitter_feed_title; ?></h4>
            <?php endif; ?>
            <?php if ($twitter_feed = get_field('tree_twitter_feed')): ?>
                <?php echo $twitter_feed; ?>
            <?php endif; ?>
        </div>
    </div>
</div>