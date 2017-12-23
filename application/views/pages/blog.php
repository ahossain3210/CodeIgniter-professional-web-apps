<div id="breadcrumb">
    <div class="container">	
        <div class="breadcrumb">							
            <li><a href="<?php echo base_url();?>"><i class="fa fa-home"></i></a></li>
            <li>Blog</li>			
        </div>		
    </div>	
</div>

<section id="blog" class="container">
    <div class="blog">
        <div class="row">
            <div class="col-md-8" id="blog_wrap">
                <?php foreach ($all_publish_blog as $v_blog){?>
                <div class="blog-item">
                    <div class="row">
                        <?php
                        $blog_id=$v_blog->blog_id;
                        $count_like=$this->Welcome_Model->count_like_info($blog_id);
                        $all_publish_comments=$this->Welcome_Model->select_all_publish_comments_info_by_id($blog_id);
                        ?>
                        <div class="col-xs-12 col-sm-2">
                            <div class="entry-meta">
                                <span id="publish_date"><?php echo $v_blog->publication_date;?></span>
                                <span><i class="fa fa-user"></i> <a href="#"><?php echo $v_blog->author_name;?></a></span>
                                <span><i class="fa fa-comment"></i> <a href="#"><?php echo sizeof($all_publish_comments);?> Comments</a></span>
                                <span><i class="fa fa-heart"></i><a href="#"><?php echo sizeof($count_like);?> Likes</a></span>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-10 tent">
                            <h3><a href="<?php echo base_url();?>blog-details/<?php echo $v_blog->blog_id?>"><?php echo $v_blog->blog_title;?></a></h3>
                            <a href="<?php echo base_url();?>blog-details/<?php echo $v_blog->blog_id?>"><img class="img-responsive img-blog" src="<?php echo base_url().$v_blog->blog_image;?>" width="100%" alt="" /></a>
                            <p><span onclick="like_post(<?php echo $v_blog->blog_id;?>)" style="color: #fff; background: #0077b5; padding: 7px; border-radius: 100%; cursor: pointer;"><i class="fa fa-thumbs-up"></i></span> <span id="like_count"></span> | <b>Category : </b><a href="#"><?php echo $v_blog->blog_category_name;?></a></p>
                            <p style="text-align: justify">
                                <?php echo $v_blog->blog_short_description;?>
                            </p>
                            <a class="btn btn-primary readmore" href="<?php echo base_url();?>blog-details/<?php echo $v_blog->blog_id?>">Read More <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>    
                </div>
                <?php }?>
                <!--/.blog-item-->
                <div id="pagination" style="margin: 20px 0 20px 0; text-align: center">
                    <?php echo $this->pagination->create_links();?>
                </div>
            </div><!--/.col-md-8-->

          <?php
          $this->load->view('pages/sidebar');
          ?>
        </div><!--/.row-->
    </div>
</section><!--/#blog-->