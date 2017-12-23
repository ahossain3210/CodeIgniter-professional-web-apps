<ul class="breadcrumb">
    <li>
        <i class="icon-home"></i>
        <a href="index.html">Dashboard</a> 
        <i class="icon-angle-right"></i>
    </li>
    <li><a href="#">Add course category</a></li>
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
            <form class="form-horizontal" action="<?php echo base_url(); ?>Dashboard/save_category" method="post">
                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Category Name </label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" id="typeahead" name="category_name"  data-provide="typeahead" data-items="4">
<!--								<p class="help-block">Start typing to activate auto complete!</p>-->
                        </div>
                    </div>
                    <!--							<div class="control-group">
                                                                              <label class="control-label" for="date01">Date input</label>
                                                                              <div class="controls">
                                                                                    <input type="text" class="input-xlarge datepicker" id="date01" value="02/16/12">
                                                                              </div>
                                                                            </div>-->

                    <!--							<div class="control-group">
                                                                              <label class="control-label" for="fileInput">File input</label>
                                                                              <div class="controls">
                                                                                    <input class="input-file uniform_on" id="fileInput" type="file">
                                                                              </div>
                                                                            </div>          -->
                    <div class="control-group hidden-phone">
                        <label class="control-label" for="textarea2">Category Description</label>
                        <div class="controls">
                            <textarea class="cleditor" id="textarea2" name="category_description" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="selectError3">Publication Status</label>
                        <div class="controls">
                            <select id="selectError3" name="publication_status">
                                <option>Select</option>
                                <option value="1">Published</option>
                                <option value="0">Unpublished</option>

                            </select>
                        </div>
                    </div>   

                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">Save changes</button>
                        <button type="reset" class="btn">Cancel</button>
                    </div>
                </fieldset>
            </form>   

        </div>
    </div><!--/span-->

</div><!--/row-->