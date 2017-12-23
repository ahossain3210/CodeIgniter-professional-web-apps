<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo $title; ?></title>

        <!-- Bootstrap -->
        <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/animate.css">
        <link href="<?php echo base_url(); ?>assets/css/prettyPhoto.css" rel="stylesheet">
        <!-----------Nivo Slider Theme------------>
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/themes/default/default.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/themes/light/light.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/themes/dark/dark.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/themes/bar/bar.css" type="text/css" media="screen" />

        <!-----------Nivo Slider CSS------------>

        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/nivo-slider.css" type="text/css" media="screen" />

        <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet" />	
        <link href="<?php echo base_url(); ?>assets/css/my_style.css" rel="stylesheet" />	
        <link rel="icon" href="<?php echo base_url(); ?>assets/images/fav.ico" type="image/x-icon">

        <!-- =======================================================
            Theme Name: Company
            Theme URL: https://bootstrapmade.com/company-free-html-bootstrap-template/
            Author: BootstrapMade
            Author URL: https://bootstrapmade.com
        ======================================================= -->
<!--        <script
            src="https://code.jquery.com/jquery-2.2.4.js"
            integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
        crossorigin="anonymous"></script>-->
        <script src="<?php echo base_url(); ?>assets/js/dropdown.js"></script>
        <script>
            $(document).ready(function () {
                $('.menu .dropdown').hover(function () {
                    $(this).children('.menu ul.sub-menu').stop(true, false, true).slideDown();
                },
                        function () {
                            $(this).children('.menu ul.sub-menu').slideUp();
                        }
                );
            });
        </script>
        
    </head>
    <body>

        <?php
        $this->load->view('pages/header');
        ?>
        <?php
        if (isset($slider)) {
            ?>
        <!--            <section id="main-slider" class="no-margin">
                        <div class="carousel slide">      
                            <div class="carousel-inner">
                                    <div class="item active" style="background-image: url(<?php //echo base_url();    ?>assets/images/bg3.jpg)">
                                    <div class="container">
                                        <div class="row slide-margin">
                                            <div class="col-sm-8">
                                                <div class="carousel-content">
                                                    <h2 class="animation animated-item-1"><span>IT Experts</span><br>Your Proper Guidance</h2>
                                                    <p class="animation animated-item-2" style="color: #000;">It's time to learn new things & take challenge to prove yourself..</p>
                                                    <a class="btn-slide animation animated-item-3" href="<?php // echo base_url();    ?>contact-us" style="font-weight:bold;">Register for a Course</a>
                                                </div>
                                            </div>

                                            <div class="col-sm-4 hidden-xs animation animated-item-4">
                                                <div class="slider-img">
                                                    <img src="<?php // echo base_url();    ?>assets/images/slider/img3.png" class="img-responsive">
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>/.item     
                            </div><!--/.carousel-inner
                        </div>/.carousel
                    </section>-->
            <div class="slider-area wow fadeInDown" style="padding: 0;">
                <div class="slider-wrapper theme-light">
                    <div class="nivoSlider" id="slider">
                        <img src="<?php echo base_url(); ?>assets/images/slider/slider1.jpg" alt="">
                        <img src="<?php echo base_url(); ?>assets/images/slider/slider5.jpg" alt="">
                        <img src="<?php echo base_url(); ?>assets/images/slider/slider2.jpg" alt="">
                        <img src="<?php echo base_url(); ?>assets/images/slider/slider7.jpg" alt="">
                        <img src="<?php echo base_url(); ?>assets/images/slider/slider13.jpg" alt="">
                    </div>
                </div>
            </div>
        <?php } ?>
        <!--/#main-slider-->
        <?php echo $main_content; ?>

        <?php
        if (isset($partners)) {
            ?>
            <section id="partner">
                <div class="container">
                    <div class="center wow fadeInDown"  data-wow-duration="1000ms" data-wow-delay="600ms">
                        <h2>Our Partners</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
                    </div>    

                    <div class="partners">
                        <ul>
                            <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms" src="<?php echo base_url(); ?>assets/images/partners/partner1.png"></a></li>
                            <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms" src="<?php echo base_url(); ?>assets/images/partners/partner2.png"></a></li>
                            <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms" src="<?php echo base_url(); ?>assets/images/partners/partner3.png"></a></li>
                            <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1200ms" src="<?php echo base_url(); ?>assets/images/partners/partner4.png"></a></li>
                            <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1500ms" src="<?php echo base_url(); ?>assets/images/partners/partner5.png"></a></li>
                        </ul>
                    </div>        
                </div><!--/.container-->
            </section>
        <?php } ?>    
        <!--/#partner-->
        <?php
        if (isset($contact_info)) {
            ?>
            <section id="conatcat-info">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="media contact-info wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                                <div class="pull-left">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div class="media-body">
                                    <h2>Have a question or need a custom quote?</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation +0123 456 70 80</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.container-->    
            </section>
        <?php } ?>    
        <!--/#conatcat-info-->

        <?php
        $this->load->view('pages/footer');
        ?>



        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="<?php echo base_url(); ?>assets/js/jquery-2.1.1.min.js"></script>	
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery.prettyPhoto.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery.isotope.min.js"></script>  
        <script src="<?php echo base_url(); ?>assets/js/wow.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/functions.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
        <!--<script src="<?php // echo base_url();       ?>assets/js/registration_form.js"></script>-->
        <script src="https://maps.google.com/maps/api/js?sensor=true"></script>
        <!-- Add jQuery library -->
        <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>

        <!-- Add mousewheel plugin (this is optional) -->
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/lib/jquery.mousewheel-3.0.6.pack.js"></script>

        <!-- Add fancyBox -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/source/jquery.fancybox.css?v=2.1.7" type="text/css" media="screen" />
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/source/jquery.fancybox.pack.js?v=2.1.7"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $(".fancybox").fancybox();
            });
        </script>
        <!------------Nivo slider JS------------->

        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.nivo.slider.js"></script>
        <script type="text/javascript">
            $(window).load(function () {
                $('#slider').nivoSlider();
            });
        </script> 
        
        <!--..........Like script..........-->
        
        <script type="text/javascript">
            function like_post(bid){
                $.ajax({
                   type: "post",
                   url: "<?php echo base_url('Welcome/like_post');?>",
                   data: {bid:bid},
                   cache: false,
                   success: function(val){
                        if(val==1){
                           $('#like_count').html(val);
                   }else{
                        alert('Error');
                    }
                }  
                });
            }
        </script>
        <style>
            .entry-meta span i{
                font-size: 12px;
            }
        </style>

    </body>
</html>