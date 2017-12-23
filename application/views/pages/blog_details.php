<div id="breadcrumb">
    <div class="container">	
        <div class="breadcrumb">							
            <li><a href="<?php echo base_url(); ?>"><i class="fa fa-home"></i></a></li>
            <li>Blog Details</li>			
        </div>		
    </div>	
</div>

<section id="blog" class="container">
    <div class="blog">
        <div class="row">
            <div class="col-md-8" id="blog_wrap">
                <div class="blog-item">
                    <div class="row">
                        <div class="col-xs-12 col-sm-2">
                            <div class="entry-meta">
                                <span id="publish_date"><?php echo $blog_info->publication_date; ?></span>
                                <span><i class="fa fa-user"></i> <a href="#"><?php echo $blog_info->author_name; ?></a></span>
                                <span><i class="fa fa-comment"></i> <a href="#">2 Comments</a></span>
                                <span><i class="fa fa-heart"></i><a href="#">56 Likes</a></span>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-10 blog-content">
                            <h3><?php echo $blog_info->blog_title; ?></h3>
                            <img class="img-responsive img-blog" src="<?php echo base_url() . $blog_info->blog_image; ?>" width="100%" alt="" />
                            <p style="text-align: justify">
                                <?php echo $blog_info->blog_short_description; ?>
                            </p>
                            <p style="text-align: justify">
                                <?php echo $blog_info->blog_long_description; ?>
                            </p>
                            <div class="col-lg-12 col-sm-12 comments_wrap">
                                <div class="col-sm-12 view_comments">
                                    <h5><span>10</span> Comments:</h5>
                                    <?php
                                    $blog_id=$blog_info->blog_id;
                                    $all_publish_comments=$this->Welcome_Model->select_all_publish_comments_info_by_id($blog_id);
                                    foreach ($all_publish_comments as $v_comments)
                                    {
                                    ?>
                                    <div class="view_comments_wrap col-sm-12">
                                        <div class="col-lg-1 col-sm-1 comment_img">
                                            <img src="<?php echo base_url(); ?>assets/images/bg3.jpg" width="45" height="50" alt="">
                                        </div>
                                        <div class="col-sm-11 comments_body">
                                            <span><b><?php echo $v_comments->user_first_name.' '.$v_comments->user_last_name;?></b> : <?php echo $v_comments->comment;?></span>
                                        </div>
                                    </div>
                                    <?php } ?>
                                    <?php
                                    $user_id = $this->session->userdata('user_id');
                                    $user_name=$this->session->userdata('user_name');
                                    if ($user_id != NULL) {
                                    ?>
                                    <div class="view_comments_wrap col-sm-12">
                                        <div class="col-lg-1 col-sm-1 comment_img">
                                            <img src="<?php echo base_url(); ?>assets/images/bg3.jpg" width="50" height="60" alt="">
                                        </div>
                                        <div class="col-sm-11 comments_body">
                                            <form class="form-group" action="<?php echo base_url();?>save-comment" method="post">
                                                <input type="hidden" name="blog_id" value="<?php echo $blog_info->blog_id;?>">
                                                <span><b><?php echo $user_name;?></b> : <input name="comment" class="form-control" placeholder="write a comment"></span>
                                            </form>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                                <?php
                                $user_id = $this->session->userdata('user_id');
                                if ($user_id == NULL) {
                                ?>
                                <div class="col-sm-12 post_comments">
                                    <p style="font-size: 16px;">Please <a href="<?php echo base_url(); ?>user-login">Login</a> or <a href="<?php echo base_url(); ?>sign-up">Sign up</a> to leave your comments</p>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>   
                </div><!--/.blog-item-->

            </div><!--/.col-md-8-->
            <?php
            $this->load->view('pages/sidebar');
            ?>
        </div><!--/.row-->
    </div>
</section><!--/#blog-->