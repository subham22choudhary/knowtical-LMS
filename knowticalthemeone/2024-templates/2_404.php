


<?php

/*
Template Name: 2_404 Not Found
*/

get_header(); ?>

<style>
    /* 404 Page Styles */
    .error-404 {
        text-align: center;
        padding: 100px 20px;
        background-color: #f9f9f9;
        color: #333;
    }

    .error-404 .page-header {
        margin-bottom: 40px;
    }

    .error-404 .page-title {
        font-size: 48px;
        margin-bottom: 20px;
    }

    .error-404 .page-content {
        font-size: 18px;
    }

    .error-404 .page-content p {
        margin-bottom: 20px;
    }

    .error-404 .search-form {
        max-width: 400px;
        margin: 0 auto;
    }

    .error-404 .search-field {
        width: calc(100% - 50px);
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px 0 0 5px;
    }

    .error-404 .search-submit {
        width: 50px;
        padding: 10px;
        border: 1px solid #ccc;
        border-left: 0;
        background-color: #0073aa;
        color: #fff;
        border-radius: 0 5px 5px 0;
        cursor: pointer;
    }

    .error-404 .search-submit:hover {
        background-color: #005177;
    }

    .error-404 a {
        color: #0073aa;
        text-decoration: none;
    }

    .error-404 a:hover {
        text-decoration: underline;
    }
</style>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <section class="error-404 not-found">
            <header class="page-header">
                <h1 class="page-title"><?php _e('Oops! That page can&rsquo;t be found.', 'your-theme-textdomain'); ?></h1>
            </header>


        </section>
    </main>
</div>

<?php get_footer(); ?>
