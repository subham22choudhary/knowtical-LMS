    <?php wp_footer(); // This line is crucial for the admin bar and other features ?>  

    <style>
        footer.Knowtical-footer {
            background: #2d2f31;
            padding: 1rem 0rem;
        }

        .Knowtical-footer-1 {
            color: #c0c4fc;
            text-decoration: unset;
        }

        h3.Knowtical-footer-0 {
            font-size: 1rem;
            font-weight: 600;
            color: #fff;
        }

        .knowledge-footr-1 {
            display: flex;
            justify-content: flex-end;
        }

        .knowledge-footr-1 img {
            max-width: 6rem;
            max-height: 6rem;
            margin-right: 0.5rem;
            margin-left: 0.5rem;
        }

        .fotr {
            color: #3e4143;
        }

        .Knowtical-footer-2 span img.img-fluid {
            width: 1.2rem;
        }

        .Knowtical-footer-2 {
            font-size: 1.5rem;
        }

        .Knowtical-footer-2 {
            font-size: 1rem;
            text-decoration: unset;
            color: #fff;
            border: 1px solid #fff;
            padding: 0.5rem 1rem;
        }

        .Knowtical-footer-2:hover {
            color: #fff;
        }

        .Knowtical-footer-3 div {
            margin-top: 0.2rem;
            margin-bottom: 0.3em;
        }

        .Knowtical-footer-3 div a {
            color: #fff;
            text-decoration: unset;
            font-size: 0.9rem;
        }

        .Knowtical-footer-4 {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 2rem;
        }



        .Knowtical-footer-4 div img {
            width: 150px;
            height: 40px;
        }

        .Knowtical-footer-4 h4 {
            font-size: 0.8rem;
            color: #fff;
        }


        @media only screen and (max-width: 768px) {
            .knowledge-footr-1 {
                display: none;
            }
        }
    </style>

    <footer class="Knowtical-footer">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 col-12">
                    <h3 class="Knowtical-footer-0 mb-0">Top companies choose <a data-purpose="ufb-link"
                            class="Knowtical-footer-1" href="#" target="_blank" rel="noopener">Udemy Business</a> to
                        build in-demand career skills.</h3>
                </div>


                <div class="col-md-6 col-12">
                    <div class="knowledge-footr-1">

                        <img src="https://s.udemycdn.com/partner-logos/v4/nasdaq-light.svg" class="img-fluid"
                            alt="Knowtical">

                        <img src="https://s.udemycdn.com/partner-logos/v4/volkswagen-light.svg" class="img-fluid"
                            alt="Knowtical">

                        <img src="https://s.udemycdn.com/partner-logos/v4/box-light.svg" class="img-fluid"
                            alt="Knowtical">

                        <img src="https://s.udemycdn.com/partner-logos/v4/netapp-light.svg" class="img-fluid"
                            alt="Knowtical">

                        <img src="https://s.udemycdn.com/partner-logos/v4/eventbrite-light.svg" class="img-fluid"
                            alt="Knowtical">

                    </div>
                </div>

            </div>

        </div>
        <hr class="fotr">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-12">
                    <div class="row">
                        <div class="col-md-4 col-12 Knowtical-footer-3">
                            <div><a href="#">Udemy Business</a></div>
                            <div><a href="#">Teach on Udemy</a></div>
                            <div><a href="#">Get the app</a></div>
                            <div><a href="#">About us</a></div>
                            <div><a href="<?php echo esc_url(get_template_directory_uri()); ?>/terms.html">Terms & Conditions</a></div>
                        </div>

                        <div class="col-md-4 col-12 Knowtical-footer-3">
                            <div><a href="#">Udemy Business</a></div>
                            <div><a href="#">Teach on Udemy</a></div>
                            <div><a href="#">Get the app</a></div>
                            <div><a href="#">About us</a></div>
                            <div><a href="#">Contact us</a></div>
                        </div>

                        <div class="col-md-4 col-12 Knowtical-footer-3">
                            <div><a href="#">Udemy Business</a></div>
                            <div><a href="#">Teach on Udemy</a></div>
                            <div><a href="#">Get the app</a></div>
                            <div><a href="#">About us</a></div>
                            <div><a href="#">Contact us</a></div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-12 mt-2">
                    <div class="d-flex justify-content-end">
                        <a class="Knowtical-footer-2"><span><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/img1.png" class="img-fluid"></span>
                            English</a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="Knowtical-footer-4">
                    <div>
                        <img src="https://test.knowtical.com/wp-content/uploads/2024/06/knowtical-footer-logo.png"
                            class="img-fluid " alt="Knowtical">
                    </div>
                    <div>
                        <h4>© 2024 Udemy, Inc.</h4>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>