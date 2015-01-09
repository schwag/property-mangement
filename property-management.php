<?php include "php/header.php";?>
    <body data-spy="scroll" class="mc-ecom">

        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <?php include "php/navtwo.php";?> <!-- end navigation -->

        
        <section id="ecommercehome" class="jumbotron propertymanagementJumbotron">
            <div class="container">
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1 bannerBox">
                        <h1>Property Management Title</h1>
                        <div class="bannerPar">
                        <h4>This is the property management tagline!</h4>
                        </div>
                        
                            <div class="col-xs-12 col-sm-6 col-md-4 ggl-sscrl">
                            
                                <a id="down-mc-btn" class="scroll btn-lg btn-success ggl-sscrl" data-speed="380" data-target="#professionalservices" href="#professionalservices">
                                
                                    <span class="down-arw-btn">
                                        <span class="glyphicon glyphicon-arrow-down dwn-inside"></span>
                                    </span>
                                    
                                    Read More
                                    
                                </a>
                            
                            </div>

                        
                    </div>
                </div>
            </div>
        </section><!--  end jumbotron section -->

            <div class="col-xs-12 pointerWhite">              
            </div>

        <section id="professionalservices">
            <div class="container">
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1">
                        <h2 class="text-center">WHAT WE CAN DO</h2>
                            <div class="row text-center">
                                <div class="col-sm-4 smallHeading">
                                    <img src="img/placeme.png" alt="">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tristique enim laoreet nisl fermentum, et tristique nisl commodo. Nulla tortor enim, porttitor vel magna convallis, sagittis luctus felis. Maecenas aliquet metus ut massa facilisis, et dictum neque suscipit.</p>
                                </div>
                                <div class="col-sm-4 smallHeading">
                                    <img src="img/placeme.png" alt="">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tristique enim laoreet nisl fermentum, et tristique nisl commodo. Nulla tortor enim, porttitor vel magna convallis, sagittis luctus felis. Maecenas aliquet metus ut massa facilisis, et dictum neque suscipit.</p>
                                </div>
                                <div class="col-sm-4 smallHeading">
                                    <img src="img/placeme.png" alt="">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tristique enim laoreet nisl fermentum, et tristique nisl commodo. Nulla tortor enim, porttitor vel magna convallis, sagittis luctus felis. Maecenas aliquet metus ut massa facilisis, et dictum neque suscipit.</p>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </section><!-- end about section -->

            <div class="col-xs-12 pointerWhite"> 
            </div>

        <section id="features" class="blue-back">
            <div class="container">
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1 blueTier">
                        <h2>WHY CHOOSE US</h2>
                        <img src="img/bigplace.png" class="img-responsive">
                        <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tristique enim laoreet nisl fermentum, et tristique nisl commodo. Nulla tortor enim, porttitor vel magna convallis, sagittis luctus felis. Maecenas aliquet metus ut massa facilisis, et dictum neque suscipit. Aliquam erat volutpat. Morbi sollicitudin pretium mi. Curabitur congue justo nec augue consectetur lacinia. Nam lacinia eros a condimentum sagittis.</p>
                    </div>
                </div>
            </div>
        </section><!-- end about section -->

            <div class="col-xs-12 pointerWhite"> 
            </div>

        <section id="faq">
            <div class="container">
                    <div class="col-sm-10 col-sm-offset-1">
                        <h2 class="text-center">WHAT WE'VE DONE</h2>
                        <p class="text-center">Each client is unique, therefore, we have developed a process to identify our
                        clients requirements, put together a strategy for those requirements, implement a custom strategy, measure the strategy, 
                        and optimize the stratgy. This is a process we repeat each month with complete transparency.</p> 
                    </div>
            </div>
        </section><!-- end campaign types section -->

            <div class="col-xs-12 pointerWhite"> 
            </div>

        <section id="showcase" class="blue-back">
            <div class="container">
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1">
                        <h2 class="text-center">OUR CREDENTIALS</h2>
                            <div class="row text-center caseLogos">
                                <div class="col-sm-6 smallHeading"> 
                                    <div class="hovergalleryTwo">
                                        <a href="#case-study-classroom" role="button" class="caseButton" ><img src="img/placeme.png" alt=""></a>                                 
                                    </div>                                 
                                </div>
                                <div class="col-sm-6 smallHeading">
                                    <div class="hovergalleryTwo">
                                        <a href="#case-study-kelleybros" role="button" class="caseButton" ><img src="img/placeme.png" alt=""></a>                                 
                                    </div>   
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </section><!--end case studies section -->

            <div class="col-xs-12 pointerWhite">
            </div>

        <section id="ecommercecontact">
            <div class="container">
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1">
                        <h2 class="text-center">CONTACT US</h2>
                        <p class="text-center">request a proposal or ask us some questions</p>
                            <div class="row">
                                <div class="col-sm-5">
                                    
                                    <form id="contactForm" action="php/thankyou.php" method="post" role="form">
                                        <?php include "php/contact-form.php";?> 
                                        
                                        <input type="hidden" name="form_submitted" value="Contact Us Form">
                                    </form>
                                    
                                </div>
                                <div class="col-sm-7 text-center">
                  <!-- Responsive iFrame -->
                            <div class="Flexible-container">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2960.7280932550107!2d-80.137853!3d42.09187499999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88327fabfd1d0ad9%3A0x9b5740b3c66b3b78!2sMyriad+Core+LLC!5e0!3m2!1sen!2sus!4v1396022074757" width="600" height="450" frameborder="0" style="border:0"></iframe>                                </div>
                                <h3>Phone: 1-877-858-2797</h3>                           
                            </div>
                    </div>
                </div>
            </div>
        </section><!-- end contact section -->

            <div class="col-xs-12 pointerWhite">
            </div>

        <section class="blue-back">
        <footer>
            <div class="container footer">
                <div class="row">
                    <div class="col-sm-5 col-sm-offset-1 text-center">
                        <div class="hovergalleryTwo ">
                        <h2>STAY CONNECTED</h2>
                        <a href="https://twitter.com/myriadcore" target="_blank"><img src="img/twitter-bird-48.png" alt="" width="48px" height="48px"></a>
                        <a href="https://www.facebook.com/MyriadCore" target="_blank"><img src="img/facebook-48.png" alt="" width="48px" height="48px"></a>
                        <a href="http://www.linkedin.com/company/2935125?trk=prof-exp-company-name" target="_blank"><img src="img/linkedin-48.png" alt="" width="48px" height="48px"></a>
                        <a href="https://plus.google.com/u/0/+Myriadcore/posts" target="_blank"><img src="img/google-48.png" alt="" width="48px" height="48px"></a>
                        </div>
                    </div>
                    <div class="col-sm-5 text-center">
                        <h2>ADWORDS NEWSLETTER</h2>
                        <p>Receive the latest Adwords best practices each month</p>
                        <!-- Begin MailChimp Signup Form -->
                        <div id="mc_embed_signup">
                        <form action="http://myriadcore.us8.list-manage1.com/subscribe/post?u=b766662aac51f9e4ae15708d4&amp;id=5de5b14a93" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                            
                            <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
                            <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                            <div style="position: absolute; left: -5000px;"><input type="text" name="b_b766662aac51f9e4ae15708d4_5de5b14a93" value=""></div>
                            <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
                        </form>
                        </div>
                        <!--End mc_embed_signup-->
                    </div>
                </div>
            </div>
        </footer><!-- end footer section -->
        </section>
        
        <a class="mc-go-to-top" href="#"></a>
        
        <?php include "php/auditrequestmodal.php";?>
        <?php include "php/casestudiesmodal.php";?>
        <?php include "php/showcasemodal.php";?>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/main.js"></script>
        <script src='js/smooth-scroll-ecommerce.js'></script>
        <script src='js/smooth-hover.js'></script> 
        <script src='js/validate.js'></script><br>
        <script src='js/popover.js'></script> 
        

        
           
    </body>
</html>
