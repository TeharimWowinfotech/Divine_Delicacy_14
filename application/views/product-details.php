<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<?php include('public/head.php'); ?>

    <style>

.product-details__img {
    width: 100%!important;
    position: relative;
    display: block;
    overflow: hidden;
    max-width: 100%;
    margin: auto;
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

@media(min-width:992px){
.product-details {
    position: inherit;
    display: block;
    padding: 112px 0px 56px;
}

.product-details__top {
    position: sticky;
    display: block;
    margin-top: -8px;
    top: 50px;
}}
.page-header::after {
    position: absolute;
    top: 0;
    height: 100%;
    width: 100%;
    background: #0000006e;
    left: 0;
    content: '' !important;
    
}


.page-header {
    position: relative;
    display: flex;
    align-items: center;
    padding: 0;
    z-index: 1;
    background: #f3f2f0;
}

.product__all-price {
    font-weight: 600;
    line-height: 28px;
    color: #293d18;
    font-size: 24px;
    margin: 15px 0;
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

.op-8{
    opacity: .8;
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

.product-details__img {
    width: 400px;
    position: relative;
    display: block;
    overflow: hidden;
    max-width: 100%;
    margin: auto;
}

.product-details__title {
    font-size: 30px;
    line-height: 32px;
    font-weight: 800;
    margin: 0;
}

.d-flex.starsec i {
    font-size: 14px;
    margin: 15px 1px;
    color: rgb(255, 189, 60);
}

.product-details__content .accordion-button { 
    padding: 1rem 5px; 
}


.product-details__content .accordion-button { 
    padding: 9px 5px;
 
}

dl, ol, ul {
    margin-top: 0;
    margin-bottom: 0;
    margin: 0;
    padding: 0;
}

.product-details__content .accordion-body li {
    color: #4E4E50;
}
 
.product-details__content .accordion-button {
    position: relative;
    display: flex;
    align-items: center;
    width: 100%;
    padding: 1rem 1.25rem;
    font-size: 1rem;
    color: #212529;
    text-align: left;
    background-color: #fff;
    border: 0;
    border-radius: 0;
    overflow-anchor: none;
    transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out, border-radius .15s ease;
    font-weight: 400;
    font-family: "Inter", sans-serif;
}

.product-details__content .accordion-item {
    margin-bottom: 0;
    background-color: #fff;
    border: 1px solid rgb(149 0 0 / 0%) !important;
    padding: 0px 0px;
}


.product-details__content .accordion-item h2 {
    font-family: "Inter", sans-serif;
    font-optical-sizing: auto;
    font-weight: 600;
    font-style: normal;
    font-variation-settings: "slnt" 0;
    font-size: 22px!important;
    font-weight: bolder;
    color: #2B2B2D;
    padding: 0px 0px 0px 0px;
}
.product-details__content .accordion-body li {
    color: #4E4E50;
    font-size: 16px;
}
.product-details__content .accordion-button {
    position: relative;
    display: flex;
    align-items: center;
    width: 100%;
    padding: 15px 1.25rem;
    font-size: 1rem;
    color: #212529;
    text-align: left;
    background-color: #fff;
    border: 0;
    border-radius: 0;
    overflow-anchor: none;
    transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out, border-radius .15s ease;
    font-weight: 400;
    font-family: "Inter", sans-serif;
}


.product__all-price {
    font-weight: 400;
    line-height: 28px;
    color: #2B2B2D;
    font-size: 24px;
    margin: 15px 0;
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
   
    <section class="page-header" style="/* background-image: url(https://divinefood.in/wp-content/uploads/2021/03/bg-page-title.jpg); */background-repeat: no-repeat;background-size: cover;background: #486d2a;"> 
        <div class="page-header__ripped-paper" 
            style="background-image: url(g);"></div>
        <div class="container">
            <div class="page-header__inner">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="index.html">Home</a></li>
                    <li><span>/</span></li>
                    <li>Products </li>
                    <li><span>/</span></li>
                    <li>Products Details</li>
                </ul>
                <h2>
                    Ready To Eat  Misal</h2>
            </div>
        </div>
    </section>
    <!--Page Header End-->

        <!--Product Details Start-->
        <section class="product-details py-5">
            <div class="container">
                <div class="row flex-row-reverse">
                    
                    <div class="col-lg-6 col-xl-6">
                        <div class="product-details__top">
                            <p class="text-muted mb-0"> <small> Divine Delicacy</small></p>
                            <h3 class="product-details__title">Ready To Eat  Misal  
                            <div class="d-flex starsec align-items-center my-1">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <p class="m-0 ms-2">3720 reviews</p>
                            </div>
                           </h3>
                           <h5 class="product__all-price"> <small class="text-muted me-1" style="font-size: 15px;text-decoration: line-through">Rs. 90.00</small> 
                            <span class="text-sucess">Rs. 55/-</span></h5>
                            <p class="product-details__content-text1">Divine Delicacy Foods Ready To Eat Misal that provides you with a simple and convenient way of preparing your favorite Maharashtrian dish instantly. Go ahead; buy Divine Foods Ready to Eat Misal online today!</p>

                             </p> 
                        <div class="product-details__content">
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                  <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Product Benefits
                                    </button>
                                  </h2>
                                  <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                      <ul>
                                        <li>
                                          High in Vitamin B1 which protects nerves, prevents heart diseases and helps produce red blood cells. Rich in folic acid, essential throughout the pregnancy.
                                        </li>
                                        <li>Great source of proteins.</li>
                                      </ul>
                                    </div>
                                  </div>
                                </div>
                                <div class="accordion-item">
                                  <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Product Feature 
                                    </button>
                                  </h2>
                                  <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                 <ul>
                               <li>100 % Organic.   </li>           <li> Authentic and lab-tasted purity</li> 
                               <li>Pure Vegetarian & Hygienic condition</li> 
                               <li>any preservatives and additives</li> 
                                 </ul>
                                    </div>
                                  </div>
                                </div>
                                <div class="accordion-item">
                                  <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Product USP
                                    </button>
                                  </h2>
                                  <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body px-2">
                                   <p class="">Due to osmotic dehydration it retains original colour and flavor nutritional loss is prohibited.</p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                        </div>
 
                        <div class="product-details__buttons my-0  mt-0"> 
                            <div class="product__all-content mb-0 mt-0">  
                                <div class="product__all-btn-box">
                                    <a href="#" class="thm-btn product__all-btn">Enquiry now</a>
                                </div>
                            </div> 
                        </div>
                    </div> 
 
                    </div>
                    <div class="col-lg-6 col-xl-6">
                        <div class="product-details__img mt-3 mt-md-0"> 
                            <div class="popup-gallery">
                                <a href="./assets/images/Product/main-product1.jpg" title="The Cleaner"><img src="./assets/images/Product/main-product1.jpg" ></a>
                                <a href="./assets/images/Product/main-product2.jpg" title="Winter Dance"><img src="./assets/images/Product/main-product2.jpg" class="d-none d-md-block" ></a>
                              
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Product Details End-->
   <!-- Featured category  -->
    <!-- Featured category  -->
    <section class="category spacing-section">
        <div class="container ">
            <div class="row">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <h2>Featured category</h2>
                        </div>
                    </div>

                    <!-- slider tabs  -->
                    <div class="row">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home"
                                    aria-selected="true">READY TO SERVE</button>
                                <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile"
                                    aria-selected="false">READY TO EAT</button>
                                <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact"
                                    aria-selected="false">READY TO COOK</button> 
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                aria-labelledby="nav-home-tab">
                                <div class="tabslide owl-carousel owl-theme">
                                    <div class="item tabcard">
                                        <img src="assets/images/Product/tab-card-1.png" alt="">
                                        <div class="tcard">
                                            <h3 class="categories-one__title">Ready To Eat Misal</h3>
                                            <p>provides you with a simple and convenient way of preparing your
                                                favorite dish</p>
                                            <a href="#" class="slidebtn">Enquiry now &nbsp;&nbsp; <i
                                                    class="fa-solid fa-arrow-right"></i></a>


                                        </div>
                                    </div>
                                    <div class="item tabcard">
                                        <img src="assets/images/Product/tab-card-2.png" alt="">
                                        <div class="tcard">
                                            <h3 class="categories-one__title">Ready To Eat Upma</h3>
                                            <p>provides you with a simple and convenient way of preparing your
                                                favorite dish</p>
                                            <a href="#" class="slidebtn">Enquiry now &nbsp;&nbsp; <i
                                                    class="fa-solid fa-arrow-right"></i></a>


                                        </div>
                                    </div>
                                    <div class="item tabcard">
                                        <img src="assets/images/Product/tab-card-1.png" alt="">
                                        <div class="tcard">
                                            <h3 class="categories-one__title">Ready To Eat Suji Halwa</h3>
                                            <p>provides you with a simple and convenient way of preparing your
                                                favorite dish</p>
                                            <a href="#" class="slidebtn">Enquiry now &nbsp;&nbsp; <i
                                                    class="fa-solid fa-arrow-right"></i></a>


                                        </div>
                                    </div>
                                    <div class="item tabcard">
                                        <img src="assets/images/Product/tab-card-1.png" alt="">
                                        <div class="tcard">
                                            <h3 class="categories-one__title">Ready To Eat Misal</h3>
                                            <p>provides you with a simple and convenient way of preparing your
                                                favorite dish</p>
                                            <a href="#" class="slidebtn">Enquiry now &nbsp;&nbsp; <i
                                                    class="fa-solid fa-arrow-right"></i></a>


                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel"
                                aria-labelledby="nav-profile-tab">
                                <div class="tabslide owl-carousel owl-theme">
                                    <div class="item tabcard">
                                        <img src="assets/images/Product/tab-card-1.png" alt="">
                                        <div class="tcard">
                                            <h3 class="categories-one__title">Ready To Eat Misal</h3>
                                            <p>provides you with a simple and convenient way of preparing your
                                                favorite dish</p>
                                            <a href="#" class="slidebtn">Enquiry now &nbsp;&nbsp; <i
                                                    class="fa-solid fa-arrow-right"></i></a>


                                        </div>
                                    </div>
                                    <div class="item tabcard">
                                        <img src="assets/images/Product/tab-card-2.png" alt="">
                                        <div class="tcard">
                                            <h3 class="categories-one__title">Ready To Eat Upma</h3>
                                            <p>provides you with a simple and convenient way of preparing your
                                                favorite dish</p>
                                            <a href="#" class="slidebtn">Enquiry now &nbsp;&nbsp; <i
                                                    class="fa-solid fa-arrow-right"></i></a>


                                        </div>
                                    </div>
                                    <div class="item tabcard">
                                        <img src="assets/images/Product/tab-card-1.png" alt="">
                                        <div class="tcard">
                                            <h3 class="categories-one__title">Ready To Eat Suji Halwa</h3>
                                            <p>provides you with a simple and convenient way of preparing your
                                                favorite dish</p>
                                            <a href="#" class="slidebtn">Enquiry now &nbsp;&nbsp; <i
                                                    class="fa-solid fa-arrow-right"></i></a>


                                        </div>
                                    </div>
                                    <div class="item tabcard">
                                        <img src="assets/images/Product/tab-card-1.png" alt="">
                                        <div class="tcard">
                                            <h3 class="categories-one__title">Ready To Eat Misal</h3>
                                            <p>provides you with a simple and convenient way of preparing your
                                                favorite dish</p>
                                            <a href="#" class="slidebtn">Enquiry now &nbsp;&nbsp; <i
                                                    class="fa-solid fa-arrow-right"></i></a>


                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-contact" role="tabpanel"
                                aria-labelledby="nav-contact-tab">

                                <div class="tabslide owl-carousel owl-theme">
                                    <div class="item tabcard">
                                        <img src="assets/images/Product/tab-card-1.png" alt="">
                                        <div class="tcard">
                                            <h3 class="categories-one__title">Ready To Eat Misal</h3>
                                            <p>provides you with a simple and convenient way of preparing your
                                                favorite dish</p>
                                            <a href="#" class="slidebtn">Enquiry now &nbsp;&nbsp; <i
                                                    class="fa-solid fa-arrow-right"></i></a>


                                        </div>
                                    </div>
                                    <div class="item tabcard">
                                        <img src="assets/images/Product/tab-card-2.png" alt="">
                                        <div class="tcard">
                                            <h3 class="categories-one__title">Ready To Eat Upma</h3>
                                            <p>provides you with a simple and convenient way of preparing your
                                                favorite dish</p>
                                            <a href="#" class="slidebtn">Enquiry now &nbsp;&nbsp; <i
                                                    class="fa-solid fa-arrow-right"></i></a>


                                        </div>
                                    </div>
                                    <div class="item tabcard">
                                        <img src="assets/images/Product/tab-card-1.png" alt="">
                                        <div class="tcard">
                                            <h3 class="categories-one__title">Ready To Eat Suji Halwa</h3>
                                            <p>provides you with a simple and convenient way of preparing your
                                                favorite dish</p>
                                            <a href="#" class="slidebtn">Enquiry now &nbsp;&nbsp; <i
                                                    class="fa-solid fa-arrow-right"></i></a>


                                        </div>
                                    </div>
                                    <div class="item tabcard">
                                        <img src="assets/images/Product/tab-card-1.png" alt="">
                                        <div class="tcard">
                                            <h3 class="categories-one__title">Ready To Eat Misal</h3>
                                            <p>provides you with a simple and convenient way of preparing your
                                                favorite dish</p>
                                            <a href="#" class="slidebtn">Enquiry now &nbsp;&nbsp; <i
                                                    class="fa-solid fa-arrow-right"></i></a>


                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-contact" role="tabpanel"
                                aria-labelledby="nav-contact-tab">
                                <div class="tabslide owl-carousel owl-theme">
                                    <div class="item tabcard">
                                        <img src="assets/images/Product/tab-card-1.png" alt="">
                                        <div class="tcard">
                                            <h3 class="categories-one__title">Ready To Eat Misal</h3>
                                            <p>provides you with a simple and convenient way of preparing your
                                                favorite dish</p>
                                            <a href="#" class="slidebtn">Enquiry now &nbsp;&nbsp; <i
                                                    class="fa-solid fa-arrow-right"></i></a>


                                        </div>
                                    </div>
                                    <div class="item tabcard">
                                        <img src="assets/images/Product/tab-card-2.png" alt="">
                                        <div class="tcard">
                                            <h3 class="categories-one__title">Ready To Eat Upma</h3>
                                            <p>provides you with a simple and convenient way of preparing your
                                                favorite dish</p>
                                            <a href="#" class="slidebtn">Enquiry now &nbsp;&nbsp; <i
                                                    class="fa-solid fa-arrow-right"></i></a>


                                        </div>
                                    </div>
                                    <div class="item tabcard">
                                        <img src="assets/images/Product/tab-card-1.png" alt="">
                                        <div class="tcard">
                                            <h3 class="categories-one__title">Ready To Eat Suji Halwa</h3>
                                            <p>provides you with a simple and convenient way of preparing your
                                                favorite dish</p>
                                            <a href="#" class="slidebtn">Enquiry now &nbsp;&nbsp; <i
                                                    class="fa-solid fa-arrow-right"></i></a>


                                        </div>
                                    </div>
                                    <div class="item tabcard">
                                        <img src="assets/images/Product/tab-card-1.png" alt="">
                                        <div class="tcard">
                                            <h3 class="categories-one__title">Ready To Eat Misal</h3>
                                            <p>provides you with a simple and convenient way of preparing your
                                                favorite dish</p>
                                            <a href="#" class="slidebtn">Enquiry now &nbsp;&nbsp; <i
                                                    class="fa-solid fa-arrow-right"></i></a>


                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-contact" role="tabpanel"
                                aria-labelledby="nav-contact-tab">
                                <div class="tabslide owl-carousel owl-theme">
                                    <div class="item tabcard">
                                        <img src="assets/images/Product/tab-card-1.png" alt="">
                                        <div class="tcard">
                                            <h3 class="categories-one__title">Ready To Eat Misal</h3>
                                            <p>provides you with a simple and convenient way of preparing your
                                                favorite dish</p>
                                            <a href="#" class="slidebtn">Enquiry now &nbsp;&nbsp; <i
                                                    class="fa-solid fa-arrow-right"></i></a>


                                        </div>
                                    </div>
                                    <div class="item tabcard">
                                        <img src="assets/images/Product/tab-card-2.png" alt="">
                                        <div class="tcard">
                                            <h3 class="categories-one__title">Ready To Eat Upma</h3>
                                            <p>provides you with a simple and convenient way of preparing your
                                                favorite dish</p>
                                            <a href="#" class="slidebtn">Enquiry now &nbsp;&nbsp; <i
                                                    class="fa-solid fa-arrow-right"></i></a>


                                        </div>
                                    </div>
                                    <div class="item tabcard">
                                        <img src="assets/images/Product/tab-card-1.png" alt="">
                                        <div class="tcard">
                                            <h3 class="categories-one__title">Ready To Eat Suji Halwa</h3>
                                            <p>provides you with a simple and convenient way of preparing your
                                                favorite dish</p>
                                            <a href="#" class="slidebtn">Enquiry now &nbsp;&nbsp; <i
                                                    class="fa-solid fa-arrow-right"></i></a>


                                        </div>
                                    </div>
                                    <div class="item tabcard">
                                        <img src="assets/images/Product/tab-card-1.png" alt="">
                                        <div class="tcard">
                                            <h3 class="categories-one__title">Ready To Eat Misal</h3>
                                            <p>provides you with a simple and convenient way of preparing your
                                                favorite dish</p>
                                            <a href="#" class="slidebtn">Enquiry now &nbsp;&nbsp; <i
                                                    class="fa-solid fa-arrow-right"></i></a>


                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-contact" role="tabpanel"
                                aria-labelledby="nav-contact-tab">
                                <div class="tabslide owl-carousel owl-theme">
                                    <div class="item tabcard">
                                        <img src="assets/images/Product/tab-card-1.png" alt="">
                                        <div class="tcard">
                                            <h3 class="categories-one__title">Ready To Eat Misal</h3>
                                            <p>provides you with a simple and convenient way of preparing your
                                                favorite dish</p>
                                            <a href="#" class="slidebtn">Enquiry now &nbsp;&nbsp; <i
                                                    class="fa-solid fa-arrow-right"></i></a>


                                        </div>
                                    </div>
                                    <div class="item tabcard">
                                        <img src="assets/images/Product/tab-card-2.png" alt="">
                                        <div class="tcard">
                                            <h3 class="categories-one__title">Ready To Eat Upma</h3>
                                            <p>provides you with a simple and convenient way of preparing your
                                                favorite dish</p>
                                            <a href="#" class="slidebtn">Enquiry now &nbsp;&nbsp; <i
                                                    class="fa-solid fa-arrow-right"></i></a>


                                        </div>
                                    </div>
                                    <div class="item tabcard">
                                        <img src="assets/images/Product/tab-card-1.png" alt="">
                                        <div class="tcard">
                                            <h3 class="categories-one__title">Ready To Eat Suji Halwa</h3>
                                            <p>provides you with a simple and convenient way of preparing your
                                                favorite dish</p>
                                            <a href="#" class="slidebtn">Enquiry now &nbsp;&nbsp; <i
                                                    class="fa-solid fa-arrow-right"></i></a>


                                        </div>
                                    </div>
                                    <div class="item tabcard">
                                        <img src="assets/images/Product/tab-card-1.png" alt="">
                                        <div class="tcard">
                                            <h3 class="categories-one__title">Ready To Eat Misal</h3>
                                            <p>provides you with a simple and convenient way of preparing your
                                                favorite dish</p>
                                            <a href="#" class="slidebtn">Enquiry now &nbsp;&nbsp; <i
                                                    class="fa-solid fa-arrow-right"></i></a>


                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- nav slider end  -->
<!-- nav slider end  -->
      <!--News One Start-->
      <section class="news-one spacing-section">
        <div class="container news">
            <div class="section-title text-center">

                <h2 class="section-title__title">Frequently asked questions </h2>
            </div>
            <div class="row">
                <div class="col-md-8 offset-md-2 acordpy">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Amet minim mollit sit aliqua dolor do amet sint.
                                </button>
                            </h2>
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

<?php include('public/script.php'); ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.2.0/jquery.magnific-popup.min.js" integrity="sha512-fCRpXk4VumjVNtE0j+OyOqzPxF1eZwacU3kN3SsznRPWHgMTSSo7INc8aY03KQDBWztuMo5KjKzCFXI/a5rVYQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> 
    <!-- template js -->
    <script src="assets/js/ogenix.js"></script>
    <script>
        $('.slider').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 2, margin: 30,
                }
            }
        })
    </script>
    <script>
        $('.slider-1').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 5
                }
            }
        })
 
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
    <script>
        $('.tabslide').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            responsive: {
                0: {
                    items: 1,
                },
                600: {
                    items: 1.5
                },
                1000: {
                    items: 3
                }
            }
        }) 
    </script>

    <script>
        $(document).ready(function() {
	$('.popup-gallery').magnificPopup({
		delegate: 'a',
		type: 'image',
		tLoading: 'Loading image #%curr%...',
		mainClass: 'mfp-img-mobile',
		gallery: {
			enabled: true,
			navigateByImgClick: true,
			preload: [0,1] // Will preload 0 - before current, and 1 after the current image
		},
		image: {
			tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
			titleSrc: function(item) {
				return item.el.attr('title') + ' by Marsel Van Oosten';
			}
		}
	});
});
    </script>
</body>




</html>