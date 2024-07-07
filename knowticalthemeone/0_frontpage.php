<?php

/*
Template Name: 0_Homepage
*/

get_header();  ?>

    <style>
        .font-2 h1 {
            color: #fff;
            font-size: 5rem;
            margin-bottom: 3rem;

        }

        .font-2 {
            background-image: url(<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/knowtical-home-banner.png);
            background-size: cover;
            background-repeat: no-repeat;
            padding: 3rem 0rem;
        }

        .space {
            padding-top: 2.5rem;
            padding-bottom: 2.5rem;
        }
    </style>

    <div class="font-2 space">
        <div class="container">


            <h1 class="text-center"><?php //echo get_field("page_title"); ?>Learn new skills. Prove you potential.</h1>
           


            <style>
                .my-Cards {
                    display: flex;
                    justify-content: space-around;
                }

                .card-1 {
                    position: relative;
                    box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;
                    padding: 2rem;
                    border: 2px solid transparent;
                    text-align: center;
                    z-index: 1;
                    background: #fff;
                    border-radius: 8px;
                    margin-right: 0.5rem;
                    margin-left: 0.5rem;
                }

                .card-1:hover {
                    border: 2px solid #00C5A1;
                }

                .card-1-img {
                    max-width: 3rem;
                }

                a.a-card {
                    text-decoration: none;
                    color: black;
                }

                a.a-card {
                    text-decoration: none;
                    color: black;
                }


                .font-5-2 h5,
                .font-5-1 h5 {
                    color: #5624d0;
                }
            </style>

            <div class="my-Cards">
      

                <?php //if( have_rows('repeater_field_name') ): while ( have_rows('repeater_field_name') ) : the_row();  ?>
                <?php //$homepagetitle = get_sub_field('page_title')?>
                
                <?php //echo get_field("homepage_cards_one"); ?>

                <!-- <div class=" my-md-0 my-lg-0 my-3">
                    <a href="#" class="a-card">
                        <div class="card-1">
                            <img src="https://uds-assets.udacity.com/glyphs/v2/school-data-sci-one.svg"
                                class="img-fluid card-1-img" alt="Knowtical">
                            <div class="card-1-content">Data Science</div>
                        </div>
                    </a>
                </div> -->
                
                <?php //endwhile; else : endif; ?>

                <div class=" my-md-0 my-lg-0 my-3">
                    <a href="#" class="a-card">
                        <div class="card-1">
                            <img src="https://uds-assets.udacity.com/glyphs/v2/school-data-sci-one.svg"
                                class="img-fluid card-1-img" alt="Knowtical">
                            <div class="card-1-content">Data Science</div>
                        </div>
                    </a>
                </div>

                <div class=" my-md-0 my-lg-0 my-3">
                    <a href="#" class="a-card">
                        <div class="card-1">
                            <img src="https://uds-assets.udacity.com/glyphs/v2/school-data-sci-one.svg"
                                class="img-fluid card-1-img" alt="Knowtical">
                            <div class="card-1-content">Data Science</div>
                        </div>
                    </a>
                </div>

                <div class=" my-md-0 my-lg-0 my-3">
                    <a href="#" class="a-card">
                        <div class="card-1">
                            <img src="https://uds-assets.udacity.com/glyphs/v2/school-data-sci-one.svg"
                                class="img-fluid card-1-img" alt="Knowtical">
                            <div class="card-1-content">Data Science</div>
                        </div>
                    </a>
                </div>

                <div class=" my-md-0 my-lg-0 my-3">
                    <a href="#" class="a-card">
                        <div class="card-1">
                            <img src="https://uds-assets.udacity.com/glyphs/v2/school-data-sci-one.svg"
                                class="img-fluid card-1-img" alt="Knowtical">
                            <div class="card-1-content">Data Science</div>
                        </div>
                    </a>
                </div>

                <div class=" my-md-0 my-lg-0 my-3">
                    <a href="#" class="a-card">
                        <div class="card-1">
                            <img src="https://uds-assets.udacity.com/glyphs/v2/school-data-sci-one.svg"
                                class="img-fluid card-1-img" alt="Knowtical">
                            <div class="card-1-content">Data Science</div>
                        </div>
                    </a>
                </div>

                <div class=" my-md-0 my-lg-0 my-3">
                    <a href="#" class="a-card">
                        <div class="card-1">
                            <img src="https://uds-assets.udacity.com/glyphs/v2/school-data-sci-one.svg"
                                class="img-fluid card-1-img" alt="Knowtical">
                            <div class="card-1-content">Data Science</div>
                        </div>
                    </a>
                </div>

            </div>

        </div>
    </div>

    
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/css/swiper.min.css'>

    <style>
        .slider {
            margin: 0 auto;
            max-width: 1200px;
            padding-top: 2rem;
            position: relative;
        }

        .swiper-container {
            padding-bottom: 20px;
            padding-top: 4rem;
        }

        .sec-titl {
            width: fit-content;
            z-index: 2;
            position: absolute;
            top: 30px;
        }

        .swiper-scrollbar {
            background: #d6d6d6;
        }

        .swiper-container-horizontal>.swiper-scrollbar {
            border-radius: 2px;
            height: 5px;
            width: 200px;
            top: 15px;
            left: 80%;
            transform: translateX(-50%);
        }

        .swiper-wrapper img {
            width: 100%;
            min-height: 21rem;
        }

        .swiper-button-prev {
            top: 20px;
            left: 93%;
        }

        .swiper-button-next {
            left: 97%;
            position: relative;
            top: -22.65rem;
        }

        .swiper-scrollbar-drag{
            cursor: pointer;
        }


        @media only screen and (min-width: 1281px) {



            .swiper-wrapper img {
                min-height: 27rem;
            }

        }


        .scroll-div {
            min-height: 20rem;            
            background-size: cover;
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
        }

        .div-img-1{
            background-image: url(https://images.pexels.com/photos/4060569/pexels-photo-4060569.jpeg);
        }

        .div-img-2{
            background-image: url(https://images.pexels.com/photos/5601991/pexels-photo-5601991.jpeg);
        }


        .div-img-3{
            background-image: url(https://images.pexels.com/photos/6483585/pexels-photo-6483585.jpeg);
        }

        .div-img-4{
            background-image: url(https://images.pexels.com/photos/6102229/pexels-photo-6102229.jpeg);
        }


        .div-img-5{
            background-image: url(https://images.pexels.com/photos/5797913/pexels-photo-5797913.jpeg);
        }


        .div-img-6{
            background-image: url(https://images.pexels.com/photos/5232929/pexels-photo-5232929.jpeg);
        }

        .div-img-7{
            background-image: url(https://images.pexels.com/photos/6102229/pexels-photo-6102229.jpeg);
        }


        .div-img-8{
            background-image: url(https://images.pexels.com/photos/5797913/pexels-photo-5797913.jpeg);
        }


        .div-img-9{
            background-image: url(https://images.pexels.com/photos/5232929/pexels-photo-5232929.jpeg);
        }

        .srl-dv {
            padding: 1rem 1rem;
            z-index: 2;
            position: relative;
            backdrop-filter: blur(10px);
        }

        .srl-dv h3 {
            font-size: 1rem;
        }

        .srl-dv h4 {
            font-size: 0.8rem;            
        }

        .srl-dv h4, .srl-dv h3 {
            color: #6bd7ff;
            font-weight: 600;
        }



    </style>

    <section class="space">
        <div class="container">


            <div class="slider">

            <div class="mb-4 sec-titl"><h2>Learn New Skills in 30 Days</h2></div>

                <div class="swiper-container">                

                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="scroll-div div-img-1">
                                <div class="srl-dv">
                                    <h3>Title</h3>
                                    <h4><span>2 Months</span>, <span>Beginer</span></h4>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="scroll-div div-img-2">
                                <div class="srl-dv">
                                    <h3>Title</h3>
                                    <h4><span>2 Months</span>, <span>Beginer</span></h4>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="scroll-div div-img-3">
                                <div class="srl-dv">
                                    <h3>Title</h3>
                                    <h4><span>2 Months</span>, <span>Beginer</span></h4>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="scroll-div div-img-4">
                                <div class="srl-dv">
                                    <h3>Title</h3>
                                    <h4><span>2 Months</span>, <span>Beginer</span></h4>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="scroll-div div-img-5">
                                <div class="srl-dv">
                                    <h3>Title</h3>
                                    <h4><span>2 Months</span>, <span>Beginer</span></h4>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="scroll-div div-img-6">
                                <div class="srl-dv">
                                    <h3>Title</h3>
                                    <h4><span>2 Months</span>, <span>Beginer</span></h4>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="scroll-div div-img-7">
                                <div class="srl-dv">
                                    <h3>Title</h3>
                                    <h4><span>2 Months</span>, <span>Beginer</span></h4>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="scroll-div div-img-8">
                                <div class="srl-dv">
                                    <h3>Title</h3>
                                    <h4><span>2 Months</span>, <span>Beginer</span></h4>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="scroll-div div-img-9">
                                <div class="srl-dv">
                                    <h3>Title</h3>
                                    <h4><span>2 Months</span>, <span>Beginer</span></h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- pagination -->
                    <div class="swiper-pagination"></div>

                    <!-- scrollbar -->
                    <div class="swiper-scrollbar"></div>

                    <!-- buttons -->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>


                </div>
            </div>
        </div>
    </section>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.8.4/swiper-bundle.min.js'></script>

    <script>
        var $swiperSelector = $('.swiper-container');

        $swiperSelector.each(function (index) {
            var $this = $(this);
            $this.addClass('swiper-slider-' + index);

            var dragSize = $this.data('drag-size') ? $this.data('drag-size') : 50;
            var freeMode = $this.data('free-mode') ? $this.data('free-mode') : false;
            var loop = $this.data('loop') ? $this.data('loop') : false;
            var slidesDesktop = $this.data('slides-desktop') ? $this.data('slides-desktop') : 4;
            var slidesTablet = $this.data('slides-tablet') ? $this.data('slides-tablet') : 5;
            var slidesMobile = $this.data('slides-mobile') ? $this.data('slides-mobile') : 2.5;
            var spaceBetween = $this.data('space-between') ? $this.data('space-between') : 20;

            var swiper = new Swiper('.swiper-slider-' + index, {
                direction: 'horizontal',
                loop: loop,
                freeMode: freeMode,
                spaceBetween: spaceBetween,
                breakpoints: {
                    1920: {
                        slidesPerView: slidesDesktop
                    },
                    992: {
                        slidesPerView: slidesTablet
                    },
                    320: {
                        slidesPerView: slidesMobile
                    }
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev'
                },
                scrollbar: {
                    el: '.swiper-scrollbar',
                    draggable: true,
                    dragSize: dragSize
                }
            });
        });
    </script>


    <style>
        .font-5-1 h3 {
            font-size: 2rem;
            font-weight: 700;
        }

        .font-5-1 h5 {
            font-size: 1.3rem;
            font-weight: 700;
        }

        .font-5-1 p {
            color: #6a6f73;
        }

        .font-5-2 h4 {
            font-weight: 700;
        }
    </style>

    <section class="font-5 space">
        <div class="container">

            <h3>Trending Now</h3>
            <hr class="my-4">
            <div class="row">
                <div class="col-md-3 col-12 font-5-1">

                    <h3>ChatGPT is a top skil</h3>

                    <h5>See ChatGPT Cuurses ></h5>
                    <p>10,000,000 learners</p>

                </div>

                <div class="col-md-3 col-12 font-5-2 my-md-0 my-lg-0 my-4">

                    <h4>Developer</h3>

                        <h5>See ChatGPT Cuurses ></h5>
                        <p>10,000,000 learners</p>

                        <h5>See ChatGPT Cuurses ></h5>
                        <p>10,000,000 learners</p>

                        <h5>See ChatGPT Cuurses ></h5>
                        <p>10,000,000 learners</p>

                </div>

                <div class="col-md-3 col-12 font-5-2 my-md-0 my-lg-0 my-4">

                    <h4>Developer</h3>

                        <h5>See ChatGPT Cuurses ></h5>
                        <p>10,000,000 learners</p>

                        <h5>See ChatGPT Cuurses ></h5>
                        <p>10,000,000 learners</p>

                        <h5>See ChatGPT Cuurses ></h5>
                        <p>10,000,000 learners</p>

                </div>

                <div class="col-md-3 col-12 font-5-2">

                    <h4>Developer</h3>

                        <h5>See ChatGPT Cuurses ></h5>
                        <p>10,000,000 learners</p>

                        <h5>See ChatGPT Cuurses ></h5>
                        <p>10,000,000 learners</p>

                        <h5>See ChatGPT Cuurses ></h5>
                        <p>10,000,000 learners</p>

                </div>

            </div>
        </div>

    </section>

    <style>
        .font-7-1 {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }


        .font-7-2 {
            font-size: 0.8rem;
            color: #5a8eb9;
        }

        .font-7-3 {
            font-size: 1.2rem;
        }

        .font-7-4 {
            color: grey;
            font-size: 0.7rem;
        }

        img.img-fluid.font-7-7 {
            border-radius: 10px;
        }

        img.img-fluid.font-7-9 {
            max-width: 5rem;
        }

        .font-7-10 {
            display: flex;
            align-items: center;
        }

        .col-md-4.col-12.font-7-8 {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }


        .font-7-11 > :nth-child(1) {
            font-size: 1rem;
            margin-bottom: 0rem;
            color: #5a8eb9;
        }

        .font-7-11 > :nth-child(2) {
            font-size: 1rem;
        }

        .font-7-11 > :nth-child(3) {
            color: grey;
            font-size: 0.7rem;
        }

        a.blue-btn {
            text-decoration: none;
            color: #035498;
            font-weight: 600;
            border-radius: 13px;
            border: 2px solid #035498;
            padding: 10px 10px;
        }
    </style>

    <section class="font-7 space">
        <div class="container">
            <div class="font-7-1">
                <div>
                    <h3 class="mb-0">Resources & News</h3>
                    <p>Lorem ipsum dolor sit amet consectetur</p>
                </div>
                <div>
                    <a href="<?php echo get_site_url(); ?>/blogs/" class="blue-btn">Browse Blog</a>
                </div>

            </div>

            <div class="row mt-3 mt-md-0 mt-lg-0">
                <div class="col-md-4 col-12 font-7-6">
                    <div class="font-7-5">
                        <img src="https://test.knowtical.com/wp-content/uploads/2024/06/placeholder-img-1.png" class="img-fluid font-7-7 mb-3" alt="knowtical-blog-section">

                        <h5 class="font-7-2">GYM</h5>

                        <h4 class="font-7-3">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h4>

                        <h6 class="font-7-4">July 28, 2022</h6>
                    </div>
                </div>

                <div class="col-md-4 col-12 font-7-6">
                    <div class="font-7-5">
                        <img src="https://test.knowtical.com/wp-content/uploads/2024/06/placeholder-img-1.png" class="img-fluid font-7-7 mb-3" alt="knowtical-blog-section">

                        <h5 class="font-7-2">GYM</h5>

                        <h4 class="font-7-3">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h4>

                        <h6 class="font-7-4">July 28, 2022</h6>
                    </div>
                </div>

                <div class="col-md-4 col-12 font-7-8">

                    <div class="font-7-10">
                        <div class="me-2">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/placeholder-img-2.png" class="img-fluid font-7-9" alt="knowtical">
                        </div>

                        <div class="font-7-11">
                            <h5>Lorem</h5>
                            <h5>Lorem ipsum Lorem ipsum Lorem ipsum</h5>
                            <h6 class="font-7-4">July 28, 2022</h6>
                        </div>
                    </div>

                    <div class="font-7-10">
                        <div class="me-2">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/placeholder-img-2.png" class="img-fluid font-7-9" alt="knowtical">
                        </div>

                        <div class="font-7-11">
                            <h5>Lorem</h5>
                            <h5>Lorem ipsum Lorem ipsum Lorem ipsum</h5>
                            <h6 class="font-7-4">July 28, 2022</h6>
                        </div>
                    </div>

                    <div class="font-7-10">
                        <div class="me-2">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/placeholder-img-2.png" class="img-fluid font-7-9" alt="knowtical">
                        </div>

                        <div class="font-7-11">
                            <h5>Lorem</h5>
                            <h5>Lorem ipsum Lorem ipsum Lorem ipsum</h5>
                            <h6 class="font-7-4">July 28, 2022</h6>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>

    <style>
        section.font-4.space {
            background: #ececec;
        }

        .font-4-1 img {
            max-width: 6rem;
            padding: 0rem 1rem;
        }

        .font-4-1.text-center.cs-lo {
            margin-bottom: 2rem;
        }

        .font-4-1 {
            display: flex;
            justify-content: center;
        }
    </style>

    <section class="font-4 space">
        <div class="container">
            <h3 class="text-center mb-5">Key Supporters</h3>

            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="row justify-content-center">
                        <div class="font-4-1 text-center cs-lo">

                            <div class="my-md-0 my-lg-0 my-3">
                                <img src="https://s.udemycdn.com/partner-logos/ou-v1/cisco.svg" class="img-fluid"
                                    alt="Knowtical">
                            </div>

                            <div class="my-md-0 my-lg-0 my-3">
                                <img src="https://s.udemycdn.com/partner-logos/ou-v1/cisco.svg" class="img-fluid"
                                    alt="Knowtical">
                            </div>

                            <div class="my-md-0 my-lg-0 my-3">
                                <img src="https://s.udemycdn.com/partner-logos/ou-v1/cisco.svg" class="img-fluid"
                                    alt="Knowtical">
                            </div>

                            <div class="my-md-0 my-lg-0 my-3">
                                <img src="https://s.udemycdn.com/partner-logos/ou-v1/cisco.svg" class="img-fluid"
                                    alt="Knowtical">
                            </div>
                        </div>
                        <div class="font-4-1 text-center">


                            <div class="my-md-0 my-lg-0 my-3">
                                <img src="https://s.udemycdn.com/partner-logos/ou-v1/cisco.svg" class="img-fluid"
                                    alt="Knowtical">
                            </div>

                            <div class="my-md-0 my-lg-0 my-3">
                                <img src="https://s.udemycdn.com/partner-logos/ou-v1/cisco.svg" class="img-fluid"
                                    alt="Knowtical">
                            </div>

                            <div class="my-md-0 my-lg-0 my-3">
                                <img src="https://s.udemycdn.com/partner-logos/ou-v1/cisco.svg" class="img-fluid"
                                    alt="Knowtical">
                            </div>

                            <div class="my-md-0 my-lg-0 my-3">
                                <img src="https://s.udemycdn.com/partner-logos/ou-v1/cisco.svg" class="img-fluid"
                                    alt="Knowtical">
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>

        .font-6-1{
            display: flex;
            align-items: center;
        }

        .font-6-3 {
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
            background-color: #fff;
            padding: 1.5rem;
            border-radius: 0px 0px 50px 0px;
        }

        .font-6-1 img {
            max-width: 1.5rem;
        }

    </style>

    <section class="font-6 space">
        <div class="container">
            <div class="row">

                <div class="col-md-4 col-12 font-6-2">
                    <div class="font-6-3">
                        <p>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit ea exercitationem eaque blanditiis? Saepe atque repellat neque, aut nisi quia possimus assumenda enim reprehenderit, fuga suscipit placeat, quis ut! Dolore"</p>

                        <div class="font-6-1">
                            <div class="me-3">
                                <img src="https://test.knowtical.com/wp-content/uploads/2024/06/testimonial-icon.png" class="img-fluid" alt="testimonial-icon">
                            </div>
                            <div>
                                <p class="mb-0">Lorem ipsum dolor sit</p>
                                <p class="mb-0">Officia, fuga sunt.</p>
                                <p class="mb-0">fuga sunt.</p>
                            </div>
                        </div>
                    </div>


                </div>

                <div class="col-md-4 col-12 font-6-2 my-4 my-md-0 my-lg-0">
                    <div class="font-6-3">
                        <p>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit ea exercitationem eaque blanditiis? Saepe atque repellat neque, aut nisi quia possimus assumenda enim reprehenderit, fuga suscipit placeat, quis ut! Dolore"</p>

                        <div class="font-6-1">
                            <div class="me-3">
                                <img src="https://test.knowtical.com/wp-content/uploads/2024/06/testimonial-icon.png" class="img-fluid" alt="testimonial-icon">
                            </div>
                            <div>
                                <p class="mb-0">Lorem ipsum dolor sit</p>
                                <p class="mb-0">Officia, fuga sunt.</p>
                                <p class="mb-0">fuga sunt.</p>
                            </div>
                        </div>
                    </div>


                </div>

                <div class="col-md-4 col-12 font-6-2">
                    <div class="font-6-3">
                        <p>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit ea exercitationem eaque blanditiis? Saepe atque repellat neque, aut nisi quia possimus assumenda enim reprehenderit, fuga suscipit placeat, quis ut! Dolore"</p>

                        <div class="font-6-1">
                            <div class="me-3">
                                <img src="https://test.knowtical.com/wp-content/uploads/2024/06/testimonial-icon.png" class="img-fluid" alt="testimonial-icon">
                            </div>
                            <div>
                                <p class="mb-0">Lorem ipsum dolor sit</p>
                                <p class="mb-0">Officia, fuga sunt.</p>
                                <p class="mb-0">fuga sunt.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <style>
        img.img-fluid.right-arrow {
            max-width: 1rem;
        }

        button {
            background: #fff;
            border: 1.5px solid black;
        }


        .fold-1-kl-1 h2 {
            font-size: 2rem;
        }

        .fold-1-kl-1 p {
            font-size: 1.2rem;
        }
    </style>

    <div class="fold-1 space">
        <div class="container">
            <div class="row align-items-center justify-content-between">

                <div class="col-md-3 col-12">

                    <div class="fold-1-kl-1">
                        <h2>Top trends for the future of work</h2>

                        <p>GenAI and leadership are at the core of today's skills-based economy. Get the 2024 Global
                            Learning & Skills Trends Report to learn more.</p>
                    </div>


                    <button>Get the report <span><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/right-arrow.png" class="img-fluid right-arrow"
                                alt="Knowtical"></span></button>

                </div>


                <div class="col-md-8 col-12">
                    <img src="https://cms-images.udemycdn.com/content/ag3rqs5nxw/png/2024_Angled_Trends_report_image.png?position=c&quality=80&x.app=portals"
                        class="img-fluid fold-1-kl-2" alt="Knowtical">
                </div>



            </div>
        </div>
    </div>

    <style>
        .font-3 h3 {
            font-size: 1.5rem;
        }

        .font-3 p {
            font-size: 1rem;
        }

        .font-3 {
            background: #e5e5e5;
        }
    </style>

    <section class="font-3 space">
        <div class="container">
            <div class="row">

                <div class="col-md-3 col-12">
                    <h3>Content Type</h3>
                    <p>Course Name</p>
                    <p>Course Name</p>
                    <p>Course Name</p>
                    <p>Course Name</p>
                    <p>Course Name</p>
                    <p>Course Name</p>
                    <p>Course Name</p>
                    <p>Course Name</p>
                    <p>Course Name</p>
                    <p>Course Name</p>
                </div>

                <div class="col-md-3 col-12">
                    <h3>Content Type</h3>
                    <p>Course Name</p>
                    <p>Course Name</p>
                    <p>Course Name</p>
                    <p>Course Name</p>
                    <p>Course Name</p>
                    <p>Course Name</p>
                    <p>Course Name</p>
                    <p>Course Name</p>
                    <p>Course Name</p>
                    <p>Course Name</p>
                </div>

                <div class="col-md-3 col-12">
                    <h3>Content Type</h3>
                    <p>Course Name</p>
                    <p>Course Name</p>
                    <p>Course Name</p>
                    <p>Course Name</p>
                    <p>Course Name</p>
                    <p>Course Name</p>
                    <p>Course Name</p>
                    <p>Course Name</p>
                    <p>Course Name</p>
                    <p>Course Name</p>
                </div>

                <div class="col-md-3 col-12">
                    <h3>Content Type</h3>
                    <p>Course Name</p>
                    <p>Course Name</p>
                    <p>Course Name</p>
                    <p>Course Name</p>
                    <p>Course Name</p>
                    <p>Course Name</p>
                    <p>Course Name</p>
                    <p>Course Name</p>
                    <p>Course Name</p>
                    <p>Course Name</p>
                </div>

            </div>
        </div>
    </section>

    <style>

        @media only screen and (max-width: 768px) {
            .swiper-button-next, .swiper-button-prev, .swiper-container-horizontal>.swiper-scrollbar{
                display: none;
            }

            .sec-titl {
                top: 48px;
            }

            .sec-titl h2 {
                font-size: 1.3rem;
                margin-bottom: 0;
            }

            .slider {
                display: flex;
                justify-content: center;
            }


            .font-7-1{
                display: unset;
                margin-bottom: 1rem;
            }

            .my-Cards,
            .font-4-1 {
                display: unset;
            }

            .font-2 h1 {
                font-size: 2rem;
            }

            .font-4-1.text-center.cs-lo {
                margin-bottom: 0rem;
            }
        }
    </style> 


<?php get_footer();?>


