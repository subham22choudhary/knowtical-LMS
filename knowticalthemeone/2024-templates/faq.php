<?php
/*
Template Name: 4_FAQ
*/
get_header();  
?>

<style>

    .accordion .accordion-item {
        padding: 0rem 1rem;
        margin: 1rem 0rem;
        box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
        border-radius: 13px;
    }

    .accordion button {
        position: relative;
        display: block;
        text-align: left;
        width: 100%;
        padding: 1em 0;
        color: #035498;
        font-size: 1.15rem;
        font-weight: 400;
        border: none;
        background: none;
        outline: none;
    }

    .accordion button:hover,
    .accordion button:focus {
        cursor: pointer;
        color: #6bd7ff;
    }

    .accordion button:hover::after,
    .accordion button:focus::after {
        cursor: pointer;
        color: #6bd7ff;
        border: 1px solid #6bd7ff;
    }

    .accordion button .accordion-title {
        padding: 1em 1.5em 1em 0;
        font-weight: 600;
    }

    .accordion button .icon {
        display: inline-block;
        position: absolute;
        top: 18px;
        right: 0;
        width: 22px;
        height: 22px;
        border: 1px solid;
        border-radius: 22px;
    }

    .accordion button .icon::before {
        display: block;
        position: absolute;
        content: '';
        top: 9px;
        left: 5px;
        width: 10px;
        height: 2px;
        background: currentColor;
    }

    .accordion button .icon::after {
        display: block;
        position: absolute;
        content: '';
        top: 5px;
        left: 9px;
        width: 2px;
        height: 10px;
        background: currentColor;
    }

    .accordion button[aria-expanded='true'] {
        color: #6bd7ff;
    }

    .accordion button[aria-expanded='true'] .icon::after {
        width: 0;
    }

    .accordion button[aria-expanded='true']+.accordion-content {
        opacity: 1;
        max-height: 9em;
        transition: all 200ms linear;
        will-change: opacity, max-height;
    }

    .accordion .accordion-content {
        opacity: 0;
        max-height: 0;
        overflow: hidden;
        transition: opacity 200ms linear, max-height 200ms linear;
        will-change: opacity, max-height;
    }

    .accordion .accordion-content p {
        font-size: 1rem;
        font-weight: 400;
        margin: 0rem 0rem 1.5rem 0rem;
    }
</style>

<section class="faq-sec space">
    <div class="container">
        <h2>Frequently Asked Questions</h2>
        <div class="accordion">
        <div class="accordion-item">
            <button id="accordion-button-1" aria-expanded="false">
            <span class="accordion-title">À quelle fréquence doit-on remplacer son chauffe-eau?
            </span>
            <span class="icon" aria-hidden="true"></span>
            </button>
            <div class="accordion-content">
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat id quasi officia? Blanditiis numquam quia placeat sit hic? Tempore voluptatem modi commodi provident exercitationem culpa ea illum, asperiores nesciunt quos?
            </p>
            </div>
        </div>
        <div class="accordion-item">
            <button id="accordion-button-2" aria-expanded="false">
            <span class="accordion-title">Why is the sky blue?</span>
            <span class="icon" aria-hidden="true"></span>
            </button>
            <div class="accordion-content">
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat id quasi officia? Blanditiis numquam quia placeat sit hic? Tempore voluptatem modi commodi provident exercitationem culpa ea illum, asperiores nesciunt quos?
            </p>
            </div>
        </div>
        <div class="accordion-item">
            <button id="accordion-button-3" aria-expanded="false">
            <span class="accordion-title">Will we ever discover aliens?</span>
            <span class="icon" aria-hidden="true"></span>
            </button>
            <div class="accordion-content">
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat id quasi officia? Blanditiis numquam quia placeat sit hic? Tempore voluptatem modi commodi provident exercitationem culpa ea illum, asperiores nesciunt quos?
            </p>
            </div>
        </div>
        <div class="accordion-item">
            <button id="accordion-button-4" aria-expanded="false">
            <span class="accordion-title">How much does the Earth weigh?</span>
            <span class="icon" aria-hidden="true"></span>
            </button>
            <div class="accordion-content">
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat id quasi officia? Blanditiis numquam quia placeat sit hic? Tempore voluptatem modi commodi provident exercitationem culpa ea illum, asperiores nesciunt quos?
            </p>
            </div>
        </div>
        <div class="accordion-item">
            <button id="accordion-button-5" aria-expanded="false">
            <span class="accordion-title">How do airplanes stay up?</span>
            <span class="icon" aria-hidden="true"></span>
            </button>
            <div class="accordion-content">
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat id quasi officia? Blanditiis numquam quia placeat sit hic? Tempore voluptatem modi commodi provident exercitationem culpa ea illum, asperiores nesciunt quos?
            </p>
            </div>
        </div>
        </div>
    </div>
</section>

<script>
    const items = document.querySelectorAll('.accordion button');

    function toggleAccordion() {
    const itemToggle = this.getAttribute('aria-expanded');

    for (i = 0; i < items.length; i++) {
        items[i].setAttribute('aria-expanded', 'false');
    }

    if (itemToggle == 'false') {
        this.setAttribute('aria-expanded', 'true');
    }
    }

    items.forEach((item) => item.addEventListener('click', toggleAccordion));
</script>

<?php get_footer();?>