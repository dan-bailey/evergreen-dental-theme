<!-- single-team.php -->
<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div id="team-member" class="container mx-auto my-6 px-2.5">
    <h2 class="text-4xl text-blackish"><?php the_title(); ?></h2>
    <?php the_content(); ?>
</div>
<?php if ( comments_open() && !post_password_required() ) { comments_template( '', true ); } ?>
<?php endwhile; endif; ?>
<?php get_footer(); ?>