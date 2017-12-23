<div class="row-fluid sortable">
    
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
            <form class="form-horizontal" action="<?php echo base_url(); ?>Dashboard/update_category" method="post">
                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Category Name </label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" id="typeahead" name="category_name" value="<?php echo $category_info->category_name;?>"  data-provide="typeahead" data-items="4">
                            <input type="hidden" class="span6 typeahead" id="typeahead" name="category_id" value="<?php echo $category_info->category_id;?>"  data-provide="typeahead" data-items="4">
                        </div>
                    </div>
                   
                    <div class="control-group hidden-phone">
                        <label class="control-label" for="textarea2">Category Description</label>
                        <div class="controls">
                            <textarea class="cleditor" id="textarea2" name="category_description" rows="3"><?php echo $category_info->category_description;?></textarea>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="selectError3">Publication Status</label>
                        <div class="controls">
                            <select id="selectError3" name="publication_status">
                                <?php if($category_info->publication_status==1) { ?>
                                <option value="1" selected="true">Published</option>
                                <option value="0">Unpublished</option>
                                <?php } else {?>
                                <option value="1">Published</option>
                                <option value="0" selected="true">Unpublished</option>
                                <?php }?>
                            </select>
                        </div>
                    </div>   

                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">Update</button>
                        <button type="reset" class="btn">Cancel</button>
                    </div>
                </fieldset>
            </form>   

        </div>
    </div><!--/span-->

</div><!--/row-->