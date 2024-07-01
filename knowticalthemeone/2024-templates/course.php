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

                            <!-- https://maxl.us/hide-related -->
                            
                            
                                    <style>
                                        .hytPlayerWrap {
                                            display: inline-block;
                                            position: relative
                                        }

                                        .hytPlayerWrap.ended::after {
                                            content: "";
                                            position: absolute;
                                            top: 0;
                                            left: 0;
                                            bottom: 0;
                                            right: 0;
                                            cursor: pointer;
                                            background-color: black;
                                            background-repeat: no-repeat;
                                            background-position: center;
                                            background-size: 64px 64px;
                                            background-image: url(data:image/svg+xml;utf8;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMjgiIGhlaWdodD0iMTI4IiB2aWV3Qm94PSIwIDAgNTEwIDUxMCI+PHBhdGggZD0iTTI1NSAxMDJWMEwxMjcuNSAxMjcuNSAyNTUgMjU1VjE1M2M4NC4xNSAwIDE1MyA2OC44NSAxNTMgMTUzcy02OC44NSAxNTMtMTUzIDE1My0xNTMtNjguODUtMTUzLTE1M0g1MWMwIDExMi4yIDkxLjggMjA0IDIwNCAyMDRzMjA0LTkxLjggMjA0LTIwNC05MS44LTIwNC0yMDQtMjA0eiIgZmlsbD0iI0ZGRiIvPjwvc3ZnPg==)
                                        }

                                        .hytPlayerWrap.paused::after {
                                            content: "";
                                            position: absolute;
                                            top: 70px;
                                            left: 0;
                                            bottom: 50px;
                                            right: 0;
                                            cursor: pointer;
                                            background-color: black;
                                            background-repeat: no-repeat;
                                            background-position: center;
                                            background-size: 40px 40px;
                                            background-image: url(data:image/svg+xml;utf8;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEiIHdpZHRoPSIxNzA2LjY2NyIgaGVpZ2h0PSIxNzA2LjY2NyIgdmlld0JveD0iMCAwIDEyODAgMTI4MCI+PHBhdGggZD0iTTE1Ny42MzUgMi45ODRMMTI2MC45NzkgNjQwIDE1Ny42MzUgMTI3Ny4wMTZ6IiBmaWxsPSIjZmZmIi8+PC9zdmc+)
                                        }

                                    </style>
                            
                            
                                    
                                    <div class="hytPlayerWrapOuter">                               
                                    
                                        <div class="hytPlayerWrap"> 
                                            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/zgRh1dfDI-k?rel=0&enablejsapi=1" frameborder="0" ></iframe>                                    
                                        </div>
                                    
                                    </div> 
                                    
                                    
                                    
                                    <script>"use strict";document.addEventListener('DOMContentLoaded',function(){if(window.hideYTActivated)return;if(typeof YT==='undefined'){let tag=document.createElement('script');tag.src="https://www.youtube.com/iframe_api";let firstScriptTag=document.getElementsByTagName('script')[0];firstScriptTag.parentNode.insertBefore(tag,firstScriptTag);} let onYouTubeIframeAPIReadyCallbacks=[];for(let playerWrap of document.querySelectorAll(".hytPlayerWrap")){let playerFrame=playerWrap.querySelector("iframe");let onPlayerStateChange=function(event){if(event.data==YT.PlayerState.ENDED){playerWrap.classList.add("ended");}else if(event.data==YT.PlayerState.PAUSED){playerWrap.classList.add("paused");}else if(event.data==YT.PlayerState.PLAYING){playerWrap.classList.remove("ended");playerWrap.classList.remove("paused");}};let player;onYouTubeIframeAPIReadyCallbacks.push(function(){player=new YT.Player(playerFrame,{events:{'onStateChange':onPlayerStateChange}});});playerWrap.addEventListener("click",function(){let playerState=player.getPlayerState();if(playerState==YT.PlayerState.ENDED){player.seekTo(0);}else if(playerState==YT.PlayerState.PAUSED){player.playVideo();}});} window.onYouTubeIframeAPIReady=function(){for(let callback of onYouTubeIframeAPIReadyCallbacks){callback();}};window.hideYTActivated=true;});</script>

                            <!-- <div class="vidyard">                               
                                <img style="width: 100%; margin: auto; display: block;" class="vidyard-player-embed"
                                src="<?php echo the_field('video_id');?>"
                                data-uuid="<?php echo the_field('video_id');?>" data-v="4" data-type="inline" />
                            </div> -->
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

                        <div class="accordion" id="accordionExample">



                            <?php 
                            $course_title_1 = get_field('course_title_1');
                            $course_desc_1 = get_field('course_desc_1');
                            if ($course_title_1) : ?>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <?php echo $course_title_1; ?>
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                    <?php echo $course_desc_1; ?>
                                    </div>
                                </div>
                            </div>
                            <?php endif; ?>

                            <?php 
                            $course_title_2 = get_field('course_title_2');
                            $course_desc_2 = get_field('course_desc_2');
                            if ($course_title_2) : ?>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <?php echo $course_title_2; ?>
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                    <?php echo $course_desc_2; ?>
                                    </div>
                                </div>
                            </div>
                            <?php endif; ?>


                            <?php 
                            $course_title_3 = get_field('course_title_3');
                            $course_desc_3 = get_field('course_desc_3');
                            if ($course_title_3) : ?>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        <?php echo $course_title_3; ?>
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                    <?php echo $course_desc_3; ?>
                                    </div>
                                </div>
                            </div>
                            <?php endif; ?>


                            <?php 
                            $course_title_4 = get_field('course_title_4');
                            $course_desc_4 = get_field('course_desc_4');
                            if ($course_title_4) : ?>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour" aria-expanded="false"
                                        aria-controls="collapseFour">
                                        <?php echo $course_title_4; ?>
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                    <?php echo $course_desc_4; ?>
                                    </div>
                                </div>
                            </div>
                            <?php endif; ?>

                            <?php 
                            $course_title_5 = get_field('course_title_5');
                            $course_desc_5 = get_field('course_desc_5');
                            if ($course_title_5) : ?>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFive" aria-expanded="false"
                                        aria-controls="collapseFive">
                                        <?php echo $course_title_5; ?>
                                    </button>
                                </h2>
                                <div id="collapseFive" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                    <?php echo $course_desc_5; ?>
                                    </div>
                                </div>
                            </div>
                            <?php endif; ?>


                            <?php 
                            $course_title_6 = get_field('course_title_6');
                            $course_desc_6 = get_field('course_desc_6');
                            if ($course_title_6) : ?>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseSix" aria-expanded="false"
                                            aria-controls="collapseSix">
                                            <?php echo $course_title_6; ?>
                                        </button>
                                    </h2>
                                    <div id="collapseSix" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <?php echo $course_desc_6; ?>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>


                            <?php 
                            $course_title_7 = get_field('course_title_7');
                            $course_desc_7 = get_field('course_desc_7');
                            if ($course_title_7) : ?>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseSeven" aria-expanded="false"
                                        aria-controls="collapseSeven">
                                        <?php echo $course_title_7; ?>
                                    </button>
                                </h2>
                                <div id="collapseSeven" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                    <?php echo $course_desc_7; ?>
                                    </div>
                                </div>
                            </div>
                            <?php endif; ?>



                            
                            <?php 
                            $course_title_8 = get_field('course_title_8');
                            $course_desc_8 = get_field('course_desc_8');
                            if ($course_title_8) : ?>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseEight" aria-expanded="false"
                                        aria-controls="collapseEight">
                                        <?php echo $course_title_8; ?>
                                    </button>
                                </h2>
                                <div id="collapseEight" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                    <?php echo $course_desc_8; ?>
                                    </div>
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
