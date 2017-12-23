<div id="breadcrumb">
    <div class="container">	
        <div class="breadcrumb">							
            <li><a href="<?php echo base_url(); ?>"><i class="fa fa-home"></i></a></li>
            <li>User Login</li>			
        </div>		
    </div>	
</div>
<section id="sign_up">
    <div class="col-sm-12 login_wrap">
        <div class="container">
            <div class="col-sm-3"></div>
            <div class="col-sm-6 login_wrap_2">
                <h3>User Login</h3>
                <div class="user_login">
                    <h5 style="color: green;">
                        <?php
                        $message = $this->session->userdata('message');
                        if ($message) {
                            echo $message;
                            $this->session->unset_userdata('message');
                        }
                        ?>
                    </h5>
                    <h5 style="color: red;">
                        <?php
                        $error_message = $this->session->userdata('error_message');
                        if ($error_message) {
                            echo $error_message;
                            $this->session->unset_userdata('error_message');
                        }
                        ?>
                    </h5>
                    <div class="login_nav">
                        <ul class="nav nav-tabs text-center" role="tablist">
                            <li role="presentation">
                                <a href="#employee" data-toggle="tab" aria-expanded="false">User</a>
                            </li>
                            <li role="presentation">
                                <a href="#employer" data-toggle="tab" aria-expanded="true">Employer</a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content" style="margin: 30px 0 0 0;">
                        <div role="tabpanel" class="tab-pane fade in active login_form" id="employee">
                            <form class="form-group" action="<?php echo base_url(); ?>user-login-check" method="post">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                    <input type="text" name="user_username" class="form-control" placeholder="Employee username">
                                </div>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                    <input type="password" name="user_password" class="form-control" placeholder="Type your password">
                                </div>
                                <button type="submit" class="btn btn-success"><i class="fa fa-sign-in"></i> Login</button>
                            </form>
                        </div>
                        <div role="tabpanel" class="tab-pane fade in login_form" id="employer">
                            <form class="form-group" action="<?php echo base_url(); ?>employer-login-check" method="post">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                    <input type="text" name="emp_username" class="form-control" placeholder="Employer username">
                                </div>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                    <input type="password" name="emp_password" class="form-control" placeholder="Type your password">
                                </div>
                                <button type="submit" class="btn btn-success"><i class="fa fa-sign-in"></i> Login</button>
                            </form>
                        </div>
                    </div>
                    <div class="user_login_option">
                        <div class="checkbox pull-left">
                            <label class="checked" for="logged">
                                <input type="checkbox" name="logged" id="logged">
                                Keep me logged in
                            </label>
                        </div>
                        <div class="pull-right">
                            <a href="#">Forgot password?</a>
                        </div>
                    </div>
                </div>
                <a href="<?php echo base_url(); ?>sign-up" class="btn-primary">Create a new account</a>
            </div>
            <div class="col-sm-3"></div>
        </div>
    </div>
</section>
