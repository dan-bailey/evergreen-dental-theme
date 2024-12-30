<!-- archive-team.php -->
<?php get_header(); ?>
<!-- hero fragment -->
<?php cn_include_content(384) ?>
 <!-- team members grid -->
 <section>
        <div class="container mx-auto my-6">
        
            <div class="grid gap-8 mb-6 lg:mb-16 grid-cols-1 lg:grid-cols-2">

            <?php
            $args = array(
                'post_type' => 'team',
                'posts_per_page' => -1,
                'orderby' => 'menu_order',
                'order' => 'ASC'
            );
            $the_query = new WP_Query ($args); 
            if ( $the_query->have_posts() ) : 
                while ( $the_query->have_posts() ) : 
                    $the_query->the_post(); 
            ?>    
                <!-- team card (repeats) -->
                <div class="items-center bg-white rounded-lg shadow flex mx-2 md:mx-0">
                    <a href="<?php the_permalink(); ?>">
                        <img class="object-contain sm:rounded-none sm:rounded-l-lg" src="<?php the_post_thumbnail_url("medium"); ?>" alt="Bonnie Avatar">
                    </a>
                    <div class="w-1/2 p-5">
                        <h3 class="text-2xl tracking-tight text-forest font-cabin">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h3>
                        <p class="text-blackish text-lg mb-2"><?php the_field('job'); ?></p>
                        <p class="mt-1 mb-4"><?php the_field('card_blurb'); ?></p>
                        <p class="inline-block p-2 bg-forest text-offwhite hover:bg-mint hover:text-blackish shadow rounded-lg"><a href="<?php the_permalink(); ?>">Learn More</a></p>
                    </div>
                </div>
            <?php endwhile; endif; ?>
            </div>  
        </div>
    </section>
<?php get_footer(); ?>