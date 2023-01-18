<?php 
include "email.php"
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- description website  -->
    <meta name="description" content="SS Engineering Service is a leading home appliance servicing and repair company in Vizag. We are on foot 24/7 and aim to deliver services."/>

    <!-- key words  -->
    <meta name="keywords" content="washing machine service center , washing machine service center near me,service center in Vizag , service center in Vizag , Appliance repair service center , Appliance service center near me, Refrigerator service center ,Refrigerator service center near me , Air conditioner service center , Fridge servicing near me, Ac online repairing center , ac service center near me, Door  step service center , Ac servicing cost, Fridge servicing cost, Servicing center, Home appliance service, Reparing center" />

    <!-- title of website  -->
    <title>SS Engineering Service Center | Air conditioner | Refrigerator  </title>
    <link rel="shortcut icon" href=".\assects\img\ss-logo.png" type="image/x-icon">
    <!-- website style sheet link  -->
    <link rel="stylesheet" href="style.css">
    <!-- website responsive style sheet  -->
    <link rel="stylesheet" href="./responsive.css">
    <!-- bootstrap cdn  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <!-- fontawoseme cdn  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"  />
    <!-- aos cdn  -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- jquery cdn  -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    

</head>
<body>

    <!-- nav section start  ============================================ -->
    <nav class="nav_contact">
        <div class="nav_div">
            <i class="fa-sharp fa-solid fa-phone"></i>
            <a href="tel:+91 8712342118"><p class="phone_num">+91 8712342118</p></a>
        </div>
        <div class="nav_div">
            <i class="fa-solid fa-envelope"></i> 
          <a href="mailto:sureshnaidu8577@gmail.com"><p>sureshnaidu8577@gmail.com</p></a> 
        </div>
    </nav>
    <section id="nav_id">
    <div class="nav_section">
       <a href="index.php"><img class="nav_logo" src=".\assects\img\ss-logo.png" alt="logo"></a>
        <ul class="nav_ul ul_li" id="nav_section" >
            <a href="./"><li class="hide" >Home</li></a>
            <a href="#about"><li class="hide">About Us</li></a>
            <a href="#our_serv"><li class="hide">Our Service</li></a>
            <a href="#why_us"><li class="hide">Why Us?</li></a> 
            <a href="#contact"><li class="hide">Contact Us</li></a> 
            <a href="#our_team"><li class="hide">Our Team</li></a> 
            <a href="#reviews"><li class="hide">Reviews</li></a> 
        </ul>
        
        <!-- <button class="appointement_btn">Book Appoitment</button> -->
        <ul class="nav_icons">
           <a href=""><li><i class="fa-brands fa-instagram insta-fa" ></i></li></a>
           <a href=""><li><i class="fa-brands fa-facebook-f face-fa"></i></li></a>
           <a href="https://wa.me/+91 8712342118" target="_blank"><li><i class="fa-brands fa-whatsapp whatsapp-fa"></i></li></a>
           <a href=""><li><i class="fa-brands fa-twitter twitter-fa"></i></li></a>
        </ul>
        <div class="myNav" onclick="myFunction(this)">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
          </div>
    </div>

  </section>
 


  <!-- nav section end  ================================================-->


<!-- preloader section start ============================= -->

<div id="overlay">
  <div class="preload">
    <span class="loadtext">SS Engineering <br> Service . . .</span>
    <!-- <span class="loadtext"><img class="" src=".\assects\img\ss-logo-removebg-preview.png" alt="logo"></span> -->
    <div class="spinner"></div>
  </div>
</div>

<!-- preloader section end ============================= -->


<!-- call section start  ============================= -->

    <div class="inner-pulse">
     <a href="tel:+91 8712342118"><i class="fa-solid fa-phone call_to"></i></a>
    </div>

