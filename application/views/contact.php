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


.contact-card i {
    background: #486d2a;
    width: 30px;
    height: 30px;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 50%;
    color: #fff;
    font-size: 16px;
}

h3 {
    font-family: "Inter", sans-serif;
    font-optical-sizing: auto;
    font-weight: 600;
    font-style: normal;
    font-variation-settings: "slnt" 0;
    font-size: 20px;
    font-weight: bolder;
    color: #2B2B2D;
}

.contact-card {
    display: flex;
    margin-bottom: 20px;
}
.contact-card i {
    background: #486d2a;
    width: 30px;
    height: 30px;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 50%;
    color: #fff;
    font-size: 16px;
    margin-right: 20px;
}
p a {
    color: #4E4E50;
}

p a:hover {
    color: #4E4E50;
}
.text-dark {
    color: #2B2B2D!important;
}
.contact-page {
    position: relative;
    display: block;
    padding: 20px 0 20px;
    z-index: 1;
    border: 1px solid #f3f3ed;
    border-radius: 15px;
}

.contact-page {
    position: relative;
    display: block;
    padding: 20px 0 20px;
    z-index: 1;
    border: 1px solid #f3f3ed;
    border-radius: 15px;
    background: var(--ogenix-extra);
}
.contact-page__form-input-box textarea {
    font-size: 14px;
    color: var(--ogenix-gray);
    height: 160px;
    width: 100%;
    background-color: #fff;
    padding: 15px 30px 30px;
    border: none;
    outline: none;
    margin-bottom: 0px;
    font-weight: 500;
    border-radius: var(--ogenix-bdr-radius);
}
h6 {
    font-family: "Inter", sans-serif;
    font-optical-sizing: auto;
    font-weight: 600;
    font-style: normal;
    font-variation-settings: "slnt" 0;
    font-size: 20px;
    font-weight: bolder;
    color: rgb(255, 255, 255);
    margin-bottom: 15px;
}
.contact-page__form-input-box input[type="text"], .contact-page__form-input-box input[type="email"] { 
    background-color: #fff; 
}

.contact-page__form-input-box input[type="text"], .contact-page__form-input-box input[type="email"] {
    height: 50px;
    width: 100%;
    border: none; 
    padding-left: 15px;
    padding-right: 15px;
    outline: none;
    font-size: 14px;
    color: #000;
    display: block;
    font-weight: 500;
    border-radius: var(--ogenix-bdr-radius);
}

h3 {
    font-family: "Inter", sans-serif;
    font-optical-sizing: auto;
    font-weight: 600;
    font-style: normal;
    font-variation-settings: "slnt" 0;
    font-size: 18px;
    font-weight: bolder;
    color: #2B2B2D;
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
                        <li><a href="index.html">Home</a></li>
                        <li><span>/</span></li>
                        <li>Contact us</li>
                    </ul>
                    <h2>Contact us</h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->
<section class="spacing-section">
    <div class="container">
        <div class="row col-md-10 mx-auto align-items-center ">
            <div class="col-md-6">
        <div class="contact-area aos-init aos-animate" data-aos="fade-up">
            <div class="container">
            <div class="row contact-box">
            <div class="col-12">
            <div class="contact-card">
                <div>
                <i class="fa-solid fa-location-dot"></i></div>
                <div>
            <h3>Address </h3>
            <p>Gut No.37, Jawlke Dindori, 10th Mile, Teh. Dindori, Dist. Nashik-422206 </p>
            </div>
            </div>
            </div>
            <div class="col-12">
            <div class="contact-card">
                <div>
                <i class="fa-solid fa-phone"></i></div>
                <div>
            <h3>Phone</h3>
            <p>
            <a href="tel:+918799916010">+918799916010</a> <br>
            <a href="tel:+91799916027">+91799916027</a> </p>
            </div>
            </div>
            </div>
            <div class="col-12">
            <div class="contact-card">
                <div>
                <i class="fa-solid fa-envelope"></i>
            </div>
        <div>
            <h3>Email</h3>
            <p>
         <a href="mailto:enquiries@rootaccountants.co.uk" class="__cf_email__">enquiries@rootaccountants.co.uk</a> </p></div>

            </div>
            </div>
            </div>
            </div>
            </div>

        </div>
        <div class="col-md-6">
                    <!--Contact Page Start-->
        <section class="contact-page ">
            
            <h6 class="mb-3 text-center text-dark">Feel free to contact with us any time.</h6>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12"> 
                        <div class="contact-page__content">
                            <form action=" " class="contact-page__form contact-form-validated"
                                novalidate="novalidate">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="contact-page__form-input-box">
                                            <input type="text" placeholder="Your name" name="name">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="contact-page__form-input-box">
                                            <input type="email" placeholder="Email address" name="email">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="contact-page__form-input-box">
                                            <input type="text" placeholder="Subject" name="Subject">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="contact-page__form-input-box">
                                            <input type="text" placeholder="Phone" name="phone">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="contact-page__form-input-box text-message-box">
                                        <textarea name="message" placeholder="Write a massage"></textarea>
                                    </div>
                                    <div class="product__all-content mb-0 mt-0">  
                                        <div class="product__all-btn-box">
                                            <a href="#" class="thm-btn product__all-btn">Enquire now</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="result"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Contact Page End-->

        </div>
    </div></div>
</section>

<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d479549.7827559278!2d73.806284!3d20.113901!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bdde9e8050f3f41%3A0x2d446785327e479b!2sDivine%20Delicacy%20Ready%20to%20Eat%20Foods!5e0!3m2!1sen!2sin!4v1718084638640!5m2!1sen!2sin" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

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
                <a href="<?php echo base_url().'';?>" aria-label="logo image"><img src="<?php echo base_url().'assets/images/resources/logo-1.png';?>" width="104"
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
    <script src="<?php echo base_url().'assets/js/ogenix.js';?>"></script>
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