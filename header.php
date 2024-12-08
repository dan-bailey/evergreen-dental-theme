<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <title><?php wp_title(''); ?></title>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
        $a = get_field( 'favicon', 'options' );
    ?>
    <link rel="shortcut icon" href="<?php echo get_field('favicon', 'options'); ?>" type="image/x-icon" />

    <!-- Canonical URL -->
    <?php 
        if (get_field('canonical_tag')) {
            echo '<link rel="canonical" href="' . get_field('canonical_tag') . '">';
        } else {
            echo '<link rel="canonical" href="' . get_permalink() . '">';
        }
    ?>

    <!-- CSS Compiled from Tailwind -->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/style.css">
    <!-- necessary javascript -->
    <script src="<?php bloginfo('template_url'); ?>/assets/js/menu.js"></script>
    
    <!-- Google Web Fonts: Raleway & Cabin -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cabin&family=Raleway&display=swap" rel="stylesheet">
    
    <!-- WPHEAD --> 
    <?php wp_head(); ?>
    <!-- /WPHEAD -->
     
    <!-- all the metas -->
    <?php 
        if (get_field('social_image')) {
            $img = get_field('social_image');
        } else {
            $img = get_the_post_thumbnail( get_the_ID(), 'large' );
        }
    ?>
    <meta name="description" content="<?php echo get_field('meta_description'); ?>" />
    <meta name="keywords" content="<?php echo get_field('meta_keywords'); ?>" />
    <meta name="author" content="<?php echo get_the_author_meta('display_name'); ?>" />
    <meta name="robots" content="index, follow" />
    <meta name="revisit-after" content="10 days" />
    <meta name="language" content="English" />
    <meta name="distribution" content="global" />
    <meta property="og:title" content="<?php echo get_field('social_title'); ?>" />
    <meta property="og:url" content="<?php echo get_permalink(); ?>" />
    <meta property="og:image" content="<?php echo get_field('social_image'); ?>" />
    <meta name="twitter:title" content="<?php echo get_field('social_title'); ?>" />
    <meta name="twitter:description" content="<?php echo get_field('social_description'); ?>" />
    <meta name="twitter:image" content="<?php echo get_field('social_image'); ?>" />
    <meta name="twitter:card" content="summary_large_image" />

</head>
<body class="bg-offwhite font-raleway">

<nav class="bg-forest text-offwhite">
        <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
            <div class="relative flex items-center justify-between h-16">
                <div class="absolute inset-y-0 right-0 flex items-center">
                    <!-- Mobile menu button -->
                    <button id="mobile-menu-button" class="inline-flex items-center justify-center p-2 rounded-md text-offwhite hover:text-offwhite hover:bg-mint focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                        </svg>
                        <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <div class="flex-1 flex items-center justify-between">
                    <!-- logo space -->
                    <div class="flex-shrink-0">
                        <a href="/"><img src="<?php bloginfo('template_url'); ?>/assets/img/tooth_white_full.svg" alt="" class="block h-12 pl-1"></a>
                    </div>
                    <!-- /logo space -->
                </div>
            </div>
        </div>
        <div class="hidden mx-auto w-full h-screen p-12 flex flex-col space-y-4 items-center justify-center w-max h-max bg-forest z-50" id="mobile-menu">
            <a href="team.html" class="block p-4 rounded-lg font-6xl text-offwhite hover:bg-mint hover:text-blackish">Our Team</a>
            <a href="services.html" class="block p-4 rounded-lg font-6xl text-offwhite hover:bg-mint hover:text-blackish">Services</a>
            <a href="office.html" class="block p-4 rounded-lg font-6xl text-offwhite hover:bg-mint hover:text-blackish">Office</a>
            <a href="patients.html" class="block p-4 rounded-lg font-6xl text-offwhite hover:bg-mint hover:text-blackish">New Patients</a>
            <a href="appointment.html" class="block p-4 rounded-lg font-6xl text-offwhite hover:bg-mint hover:text-blackish">Appointments</a>
            <a href="https://pay.balancecollect.com/m/evergreendentalmn" class="block p-4 rounded-lg font-6xl text-blackish bg-skyblue hover:bg-mint">Make a Payment</a>
    </div>
    </nav>
    <main>

    
    <div class="w-full">