<!-- call section end ============================= -->



    <!-- carousel section start ========================================== -->
    <section id="home">

    <div id="carouselExampleCaptions" class="carousel slide carousel_div" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src=".\assects\img\bg-count-img.png" class="d-block w-100" alt="...">
            <div class="carousel-caption  d-md-block carousel_content">
              <h5>We Provide Best AC Repair Services</h5>
              <p>SS Engineering Provide Best Service in Vizag.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src=".\assects\img\ac_banner.png" class="d-block w-100" alt="...">
            <div class="carousel-caption  d-md-block carousel_content">
              <h5>Quality Heating & Air Condition Services</h5>
              <p>SS Engineering Provide Best Service in Vizag.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src=".\assects\img\bg_img_2.png" class="d-block w-100" alt="...">
            <div class="carousel-caption  d-md-block carousel_content">
              <h5> AC Installation And Repair</h5>
              <p>SS Engineering Provide Best Service in Vizag.</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </button>
      </div>
    </section>

    <!-- carousel section end  =================================-->

    <!-- aboutus section start ================================= -->
    <section id="about">

    <div class="container about_section" >
        <div class="row">
            <div class="col-lg-6 " data-aos="fade-up" data-aos-duration="1000">
                <h1 class="about_title">Welcome To Best Cooling & Heating Service Center</h1>    
                <div class="about_export">
                    <div class="about_technician">
                        <img src="./assects/img/best_quality_img.png" alt="">
                        <h4>Expert Technician</h4>
                    </div>
                    <div class="about_technician">
                        <img src="./assects/img/expert_technic_img.png" alt="">
                        <h4>Best Quality Services</h4>
                    </div>
                </div>
                <!-- <p class="about-pera">There are many reasons to confidently choose SS Engineering Service as your provider of heater and air conditioning services—both commercial and residential. With more than 20 locations in  vizag SS Engineering Service is a trusted name in the field of heating and air conditioning installation, maintenance, and repair. We are proud of our reputation for putting clients first and getting the job done right the first time, every time.
                </p> -->
                <p class="about-pera">SS Engineering is a heating and cooling service company with a history of excellence, customer service, and quality craftsmanship. We specialize in HVAC service, replacement, and repair for both residential and commercial customers in Vizag.</p>
                <div class="about_export export_contact">              
                <div class="about_icons">
                   <a href="tel:+91 8712342118"> <i class="fa-sharp fa-solid fa-phone"></i></a>
                    <a href="tel:+91 8712342118"><p>+91 9087654321</p></a>
                </div>
                <div class="about_icons">
                   <a href="mailto:sureshnaidu8577@gmail.com"> <i class="fa-solid fa-envelope"></i> </a>
               <a href="mailto:sureshnaidu8577@gmail.com"><p>sureshnaidu8577@gmail.com</p></a> 
                </div>
               </div>
            </div>
            <div class="about_img col-lg-6" data-aos="zoom-in-up"  data-aos-duration="1000">
                <img class="img-1" src="./assects/img/our-service-img-1.jfif" alt="" >
                <img class="img-2" src="./assects/img/our-service-img-4.png" alt="" >
                <img class="img-3" src="./assects/img/our-service-img-3.jpg" alt="" >
                <img class="img-4" src="./assects/img/our-service-img-6.jfif" alt="" >
            </div>
        </div>
    </div>
    </section>
    <!-- aboutus section end ========================================= -->   

    <!-- countup numbers start =========================================  -->

    <section class="count_section">
    <div class="align count_up">
      <div class="stat-wrap">
         <div>
            <span class="stat-number">11000</span>  
            <p>Happy Clients</p>  
         </div>
            <div>
            <span class="stat-number">12000</span> 
            <p>Projects Succeed</p>   
         </div>
            <div>
            <span class="stat-number">12</span> 
            <p> Years Experience</p>  
         </div>
            <div>
            <span class="stat-number">3500</span>   
            <p>Clients </p>
         </div>
      </div>
   </div>
  </section>

<!-- countup numbers end ==========================================  -->



