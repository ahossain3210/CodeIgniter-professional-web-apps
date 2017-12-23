<div id="breadcrumb">
    <div class="container">	
        <div class="breadcrumb">							
            <li><a href="<?php echo base_url();?>"><i class="fa fa-home"></i></a></li>
            <li>Contact</li>			
        </div>		
    </div>	
</div>

<!--<div class="map">
    <div id="google-map" data-latitude="40.713732" data-longitude="-74.0092704"></div>
<iframe src="https://www.google.com/maps/d/u/0/embed?mid=1el1EhCy9vObwH0K-ScKOt8W4ZRc" width="100%" height="400"></iframe>
</div>-->
<!--<div class="map">
    <div id="google-map" data-latitude="40.713732" data-longitude="-74.0092704"></div>
</div>-->

<section id="contact-page">
    <div class="container">
        <div class="col-sm-12 contact_wrap">
            <div class="col-sm-6 registration-content">
                <h3>Perfect Decision Change Your life</h3>
                <div class="col-sm-12">
                   <img src="<?php echo base_url();?>assets/images/reg-img.jpg" alt="">
                </div>
            </div>
            <div class="col-sm-6 registration-content">
                <h4 style="color: green;">
                    <?php
                    $message=$this->session->userdata('message');
                    if($message)
                    {
                        echo $message;
                        $this->session->unset_userdata('message');
                    }
                    ?>
                </h4>
                <h3>Register For A Course</h3>
                <p><i>Seats are limited. To confirm your enrollment, Register here.</i></p>
                <form class="form-group" action="<?php echo base_url();?>Welcome/save_applicant.html" method="post" id="fileForm" role="form">
                    <fieldset>
                        <div class="input-group"> 	 
                            <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                            <input class="form-control" type="text" name="applicant_name" id = "txt" required="" placeholder="Your Name" />
                            <div id="errFirst"></div>    
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-mobile fa" aria-hidden="true"></i></span>
                            <input required type="text" name="applicant_mobile_number" id="phone" class="form-control phone" placeholder="Your mobile number"/> 
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                            <input class="form-control" required type="email" name="applicant_email" id = "email" required="" placeholder="Your email" />   
                            <div class="status" id="status"></div>
                        </div>
                        <div class="input-group">
                            <Select class="form-control" name="course_title" style="padding: 5px;">
                                <option class="form-control">--Select course--</option>
                                <?php foreach ($all_publish_course as $v_course){?>
                                <option class="form-control option" value="<?php echo $v_course->course_title;?>" style="font-size: 11px; width: 100%; padding: 7px 0px; color: #333; "><?php echo $v_course->course_title;?></option>
                                <?php }?>
                            </Select>
                        </div>
                        
                        <div class="form-group">
                            <input class="btn btn-primary reg_btn" type="submit" name="submit_reg" value="Register">
                        </div>
                        <h5>You will receive an email to complete the registration and validation process. </h5>
                        <h5>Be sure to check your spam folders. </h5>


                    </fieldset>
                </form><!-- ends register form -->
            </div>
        </div>
    </div><!--/.container-->
</section><!--/#contact-page-->