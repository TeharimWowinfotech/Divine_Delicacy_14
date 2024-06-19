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

.product__all-img {
    position: relative;
    width: 100%;
    display: block;
    overflow: hidden;
    background-color: var(--ogenix-white);
    z-index: 1;
    height: 250px;
}


.product__all-img img {
    width: 150px;
    mix-blend-mode: darken;
    transition: inherit;
    height: 150px;
    object-fit: contain;
}
.product__all-img {
    position: relative;
    width: 100%;
    display: block;
    overflow: hidden;
    background-color: #f8f8f8;
    z-index: 1;
    height: 250px;
}

.product__all-img {
    position: relative;
    width: 100%;
    display: block;
    overflow: hidden;
    background-color: #f8f8f8;
    display: flex;
    z-index: 1;
    height: 200px;
    justify-content: center;
    align-items: center;
}

.page-header {
    position: relative;
    display: flex;align-items: center;
    padding: 0;
    z-index: 1;
    background: #f3f2f0;
}

.shop-category {
    position: relative;
    display: block;
    background-color: #486d2a;
    padding: 27px 15px 15px;
    border-radius: var(--ogenix-bdr-radius);
}
 
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
.search-icon {
    position: relative;
    float: right;
    width: 75px;
    height: 75px;
    top: -62px;
    right: -9px;
}

.search-container-box {
    width: 400px;
    display: block;
    margin: 0 0 0 auto;
}
input#search-bar {
  margin: 0 auto;
  width: 100%;
  height: 45px;
  padding: 0 20px;
  font-size: 1rem;
  border: 1px solid #D0CFCE;
  outline: none;
}
input#search-bar:focus {
  border: 1px solid #008ABF;
  transition: 0.35s ease;
  color: #008ABF;
}
input#search-bar:focus::-webkit-input-placeholder {
  transition: opacity 0.45s ease;
  opacity: 0;
}
input#search-bar:focus::-moz-placeholder {
  transition: opacity 0.45s ease;
  opacity: 0;
}
input#search-bar:focus:-ms-placeholder {
  transition: opacity 0.45s ease;
  opacity: 0;
}
.search-container-box {
    width: 400px;
    display: block;
    height: 45px;
    margin: 0 0 0 auto;
    overflow: hidden;
}

.search-icon {
    position: relative;
    float: right;
    width: 75px;
    height: 75px;
    top: -62px;
    right: -7px;
    background: #000;
}
.search-icon {
    position: relative !important;
    float: right !important;
    width: 70px !important;
    height: 45px !important;
    background: #486d2a !important;
    top: -45px !important;
    display: flex !important;
    justify-content: center !important;
    align-items: center !important;
    font-weight: 600 !important;
    color: #fff !important;
}
input#search-bar:focus {
    border: 1px solid #486d2a;
    transition: 0.35s ease;
    color: #486d2a;
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
                    <li><a href="<?php echo base_url().'';?>">Home</a></li>
                    <li><span>/</span></li>
                    <li>Products</li>
                </ul>
                <h2>Products</h2>
            </div>
        </div>
    </section>
    <!--Page Header End-->
        

        <!--Product Start-->
        <section class="product">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-3">
                        <div class="product__sidebar">
                             
                            <div class="shop-category product__sidebar-single">
                                <h3 class="product__sidebar-title text-white">Categories</h3>
                                <ul class="list-unstyled">
                                    <li><a href="#">Breakfast <span>(9)</span></a></li>
                                    <li class="active"><a href="#">Soup <span>(8)</span></a></li>
                                    <li><a href="#">Bhaji <span>(10)</span></a></li>
                                    <li><a href="#">Gravy <span>(16)</span></a></li>
                                    <li><a href="#">Chutney <span>(4)</span></a></li>
                                    <li><a href="#">Thecha<span>(3)</span></a></li>
                                    <li><a href="#">Khichadi <span>(10)</span></a></li>
                                </ul>
                            </div>
                           
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9">
                        <div>
                            <form >
                                <div class="search-container-box">
                                <input type="text" id="search-bar" placeholder="Search product">
                                <a href="#"><div class="search-icon"> <i class="fa-solid fa-magnifying-glass"></i></div></a>
                            </div>  </form>
                         </div>
                         <div class="col-12">
                   
                        <div class="product__items mt-3"> 
                            <div class="product__all">
                                <div class="row w-100"  >
                                    <!--Product All Single Start-->
                                    <div class="col-xl-4 col-lg-4 col-md-6">
                                        <div class="product__all-single">
                                            <div class="product__all-single-inner">
                                                <div class="product__all-img">
                                                    <img src="https://divinefood.in/wp-content/uploads/2023/03/Ready-To-Cook-Misal--460x460.jpeg" alt="">
                                                </div>
                                                <div class="product__all-content"> 
                                                    <h4 class="product__all-title"><a
                                                            href="<?php echo base_url().'product-details';?>">Ready To Eat – Misal</a></h4>
                                                    <p class="product__all-price"><del> <small class="text-mute"> ₹90.00</small></del> <b>₹80.00</b> </p>
                                                    <div class="product__all-btn-box">
                                                        <a href="<?php echo base_url().'product-details';?>" class="thm-btn product__all-btn">View Product</a>
                                                    </div>
                                                </div> 
                                            </div>
                                        </div>
                                    </div>
                                    <!--Product All Single End-->
                                    <div class="col-xl-4 col-lg-4 col-md-6">
                                        <div class="product__all-single">
                                            <div class="product__all-single-inner">
                                                <div class="product__all-img">
                                                    <img src="https://divinefood.in/wp-content/uploads/2023/03/Ready-To-Eat-Poha-460x460.png" alt="">
                                                </div>
                                                <div class="product__all-content"> 
                                                    <h4 class="product__all-title"><a
                                                            href="<?php echo base_url().'product-details';?>">Ready To Eat – Poha</a></h4>
                                                    <p class="product__all-price"><del> <small class="text-mute">₹30.00 </small></del> <b>₹25.00</b> </p>
                                                    <div class="product__all-btn-box">
                                                        <a href="<?php echo base_url().'product-details';?>" class="thm-btn product__all-btn">View Product</a>
                                                    </div>
                                                </div> 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6">
                                        <div class="product__all-single">
                                            <div class="product__all-single-inner">
                                                <div class="product__all-img">
                                                    <img src="https://divinefood.in/wp-content/uploads/2023/03/Ready-To-Cook-Misal--460x460.jpeg" alt="">
                                                </div>
                                                <div class="product__all-content"> 
                                                    <h4 class="product__all-title"><a
                                                            href="<?php echo base_url().'product-details';?>">Ready To Eat – Misal</a></h4>
                                                    <p class="product__all-price"><del> <small class="text-mute"> ₹90.00</small></del> <b>₹80.00</b> </p>
                                                    <div class="product__all-btn-box">
                                                        <a href="product-details.html" class="thm-btn product__all-btn">View Product</a>
                                                    </div>
                                                </div> 
                                            </div>
                                        </div>
                                    </div>
                                  
                                </div>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="shop-page__pagination">
                                            <ul class="pg-pagination list-unstyled">
                                                <li class="count"><a href="#">01</a></li>
                                                <li class="count"><a href="#">02</a></li>
                                                <li class="count"><a href="#">....</a></li>
                                                <li class="count"><a href="#">05</a></li>
                                                <li class="next">
                                                    <a href="#" aria-label="Next"><i class="fa fa-angle-right"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div></div>
                    </div>
                </div>
            </div>
        </section>
        <!--Product End-->
 


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