<!-- why people choose us section start  ====================-->
<section id="why_us">
<div class="container" >
    <div class="row">
        <div class="why_us_sec choose_section">
            <div class="col-lg-6">
                <h1 class="choose-title">Few Reasons Why People Choosing Us!</h1>
                <p>SS Engineering Service wants you to stay comfortable and breathe clean air all year round! That’s why our company focuses on excellence in customer service and quality AC and heating services. We are proud of our reputation for putting clients first, with a brand synonymous with excellence since 2010! Wherever you see the name SS Engineering Service, you can expect quality services and customer attention.</p>
                <div class="why_us">
                    <div class="choose_icon">   
                    <img src="./assects/img/icon-08-light-choose-us.png" alt="">
                    </div>
                    <div >
                        <h3>Trusted Service Center</h3>
                        <p>SS Engineering service is one of the trusted service in Vizag.</p>
                    </div>
                </div>
                <div class="why_us">
                    <div class="choose_icon">
                    <img src="./assects/img/icon-10-light-choose-us.png" alt="">
                    </div>
                    <div>
                        <h3>Reasonable Price</h3>
                        <p>The price also reasonable in this SS Engineering company.</p>
                    </div>
                </div>
                <div class="why_us ">
                    <div class="choose_icon">
                    <img src="./assects/img/icon-011-light-choose-us.png" alt="">
                    </div>
                    <div>
                        <h3>24/7  Customer Support</h3>
                        <p>We give the support to customers and respond in time .</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <img class="choose-img" src="./assects/img/choose-us-img.png" alt="">
            </div>
        </div>
    </div>
</div>
</section>
<!-- why people choose us section end  ========================-->


    
<!-- our service start ================================ -->
<section id="our_serv">

<div class="our_service" >
    <h1 class="service_title"> We Provide professional Heating & Cooling Services</h1>
    <div class="container">
        <div class="row">
            
            <!-- card  -->
            <div class="  our_service_div col-md-4 " data-aos="fade-up" data-aos-duration="1200">
                <div class="our_service_div_img">
                    <img src="./assects/img/our-service-img-1.jfif" alt="AC Installation" />
                    <!-- <div class="w3-xlarge w3-display-bottomleft w3-padding">LONDON 60&deg; F</div> -->
                </div>
                <div class="w3-row">
                    <div class="our-service-content">
                        <div class="our_service_img">
                            <img src="./assects/img/icon-01-our-service.png" alt="AC Installation" />
                        </div>
                        <h4>AC Installation</h4>
                    </div>
                </div>
            </div>
            <!-- card  -->
            <div class="our_service_div col-md-4 " data-aos="fade-up" data-aos-duration="1200">
                <div class="our_service_div_img">
                    <img src="./assects/img/our-service-img-2.jpg" alt="AC Installation" />
                    <!-- <div class="w3-xlarge w3-display-bottomleft w3-padding">LONDON 60&deg; F</div> -->
                </div>
                <div class="">
                    <div class="our-service-content">
                        <div class="our_service_img">
                            <img src="./assects/img/icon-02-light-our-service.png" alt="AC Installation" />
                        </div>
                        <h4>Cooling Services</h4>
                    </div>
                </div>
            </div>
            <!-- card  -->
            <div class="our_service_div col-md-4" data-aos="fade-up" data-aos-duration="1200">
                <div class="our_service_div_img">
                    <img src="./assects/img/our-service-img-3.jpg" alt="AC Installation" />
                    <!-- <div class="w3-xlarge w3-display-bottomleft w3-padding">LONDON 60&deg; F</div> -->
                </div>
                <div class="w3-row">
                    <div class="our-service-content">
                        <div class="our_service_img">
                            <img src="./assects/img/icon-03-light-our-service.png" alt="AC Installation" />
                        </div>
                        <h4>Heating Services</h4>
                    </div>
                </div>
            </div>
            <!-- card  -->
            <div class="  our_service_div col-md-4" data-aos="fade-up" data-aos-duration="1200">
                <div class="our_service_div_img">
                    <img src="./assects/img/our-service-img-4.png" alt="AC Installation" />
                    <!-- <div class="w3-xlarge w3-display-bottomleft w3-padding">LONDON 60&deg; F</div> -->
                </div>
                <div class="w3-row">
                    <div class="our-service-content">
                        <div class="our_service_img">
                            <img src="./assects/img/icon-04-light-our-service.png" alt="AC Installation" />
                        </div>
                        <h4>Maintenance & Repair</h4>
                    </div>
                </div>
            </div>
            <!-- card  -->
            <div class="  our_service_div col-md-4" data-aos="fade-up" data-aos-duration="1200">
                <div class="our_service_div_img">
                    <img src="./assects/img/our-service-img-5.jpg" alt="AC Installation" />
                    <!-- <div class="w3-xlarge w3-display-bottomleft w3-padding">LONDON 60&deg; F</div> -->
                </div>
                <div class="w3-row">
                    <div class="our-service-content">
                        <div class="our_service_img">
                            <img src="./assects/img/icon-05-light-our-service.png" alt="AC Installation" />
                        </div>
                        <h4>Indoor Air Quality</h4>
                    </div>
                </div>
            </div>
            <!-- card  -->
            <div class="  our_service_div col-md-4" data-aos="fade-up" data-aos-duration="1200">
                <div class="our_service_div_img">
                    <img src="./assects/img/our-service-img-6.jfif" alt="AC Installation" />
                    <!-- <div class="w3-xlarge w3-display-bottomleft w3-padding">LONDON 60&deg; F</div> -->
                </div>
                <div class="w3-row">
                    <div class="our-service-content">
                        <div class="our_service_img">
                            <img src="./assects/img/icon-06-light-our-service.png" alt="AC Installation" />
                        </div>
                        <h4>Annual Inspections</h4>
                    </div>
                </div>
            </div>
            <!-- card  -->
        </div>
     </div>
