<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<?php include('public/head.php'); ?>

    <style>
             .page-header {
    position: relative;
    display: block;
    z-index: 1;
    height: 25vh;
    background: #f3f2f0;
    display: flex;
    align-items: center;
}

.page-header::after {
    position: absolute;
    top: 0;
    height: 100%;
    width: 100%;
    background: #0000006e;
    left: 0;
    content: '' !important;
}
.counter-one__content h3:after {
    content: '+';
}

.counter-one {
    position: relative;
    display: block;
    background-color: none;
    background-image: url(assets/images/project/bg.jpg);
    padding: 67px 0 58px;
    overflow: hidden;
    z-index: 1;
    background-attachment: fixed;
}

.page-header {
    position: relative;
    display: flex;align-items: center;
    padding: 0;
    z-index: 1;
    background: #f3f2f0;
}
    </style>


<body class="custom-cursor">


    <div class="page-wrapper">

        <?php include('public/navbar.php'); ?>

    <div class="stricky-header stricked-menu main-menu">
        <div class="container-fluid stickynav">
            <div class="row">
                <div class="container">
                    <div class="row">
                        <div class="sticky-header__content"></div>
                    </div>
                </div> 
            </div>
        </div>

    </div>

        <!--Page Header Start-->
        <section class="page-header"  style="background-image: url(https://divinefood.in/wp-content/uploads/2021/03/bg-page-title.jpg);background-repeat: no-repeat;background-size: cover;"> 
            <div class="page-header__ripped-paper" 
                style="background-image: url(g);"></div>
            <div class="container">
                <div class="page-header__inner">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="<?php echo base_url().''; ?>">Home</a></li>
                        <li><span>/</span></li>
                        <li>About</li>
                    </ul>
                    <h2>About us</h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->


        <!--About Three Start-->
  
    <!--About One Start-->
    
    <!--About One Start-->
    <section class="about-one " style="background: url(<?php echo base_url().'./assets/images/homepage/aboutus.jpg';?>) center center no-repeat;background-size: cover; " >

        <div class="spacing-section">
        <div class="container">


            <div class="about-one__shape-11 float-bob-y">
            </div>

            <div class="row">
                <div class="col-xl-6">
                    <div class="about-one__left">
                        <div class="about-one__img-box   " >
                            <h2>About us</h2>
                            <p>We are one of the leading third party and private label manufacturer of
                                nutraceutical
                                products in various segments. Our product range includes nutraceutical sachets,
                                nutraceutical protein formulation, nutraceutical tablets and various other
                                products.
                                We have customized packing solution according to the customer needs. This
                                enables
                                our clients to be in a perfect position to market their brands and meet the
                                growing
                                customers’ demands.</p>


                            <h6>Currently, we have the following business
                                divisions:</h6>
                            <p>Nutraceutical products, Probiotics, Multivitamin Syrups, Gym Supplements, Amino
                                Acids, Vitamins, Instant drink mix etc., Enzymes, Dietary Supplements, Advance
                                Clinical Nutrition products, Whey Protein, Health supplements, Chewable tablets
                                <br>

                                We are also such as manufacturing of various blends of probiotics for many
                                sectors
                                such as AHN, AQUA, Poultry and Human health supplements. We are engaged in agro
                                processing sectors to convert all vegetable and fruits in value addition product
                                by
                                extraction method and dehydration method.
                            </p>
                            <br>

                            <a href="#">Read more</a>


                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="about-one__right">  
                        <img src="<?php echo base_url().'assets/images/About/aboutus.png';?>" alt="" class="img-fluid ">
                    </div> 
                </div>
            </div>


        </div></div>

    </section>
    <!--About One End-->
    <!--About One End-->
        <!--About Three End-->

        <!--Counter One Start-->
        <section class="counter-one">
            <div class="counter-one__bg"
                style="background-image: url(<?php echo base_url().'assets/images/project/bg.jpg';?>);"></div>
            <div class="container">
                <ul class="counter-one__inner list-unstyled">
                    <li class="counter-one__single">
                        <div class="counter-one__icon">
                            <i class="icon-customer-service"></i>
                        </div>
                        <div class="counter-one__content count-box">
                            <h3 class="count-text" data-stop="154" data-speed="1500">00 <span>+</span></h3>
                            <p class="counter-one__text">Happy customers</p>
                        </div>
                    </li>
                    <li class="counter-one__single">
                        <div class="counter-one__icon">
                            <i class="icon-farmer-1"></i>
                        </div>
                        <div class="counter-one__content count-box">
                            <h3 class="count-text" data-stop="163" data-speed="1500">00 <span>+</span></h3>
                            <p class="counter-one__text">Expert farmers</p>
                        </div>
                    </li>
                    <li class="counter-one__single">
                        <div class="counter-one__icon">
                            <i class="icon-agriculture"></i>
                        </div>
                        <div class="counter-one__content count-box">
                            <h3 class="count-text" data-stop="360" data-speed="1500">00 <span>+</span></h3>
                            <p class="counter-one__text">New products</p>
                        </div>
                    </li>
                    <li class="counter-one__single">
                        <div class="counter-one__icon">
                            <i class="icon-trophy"></i>
                        </div>
                        <div class="counter-one__content count-box">
                            <h3 class="count-text" data-stop="22" data-speed="1500">00 <span>+</span></h3>
                            <p class="counter-one__text">Awards winning</p>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <!--Counter One End-->

        <!--Video One Start-->
        <section class="video-one">
            <div class="video-one-bg jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
                style="background-image: url(<?php echo base_url().'assets/images/backgrounds/video-one-bg.jpg';?>)"></div>
            <div class="video-one-border"></div>
            <div class="video-one-border video-one-border-two"></div>
            <div class="video-one-border video-one-border-three"></div>
            <div class="video-one-border video-one-border-four"></div>
            <div class="video-one-border video-one-border-five"></div>
            <div class="video-one-border video-one-border-six"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="video-one__inner">
                            <div class="video-one__video-link">
                                <a href="https://www.youtube.com/watch?v=p7SyhPeqmQM" class="video-popup">
                                    <div class="video-one__video-icon">
                                        <span class="fa fa-play"></span>
                                        <i class="ripple"></i>
                                    </div>
                                </a>
                            </div>
                          
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Video One End-->
 

    <!-- Brand slider-->
    <section class="hot-products spacing-section py-5">
        <div class="container">
            <div class="section-title text-center"> 
                <h3>Certification</h3>
                <div class="slider-3 owl-carousel owl-theme  py-4" id="slidetow">

                    <div class="slide">
                        <img src="<?php echo base_url().'./assets/images/affilation/1.png';?>"
                            alt="" />
                    </div>
                    <div class="slide">
                        <img src="<?php echo base_url().'../assets/images/affilation/2.png';?>"
                            alt="" />
                    </div>
                    <div class="slide">
                        <img src="<?php echo base_url().'./assets/images/affilation/3.png';?>"
                        alt="" />
                    </div>
                    <div class="slide">
                        <img src="<?php echo base_url().'./assets/images/affilation/4.png';?>"
                        alt="" />
                    </div>
                    <div class="slide">
                        <img src="<?php echo base_url().'./assets/images/affilation/5.png';?>"
                        alt="" />
                    </div>
                    <div class="slide">
                        <img src="<?php echo base_url().'./assets/images/affilation/6.png';?>"
                        alt="" />
                    </div>
                    <div class="slide">
                        <img src="<?php echo base_url().'./assets/images/affilation/7.png';?>"
                        alt="" />
                    </div>
                    <div class="slide">
                        <img src="<?php echo base_url().'./assets/images/affilation/8.png';?>"
                        alt="" />
                    </div>
                    </div> 
            </div> 
        </div>
    </section>
    <!-- Brand slider end-->

      


    <!--News One Start-->
    <section class="news-one spacing-section pt-0">
        <div class="container news">
            <div class="section-title text-center">

                <h2 class="section-title__title">Frequently asked questions </h2>
            </div>
            <div class="row">
                <div class="col-md-8 offset-md-2 acordpy">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Amet minim mollit sit aliqua dolor do amet sint.
                                </button>
                            </h3>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Vitae congue eu consequat ac felis placerat vestibulum lectus mauris
                                        ultrices. Cursus sit amet dictum sit amet justo donec enim diam porttitor
                                        lacus
                                        luctus accumsan tortor posuere.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Amet minim mollit sit aliqua dolor do amet sint.
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Vitae congue eu consequat ac felis placerat vestibulum lectus mauris
                                        ultrices. Cursus sit amet dictum sit amet justo donec enim diam porttitor
                                        lacus
                                        luctus accumsan tortor posuere.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Amet minim mollit sit aliqua dolor do amet sint.
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Vitae congue eu consequat ac felis placerat vestibulum lectus mauris
                                        ultrices. Cursus sit amet dictum sit amet justo donec enim diam porttitor
                                        lacus
                                        luctus accumsan tortor posuere.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingforth">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#headingforth" aria-expanded="false" aria-controls="headingforth">
                                    Amet minim mollit sit aliqua dolor do amet sint.
                                </button>
                            </h2>
                            <div id="headingforth" class="accordion-collapse collapse" aria-labelledby="headingforth"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Vitae congue eu consequat ac felis placerat vestibulum lectus mauris
                                        ultrices. Cursus sit amet dictum sit amet justo donec enim diam porttitor
                                        lacus
                                        luctus accumsan tortor posuere.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingfiv">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#headingfiv" aria-expanded="false" aria-controls="headingfiv">
                                    Amet minim mollit sit aliqua dolor do amet sint.
                                </button>
                            </h2>
                            <div id="headingfiv" class="accordion-collapse collapse" aria-labelledby="headingfiv"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Vitae congue eu consequat ac felis placerat vestibulum lectus mauris
                                        ultrices. Cursus sit amet dictum sit amet justo donec enim diam porttitor
                                        lacus
                                        luctus accumsan tortor posuere.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingsix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#headingsix" aria-expanded="false" aria-controls="headingsix">
                                    Amet minim mollit sit aliqua dolor do amet sint.
                                </button>
                            </h2>
                            <div id="headingsix" class="accordion-collapse collapse" aria-labelledby="headingsix"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Vitae congue eu consequat ac felis placerat vestibulum lectus mauris
                                        ultrices. Cursus sit amet dictum sit amet justo donec enim diam porttitor
                                        lacus
                                        luctus accumsan tortor posuere.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>



            </div>
        </div>
    </section>
    <!--Blog One End-->

    <!--Site Footer Start-->
    <?php include('public/footer.php'); ?>
    <!--Site Footer End-->



    </div><!-- /.page-wrapper -->


    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

            <div class="logo-box">
                <a href="<?php echo base_url().''; ?>" aria-label="logo image"><img src="<?php echo base_url().'assets/images/resources/logo-1.png';?>" width="104"
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

<?php include('public/script.php'); ?>




    <!-- template js -->
    <script src="assets/js/ogenix.js"></script>
    <script>
         
         $(document).ready(function () {
    var owl = $('.slider-3');
    owl.owlCarousel({
        items: 8,
        loop: true, 
        responsive: {
                0: {
                    items: 1.5
                },
                600: {
                    items:6
                },
                1000: {
                    items: 8
                }
            }
    });

});
    </script>
</body> </html>