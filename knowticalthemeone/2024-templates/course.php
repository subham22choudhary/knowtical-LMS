<?php
/*
Template Name: Course Template
*/
get_header(); ?>

    <style>
        .auth-cta {
            width: 1rem;
        }

        .know-Cour-vid-1 {
            /* box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px; */
        }

        .know-Cour-aut {
            /* box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px; */
            /* box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px; */
            box-shadow: rgba(17, 12, 46, 0.15) 0px 48px 100px 0px;
            padding: 1.5rem 1.5rem;
        }

        a#backlink {
            display: none;
        }



        div#accordionExample {
            box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px;
            border-radius: 8px;
        }

        .my-video {
            width: 100%;
            height: 481.5px;
        }

        
        .know-Cour-vid-1 iframe {
            height: 25rem;
            box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;
            width: 46rem;
        }

        .know-Cour-aut1 h6 {
            margin-bottom: 1rem;
        }

        .sub-crses{
            box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
            padding: 1rem;
        }

        .sub-crses a {
            text-decoration: unset;
            color: #000000;
            font-size: 1.2rem;
            font-weight: 700;
        }

        @media screen and (min-width: 1744px) {

            .know-Cour-vid-1 iframe {
                width: 53rem;
            }

        }

        @media screen and (max-width: 768px) {
            .my-video {
                height: 316px;
            }

            .know-Cour-vid-1 iframe {
                width: 25rem;
            }
        }

    </style>

    <section class="knowticalCourses sec-space">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-12">
                    <div class="know-Cour-vid">
                        <div class="know-Cour-vid-1">                           
                            <div class="vidyard">                               
                                <img style="width: 100%; margin: auto; display: block;" class="vidyard-player-embed"
                                src="<?php echo the_field('video_id');?>"
                                data-uuid="<?php echo the_field('video_id');?>" data-v="4" data-type="inline" />
                            </div>
                        </div>
                    </div>




                    <style>
                        .know-Cour-aut1 > .show-content {
                            display: none;
                        }

                        .know-Cour-aut1 a {
                            text-decoration: none;
                            top: -1.5px;
                            position: relative;
                        }

                        .accordion-button:not(.collapsed) {
                            color: black;
                            background-color: #6bd7ff;
                            font-weight: 600;
                        }

                        .know-Cour-aut1 h4 {
                            font-size: 1.3rem;
                        }

                        .know-Cour-aut1 h5 {
                            font-size: 1rem;
                        }
                    </style>

                    <div class="know-Cour-aut my-4">
                        <div class="know-Cour-aut1">
                            <h4>
                                <div>
                                    <span>
                                        <strong>Course Title:</strong> 
                                    </span>
                                    <span>
                                        <?php the_title();?>
                                    </span>
                                </div>
                            </h4>
                            <h5>
                                 <span><span><strong>Author:</strong></span> <?php echo the_field('author_name');?> <span>
                                    <a href="<?php echo the_field('author_linkedin');?>">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-3.png" class="img-fluid auth-cta" alt="knowtical">
                                    </a>
                                </span></span>
                            </h5>



                            <h6>Course Description</h6>


                            <div class="show-content">

                                <?php echo the_content();?>
                                
                            </div>

                        </div>

                        <a class="button" id="load-more">Show Description</a>

                    </div>

                    <script>
                        $(function () {
                            $(".know-Cour-aut1 > .show-content:gt(2)").hide();
                            
                            $("#load-more").click(function () {
                                $(".know-Cour-aut1 > .show-content").slideToggle();
                                var text = $(this).text();
                                $(this).text(text == "Show Description" ? "Show Less" : "Show Description");
                            });
                        });
                    </script>

                </div>
                <div class="col-md-4 col-12">
                    <div>

                        <div>




                            <?php 
                            $course_title_2 = get_field('course_title_2');
                            $course_time_duration_2 = get_field('course_time_duration_2');
                            if ($course_title_2) : ?>
                            <div class="sub-crses">
                                <a href="<?php echo get_site_url(); ?>/course/<?php echo $course_title_2; ?>/">
                                    <?php echo $course_title_2; ?>
                                    
                                <a>
                                <div>
                                <?php echo $course_time_duration_2; ?>
                                </div>
                            </div>
                            <?php endif; ?>








                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>