</div>
</section>
<!-- our service end ================================= -->


<!-- Contact Area Start ====================================== -->
<section  id="contact">

<div class="felona-contact-area section_70">
  <div class="container-fluid">
      <div class="row">
          <div class="col-lg-6">
            <div class="inner-contact-content">
              <div class="contact-info">
                  <h3>Do You Have Any Question?</h3>
                  <span class="animate-border mr-auto mb-4"></span>
                  <p>Are you in a dilemma on how to approach the right service provider to fulfill your reapiring
                      needs. Wait not, we are just a phone call away to provide you the timely and professional
                      support as per your requirement. We are available 24/7 to serve you.</p>
                     <a href="tel:+91 8712342118"><button class="contact_btn"> Call Us</button></a>
                  <!-- <div class=" inner-contact-info inner-contact-section">
                      <div class="row adress-gmail">
                          <div class="single-contact-info">
                              <p>Contact via email</p>
                              <h4>servicecenter@gmail.com</h4>
                          </div>
                          <div>
                              <div class="single-contact-info">
                                  <p>Head Office address</p>
                                  <h4>House Number 11-11/11 Vapagunta. hacnbcanasu annandjcajh anshduwb abdnehu  520001</h4>
                              </div>
                          </div>
                      </div>
                    
                      <div class="row address-card">
                        <div class="single-contact-info">
                            <p>feel like talking</p>
                            <h4>+91 9553432345</h4>
                        </div>
                        <div class="single-contact-info">
                            <p>get connected with</p>
                            <ul class="contact-social">
                                <li class="fb" ><a href="" target="_blank"><i class="fa-brands fa-facebook"></i></a></li>
                                <li class="twt"><a href="" target="_blank"><i class="fa-brands fa-twitter"></i></a></li>
                                <li class="linkd"><a href="" target="_blank"><i class="fa-brands fa-whatsapp"></i></a></li>
                                <li class="yt"><a href="" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                             </ul> 
                        </div>
                    </div>
                  </div> -->
              </div>
            </div>
          </div>
          <!-- <div class="col-lg-1"></div> -->
          <div class="col-lg-6">
            <div class="inner-contact-content-form">
              <div class="contact-form">
                  <form method="post">
                      <div id="contactForm">
                      <div class="row">
                          <div class="col-lg-6">
                              <p>
                                  <input type="text" class="mandatory" placeholder="Your Name" required name="f_name" />
                              
                              </p>
                          </div>
                          <div class="col-lg-6">
                              <p>
                                  <input type="email" class="mandatory" placeholder="Email Address" required name="f_email"/>
                              
                              </p>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-lg-6">
                              <p>
                                  <input type="text" class="mandatory" placeholder="Phone Number" required name="f_mobile" />
                              
                              </p>
                          </div>
                          <div class="col-lg-6">
                              <p>
                                  <input type="text" class="mandatory" placeholder="Type of service" required name="f_service"/>
                              
                              </p>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-lg-12">
                              <p>
                                  <textarea placeholder="Optional Message" type="text" name="f_content"></textarea>
                              </p>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-lg-12">
                              <p>
                                  <button type="submit" name="f_sumbit_btn">send message</button>
                              </p>
                          </div>
                      </div>
                      </div>
                  </form>
              </div>
            </div>
          </div>
      </div>
  </div>
