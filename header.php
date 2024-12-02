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
    
    <!-- Flowbite -->
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css">

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

