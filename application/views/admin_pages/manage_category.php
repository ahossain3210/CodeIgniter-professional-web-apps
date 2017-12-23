<ul class="breadcrumb">
    <li>
        <i class="icon-home"></i>
        <a href="index.html">Home</a> 
        <i class="icon-angle-right"></i>
    </li>
    <li><a href="#">Manage Category</a></li>
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
                        <th>Category ID</th>
                        <th>Category Name</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>   
                <tbody>
                    <?php foreach ($category_info as $v_category){?>
                    <tr>
                        <td><?php echo $v_category->category_id;?></td>
                        <td class="center"><?php echo $v_category->category_name;?></td>
                        <td class="center">
                            <?php if($v_category->publication_status==1){?>
                            <span class="label label-success">Published</span>
                            <?php } else {?>
                            <span class="label label-important">Unpublished</span>
                            <?php }?>
                        </td>
                        <td class="center">
                            <?php if($v_category->publication_status==1){?>
                            <a class="btn btn-danger" href="<?php echo base_url();?>Dashboard/unpublish_category/<?php echo $v_category->category_id;?>">
                                    <i class="halflings-icon white thumbs-down" title="Unpublish"></i>  
                                </a>
                            <?php } else {?>
                                <a class="btn btn-success" href="<?php echo base_url();?>Dashboard/publish_category/<?php echo $v_category->category_id;?>">
                                    <i class="halflings-icon white thumbs-up" title="Publish"></i>  
                                </a>
                            <?php }?>
                            <a class="btn btn-info" href="<?php echo base_url();?>Dashboard/edit_category/<?php echo $v_category->category_id;?>">
                                <i class="halflings-icon white edit" title="Edit"></i>  
                            </a>
                            <a class="btn btn-danger" href="<?php echo base_url();?>Dashboard/delete_category/<?php echo $v_category->category_id;?>" onclick="return checkDelete();">
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