</div>
</section>

<!-- Contact Area End ================================ -->

<!-- pop section start =========================== -->

<!-- <div class="popup">
    <button id="close">&times;</button>
    <h2>This Is The Title</h2>
    <p>
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Expedita distinctio fugiat alias iure qui, commodi minima magni ullam aliquam dignissimos?
    </p>
    <a class="a-tag" href="#">Let's Go</a>
</div>  -->
<!-- pop section end =========================== -->

<!-- scroll top section start  ===========================================-->
<div id="progress">
    <span id="progress-value">&#x1F815;</span>
  </div>
<!-- scroll top section end  ===============================================-->

<!-- our team members section start =========================================== -->
<section id="our_team">
<div class="our_team_members" >
    <div class="our_team">
      <h1> <i class="fa-solid fa-house-chimney home_fa"></i> Our Team</h1>
    </div>
    <div class="our_team ">
      <!-- Column 1-->
      <div class="our_team_column">
        <div class="our_team_card">
          <div class="img-container">
            <img src="./assects/img/naidu_img.png" />
          </div>
          <h3>Naidu</h3>
          <p>Air Con</p>
          <div class="our_team_icons">
            <a href="">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="">
                <i class="fa-brands fa-square-facebook"></i>
            </a>
            <a href="">
                <i class="fa-brands fa-square-instagram"></i>
            </a>
            <a href="">
              <i class="fas fa-envelope"></i>
            </a>
          </div>
        </div>
      </div>
      <!-- Column 2-->
      <div class="our_team_column">
        <div class="our_team_card">
          <div class="img-container">
            <img src="./assects/img/suresh-img.png" />
          </div>
          <h3>Suresh</h3>
          <p>Air Con</p>
          <div class="our_team_icons">
            <a href="">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="">
                <i class="fa-brands fa-square-facebook"></i>
            </a>
            <a href="">
                <i class="fa-brands fa-square-instagram"></i>
            </a>
            <a href="">
              <i class="fas fa-envelope"></i>
            </a>
          </div>
        </div>
      </div>
      <!-- Column 3-->
      <div class="our_team_column">
        <div class="our_team_card">
          <div class="img-container">
            <img src=".\assects\img\sai_img.png" />
          </div>
          <h3>Sai</h3>
          <p>AiR Con</p>
          <div class="our_team_icons">
            <a href="">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="">
                <i class="fa-brands fa-square-facebook"></i>
            </a>
            <a href="">
                <i class="fa-brands fa-square-instagram"></i>
            </a>
            <a href="">
              <i class="fas fa-envelope"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  </section>

<!-- our team members section end ============================================= -->

