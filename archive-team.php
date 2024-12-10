<!-- archive-team.php -->
<?php get_header(); ?>
 <!-- team members grid -->
 <section>
        <div class="container mx-auto my-6">
        
            <div class="grid gap-8 mb-6 lg:mb-16 grid-cols-1 lg:grid-cols-2">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>    
                <!-- team card (repeats) -->
                <div class="items-center bg-white rounded-lg shadow sm:flex">
                    <a href="<?php the_permalink(); ?>">
                    <img class="block sm:hidden rounded-lg sm:rounded-none sm:rounded-l-lg" src="<?php the_post_thumbnail_url("small"); ?>" alt="<?php the_title(); ?>" />
                        <img class="hidden md:block xl:hidden rounded-lg sm:rounded-none sm:rounded-l-lg" src="<?php the_post_thumbnail_url("small"); ?>" alt="<?php the_title(); ?>" />
                        <img class="hidden xl:block rounded-lg sm:rounded-none sm:rounded-l-lg" src="<?php the_post_thumbnail_url("medium"); ?>" alt="<?php the_title(); ?>" />
                    </a>
                    <div class="p-5">
                        <h3 class="text-2xl tracking-tight text-blackish">
                            <a href="<?php get_the_permalink(); ?>"><?php the_title(); ?></a>
                        </h3>
                        <span class="text-gray-500"><?php the_field('job'); ?></span>
                        <p class="mt-1 mb-4"><?php the_field('card_blurb'); ?></p>
                        <p class="inline-block p-2 bg-forest text-offwhite shadow rounded-lg"><a href="<?php the_permalink(); ?>">Learn More</a></p>
                    </div>
                </div>
            <?php endwhile; endif; ?>
            </div>  
        </div>
    </section>
    <!-- /team members grid -->
    <p>Viewport Size: 
    <span class="block sm:hidden">XS</span>
    <span class="hidden sm:block md:hidden">SM</span>
    <span class="hidden md:block lg:hidden">MD</span>
    <span class="hidden lg:block xl:hidden">LG</span>
    <span class="hidden xl:block 2xl:hidden">XL</span>
    <span class="hidden 2xl:block">2XL or bigger</span>
</p>
<?php get_footer(); ?>