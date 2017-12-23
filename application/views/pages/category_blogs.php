<div id="breadcrumb">
    <div class="container">	
        <div class="breadcrumb">							
            <li><a href="<?php echo base_url();?>"><i class="fa fa-home"></i></a></li>
            <li>Category Blog</li>			
        </div>		
    </div>	
</div>

<section id="blog" class="container">
    <div class="blog">
        <div class="row">
            <div class="col-md-8" id="blog_wrap" style="background: #fff; padding: 20px; margin-bottom: 15px;">
                <?php foreach ($category_blog as $v_blog) { ?>
                    <div class="blog-item">
                        <div class="row">
                            <div class="col-xs-12 col-sm-2">
                                <div class="entry-meta">
                                    <span id="publish_date"><?php echo $v_blog->publication_date; ?></span>
                                    <span><i class="fa fa-user"></i> <a href="#"><?php echo $v_blog->author_name; ?></a></span>
                                    <span><i class="fa fa-comment"></i> <a href="#">2 Comments</a></span>
                                    <span><i class="fa fa-heart"></i><a href="#">56 Likes</a></span>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-10 blog-content">
                                <h3><a href="<?php echo base_url(); ?>blog-details/<?php echo $v_blog->blog_id ?>"><?php echo $v_blog->blog_title; ?></a></h3>
                                <a href="<?php echo base_url(); ?>blog-details/<?php echo $v_blog->blog_id ?>"><img class="img-responsive img-blog" src="<?php echo base_url() . $v_blog->blog_image; ?>" width="100%" alt="" /></a>
                                
                                <p style="text-align: justify">
                                    <?php echo $v_blog->blog_short_description; ?>
                                </p>
                                <a class="btn btn-primary readmore" href="<?php echo base_url(); ?>blog-details/<?php echo $v_blog->blog_id ?>">Read More <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>    
                    </div>
                <?php } ?>
                <!--/.blog-item-->
            </div><!--/.col-md-8-->
        <?php
        $this->load->view('pages/sidebar');
        ?>
        </div><!--/.row-->
    </div>
</section><!--/#blog-->