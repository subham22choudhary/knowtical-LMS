<?php
/*
Template Name: Event Template
*/
get_header(); ?>

<!-- <div class="event-content">
    <h1><?php the_title(); ?></h1>
    <div class="event-meta">
        <span>Organizer: <?php the_field('event_organizer'); ?></span>
        <span>Date: <?php the_date(); ?></span>
    </div>
    <div class="event-description">
        <?php the_content(); ?>
    </div>
    <?php if (has_post_thumbnail()) : ?>
        <div class="event-thumbnail">
            <?php the_post_thumbnail('large'); ?>
        </div>
    <?php endif; ?>
</div> -->

<style>
    .events h4 {
        font-size: 15px;
        border-bottom: 3px solid #035498;
        width: fit-content;
        padding-bottom: 0.5rem;
    }


    .events h1 {
        font-size: 2rem;
        color: #03b6f8;
        margin-top: 1rem;
        font-weight: 600;
    }


    .events h5 {
        font-size: 0.9rem;
        font-weight: 600;
        color: #000000;
    }
</style>

<div class="container space">    
    <div class="events">
        <h4><?php the_field('events_date');?></h4>
        <h1><?php the_title(); ?></h1>
        <h5><?php the_field('events_location');?></h5>
        <p><?php the_content(); ?></p>
    </div>
</div>

<?php get_footer(); ?>
