<?php
/*
Template Name: Contact Us
*/
get_header();
?>

<style>
    form.form-parent input, form.form-parent select, form.form-parent textarea {
        width: 100%;
        padding: 5px 15px;
        border-radius: 12px;
        font-size: 0.75rem;
        border: 1px solid #03b6f8;
        margin-bottom: 1.2rem;
    }

    .contact-us {
        background-image: linear-gradient(58deg, #ebdfff, #f2e1f5 55%, #dfe2ff);
        background-color: #ebdfff;
    }

    .con-set1 {
        background-image: linear-gradient(#8975ff, #ce85df 52%, #b3a2fd);
        padding: 13rem 1.5rem;
        border-radius: 12px;
        color: #ffffff;
    }


    form.form-parent label {
        font-size: 0.8rem;
    }

    @media only screen and (max-width: 768px) {
        .con-set1 {
            padding: 1.5rem 1.5rem;
        }
    }
    
</style>

<section class="contact-us space">
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-md-4 col-12 mb-4 mb-md-0 mb-lg-0">
                <div class="con-set1">
                    <div class="con-set-cont">
                        <p>Email: Testing@gmail.com</p>
                        <p>Address: 7, Lok Kalyan Marg, Race Course Road, New Delhi, 110001 India </p>
                    </div>
                </div>
            </div>

            <div class="col-md-5 col-12">

                <?php
                    if (isset($_POST['submitinsert'])) {
                        $a = $_POST['fullname'];
                        $b = $_POST['email'];
                        $c2 = $_POST['mobile'];
                        $d = $_POST['roles'];
                        $e = $_POST['schools'];
                        $f = $_POST['messages'];

                        global $wpdb;

                        $sql3 = $wpdb->insert("contactusdata", array(
                            "fullname" => $a,
                            "email" => $b,
                            "mobile" => $c2,
                            "roles" => $d,
                            "schools" => $e,
                            "messages" => $f
                        ));

                        if ($sql3 == true) {
                            // Redirect to thank you page after successful insertion
                            wp_redirect(get_site_url() . '/thank-you/');
                            exit;
                        } else {
                            echo "<script>console.log('data not inserted');</script>";
                        }
                    }
                ?>

                <div class="contact-form">
                    <h2>Get in touch</h2>
                    <p>Submit a message and we will get back to you.</p>

                    <form method="POST" class="contactus-form">
                        <div class="d-flex">
                            <div>
                                <h6 class="mb-0">Full name</h6>
                                <input type="text" class="mb-3" name="fullname" placeholder="John Doe">

                                <h6 class="mb-0">Email</h6>
                                <input type="text" class="mb-3" name="email" placeholder="you@email.com">

                                <h6 class="mb-0">Mobile No</h6>
                                <input type="text" class="mb-3" name="mobile" placeholder="9876543210">

                                <h6 class="mb-0">Your role</h6>
                                <select name="roles" class="mb-3">
                                    <option value="principal">Principal</option>
                                    <option value="trustee">Trustee</option>
                                    <option value="teacher">Teacher</option>
                                    <option value="itManager">IT Manager</option>
                                    <option value="consultant">Consultant</option>
                                    <option value="parent">Parent</option>
                                    <option value="student">Student</option>
                                    <option value="others">Others</option>
                                </select>

                                <h6 class="mb-0">School/Institute name</h6>
                                <input type="text" class="mb-3" name="schools" placeholder="Superhero Academy">
                            </div>

                            <div>
                                <h6 class="mb-0">Message</h6>
                                <textarea id="comments" class="mb-3" name="messages" rows="4" cols="40" placeholder="How might we help you?"></textarea>

                                <input type="submit" class="button" value="Insert Record" name="submitinsert">
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
