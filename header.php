<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    
    <!-- Header Start -->
    <header class="site-header">
        <div class="container">
            <div class="header-top">
                <div class="logo">
                    <a href="<?php echo esc_url(home_url('/')); ?>">
                        <h1>UniXHub</h1>
                        <p class="tagline">Campus & City Buy–Sell Marketplace</p>
                    </a>
                </div>
                
                <!-- Language Switcher -->
                <div class="language-switcher">
                    <?php 
                    if(function_exists('pll_the_languages')) {
                        $languages = pll_the_languages(array(
                            'show_flags' => 1,
                            'show_names' => 1,
                            'hide_if_empty' => 0,
                            'hide_if_no_translation' => 0,
                            'hide_current' => 0,
                            'raw' => 1
                        ));
                        
                        echo '<div class="btn-group">';
                        foreach($languages as $lang) {
                            $active_class = $lang['current_lang'] ? ' active' : '';
                            echo '<a href="' . $lang['url'] . '" class="btn btn-sm btn-outline-secondary' . $active_class . '">';
                            if($lang['slug'] == 'bn') {
                                echo '<span class="flag-icon">🇧🇩</span> ';
                            } else {
                                echo '<span class="flag-icon">🇺🇸</span> ';
                            }
                            echo $lang['name'] . '</a>';
                        }
                        echo '</div>';
                    }
                    ?>
                </div>
            </div>
            
            <!-- Navigation Menu -->
            <nav class="navbar navbar-expand-lg navbar-light">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainMenu">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="mainMenu">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'container' => false,
                        'menu_class' => 'navbar-nav me-auto',
                        'fallback_cb' => '__return_false',
                        'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                        'depth' => 2,
                        'walker' => new Bootstrap_NavWalker()
                    ));
                    ?>
                    
                    <!-- Sell Button -->
                    <a href="<?php echo esc_url(home_url('/sell-your-product')); ?>" class="btn btn-danger sell-btn">
                        <i class="fas fa-plus-circle"></i> Sell Your Product
                    </a>
                </div>
            </nav>
        </div>
    </header>
    <!-- Header End -->
    
    <main class="site-content">