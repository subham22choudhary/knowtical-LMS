<?php
/*
Template Name: Blog Post Template
*/
get_header(); ?>

<style>
    .blg-prnt-sec .container {
        max-width: 850px;
    }

    .blg-prnt-sec h1 {
        font-weight: 600;
        margin-bottom: 2rem;
        font-size: 1.8rem;
    }

    .blg-prnt-sec h2 {
        font-size: 1.8rem;
        font-weight: 600;
    }


    .blg-prnt-sec table {
        display: ruby-text;
        border: 0px;
        margin: 1rem 0rem;
    }

    tbody, td, tfoot, th, thead, tr {
        border: 1px solid #000000;
        padding: 9px;
        display: revert-layer;
        margin: 1rem 0rem;
        font-size: 0.7rem;
    }


        
    /* Progress bar */

    .progress-bar-container {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 5px;
    background-color: #f0f0f0;
    z-index: 9999;
    }

    .progress-bar {
    height: 100%;
    background-color: black;
    transition: all 0.3s ease;
    }









    /* progress circle */

    .progress-circle-container {
    position: fixed;
    bottom: 20px;
    right: 20px;
    z-index: 9999;
    display: flex;
    align-items: center;
    justify-content: center;
    }

    .progress-circle {
    width: 80px;
    height: 80px;
    }

    .progress-circle-bar {
    fill: none;
    stroke: black;
    stroke-width: 5;
    stroke-dasharray: 283;
    stroke-dashoffset: 0;
    transform-origin: center;
    transition: stroke-dashoffset 0.3s ease;
    }

    .progress-background {
    fill: transparent;
    stroke: #ededed;
    stroke-width: 5;
    stroke-dasharray: none;
    }


    .scroll-to-top {
    position: absolute;
    height: 40px;
    width: 40px;
    background-color: black;
    border-radius: 50%;
    cursor: pointer;
    transition: opacity 0.3s ease;
    z-index: 9998;
    display: flex;
    align-items: center;
    justify-content: center;
    opacity: 0; /* Initial opacity should be 0 */
}


    .scroll-to-top svg {
    display: block;
    width: 20px;
    height: 20px;
    stroke: white;
    transition: all 0.1s ease;
    }
</style>

<div class="progress-bar-container">
    <div class="progress-bar">



  </div>
</div>








<section class="space blg-prnt-sec">
    <div class="container">
        <div class="row">
            <div>
                <h1><?php the_title(); ?></h1>
            </div>
            <div>
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</section>



<?php get_footer(); ?>

<div class="progress-circle-container">
    <svg class="progress-circle" viewBox="0 0 100 100">
        <circle class="progress-background" cx="50" cy="50" r="45"></circle>
        <circle class="progress-circle-bar" cx="50" cy="50" r="45"></circle>
    </svg>
    <div class="scroll-to-top">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
        stroke-linecap="round" stroke-linejoin="round">
        <path d="M12 19V5M5 12l7-7 7 7" />
        </svg>
    </div>
</div>
<script>
    // Progress bar
    function updateProgressBar() {
        const progressBar = document.querySelector('.progress-bar');
        const totalHeight = document.body.scrollHeight - window.innerHeight;
        const progress = (window.pageYOffset / totalHeight) * 100;
        progressBar.style.width = progress + '%';
    }

    // Progress circle
    function updateProgressCircle() {
    const progressElement = document.querySelector('.progress-circle-bar');
    const scrollToTopElement = document.querySelector('.scroll-to-top');
    const totalHeight = document.body.scrollHeight - window.innerHeight;
    const progress = (window.pageYOffset / totalHeight) * 150;

    // Update progress circle
    progressElement.style.strokeDashoffset = 283 - (progress / 150 * 283);

    // Determine when to show the scroll-to-top button
    const scrollThreshold = 100; // Adjust this value as needed
    if (window.pageYOffset > scrollThreshold || window.pageYOffset >= totalHeight) {
        scrollToTopElement.style.opacity = '1';
    } else {
        scrollToTopElement.style.opacity = '0';
    }

    // Debugging output to console
    console.log('Window height:', window.innerHeight);
    console.log('Document height:', document.body.scrollHeight);
    console.log('Page Y offset:', window.pageYOffset);
    console.log('Total height:', totalHeight);
}






    function scrollToTop() {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    }

    // Attach event listeners
    window.addEventListener('scroll', () => {
        updateProgressBar();
        updateProgressCircle();
    });

    window.addEventListener('resize', () => {
        updateProgressBar();
        updateProgressCircle();
    });

    const scrollToTopElement = document.querySelector('.scroll-to-top');
    scrollToTopElement.addEventListener('click', scrollToTop);

    // Initial calls to set initial state
    updateProgressBar();
    updateProgressCircle();
</script>



