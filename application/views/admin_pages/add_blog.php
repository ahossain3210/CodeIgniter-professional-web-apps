<ul class="breadcrumb">
    <li>
        <i class="icon-home"></i>
        <a href="index.html">Dashboard</a> 
        <i class="icon-angle-right"></i>
    </li>
    <li><a href="#">Add Blog</a></li>
</ul>
<div class="row-fluid sortable">
    <h2 style="color: green">
        <?php
        $message = $this->session->userdata('message');
        if ($message) {
            echo $message;
            $this->session->unset_userdata('message');
        }
        ?>
    </h2>
    <h2 style="color: red">
        <?php
        $message = $this->session->userdata('error_message');
        if ($message) {
            echo $message;
            $this->session->unset_userdata('error_message');
        }
        ?>
    </h2>
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon edit"></i><span class="break"></span>Form Elements</h2>
            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <form class="form-horizontal" action="<?php echo base_url(); ?>Dashboard/save_blog" method="post" enctype="multipart/form-data">
                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Blog Title</label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" id="typeahead" name="blog_title"  data-provide="typeahead" data-items="4">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Author Name</label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" id="typeahead" name="author_name"  data-provide="typeahead" data-items="4">
<!--								<p class="help-block">Start typing to activate auto complete!</p>-->
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="selectError3">Blog Category</label>
                        <div class="controls">
                            <select id="selectError3"  name="blog_category_id">
                                <option>Select blog category</option>
                                <?php foreach ($all_publish_blog_category as $v_category){?>
                                <option value="<?php echo $v_category->blog_category_id;?>"><?php echo $v_category->blog_category_name;?></option>
                                <?php }?>
                            </select>
                        </div>
                    </div> 
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Blog Image</label>
                        <div class="controls">
                            <input type="file" class="span6 typeahead" id="typeahead" name="blog_image"  data-provide="typeahead" data-items="4">
                        </div>
                    </div>
                    <div class="control-group hidden-phone">
                        <label class="control-label" for="textarea2">Blog Short Description</label>
                        <div class="controls">
                            <textarea class="cleditor" id="textarea2" name="blog_short_description" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="control-group hidden-phone">
                        <label class="control-label" for="textarea2">Blog Long Description</label>
                        <div class="controls">
                            <textarea class="cleditor" id="textarea2" name="blog_long_description" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="selectError3">Publication Status</label>
                        <div class="controls">
                            <select id="selectError3" name="publication_status">
                                <option>Select</option>
                                <option value="1">Publish</option>
                                <option value="0">Unpublish</option>
                            </select>
                        </div>
                    </div>   

                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">Save Blog</button>
                        <button type="reset" class="btn">Cancel</button>
                    </div>
                </fieldset>
            </form>   

        </div>
    </div><!--/span-->

</div>