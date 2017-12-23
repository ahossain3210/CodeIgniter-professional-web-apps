<div id="breadcrumb">
    <div class="container">	
        <div class="breadcrumb">							
            <li><a href="<?php echo base_url(); ?>"><i class="fa fa-home"></i></a></li>
            <li>Sign up</li>			
        </div>		
    </div>	
</div>
<section id="sign_up">
    <div class="col-sm-12 sign_up_wrap">
        <div class="container">
            <div class="col-sm-3"></div>
            <div class="col-sm-6 user_sign_up_wrap">
                <div class="reg_nav">
                    <h3>Create new account</h3>
                    <ul class="nav nav-tabs text-center" role="tablist">
                        <li role="presentation">
                            <a href="#employee" data-toggle="tab" aria-expanded="false">Find job</a>
                        </li>
                        <li role="presentation">
                            <a href="#employer" data-toggle="tab" aria-expanded="true">Post Job</a>
                        </li>
                    </ul>
                </div>
                <div class="tab-content" style="margin: 30px 0 0 0;">
                    <div role="tabpanel" class="tab-pane fade in active reg_form" id="employee">
                        <?php echo form_open('save-user'); ?>
                        <h4 style="color: red;">
                            <?php echo validation_errors(); ?>
                        </h4>
                        <!--<form action="<?php //echo base_url();  ?>save-user" method="post">-->
                        <div class="form-group">
                            <input type="text" name="user_first_name" value="<?php //echo set_value('user_first_name');  ?>" class="form-control" placeholder="Your first name">
                        </div>
                        <div class="form-group">
                            <?php echo form_error('user_first_name');?>
                        </div>
                        <div class="form-group">
                            <input type="text" name="user_last_name"  value="<?php //echo set_value('user_last_name');  ?>" class="form-control" placeholder="Last name">
                        </div>
                        <div class="form-group">
                            <?php echo form_error('user_last_name');?>
                        </div>
                        <div class="form-group">
                            <input type="text" name="user_username" value="<?php // echo set_value('user_username');  ?>" class="form-control" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <?php echo form_error('user_username');?>
                        </div>
                        <div class="form-group">
                            <input type="email" name="user_email" value="<?php //echo set_value('user_email');  ?>" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <?php echo form_error('user_email');?>
                        </div>
                        <div class="form-group">
                            <input type="password" name="user_password" value="<?php //echo set_value('user_password');  ?>" class="form-control" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <?php echo form_error('user_password');?>
                        </div>
                        <div class="form-group">
                            <input type="password" name="con_password" value="<?php //echo set_value('con_password');  ?>" class="form-control" placeholder="Retype password">
                        </div>
                        <div class="form-group">
                            <?php echo form_error('con_password');?>
                        </div>
                        <div class="form-group">
                            <input type="text" name="user_mobile" value="<?php //echo set_value('user_mobile');  ?>" class="form-control" placeholder="Mobile">
                        </div>
                        <div class="form-group">
                            <?php echo form_error('user_mobile');?>
                        </div>
                        <div class="form-group">
                            <select class="form-control" name="user_location">
                                <option>--Select City--</option>
                                <option value="Dhaka">Dhaka</option>
                                <option value="Chittagong">Chittagong</option>
                                <option value="Rajshahi">Rajshahi</option>
                                <option value="Sylhet">Sylhet</option>
                                <option value="Khulna">Khulna</option>
                                <option value="Comilla">Comilla</option>
                                <option value="Barishal">Barishal</option>
                                <option value="Jessore">Jessore</option>
                                <option value="Others">Others</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <?php echo form_error('user_location');?>
                        </div>
                        <button type="submit" class="btn btn-primary">Sign Up Now!</button>
                        </form>
                    </div>
                    <div role="tabpanel" class="tab-pane fade in reg_form" id="employer">
                        <?php // echo form_open('save-employer'); ?>
                        <form action="<?php echo base_url(); ?>save-employer" method="post">

                            <div class="form-group">
                                <input type="text" name="" class="form-control" placeholder="Employer Name">
                            </div>
                            <div class="form-group">
                                <input type="text" name="" class="form-control" placeholder="Username">
                            </div>
                            <div class="form-group">
                                <input type="email" name="" class="form-control" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input type="password" name="" class="form-control" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <input type="password" name="" class="form-control" placeholder="Retype password">
                            </div>
                            <div class="form-group">
                                <input type="text" name="" class="form-control" placeholder="Mobile">
                            </div>
                            <div class="form-group">
                                <select class="form-control" name="employer_location">
                                    <option>--Select City--</option>
                                    <option value="Dhaka">Dhaka</option>
                                    <option value="Chittagong">Chittagong</option>
                                    <option value="Rajshahi">Rajshahi</option>
                                    <option value="Sylhet">Sylhet</option>
                                    <option value="Khulna">Khulna</option>
                                    <option value="Comilla">Comilla</option>
                                    <option value="Barishal">Barishal</option>
                                    <option value="Jessore">Jessore</option>
                                    <option value="Others">Others</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Sign Up Now!</button>
                        </form>
                    </div>
                </div>

            </div>
            <div class="col-sm-3"></div>
        </div>
    </div>
</section>
