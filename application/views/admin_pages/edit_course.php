<div class="row-fluid sortable">

    <div class="box span12">
        <h2 style="color: green">
            <?php
            $message = $this->session->userdata('message');
            if ($message) {
                echo $message;
                $this->session->unset_userdata('message');
            }
            ?>
        </h2>
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon edit"></i><span class="break"></span>Form Elements</h2>
            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <form class="form-horizontal" action="<?php echo base_url(); ?>Dashboard/update_course" method="post">
                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Course Title</label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" id="typeahead" name="course_title" value="<?php echo $course_info->course_title;?>" data-provide="typeahead" data-items="4">
                            <input type="hidden" class="span6 typeahead" id="typeahead" name="course_id" value="<?php echo $course_info->course_id;?>" data-provide="typeahead" data-items="4">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="selectError3">Category Name</label>
                        <div class="controls">
                            <select id="selectError3" name="category_id">
                                <?php
                                foreach ($all_publish_category as $v_category)
                                {
                                    if($v_category->category_id==$course_info->category_id)
                                    {
                                ?>
                                <option value="<?php echo $v_category->category_id;?>" selected="true"><?php echo $v_category->category_name;?></option>
                                    <?php } else {?>
                                <option value="<?php echo $v_category->category_id;?>"><?php echo $v_category->category_name;?></option>
                                <?php  } }?>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Course Fee</label>
                        <div class="controls">
                            <input type="text" name="course_fee" value="<?php echo $course_info->course_fee;?>" data-provide="typeahead" data-items="4">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Start Date</label>
                        <div class="controls">
                            <input type="text" name="start_date" value="<?php echo $course_info->start_date;?>" data-provide="typeahead" data-items="4">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Total Seats</label>
                        <div class="controls">
                            <input type="text" name="total_seat" value="<?php echo $course_info->total_seat;?>" data-provide="typeahead" data-items="4">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Number of Classes</label>
                        <div class="controls">
                            <input type="text" name="total_class" value="<?php echo $course_info->total_class;?>" data-provide="typeahead" data-items="4">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Time</label>
                        <div class="controls">
                            <input type="text" name="class_time" value="<?php echo $course_info->class_time;?>" data-provide="typeahead" data-items="4">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Days</label>
                        <div class="controls">
                            <input type="text" name="days" value="<?php echo $course_info->days;?>" data-provide="typeahead" data-items="4">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Course Instructor</label>
                        <div class="controls">
                            <input type="text" name="course_instructor" value="<?php echo $course_info->course_instructor;?>" data-provide="typeahead" data-items="4">
                        </div>
                    </div>
                    <div class="control-group hidden-phone">
                        <label class="control-label" for="textarea2">Description</label>
                        <div class="controls">
                            <textarea class="cleditor" id="textarea2" name="course_description" rows="3"><?php echo $course_info->course_description;?></textarea>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="selectError3">Publication Status</label>
                        <div class="controls">
                            <select id="selectError3" name="publication_status">
                                <?php if($course_info->publication_status==1) {?>
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
                        <button type="submit" class="btn btn-primary">Update Info</button>
                        <button type="reset" class="btn">Cancel</button>
                    </div>
                </fieldset>
            </form>   

        </div>
    </div><!--/span-->

</div><!--/row-->