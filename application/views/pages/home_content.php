<section id="services">
    <div class="container wow fadeInDown">
        <div class="col-lg-12 col-sm-12 our_services">
            <h3>What We Do?</h3>
            <div class="col-lg-12 col-sm-12 row wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1200ms" >
                <div class="col-lg-4 col-sm-4 single_item">
                    <h4><span><i class="fa fa-globe"></i></span>Web Development</h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus interdum erat libero, pulvinar tincidunt leo consectetur eget. Curabitur lacinia pellentesque libero, pulvinar tincidunt leo consectetur eget. 
                    </p>
                </div>
                <div class="col-lg-4 col-sm-4 single_item">
                    <h4><span><i class="fa fa-mobile"></i></span> Mobile Apps Development</h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus interdum erat libero, pulvinar tincidunt leo consectetur eget. Curabitur lacinia pellentesque libero, pulvinar tincidunt leo consectetur eget. 
                    </p>
                </div>
                <div class="col-lg-4 col-sm-4 single_item">
                    <h4><span><i class="fa fa-share"></i></span>3D Games Development</h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus interdum erat libero, pulvinar tincidunt leo consectetur eget. Curabitur lacinia pellentesque libero, pulvinar tincidunt leo consectetur eget. 
                    </p>
                </div>
            </div>
            <div class="col-lg-12 col-sm-12 row wow fadeInDown">
                <div class="col-lg-4 col-sm-4 single_item">
                    <h4><span><i class="fa fa-folder-open"></i></span>Search Engine Optimization</h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus interdum erat libero, pulvinar tincidunt leo consectetur eget. Curabitur lacinia pellentesque libero, pulvinar tincidunt leo consectetur eget. 
                    </p>
                </div>
                <div class="col-lg-4 col-sm-4 single_item">
                    <h4><span><i class="fa fa-eye"></i></span>Domain & Hosting Registration</h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus interdum erat libero, pulvinar tincidunt leo consectetur eget. Curabitur lacinia pellentesque libero, pulvinar tincidunt leo consectetur eget. 
                    </p>
                </div>
                <div class="col-lg-4 col-sm-4 single_item">
                    <h4><span><i class="fa fa-facebook"></i></span>Social Media Marketing</h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus interdum erat libero, pulvinar tincidunt leo consectetur eget. Curabitur lacinia pellentesque libero, pulvinar tincidunt leo consectetur eget. 
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="recents_courses wow fadeInDown"  data-wow-duration="1000ms" data-wow-delay="1200ms">
    <div class="container">
        <div class="col-lg-12 col-sm-12 section_top" style="background: #fbfbfb;">
            <div class="text-center">
                <h2 class="tt_uppercase">Recent Courses</h2>
                <?php
                foreach ($all_publish_category as $v_category) {
                    ?>
                    <div class="col-md-3">
                        <div class="hi-icon-wrap hi-icon-effect wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1200ms">
                            <i class="fa fa-coffee"></i>	
                            <h3><a href="<?php echo base_url(); ?>category-course/<?php echo $v_category->category_id; ?>"><?php echo $v_category->category_name; ?></a></h3>
                            <!--<p><?php // echo $v_category->category_description;    ?></p>-->
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus interdum erat libero, pulvinar tincidunt leo consectetur eget. 
                            </p>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<section id="portfolio">
    <div class="container">
        <div class="col-lg-12 col-sm-12 portfolio_wrapper  wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1200ms">
            <h3>Our Latest portfolio</h3>
            <div class="row wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1200ms">
                <div class="col-md-4">
                    <div class="thumbnail">
                        <a href="<?php echo base_url(); ?>assets/images/portfolio-9.PNG" class="fancybox" rel="group">
                            <img src="<?php echo base_url(); ?>assets/images/portfolio-9.PNG">
                        </a>
                    </div>
                    <p class="caption">Eshopper CI project</p>
                </div>
                <div class="col-md-4">
                    <div class="thumbnail">
                        <a href="<?php echo base_url(); ?>assets/images/portfolio-12.PNG" class="fancybox" rel="group">
                            <img src="<?php echo base_url(); ?>assets/images/portfolio-12.PNG">
                        </a>
                    </div>
                    <p class="caption">Shopin Laravel Project</p>
                </div>
                <div class="col-md-4">
                    <div class="thumbnail">
                        <a href="<?php echo base_url(); ?>assets/images/portfolio-15.PNG" class="fancybox" rel="group">
                            <img src="<?php echo base_url(); ?>assets/images/portfolio-15.PNG">
                        </a>
                    </div>
                    <p class="caption">Shopin Laravel Project</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="col-lg-12 col-sm-12 p_0">
        <img src="<?php echo base_url(); ?>assets/images/clients.png" class="img-responsive">
    </div>
</section>