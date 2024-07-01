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

        <h2 class="text-center mb-3">Contact US</h2>

            <div class="col-md-5 col-12 col-md-5 col-12 mb-4 mb-md-0 mb-lg-0">
                <div class="con-set1">
                    <div class="con-set-cont">
                        <p>Email: Testing@gmail.com</p>
                        <p>Address: 7, Lok Kalyan Marg, Race Course Road, New Delhi, 110001 India </p>
                    </div>
                </div>
            </div>

            <div class="col-md-5 col-12">
                <form class="form-parent" action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="post">
                <input type="hidden" name="action" value="submit_contact_form">
                    <label for="name">Full Name:</label><br>
                    <input type="text" id="name" name="name" required><br>
                    
                    <label for="email">Email:</label><br>
                    <input type="email" id="email" name="email" required><br>

                    <label for="phone">Mobile Number:</label><br>
                    <input type="tel" id="phone" name="phone" required><br>
                    
                    <label for="Role">Role:</label><br>
                    <select id="Role" name="Role" required>
                        <option value="Principal">Principal</option>
                        <option value="Trustee">Trustee</option>
                        <option value="Teacher">Teacher</option>
                        <option value="IT Manager">IT Manager</option>
                        <option value="Consultant">Consultant</option>
                        <option value="Parent">Parent</option>
                        <option value="Student">Student</option>
                        <option value="Other">Other</option>
                    </select><br>

                    <label for="school">School/Institute name</label><br>
                    <input type="text" id="school" name="school"><br>

                    <label for="message">Message:</label><br>
                    <textarea id="message" name="message" rows="4" cols="50"></textarea><br>
                    
                    <input type="submit" class="button" value="Submit">
                </form>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
