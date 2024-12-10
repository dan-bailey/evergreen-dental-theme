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
<body>
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
            <div class="block md:hidden flex items-center lg:order-2">
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
                    <button type="button" id="dropdown-button" data-dropdown-toggle="dropdown" class="flex justify-between items-center py-2 pr-4 pl-3 w-full top-level-menu">New Patients <svg class="ml-1 w-5 h-5 lg:w-4 lg:h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg></button>
                    <div id="dropdown" class="hidden z-10 bg-white rounded divide-y divide-gray-100 shadow">
                        <ul class="py-1 text-sm font-light text-gray-500" aria-labelledby="dropdown-button">
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
                    <button type="button" id="dropdown-button" data-dropdown-toggle="dropdown" class="flex justify-between items-center py-2 pr-4 pl-3 w-full top-level-menu">Company <svg class="ml-1 w-5 h-5 lg:w-4 lg:h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg></button>
                    <div id="dropdown" class="hidden z-10 bg-white rounded divide-y divide-gray-100 shadow">
                        <ul class="py-1 text-sm font-light text-gray-500" aria-labelledby="dropdown-button">
                            <li>
                            <a href="#" class="flex items-center py-2 px-4 w-full hover:text-primary-600"><svg class="mr-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 3a1 1 0 000 2v8a2 2 0 002 2h2.586l-1.293 1.293a1 1 0 101.414 1.414L10 15.414l2.293 2.293a1 1 0 001.414-1.414L12.414 15H15a2 2 0 002-2V5a1 1 0 100-2H3zm11.707 4.707a1 1 0 00-1.414-1.414L10 9.586 8.707 8.293a1 1 0 00-1.414 0l-2 2a1 1 0 101.414 1.414L8 10.414l1.293 1.293a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>Audience</a>
                            </li>
                            <li>
                            <a href="#" class="flex items-center py-2 px-4 w-full hover:text-primary-600"><svg class="mr-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M11 17a1 1 0 001.447.894l4-2A1 1 0 0017 15V9.236a1 1 0 00-1.447-.894l-4 2a1 1 0 00-.553.894V17zM15.211 6.276a1 1 0 000-1.788l-4.764-2.382a1 1 0 00-.894 0L4.789 4.488a1 1 0 000 1.788l4.764 2.382a1 1 0 00.894 0l4.764-2.382zM4.447 8.342A1 1 0 003 9.236V15a1 1 0 00.553.894l4 2A1 1 0 009 17v-5.764a1 1 0 00-.553-.894l-4-2z"></path></svg>Marketing Automation</a>
                            </li>
                            <li>
                            <button id="submenu-dropdown-button" data-dropdown-toggle="submenu-dropdown" data-dropdown-placement="right-end" type="button" class="flex justify-between items-center py-2 px-4 w-full hover:text-primary-600">
                                <span class="flex items-center">
                                    <svg class="mr-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"></path></svg>Creative Tools
                                </span>
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                            </button>
                            <div id="submenu-dropdown" class="hidden z-10 bg-white rounded divide-y divide-gray-100 shadow">
                                <ul class="py-1 text-sm font-light text-gray-500" aria-labelledby="dropdown-button">
                                    <li>
                                    <a href="#" class="flex items-center py-2 px-4 w-full hover:text-primary-600">Marketing CRM</a>
                                    </li>
                                    <li>
                                    <a href="#" class="flex items-center py-2 px-4 w-full hover:text-primary-600">Sign up forms</a>
                                    </li>
                                    <li>
                                    <a href="#" class="flex items-center py-2 px-4 w-full hover:text-primary-600">Segmentation</a>
                                    </li>
                                    <li>
                                    <a href="#" class="flex items-center py-2 px-4 w-full hover:text-primary-600">Dynamic content</a>
                                    </li>
                                    <li>
                                    <a href="#" class="flex items-center py-2 px-4 w-full hover:text-primary-600">A/B Testing</a>
                                    </li>
                                    <li>
                                    <a href="#" class="flex items-center py-2 px-4 w-full hover:text-primary-600">Behavioural targeting</a>
                                    </li>
                                    <li>
                                    <a href="#" class="flex items-center py-2 px-4 w-full hover:text-primary-600">Integrations</a>
                                    </li>
                                </ul>
                            </div>
                            </li>
                            <li>
                            <a href="#" class="flex items-center py-2 px-4 w-full hover:text-primary-600"><svg class="mr-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12 7a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0V8.414l-4.293 4.293a1 1 0 01-1.414 0L8 10.414l-4.293 4.293a1 1 0 01-1.414-1.414l5-5a1 1 0 011.414 0L11 10.586 14.586 7H12z" clip-rule="evenodd"></path></svg>Insights & Analytics</a>
                            </li>
                            <li>
                            <a href="#" class="flex items-center py-2 px-4 w-full hover:text-primary-600"><svg class="mr-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path><path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path></svg>Demographics</a>
                            </li>
                            <li>
                            <a href="#" class="flex items-center py-2 px-4 w-full hover:text-primary-600"><svg class="mr-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path></svg>Contact Profiles</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#" class="top-level-menu">Team</a>
                </li>
                <li>
                    <a href="#" class="top-level-menu">Contact</a>
                </li>
                </ul>
            </div>
        </div>
    </nav>
<main>

    
