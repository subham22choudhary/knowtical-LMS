


<?php

/*
Template Name: 3_Terms & Conditions
*/

get_header();  

?>


    <style>
        section.sec-1 {
            background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/knowtical-home-banner.png);
            color: #fff;
            padding: 0.5rem 0rem;
        }
    </style>

    <section class="sec-1">
        <div class="container">
            <h1 class="text-center">Knowtical Legal Resources</h1>
        </div>
    </section>



    <style>
        .sec-2-1 {
            display: flex;
        }


        .sec-2-2 {
            box-shadow: 2px 0px 7px 0px rgba(0, 0, 0, 0.33);
            min-width: 18rem;
        }


        .sec-2-2-text button.active {
            background: black;
            color: #fff;
            padding: 0.5rem;
            border: unset;
            text-align: left;
            font-weight: 700;
        }


        .sec-2-2-text button {
            padding: 0.5rem;
            border: unset;
            text-align: left;
            font-weight: 700;
            font-size: 0.95rem;
        }


        div#v-pills-tabContent {
            margin-left: 3rem;
        }


        .sec-2-3 .tab-pane {
            overflow-y: auto;
            max-height: 30rem;
            min-height: 29rem;
        }

        .sec-2-3-1 {
            display: flex;
            align-items: center;
        }

        .sec-2-3-1 h2 {
            margin-bottom: 0rem;
         }


         div#v-pills-tabContent {
            margin-left: 0rem;
         }

         .sec-2-3-1, .sec-2-3-2{
            margin-left: 2rem;
         }


         @media screen and (max-width: 768px) {

            .sec-2-1 {
               display: unset;
            }

            .sec-2-2 {
               min-width: unset;
            }

            .sec-2-3 {
               margin: 1rem;
            }

            .sec-2-3-1, .sec-2-3-2 {
               margin-left: 0rem;
            }

            .sec-2-2-text button, .sec-2-2-text button.active{
               text-align: center;
            }

         }
    </style>


   <section class="sec-2 mt-4">
      <div class="sec-2-1">
         <div class="sec-2-2">
            <div class="nav flex-column nav-pills sec-2-2-text" id="v-pills-tab" role="tablist"
               aria-orientation="vertical">



               <?php 
               $tnc_title_1 = get_field('tnc_title_1');
               if ($tnc_title_1) : ?>
               <button class="tnc-title-cta active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home"
                  type="button" role="tab" aria-controls="v-pills-home" aria-selected="true"><?php echo $tnc_title_1; ?></button>
               <?php endif; ?>



               <?php 
               $tnc_title_2 = get_field('tnc_title_2');
               if ($tnc_title_2) : ?>
               <button class="tnc-title-cta " id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile"
                  type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false"><?php echo $tnc_title_2; ?></button>
               <?php endif; ?>

               <?php 
               $tnc_title_3 = get_field('tnc_title_3');
               if ($tnc_title_3) : ?>
               <button class="tnc-title-cta " id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages"
                  type="button" role="tab" aria-controls="v-pills-messages"
                  aria-selected="false"><?php echo $tnc_title_3; ?></button>

                  <?php endif; ?>


                  <?php 
               $tnc_title_4 = get_field('tnc_title_4');
               if ($tnc_title_4) : ?>
               <button class="tnc-title-cta " id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings"
                  type="button" role="tab" aria-controls="v-pills-settings"
                  aria-selected="false"><?php echo $tnc_title_4; ?></button>
                  <?php endif; ?>





                  <?php 
               $tnc_title_5 = get_field('tnc_title_5');
               if ($tnc_title_5) : ?>
               <button class="tnc-title-cta " id="v-pills-five-tab" data-bs-toggle="pill" data-bs-target="#v-pills-five"
                  type="button" role="tab" aria-controls="v-pills-five"
                  aria-selected="false"><?php echo $tnc_title_5; ?></button>
                  <?php endif; ?>




                  <?php 
               $tnc_title_6 = get_field('tnc_title_6');
               if ($tnc_title_6) : ?>
               <button class="tnc-title-cta " id="v-pills-six-tab" data-bs-toggle="pill" data-bs-target="#v-pills-six"
                  type="button" role="tab" aria-controls="v-pills-six"
                  aria-selected="false"><?php echo $tnc_title_6; ?></button>
                  <?php endif; ?>

                  
            </div>
         </div>
         <div class="sec-2-3">
            <div class="tab-content" id="v-pills-tabContent">


               <?php 
               $tnc_desc_1 = get_field('tnc_desc_1');
               if ($tnc_desc_1) : ?>
               <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                  aria-labelledby="v-pills-home-tab">
                  <div class="sec-2-3-1">
                     <div>
                        <img src="https://uds-assets.udacity.com/glyphs/v2/clipboard-two.svg" class="img-fluid" alt="Knowtical">
                     </div>
                     <div>
                        <h2><?php echo $tnc_title_1; ?></h2>
                     </div>
                  </div>
                  <div class="sec-2-3-2">
                     <?php echo $tnc_desc_1; ?>
                  </div>
               </div>
               <?php endif; ?>



               <?php 
               $tnc_desc_2 = get_field('tnc_desc_2');
               if ($tnc_desc_2) : ?>
               <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                  aria-labelledby="v-pills-profile-tab">
                  <div class="sec-2-3-1">
                     <div>
                        <img src="https://uds-assets.udacity.com/glyphs/v2/clipboard-two.svg" class="img-fluid" alt="Knowtical">
                     </div>
                     <div>
                        <h2><?php echo $tnc_title_2; ?></h2>
                     </div>
                  </div>
                  <div class="sec-2-3-2">
                     <?php echo $tnc_desc_2; ?>
                  </div>
               </div>
               <?php endif; ?>



               <?php 
               $tnc_desc_3 = get_field('tnc_desc_3');
               if ($tnc_desc_3) : ?>
               <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                  aria-labelledby="v-pills-messages-tab">
                  <div class="sec-2-3-1">
                     <div>
                        <img src="https://uds-assets.udacity.com/glyphs/v2/clipboard-two.svg" class="img-fluid" alt="Knowtical">
                     </div>
                     <div>
                        <h2><?php echo $tnc_title_3; ?></h2>
                     </div>
                  </div>
                  <div class="sec-2-3-2">
                     <?php echo $tnc_desc_3; ?>
                  </div>
               </div>
               <?php endif; ?>


               <?php 
               $tnc_desc_4 = get_field('tnc_desc_4');
               if ($tnc_desc_4) : ?>
               <div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
                  aria-labelledby="v-pills-settings-tab">
                  <div class="sec-2-3-1">
                     <div>
                        <img src="https://uds-assets.udacity.com/glyphs/v2/clipboard-two.svg" class="img-fluid" alt="Knowtical">
                     </div>
                     <div>
                        <h2><?php echo $tnc_title_4; ?></h2>
                     </div>
                  </div>
                  <div>
                  <div class="sec-2-3-2">
                     <?php echo $tnc_desc_4; ?>
                  </div>
                  </div>
               </div>
               <?php endif; ?>




               <?php 
               $tnc_desc_5 = get_field('tnc_desc_5');
               if ($tnc_desc_5) : ?>
               <div class="tab-pane fade" id="v-pills-five" role="tabpanel"
                  aria-labelledby="v-pills-five-tab">
                  <div class="sec-2-3-1">
                     <div>
                        <img src="https://uds-assets.udacity.com/glyphs/v2/clipboard-two.svg" class="img-fluid" alt="Knowtical">
                     </div>
                     <div>
                        <h2><?php echo $tnc_title_5; ?></h2>
                     </div>
                  </div>
                  <div>
                  <div class="sec-2-3-2">
                     <?php echo $tnc_desc_5; ?>
                  </div>
                  </div>
               </div>
               <?php endif; ?>



               <?php 
               $tnc_desc_6 = get_field('tnc_desc_6');
               if ($tnc_desc_6) : ?>
               <div class="tab-pane fade" id="v-pills-six" role="tabpanel"
                  aria-labelledby="v-pills-six-tab">
                  <div class="sec-2-3-1">
                     <div>
                        <img src="https://uds-assets.udacity.com/glyphs/v2/clipboard-two.svg" class="img-fluid" alt="Knowtical">
                     </div>
                     <div>
                        <h2><?php echo $tnc_title_6; ?></h2>
                     </div>
                  </div>
                  <div>
                  <div class="sec-2-3-2">
                     <?php echo $tnc_desc_6; ?>
                  </div>
                  </div>
               </div>
               <?php endif; ?>



            </div>
         </div>
      </div>
   </section>



    <?php get_footer();?>

