<div class="social-icon-bar">
    <?php
        wp_nav_menu( array(
            'menu'           => 'Social Bookmarks', // Do not fall back to first non-empty menu.
            'theme_location' => '__no_such_location',
            'fallback_cb'    => false, // Do not fall back to wp_page_menu()
            'container'      => false,
        ) );
    ?>
</div>