<!-- testimonial section start  ==============================================-->
<section id="reviews">
    <div id="testimonial-area" >
        <div class="container">
            <div class="row">
            
                <div class="col-md-8 offset-md-2">
                    <div class="section-heading text-center">
                        <!-- <h5>Testimonial Design </h5> -->
                        <h2>What They Say About Our Services</h2>
                        <!-- <p>Reviews about our services  </p> -->
                    </div>
                </div>
            
            </div>
            <div class="testimonial_section">
            
                <div class="client-single active position-1" data-position="position-1">
                    <div class="client-img">
                        <img src=".\assects\img\hyma_img.png" alt="">
                    </div>
                    <div class="client-comment">
                        <h3>“Just wanted to say a big Thank You to Naidu, my technician. He was very friendly and efficient at his job. He didn't mind answering my questions and was very informative. I will be staying with this company for my future needs!” </h3>
                        <span><i class="fa fa-quote-left"></i></span>
                    </div>
                    <!-- <div class="client-info">
                        <h3>Design By</h3>
                        <p>Manjay Gupta</p>
                    </div> -->
                </div>
            
                <div class="client-single inactive position-2" data-position="position-2">
                    <div class="client-img">
                        <img src=".\assects\img\women_img_1.png" alt="">
                    </div>
                    <div class="client-comment">
                        <h3>“Great, professional people. Everyone I spoke with was very polite and easy to deal with. Very knowledgeable of every aspect of what we needed. I would recommend SS Engineering Service center to anyone. They are top notch.” </h3>
                        <span><i class="fa fa-quote-left"></i></span>
                    </div>
                    <!-- <div class="client-info">
                        <h3>Design By</h3>
                        <p><a href="https://manjaygupta.com">Manjay Gupta</a></p>
                    </div> -->
                </div>
            
                <div class="client-single inactive position-3" data-position="position-3">
                    <div class="client-img">
                        <img src=".\assects\img\women_img_2.png" alt="">
                    </div>
                    <div class="client-comment">
                        <h3>“Had a heating problem on a cold, windy Saturday morning. Comfort Specialist Ram was prompt, professional and helpful in solving the problem and suggesting ways of preventing future problems.” </h3>
                        <span><i class="fa fa-quote-left"></i></span>
                    </div>
                    <!-- <div class="client-info">
                        <h3>Design By</h3>
                        <p><a href="https://manjaygupta.com">Manjay Gupta</a></p>
                    </div> -->
                </div>
            
                <div class="client-single inactive position-4" data-position="position-4">
                    <div class="client-img">
                        <img src=".\assects\img\women_img_3.png" alt="">
                    </div>
                    <div class="client-comment">
                        <h3>“Great first experience!! Technician was knowledgeable & friendly. Took his time checking my system & explained things so that I could understand. Looking forward to being a long time customer!”</h3>
                        <span><i class="fa fa-quote-left"></i></span>
                    </div>
                    <!-- <div class="client-info">
                        <h3>Design By</h3>
                        <p><a href="https://manjaygupta.com">Manjay Gupta</a></p>
                    </div> -->
                </div>
            
                <div class="client-single inactive position-5" data-position="position-5">
                    <div class="client-img">
                        <img src=".\assects\img\img_review.png" alt="">
                    </div>
                    <div class="client-comment">
                        <h3>“SS Engineering Service came out and handled a minor issue for me in very little time. Sai was very knowledgeable and polite. Thanks for a great service experience!”</h3>
                        <span><i class="fa fa-quote-left"></i></span>
                    </div>
                    <!-- <div class="client-info">
                        <h3>Design By</h3>
                        <p><a href="https://manjaygupta.com">Manjay Gupta</a></p>
                    </div> -->
                </div>
            
                <div class="client-single inactive position-6" data-position="position-6">
                    <div class="client-img">
                        <img src=".\assects\img\divya_img.png" alt="">
                    </div>
                    <div class="client-comment">
                        <h3>“They Very professional and personable. Glad I can support local businesses. If I have a problem again won't hesitate to call SS Engineering Service !!!” </h3>
                        <span><i class="fa fa-quote-left"></i></span>
                    </div>
                    <!-- <div class="client-info">
                        <h3>Design By</h3>
                        <p><a href="https://manjaygupta.com">Manjay Gupta</a></p>
                    </div> -->
                </div>
            
                <div class="client-single inactive position-7" data-position="position-7">
                    <div class="client-img">
                        <img src=".\assects\img\men_review_img.png" width="40px" alt="">
                    </div>
                    <div class="client-comment">
                        <h3>“Great work, very professional and would highly recommend their services!” </h3>
                        <span><i class="fa fa-quote-left"></i></span>
                    </div>
                    <!-- <div class="client-info">
                        <h3>Design By</h3>
                        <p><a href="https://manjaygupta.com">Manjay Gupta</a></p>
                    </div> -->
                </div>
            
            </div>
        </div>
    </div>
</section>
  
<!-- testimonial section end ===================================== -->

<!-- map section start ========================================== -->

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3800.0148773125543!2d83.22405881451601!3d17.74393816398813!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a3967dfc8c9bc01%3A0x9a89b380b6b6687!2sBaji%20Junction!5e0!3m2!1sen!2sin!4v1673341062940!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

<!-- map section end  ==========================================-->

<!-- footer section start ============================================= -->

