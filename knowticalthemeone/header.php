<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/css/main.css" rel="stylesheet">
    <?php wp_head(); // This line is crucial for the admin bar and other features ?>

    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
</head>

<body <?php body_class(); ?>>


<style>
    body {
        font-family: 'Montserrat';
    }

</style>



    <header id="header">
        <div class="container">


        

            <style>
                .kl-header-2 {
                    display: flex;
                    align-items: center;
                    justify-content: space-between;
                    padding: 0.4rem 0rem;
                }


                .kt-header-1 {
                    max-width: 13rem;
                }

                .kl-header-2 nav {
                    width: 20%;
                }

                .kl-header-2 .work {
                    width: 80%;
                }
                .work {
                    display: flex;
                    align-items: center;
                    padding: 0.5rem 0rem;
                    border-radius: 20px;
                    justify-content: flex-end;
                }

                .dropbtn {
                    font-size: 12px;
                    border: none;
                    background: unset;
                    font-weight: 600;
                    text-decoration: unset;
                    color: #000000;
                }

                .dropdown {
                    position: relative;
                    display: inline-block;
                    margin-left: 20px;
                }


                .d-c {
                    display: none;
                }

                .d-c {
                    position: absolute;
                    background-color: #f9f9f9;
                    min-width: 105px;
                    box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
                    z-index: 1;
                    border-radius: 12px;
                    border-top: 2px solid #03b6f8;
                }

                .d-c a {
                    color: black;
                    padding: 12px 16px;
                    text-decoration: none;
                    display: block;
                    font-size: 11px;
                }


                .dropdown-content a{
                    transition: transform .2s;
                }

                .dropdown-content a:hover {
                    transform: scale(1.08);
                    border-radius: 13px;
                    font-weight: 800;
                }

                .dropdown:hover .dropdown-content {
                    display: block;
                }


                .btn-grad {
                    transition: 0.2s;
                }


                .btn-grad:hover {
                    
                    /* background-position: right center;
                    color: #2d2f31;
                    text-decoration: none;
                    background-image: linear-gradient(to right, #EDE574 0%, #E1F5C4 51%, #EDE574 100%);
                    box-shadow: 0 0 2px #eee;

                    background-size: 200% auto;
                    border-radius: 5px; */
                }



                .slide-right {
                    animation: myAnim 0.4s ease 0s 1 normal forwards;
                }

                @keyframes myAnim {
                    0% {
                        opacity: 0;
                        transform: translateX(-30px);
                    }

                    100% {
                        opacity: 1;
                        transform: translateX(0);
                    }
                }





                @media only screen and (min-width: 1744px) {

                    .d-c {
                        min-width: 116px;
                    }

                    .dropbtn {
                        font-size: 14px;
                    }


                    .d-c a {
                        font-size: 13px;
                    }

                }

                
                @media only screen and (min-width: 769px) {
                    .mobile-menu-nav{
                        display: none;
                    }
                }


                @media only screen and (max-width: 768px) {
                    .work, .kl-header-2 {
                        display: none;
                    }

                    .mobile-menu-nav{
                        display: block;
                    }
                }
            </style>

            <div   class="kl-header-2">
                <nav>
                    <a href="<?php echo get_site_url(); ?>"><img src="https://test.knowtical.com/wp-content/uploads/2024/06/knowtical-main-logo.png" class="img-fluid kt-header-1"
                            alt="knowtical"></a>
                </nav>

                <div class="work">


                    <div class="dropdown">
                        <a href="<?php echo get_site_url(); ?>/courses/" class="dropbtn crs btn-grad">Our Courses</a>
                    </div>

                    <div class="dropdown">
                        <button class="dropbtn btn-grad">Resources</button>
                        <div class="d-c res-con drp-con slide-right">
                            <div>
                                <a href="<?php echo get_site_url(); ?>/blogs/">Blogs</a>
                                <a href="<?php echo get_site_url(); ?>/faq/">FAQ</a>
                                <a href="<?php echo get_site_url(); ?>/events/">Events</a>                                
                            </div>
                        </div>
                    </div>

                    <div class="dropdown">
                        <button class="dropbtn btn-grad">About Us</button>
                        <div class="d-c drp-con slide-right">
                            <a href="<?php echo get_site_url(); ?>/terms/">Terms of Use</a>
                          </div>
                    </div>


                    <div class="dropdown">
                        <a href="<?php echo get_site_url(); ?>/contact/" class="dropbtn btn-grad">Contact Us</a>
                    </div>

                </div>

                <script>


                    // Get all dropdown elements
                    var dropdowns = document.querySelectorAll('.dropdown');

                    // Iterate over each dropdown
                    dropdowns.forEach(function (dropdown) {
                        // Add event listener for mouseenter
                        dropdown.addEventListener('mouseenter', function () {
                            showDropdownContent(this);
                        });

                        // Add event listener for mouseleave
                        dropdown.addEventListener('mouseleave', function () {
                            hideDropdownContent(this);
                        });
                    });

                    // Function to show dropdown content
                    function showDropdownContent(dropdown) {
                        dropdown.querySelector('.d-c').classList.add('dropdown-content');
                    }

                    // Function to hide dropdown content
                    function hideDropdownContent(dropdown) {
                        dropdown.querySelector('.d-c').classList.remove('dropdown-content');
                    }
                </script>

            </div>


            <style>

                .mb-menu{
                    display: flex;
                    justify-content: space-between;
                    align-items: center;
                    padding: 0.5rem 0rem;
                }

                .mb-logo {
                    font-size: 1.2rem;
                }

                .mb-menu-toggle {
                    cursor: pointer;
                    display: flex;
                    flex-direction: column;
                    justify-content: space-between;
                    height: 18px;
                }

                .mb-menu-toggle span {
                    display: block;
                    width: 25px;
                    height: 3px;
                    background-color: #000000;
                    transition: transform 0.3s ease;
                }

                .mb-navigation {
                    position: absolute;
                    left: 0;
                    width: 100%;
                    background-color: #fff;
                    display: none;
                    z-index: 10;
                    top: 45px;
                    border-bottom: 5px solid #035498;
                    border-top: 2px solid #035498;
                    border-radius: 0px 0px 10px 10px;
                    
                }

                .mb-navigation button.accordion-button.collapsed, .accordion-button:not(.collapsed) {
                    background: #fff;
                    padding-right: calc(var(--bs-gutter-x)* .5);
                    padding-left: calc(var(--bs-gutter-x)* .5);
                    padding-top: 0.5rem;
                    padding-bottom: 0.5rem;
                    color: #000000;
                    font-weight: 600;
                }

                .mb-navigation .accordion-flush>.accordion-item>.accordion-collapse .accordion-body {
                    padding-right: calc(var(--bs-gutter-x)* .5);
                    padding-left: calc(var(--bs-gutter-x)* .5);
                }

                .mb-navigation .accordion-body {
                    padding: unset;
                }

                .mb-navigation ul {
                    list-style-type: none;
                    padding: 0px 0px;
                    margin-bottom: 0.2rem;
                    margin-top: 0.2rem;
                }

                .mb-navigation .accordion-item .accordion-body ul li {
                    margin: 0;
                    position: relative;
                    margin-top: 0.5rem;
                    font-size: 0.8rem;
                }

                .mb-navigation ul li a {
                    color: #000000;
                    text-decoration: none;
                    padding: 10px;
                    display: block;
                    font-weight: 600;
                }

                .mb-dropdown-menu {
                    display: none;
                    position: absolute;
                    top: 100%;
                    left: 0;
                    background-color: #444;
                    min-width: 150px;
                    z-index: 10;
                }

                .mb-dropdown-menu li {
                    margin: 0;
                }

                .mb-dropdown-menu li a {
                    padding: 10px;
                    display: block;
                    color: white;
                }

                .mb-logo .kt-header-1 {
                    max-width: 8rem;
                }

                .accordion-button:focus {
                    outline: unset;
                    box-shadow: unset;
                }

                .accordion-item {
                    margin-top: 8px;
                    margin-bottom: 8px;
                }

                .show {
                    display: block;
                }
            </style>

            <div  class="mobile-menu-nav">
                <div class="mb-menu">
                    <div class="mb-logo">
                        <a href="<?php echo get_site_url(); ?>"><img src="https://test.knowtical.com/wp-content/uploads/2024/06/knowtical-main-logo.png" class="img-fluid kt-header-1"
                                alt="knowtical"></a>
                    </div>
                    <div class="mb-menu-toggle" id="mb-mobile-menu">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <nav class="mb-navigation container" id="mb-navigation">
                        <ul>
                            <li><a href="<?php echo get_site_url(); ?>/courses/">Our Courses</a></li>
                            <li class="mb-dropdown">                                    
                                <div class="accordion accordion-flush" id="accordionFlushExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                        Resources
                                        </button>
                                        </h2>
                                        <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <ul>
                                            <li>Blogs</li>
                                            <li>FAQ</li>
                                            <li>Events</li>
                                            </ul>
                                        </div>
                                        </div>
                                    </div>

                                </div>
                            </li>
                            <li>
                                <div class="accordion accordion-flush" id="accordionFlushExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                        About Us
                                        </button>
                                        </h2>
                                        <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <ul>
                                            <li>Terms of Use</li>
                                            </ul>
                                        </div>
                                        </div>
                                    </div>

                                </div>
                            </li>
                            <li><a href="#">Contact Us</a></li>
                        </ul>
                    </nav>
                </div>
            </div>

            <script>
                document.addEventListener('DOMContentLoaded', function () {
                    const menuToggle = document.getElementById('mb-mobile-menu');
                    const navigation = document.getElementById('mb-navigation');

                    menuToggle.addEventListener('click', function () {
                        navigation.classList.toggle('show');
                    });

                });
            </script>




        </div>
    </header>


    <script>

        var header = document.getElementById("header");

        var sticky = header.offsetTop;

        header.style.top = "0px";

        window.onscroll = function () {
            if (window.pageYOffset > sticky) {
                header.style.position = "fixed";
                header.style.width = "100%";
                header.style.backgroundColor = "rgb(255, 255, 255)";
                header.style.zIndex = "20";
                header.style.top = "0";
            } else {
                header.style.position = "relative";
                header.style.top = "auto";
            }
        };





    </script>

    <script type="text/javascript" async src="https://play.vidyard.com/embed/v4.js"></script>
    <script src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/js/jquery.js"></script>