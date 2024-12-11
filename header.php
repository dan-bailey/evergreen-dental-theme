<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <title><?php get_bloginfo('name'); ?></title>
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
    <!-- Flowbite -->
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
    <!-- necessary javascript -->
    <script src="<?php bloginfo('template_url'); ?>/assets/js/menu.js"></script>
    
    <!-- Google Web Fonts: Raleway & Cabin -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cabin&family=Raleway&display=swap" rel="stylesheet">
    

    <!-- WPHEAD --> 
    <?php wp_head(); ?>
    <!-- /WPHEAD -->
    
    <!-- Force Swiper.js for Gutslider -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
     
    <!-- all the metas -->
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
<body>
<header class="m-0 p-0">
        <nav class="bg-forest text-offwhite px-4 lg:px-6 py-2.5 mt-0">
            <div class="container flex flex-wrap justify-between items-center mx-auto">
                <!-- logo -->
                <a href="/" class="hidden md:block flex items-center">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/tooth_white_full.svg" class="mr-3 h-6 sm:h-9" alt="Evergreen Dental Full Logo" />
                </a>
                <a href="/" class="block md:hidden flex items-center">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/tooth_white.svg" class="mr-3 h-6 sm:h-9" alt="Evergreen Dental Icon Logo" />
                </a>
                <!-- /logo -->
                <!-- navbutton -->
                <div class="block lg:hidden flex items-center lg:order-2">
                    <button data-collapse-toggle="mobile-menu-2" type="button" class="inline-flex items-center p-2 ml-1 text-sm text-offwhite rounded-lg lg-hidden" aria-controls="mobile-menu-2" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                    <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                </div>
                <!-- /navbutton -->
                <div class="hidden justify-between items-center w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">
                    <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 space-y-4 md:space-y-0 lg:mt-0 items-center">
                    <li>
                        <a href="/appointments" class="top-level-menu">Appointments</a>
                    </li>
                    <li>
                        <button type="button" id="dropdown-button1" data-dropdown-toggle="dropdown1" class="flex justify-between items-center py-2 pr-4 pl-3 w-full top-level-menu">New Patients <svg class="ml-1 w-5 h-5 lg:w-4 lg:h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg></button>
                        <div id="dropdown1" class="hidden z-10 bg-white rounded divide-y divide-gray-100 shadow">
                            <ul class="py-1 text-sm font-light text-blackish" aria-labelledby="dropdown-button1">
                              <li>
                                <a href="/forms" class="flex items-center py-2 px-4 w-full hover:text-primary-600">Forms</a>
                              </li>
                              <li>
                                <a href="/insurance" class="flex items-center py-2 px-4 w-full hover:text-primary-600">Insurance</a>
                              </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <button type="button" id="dropdown-button2" data-dropdown-toggle="dropdown2" class="flex justify-between items-center py-2 pr-4 pl-3 w-full top-level-menu">About Us <svg class="ml-1 w-5 h-5 lg:w-4 lg:h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg></button>
                        <div id="dropdown2" class="hidden z-10 bg-white rounded divide-y divide-gray-100 shadow">
                            <ul class="py-1 text-sm font-light text-gray-500" aria-labelledby="dropdown-button">
                              <li>
                                <a href="/office" class="flex items-center py-2 px-4 w-full hover:text-primary-600">Office</a>
                              </li>
                              <li>
                                <a href="/team" class="flex items-center py-2 px-4 w-full hover:text-primary-600">Our Team</a>
                              </li>
                              <li>
                                <a href="/services" class="flex items-center py-2 px-4 w-full hover:text-primary-600">Services</a>
                              </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="https://pay.balancecollect.com/m/evergreendentalmn" class="pay-button">Make Payment</a>
                    </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
<main>
<!-- contact banner -->
<div class="w-full bg-mint m-none">
            <div class="container mx-auto">
                <div class="py-2.5 flex flex-row justify-between text-md font-raleway text-forest">
                    <p class="inline-block px-2.5 sm:px-none"><b>Phone:</b> 952-937-7677</p>
                    <p class="inline-block hidden md:block"><b>Fax:</b> 952-937-0232</p>
                    <p class="inline-block px-2.5 sm:px-none"><a class="underline" href="mailto:smile@evergreendentalmn.com">smile@evergreendentalmn.com</a></p>
                </div>
            </div>
        </div>
    
