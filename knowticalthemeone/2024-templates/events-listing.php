<?php
/*
Template Name: Events Listing Page
*/
get_header();
?>


<style>
.event-card {
    box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;
    padding: 1.5rem 1rem;
    margin: auto;
    border-radius: 13px;
}
</style>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <div class="container space">

            <div class="events-parent row">
                <h2 class="pg-title">Our Events</h2>
                <?php

                $args = array(
                    'post_type' => 'event', 
                    'posts_per_page' => -1, 
                    'order' => 'DESC', 
                    'orderby' => 'date', 
                );

                $events_query = new WP_Query($args);

                if ($events_query->have_posts()) :
                    while ($events_query->have_posts()) : $events_query->the_post();
                ?>


                        <div class="events col-md-3 col-12 my-3 my-md-0 my-lg-0">
                            <div class="event-card">
                                <h1 class="title-tag-1"><?php the_title(); ?></h1>
                                <p class="para-tag-1"><?php the_excerpt(); ?></p>
                                <a href="<?php the_permalink(); ?>" class="button">Read More</a>
                            </div>
                        </div>



                <?php
                    endwhile;
                    wp_reset_postdata(); 
                else :
                    echo 'No events found.';
                endif;
                ?>
            </div>

        </div>

    </main>
</div>

<?php
get_footer();
?>
