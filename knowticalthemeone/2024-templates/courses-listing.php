<?php
/*
Template Name: Courses Listing Page
*/
get_header();

?>


<style>



    .course-card {
        box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;
        padding: 1.5rem 1rem;
        margin: auto;
        border-radius: 13px;
    }


</style>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <div class="container space">
            <h2 class="pg-title">Our Courses</h2>
            <div class="courses-container row">
            <?php
            
            $args = array(
                'post_type' => 'course', 
                'posts_per_page' => -1,
                'order' => 'DESC',
                'orderby' => 'date', 
            );

            $courses_query = new WP_Query($args);

            if ($courses_query->have_posts()) :
                // echo '<p>Courses found: ' . $courses_query->found_posts . '</p>'; 
                while ($courses_query->have_posts()) : $courses_query->the_post();
            ?>




                    <div class="col-md-4 col-12 my-3 my-md-0 my-lg-0">

                        <div class="course-card">
                            <h1 class="title-tag-1"><?php the_title(); ?></h2>
                            <p class="para-tag-1"><?php the_excerpt(); ?></p>
                            <a href="<?php the_permalink(); ?>" class="button">Read More</a>
                        </div>

                    </div>


                <?php
                    endwhile;
                    wp_reset_postdata(); 
                else :
                    echo '<p>No courses found.</p>';
                endif;
                ?>
            </div>

        </div>

    </main>
</div>


<?php
get_footer();
?>