<footer class="footer-section">
    <div class="container">
        <div class="footer-cta pt-5 pb-5">
            <div class="row">
                <div class="col-xl-4 col-md-4 mb-30">
                    <div class="single-cta">
                        <i class="fas fa-map-marker-alt"></i>
                        <div class="cta-text">
                            <h4>Find us</h4>
                            <span><a href="https://www.google.com/maps/search/Baji+junction+bus+stop/@17.7438764,83.2274575,19.61z" target="_blank"> 
                                    Pendurthi-NAD BRTS Express Way, Baaji Junction Area, Gopalapatnam, Visakhapatnam, Andhra Pradesh 530027.
                                    </a></span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4 mb-30">
                    <div class="single-cta">
                        <i class="fas fa-phone"></i>
                        <div class="cta-text">
                            <h4>Call us</h4>
                            <span class="phone_num"><a href="tel:8712342118">8712342118</a></span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4 mb-30">
                    <div class="single-cta">
                        <i class="far fa-envelope-open"></i>
                        <div class="cta-text">
                            <h4>Mail us</h4>
                            <span><a href="mailto:sureshnaidu8577@gmail.com">sureshnaidu8577@gmail.com</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-content pt-5 pb-5">
            <div class="row">
                <div class="col-xl-4 col-lg-4 mb-50">
                    <div class="footer-widget">
                        <div class="footer-logo">
                            <a href="index.php"><img src=".\assects\img\ss-logo.png" class="img-fluid" alt="logo"></a>
                        </div>
                        <div class="footer-text">
                            <p>SS Engineering Service is a heating and cooling service and We specialize in HVAC service in Vizag.</p>
                        </div>
                        <div class="footer-social-icon">
                            <span>Follow us</span>
                            <a href=""><i class="fab fa-facebook-f facebook-bg"></i></a>
                            <a href=""><i class="fab fa-twitter twitter-bg"></i></a>
                            <!-- <a href="#"><i class="fab fa-google-plus-g "></i></a> -->
                            <a href=""><i class="fa-brands fa-instagram google-bg" ></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                    <div class="footer-widget">
                        <div class="footer-widget-heading">
                            <h3>Quick Links</h3>
                        </div>
                        <ul id="nav_section">
                            <li><a href="#home"> <i class="fa-solid fa-angles-right"></i> Home</a></li>
                            <li><a href="#about"><i class="fa-solid fa-angles-right"></i> About us</a></li>
                            <li><a href="#our_serv"><i class="fa-solid fa-angles-right"></i> Our Services</a></li>
                            <li><a href="#contact"><i class="fa-solid fa-angles-right"></i> Contact us</a></li>
                            <li><a href="#why_us"><i class="fa-solid fa-angles-right"></i> Why Us?</a></li>
                            <li><a href="#our_team"><i class="fa-solid fa-angles-right"></i> Our Team</a></li>
                            <li><a href="#reviews"><i class="fa-solid fa-angles-right"></i> Reviews</a></li>
                            <li><a href="#"><i class="fa-solid fa-angles-right"></i> Site Map</a></li>
                        </ul>
                      
                        
                    </div>
                   
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 mb-50">
                    <div class="footer-widget">
                        <div class="footer-widget-heading">
                            <h3>Working Hours</h3>
                        </div>
                        <div class="footer-text mb-25">
                            <!-- <p>Don’t miss to subscribe to our new feeds, kindly fill the form below.</p> -->
                              <h5><i class="fa-solid fa-angles-right"></i> Mon-Sat: 8AM - 6PM</h5>
                              <h5><i class="fa-solid fa-angles-right"></i> Sunday: 9AM - 7PM</h5>
                        </div>
                        <div class="subscribe-form">
                            <form action="#">
                                <input type="text" placeholder="Email Address">
                                <button><i class="fab fa-telegram-plane"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 text-center text-lg-left">
                    <div class="copyright-text">
                        <p>Copyright &copy; All Right Reserved by <span>SS Engineering Service </span></p>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 d-none d-lg-block text-right">
                    <div class="footer-menu">
                        <ul>
                            <li><a href="#">Design By <span class="design_by"> Suresh </span></a></li>
                            <!-- <li><a href="#">Team</a></li> -->
                            <!-- <li><a href="#">Privacy</a></li>
                            <li><a href="#">Policy</a></li>
                            <li><a href="#">Contact</a></li> -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>


<!-- footer section end =============================================== -->


<!-- website js script  -->
<script src="./main.js"></script>
<!-- aos cdn  -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script>
  AOS.init();
</script>
<!-- bootstrap cdn  -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<!-- preloader  -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
</body>
</html>