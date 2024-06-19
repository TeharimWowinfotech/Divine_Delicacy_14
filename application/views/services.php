<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from pixydrops.com/ogenix/main-html/delivery-services.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 May 2024 08:48:00 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<?php include ('public/head.php'); ?>

<body class="custom-cursor">
    <style>
        .form-control {
            height: 50px;
            width: 100%;
            border: none;
            background-color: var(--ogenix-extra);
            padding-left: 30px;
            padding-right: 30px;
            outline: none;
            font-size: 14px;
            color: #313359;
            display: block;
            font-weight: 500;
            border-radius: 5px;
        }

        .form-control:focus {
            color: #212529;
            background-color: #f3f3ed;
            border-color: #000 !important;
            outline: 0;
            box-shadow: 0 0 0 .25rem rgb(13 110 253 / 0%);
        }

        #service-form {
            padding: 30px 0px 80px 0px !important;
        }

        .servimg {
            display: flex !important;
            /* align-content: center; */
            justify-content: center !important;
            align-items: center !important;
        }

        .button {
            background: green;
            color: white;
            border-radius: 20pc;
            padding: 13px 28px;
        }

        .btn:hover {
            color: #ffffff !important;
        }

        .tagline {
            font-size: 17px;
            color: #2B2B2D;
            font-weight: bold;
            border-bottom: 2px solid #b5d19f;

        }
    </style>

    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>



    <div class="page-wrapper">
        <?php include ('public/navbar.php'); ?>

        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->



        <section class="page-header" style="background-image: url(<?php echo base_url() . 'assets/images/project/services-banner.jpg  '; ?>);background-repeat: no-repeat;background-size: cover;     background-color: #000000b8 !important; background-position: 10px -20px;
    background-blend-mode: multiply; padding: 4px 0px;">
            <div class="page-header__ripped-paper" style="background-image: url(g);"></div>
            <div class="container">
                <div class="page-header__inner">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="<?php echo base_url() . ''; ?>">Home</a></li>
                        <li><span>/</span></li>
                        <li>Services</li>
                    </ul>
                    <h2>Services</h2>
                </div>
            </div>
        </section>



        <!--Services Details page Start-->
        <section class="service-details" style="    padding: 35px  35px">
            <div class="container">
                <div class="row">

                    <div class="col-xl-7 col-lg-6">
                        <div class="service-details__right">

                            <span class="tagline">B2C Services </span>
                            <h3 class="service-details__title-1"> Organic Fertilizer Pesticide & PGR</h3>
                            <p class="service-details__text-1">Krishidoot Bio Herbals is one of the top Agro Input
                                Manufacturer Company in India and it follows the B2C Model which helps customers to get
                                our product directly through the channel of our Website, Amazon, IndiaMART, AGRO SHOPY
                                and by our dealers and distributors.
                                <br>
                                We also sell our product on E-commerce Portal. This helps customers to get a quality
                                product at a reasonable price at a quick point in time. We always make a priority the
                                quality of our product and we make sure that customers will get a product on time.
                                <br>
                                Our Customer executive is always there to help you and solves your entire problem even
                                after you purchase the product.
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6">
                        <div class="service-details__left">

                            <div class="we-sell">
                                <img src="<?php echo base_url() . 'assets/images/product/serbvic-product1.png '; ?>"
                                    alt="" class="img-fluid">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Services Details page End-->

        <!-- form seaction -->
        <section id="service-form">
            <div class="container" class="contact-page__form-input-box">
                <div class="row">
                    <div class="col-xl-5 col-lg-6 servimg">
                        <img src="<?php echo base_url() . 'assets/images/product/product-service.jpg'; ?>" alt=""
                            style="width: 60%; ">
                    </div>
                    <div class="col-xl-7 col-lg-6">
                        <span class="tagline">B2C Services </span>
                        <h3 class="service-details__title-1"> Organic Fertilizer Pesticide & PGR</h3>
                        <form class="row g-3">
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="inputEmail4"
                                    placeholder="Enter Your First Name ">
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="inputPassword4"
                                    placeholder="Enter Your First Name">
                            </div>
                            <div class="col-md-6">
                                <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                            </div>
                            <div class="col-md-6">
                                <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                            </div>
                            <div class="col-12">
                                <textarea class="form-control" id="exampleFormControlTextarea1"
                                    placeholder="Write a Massege" rows="3" style="height:100px;"></textarea>
                            </div>
                            <div class="col-12 text-center">
                                <button type="submit" class="btn text-center button">Send a massege</button>
                            </div>
                        </form>


                    </div>

                </div>

            </div>
        </section>




        <?php include ('public/footer.php'); ?>
    </div><!-- /.page-wrapper -->


    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

            <div class="logo-box">
                <a href="index.html" aria-label="logo image"><img src="assets/images/resources/logo-1.png" width="104"
                        alt="" /></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->

            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:needhelp@packageName__.com">needhelp@ogenix.com</a>
                </li>
                <li>
                    <i class="fa fa-phone-alt"></i>
                    <a href="tel:666-888-0000">666 888 0000</a>
                </li>
            </ul><!-- /.mobile-nav__contact -->
            <div class="mobile-nav__top">
                <div class="mobile-nav__social">
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-facebook-square"></a>
                    <a href="#" class="fab fa-pinterest-p"></a>
                    <a href="#" class="fab fa-instagram"></a>
                </div><!-- /.mobile-nav__social -->
            </div><!-- /.mobile-nav__top -->



        </div>
        <!-- /.mobile-nav__content -->
    </div>
    <!-- /.mobile-nav__wrapper -->

    <div class="search-popup">
        <div class="search-popup__overlay search-toggler"></div>
        <!-- /.search-popup__overlay -->
        <div class="search-popup__content">
            <form action="#">
                <label for="search" class="sr-only">search here</label><!-- /.sr-only -->
                <input type="text" id="search" placeholder="Search Here..." />
                <button type="submit" aria-label="search submit" class="thm-btn">
                    <i class="icon-magnifying-glass"></i>
                </button>
            </form>
        </div>
        <!-- /.search-popup__content -->
    </div>
    <!-- /.search-popup -->

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="icon-up-arrow"></i></a>


    <script src="assets/vendors/jquery/jquery-3.6.0.min.js"></script>
    <script src="assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendors/jarallax/jarallax.min.js"></script>
    <script src="assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js"></script>
    <script src="assets/vendors/jquery-appear/jquery.appear.min.js"></script>
    <script src="assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js"></script>
    <script src="assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="assets/vendors/jquery-validate/jquery.validate.min.js"></script>
    <script src="assets/vendors/nouislider/nouislider.min.js"></script>
    <script src="assets/vendors/odometer/odometer.min.js"></script>
    <script src="assets/vendors/swiper/swiper.min.js"></script>
    <script src="assets/vendors/tiny-slider/tiny-slider.min.js"></script>
    <script src="assets/vendors/wnumb/wNumb.min.js"></script>
    <script src="assets/vendors/wow/wow.js"></script>
    <script src="assets/vendors/isotope/isotope.js"></script>
    <script src="assets/vendors/countdown/jquery.countdown.min.js"></script>
    <script src="assets/vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="assets/vendors/bxslider/jquery.bxslider.min.js"></script>
    <script src="assets/vendors/bootstrap-select/js/bootstrap-select.min.js"></script>
    <script src="assets/vendors/vegas/vegas.min.js"></script>
    <script src="assets/vendors/jquery-ui/jquery-ui.js"></script>
    <script src="assets/vendors/timepicker/timePicker.js"></script>
    <script src="assets/vendors/circleType/jquery.circleType.js"></script>
    <script src="assets/vendors/circleType/jquery.lettering.min.js"></script>
    <script src="assets/vendors/nice-select/jquery.nice-select.min.js"></script>




    <!-- template js -->
    <script src="assets/js/ogenix.js"></script>
</body>


<!-- Mirrored from pixydrops.com/ogenix/main-html/delivery-services.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 May 2024 08:48:02 GMT -->

</html>