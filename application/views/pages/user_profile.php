<div id="breadcrumb">
    <div class="container">	
        <div class="breadcrumb">							
            <li><a href="<?php echo base_url(); ?>"><i class="fa fa-home"></i></a></li>
            <li>User Profile</li>			
        </div>		
    </div>	
</div>
<section>
    <div class="container">
        <div class="col-lg-9 col-sm-9 resume_content" style="padding: 0;">
            <div class="col-sm-12 col-lg-12 user_profile_wrap">
                <div class="col-sm-12 col-lg-12 p_0">
                    <div class="col-sm-1 user_profile_logo">
                        <img src="<?php echo base_url(); ?>assets/images/bg.jpeg" alt="image">
                        <a href="#">Edit profile</a>
                    </div>
                    <div class="col-sm-11 user_profile_info">
                        <h3>
                            <?php
                            $user_id = $this->session->userdata('user_id');
                            $user_name = $this->session->userdata('user_name');
                            echo $user_name;
                            ?>
                        </h3>
                        <p>You are logged since last 2 hours.</p>
                    </div>
                </div>
                <div class=" col-lg-12 col-sm-12 profile_navbar p_0">
                    <ul class="nav">
                        <li class="active"><a class="active">Personal Info</a></li>
                        <li><a href="#">View Resume</a></li>
                        <li><a href="#">Edit Resume</a></li>
                        <li><a href="#">Applied Jobs</a></li>
                        <li><a href="#">Close Account</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-12 col-sm-12 career_objective m_top_15 p_0 b_redius_5">
                <h3> <i class="fa fa-graduation-cap" aria-hidden="true"></i> Career Objective</h3>
                <div class="career_info">
                    <p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span></p>
                    <p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span></p>
                </div>
            </div><!-------Career----->
            <div class="col-lg-12 col-sm-12 education_qualification m_top_15 p_0 b_redius_5">
                <h3> <i class="fa fa-graduation-cap" aria-hidden="true"></i> Educational Qualification</h3>
                <div class="education_table">
                    <table class="table table-bordered table-responsive table-hover">
                        <thead>
                            <tr>
                                <th>Name of Degree</th>
                                <th>Group / Subjects</th>
                                <th>Name of Institution</th>
                                <th>Result</th>
                                <th>Passing Year</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>SSC</td>
                                <td>Science</td>
                                <td>M A High School & College</td>
                                <td>5.00 Out of 5</td>
                                <td>2008</td>
                            </tr>
                            <tr>
                                <td>SSC</td>
                                <td>Science</td>
                                <td>M A High School & College</td>
                                <td>5.00 Out of 5</td>
                                <td>2008</td>
                            </tr>
                            <tr>
                                <td>SSC</td>
                                <td>Science</td>
                                <td>M A High School & College</td>
                                <td>5.00 Out of 5</td>
                                <td>2008</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div><!-----Education------------>
            <div class="col-lg-12 col-sm-12 academic_qualification m_top_15 p_0 b_redius_5">
                <h3> <i class="fa fa-briefcase" aria-hidden="true"></i> Academic Training</h3>
                <div class="academic_table">
                    <table class="table table-bordered table-responsive table-hover">
                        <thead>
                            <tr>
                                <th>Name of Degree</th>
                                <th>Group / Subjects</th>
                                <th>Name of Institution</th>
                                <th>Result</th>
                                <th>Passing Year</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>SSC</td>
                                <td>Science</td>
                                <td>M A High School & College</td>
                                <td>5.00 Out of 5</td>
                                <td>2008</td>
                            </tr>
                            <tr>
                                <td>SSC</td>
                                <td>Science</td>
                                <td>M A High School & College</td>
                                <td>5.00 Out of 5</td>
                                <td>2008</td>
                            </tr>
                            <tr>
                                <td>SSC</td>
                                <td>Science</td>
                                <td>M A High School & College</td>
                                <td>5.00 Out of 5</td>
                                <td>2008</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div><!-------Academic----------->
            <div class="col-lg-12 col-sm-12 live_project_wrap m_top_15 p_0 b_redius_5">
                <h3> <i class="fa fa-briefcase" aria-hidden="true"></i> Live Projects link</h3>
                <div class="live_project_info">
                    <p><b>Project Name</b> <span> : </span> <a href="#" title="Project url">Eshopper</a></p>
                    <p><b>Project Name</b> <span> : </span> <a href="#" title="Project url">Eshopper</a></p>
                    <p><b>Project Name</b> <span> : </span> <a href="#" title="Project url">Eshopper</a></p>
                    <p><b>Project Name</b> <span> : </span> <a href="#" title="Project url">Eshopper</a></p>
                </div>
            </div><!-------Live Project-------->
            <div class="col-lg-12 col-sm-12 work_history_wrep m_top_15 p_0 b_redius_5">
                <h3> <i class="fa fa-briefcase" aria-hidden="true"></i> Work History / Experience</h3>
                <!--                    <div class="experience_info">
                                        <h4>Senior Software Engineer</h4>
                                        <h5>IT Experts Ltd.</h5>
                                        <p class="m_bottom_10">2017 to present</p>
                                    </div>-->
                <div class="experience_info">
                    <ul>
                        <li>
                            <h4>Senior Software Engineer @ IT Experts Ltd.</h4>
                            <span>2014 to Present.</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco</p>
                        </li>
                        <li>
                            <h4>Senior Software Engineer @ IT Experts Ltd.</h4>
                            <span>2014 to Present.</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco</p>
                        </li>
                        <li>
                            <h4>Senior Software Engineer @ IT Experts Ltd.</h4>
                            <span>2014 to Present.</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco</p>
                        </li>
                    </ul>
                </div>
            </div><!------------Work History---------->
            <div class="col-lg-12 col-sm-12 personal_info_wrap m_top_15 p_0 b_redius_5">
                <h3> <i class="fa fa-briefcase" aria-hidden="true"></i> Personal Info</h3>

                <div class="personal_info">
                    <ul class="address">
                        <li>
                            <h5>Full Name</h5>
                            <span>:</span>
                            Muhammad Anwar Hossain
                        </li>
                        <li>
                            <h5>Father's Name</h5>
                            <span>:</span>
                            Muhammad Swapan Miah
                        </li>
                        <li>
                            <h5>Mother's Name</h5>
                            <span>:</span>
                            Nilufa Begum
                        </li>
                        <li>
                            <h5>Address</h5>
                            <span>:</span>
                            121 King Street, Melbourne Victoria, 1200 USA
                        </li>
                        <li>
                            <h5>Date of Birth</h5>
                            <span>:</span>
                            01-Jan-1992
                        </li>
                        <li>
                            <h5>Nationality</h5>
                            <span>:</span>
                            Bangladeshi <small>(by birth)</small>
                        </li>
                        <li>
                            <h5>Religion</h5>
                            <span>:</span>
                            Islam
                        </li>
                        <li>
                            <h5>Marital Status</h5>
                            <span>:</span>
                            Unmarried
                        </li>
                        <li>
                            <h5>Sex</h5>
                            <span>:</span>
                            Male
                        </li>
                        <li>
                            <h5>NID</h5>
                            <span>:</span>
                            19921917512000176
                        </li>
                    </ul>
                </div>
            </div><!--------Personal Details------->
            <div class="col-sm-12 expertise_wrap m_top_15 p_0 b_redius_5">
                <div class="col-lg-12 col-sm-12 expertise_wrap m_top_10">
                    <h3> <i class="fa fa-briefcase" aria-hidden="true"></i> Specialization</h3>
                    <div class="expertise_info">
                        <h4>Sound knowledge on the following fields : </h4>
                        <p>PHP, OOP PHP, Laravel, CodeIgniter, MySQL Database, Ajax, JQuery, Bootstrap, WordPress, PSD to HTML5, CSS3. </p>
                    </div>
                </div>
                <div class="col-lg-12 col-sm-12 expertise_wrap">
                    <h3> <i class="fa fa-briefcase" aria-hidden="true"></i> Language Proficiency</h3>
                    <div class="expertise_info">
                        <p><b>Bengali : </b>Mother tongue</p>
                        <p><b>English : </b>Fluent reading, writting & speaking.</p>
                    </div>
                </div>
                <div class="col-lg-12 col-sm-12 expertise_wrap">
                    <h3> <i class="fa fa-briefcase" aria-hidden="true"></i>Reference</h3>
                    <div class="expertise_info">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Reference -01</th>
                                    <th>Reference -02</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <h4>Md. Mizanur Rahman</h4>
                                        <h5>Telenor Health</h5>
                                        <h5>Lead Developer</h5>
                                        <p><b>Mob :</b>+88-01672-505856</p>
                                        <p><b>E-mail :</b><a href="#">abc@gmail.com</a></p>
                                    </td>
                                    <td>
                                        <h4>Md. Mizanur Rahman</h4>
                                        <h5>Telenor Health</h5>
                                        <h5>Lead Developer</h5>
                                        <p><b>Mob :</b>+88-01672-505856</p>
                                        <p><b>E-mail :</b><a href="#">abc@gmail.com</a></p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div><!----------Language------------>
            </div>

        </div>
        <aside class="col-lg-3 col-sm-3" style="padding-right:  0px;">
            <div class="aside_top">
                <div class="home_link">
                    <a href="#"><i class="fa fa-home"> Home</i></a>
                </div>
                <div class="resume">
                    <h3>My Resume</h3>
                    <ul class="nav">
                        <li><a href="#"><i class="fa fa-eye"></i> View Resume</a></li>
                        <li><a href="#"><i class="fa fa-edit"></i> Edit Resume</a></li>
                        <li><a href="#"><i class="fa fa-upload"></i> Upload Resume</a></li>
                        <li><a href="#"><i class="fa fa-trash"></i> Delete Resume</a></li>
                    </ul>
                </div>
                <div class="resume">
                    <h3>My Resume</h3>
                    <ul class="nav">
                        <li><a href="#"><i class="fa fa-eye"></i> View Resume</a></li>
                        <li><a href="#"><i class="fa fa-edit"></i> Edit Resume</a></li>
                        <li><a href="#"><i class="fa fa-upload"></i> Upload Resume</a></li>
                        <li><a href="#"><i class="fa fa-trash"></i> Delete Resume</a></li>
                    </ul>
                </div>
                <div class="resume">
                    <h3>My Resume</h3>
                    <ul class="nav">
                        <li><a href="#"><i class="fa fa-eye"></i> View Resume</a></li>
                        <li><a href="#"><i class="fa fa-edit"></i> Edit Resume</a></li>
                        <li><a href="#"><i class="fa fa-upload"></i> Upload Resume</a></li>
                        <li><a href="#"><i class="fa fa-trash"></i> Delete Resume</a></li>
                    </ul>
                </div>
                <div class="side_adds">
                    <embed src="<?php echo base_url(); ?>assets/images/bio.swf" width="270">
                </div>
                <div class="side_adds">
                    <img src="<?php echo base_url(); ?>assets/images/add10_1.gif" alt="image">
                </div>
                <div class="side_adds m_top_10">
                    <img src="<?php echo base_url(); ?>assets/images/add2.jpg" alt="image">
                </div>
            </div>
        </aside>
    </div>
</section>
<section>
    <div class="container">
        <div class="col-sm-12 add_image">
            <embed src="<?php echo base_url(); ?>assets/images/adds2.png" alt="image">
        </div>
    </div>
</section>