<?php
/*
Template Name: Blog Listing Page
*/
get_header();
?>



<style>



    .blog-card {
        box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;
        padding: 1.5rem 1rem;
        margin: 0;
        border-radius: 13px;
        width: 100%;
        height: 100%;
        display: flex;
        justify-content: space-between;
        align-items: start;
        flex-direction: column;
    }

    .blog-card p {
        font-size: 0.8rem;
        height: 100%;
    }

    .row.blogs-container {
        display: flex;
        justify-content: center;
    }

    .row.blogs-container .blg-cd-prnt {
        padding-bottom: 1.5rem;
    }
</style>




        <div class="container space">
            <h2 class="pg-title">Our Blogs</h2>
            <div class="row blogs-container">

                    <?php
                    
                        $args = array(
                            'post_type' => 'blog', 
                            'posts_per_page' => -1, 
                            'order' => 'DESC', 
                            'orderby' => 'date', 
                        );

                        $blogs_query = new WP_Query($args);

                        if ($blogs_query->have_posts()) :
                            while ($blogs_query->have_posts()) : $blogs_query->the_post();
                    ?>

                    <div class="col-md-4 col-12 my-3 my-md-0 my-lg-0 blg-cd-prnt">
                        <div class="blog-card">
                            <h1 class="title-tag-1"><?php the_title(); ?></h2>
                            <p class="para-tag-1"><?php the_excerpt(); ?></p>
                            <a href="<?php the_permalink(); ?>" class="button">Read More</a>
                        </div>
                    </div>

                    <?php
                            endwhile;
                            wp_reset_postdata(); 
                        else :
                            echo 'No blogs found.';
                        endif;
                    ?>
            </div>

        </div>



<?php
get_footer();
?>
