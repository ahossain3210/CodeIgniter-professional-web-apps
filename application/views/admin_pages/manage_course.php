<ul class="breadcrumb">
    <li>
        <i class="icon-home"></i>
        <a href="index.html">Home</a> 
        <i class="icon-angle-right"></i>
    </li>
    <li><a href="#">Manage Courses</a></li>
</ul>
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
            <h2><i class="halflings-icon user"></i><span class="break"></span>Members</h2>
            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <table class="table table-striped table-bordered bootstrap-datatable datatable">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Title</th>
                        <th>Course Fee</th>
                        <th>Start Date</th>
                        <th>Total Seats</th>
                        <th>Total Class</th>
                        <th>Days / Week</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>   
                <tbody>
                    <?php
                    foreach ($course_info as $v_course)
                    {
                    ?>
                    <tr>
                        <td><?php echo $v_course->course_id;?></td>
                        <td class="center"><?php echo $v_course->course_title;?></td>
                        <td class="center">Tk. <?php echo $v_course->course_fee;?></td>
                        <td class="center"><?php echo $v_course->start_date;?></td>
                        <td class="center"><?php echo $v_course->total_seat;?></td>
                        <td class="center"><?php echo $v_course->total_class;?></td>
                        <td class="center"><?php echo $v_course->days;?></td>
                        <td class="center">
                            <?php if($v_course->publication_status==1){?>
                                <span class="label label-success">Publish</span>
                            <?php } else {?>
                                <span class="label label-important">Unpublish</span>
                            <?php } ?>
                        </td>
                        <td class="center">
                            <?php if($v_course->publication_status==1){?>
                            <a class="btn btn-danger" href="<?php echo base_url();?>Dashboard/unpublish_course/<?php echo $v_course->course_id;?>">
                                    <i class="halflings-icon white thumbs-down" title="Unpublish"></i>  
                                </a>
                            <?php } else {?>
                                <a class="btn btn-success" href="<?php echo base_url();?>Dashboard/publish_course/<?php echo $v_course->course_id;?>">
                                    <i class="halflings-icon white thumbs-up" title="Publish"></i>  
                                </a>
                            <?php }?>
                            <a class="btn btn-info" href="<?php echo base_url();?>Dashboard/edit_course/<?php echo $v_course->course_id;?>">
                                <i class="halflings-icon white edit" title="Edit"></i>  
                            </a>
                            <a class="btn btn-danger" href="<?php echo base_url();?>Dashboard/delete_course/<?php echo $v_course->course_id;?>" onclick="return checkDelete();">
                                <i class="halflings-icon white trash" title="Delete"></i> 
                            </a>
                        </td>
                    </tr>
                    <?php }?>
                </tbody>
            </table>            
        </div>
    </div><!--/span-->

</div>