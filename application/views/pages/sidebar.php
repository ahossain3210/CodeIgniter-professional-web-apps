<aside class="col-md-4" id="blog_aside" style="padding-right: 0;">
    <div class="home_link">
        <a href="<?php echo base_url();?>"><i class="fa fa-home"> Home</i></a>
    </div>
    <div class="col-sm-12 col-lg-12 right_sidebar">
        <div class="widget search">
            <form role="form">
                <input type="text" class="form-control search_box" autocomplete="off" placeholder="Search Here">
            </form>
        </div><!--/.search-->
        <div class="sidbar_headding">
            <h3>Categories</h3>
                <div class="col-sm-12 blog-category">
                    <ul class="nav">
                        <?php
                        $all_publish_blog_category = $this->Dashboard_Model->select_all_publish_blog_category();

                        foreach ($all_publish_blog_category as $v_category) {
                            ?>
                            <li><a href="<?php echo base_url(); ?>category-blog/<?php echo $v_category->blog_category_id; ?>"><?php echo $v_category->blog_category_name; ?></a></li>
                        <?php } ?>
                    </ul>
                </div>                  
        </div><!--/.categories-->

        <div class="sidbar_headding">
            <h3>Popular Articles</h3>
                <div class="col-sm-12 popular-articles">
                    <ul class="nav">
                        <?php foreach ($popular_blog as $v_blog) { ?>
                            <li><a href="<?php echo base_url(); ?>blog-details/<?php echo $v_blog->blog_id ?>"><i class="fa fa-hand-o-right"></i> <?php echo $v_blog->blog_title; ?> <span class="pull-right">(<?php echo $v_blog->hit_count; ?>)</span></a></li>
                        <?php } ?>
                    </ul>
                </div>                
        </div><!--/.archieve-->
        <div class="sidbar_headding">
            <h3>Most Recent</h3>
                <div class="col-sm-12 most-recent">
                    <?php foreach ($recent_blog as $v_blog) { ?>
                        <div class="single_comments" id="recent_blog">
                            <a href="<?php echo base_url(); ?>blog-details/<?php echo $v_blog->blog_id ?>">
                                <img src="<?php echo base_url() . $v_blog->blog_image; ?>" width="50" height="40" alt=""/>
                                <p><?php echo $v_blog->blog_title; ?></p>
                            </a>
                            <div class="entry-meta small muted">
                                <span>By: <a href=""><?php echo $v_blog->author_name; ?></a></span>
                            </div>
                        </div>
                    <?php } ?>
                </div>                 
        </div><!--/.recent blogs-->

        <div class="widget tags sidbar_headding">
            <h3>Tag Cloud</h3>
            <ul class="tag-cloud">
                <li><a class="btn btn-xs btn-primary" href="#">Apple</a></li>
                <li><a class="btn btn-xs btn-primary" href="#">Barcelona</a></li>
                <li><a class="btn btn-xs btn-primary" href="#">Office</a></li>
                <li><a class="btn btn-xs btn-primary" href="#">Ipod</a></li>
                <li><a class="btn btn-xs btn-primary" href="#">Stock</a></li>
                <li><a class="btn btn-xs btn-primary" href="#">Race</a></li>
                <li><a class="btn btn-xs btn-primary" href="#">London</a></li>
                <li><a class="btn btn-xs btn-primary" href="#">Football</a></li>
                <li><a class="btn btn-xs btn-primary" href="#">Porche</a></li>
                <li><a class="btn btn-xs btn-primary" href="#">Gadgets</a></li>
            </ul>
        </div><!--/.tags-->

        <div class="widget blog_gallery sidbar_headding">
            <h3>Our Gallery</h3>
            <ul class="sidebar-gallery">
                <li><a href="#"><img src="<?php echo base_url(); ?>assets/images/blog/gallery1.png" alt="" /></a></li>
                <li><a href="#"><img src="<?php echo base_url(); ?>assets/images/blog/gallery2.png" alt="" /></a></li>
                <li><a href="#"><img src="<?php echo base_url(); ?>assets/images/blog/gallery3.png" alt="" /></a></li>
                <li><a href="#"><img src="<?php echo base_url(); ?>assets/images/blog/gallery4.png" alt="" /></a></li>
                <li><a href="#"><img src="<?php echo base_url(); ?>assets/images/blog/gallery5.png" alt="" /></a></li>
                <li><a href="#"><img src="<?php echo base_url(); ?>assets/images/blog/gallery6.png" alt="" /></a></li>
            </ul>
        </div><!--/.blog_gallery-->
    </div>
</aside>  