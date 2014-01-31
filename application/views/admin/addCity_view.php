<script type="text/javascript">
    ;(function($) { 
        $(document).ready(function() {
            $("#frmCity").validate({
                ignore: ":hidden:not(select)",
                rules: {
                    cityName: {
                        required: true
                    },
                    latitude: {
                        required: true,
                        decimalnumeric: true
                    },
                    longitude: {
                        required: true,
                        decimalnumeric: true
                    },
                    countryName: {
                        required: true
                    }
                },errorElement: "div",
                messages: {
                },
                errorPlacement: function(error, element) {
                    error.insertAfter(element);
                },
                submitHandler: function(){
                    xajax_citySubmit(xajax.getFormValues('frmCity'));
                }
		
            });	
        })
    })(jQuery); 
</script>
<!-- content starts -->
<div class="row-fluid sortable">		
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-edit"></i> <?php echo $page_title; ?></h2>
        </div>
        <div class="box-content">
            <div id="errorMsg"></div>
            <?php echo form_open($action, $attributes); ?>
            <input type='hidden' value="<?php echo $cityId ?>" name='cityId' id='cityId'>
            <fieldset>
                <div class="control-group">
                    <label class="control-label" for="focusedInput"><?php echo $this->lang->line('cityName'); ?></label>
                    <div class="controls">
                        <?php echo form_input($cityName); ?>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="focusedInput"><?php echo $this->lang->line('latitude'); ?></label>
                    <div class="controls">
                        <?php echo form_input($latitude); ?>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="focusedInput"><?php echo $this->lang->line('longitude'); ?></label>
                    <div class="controls">
                        <?php echo form_input($longitude); ?>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="selectError"><?php echo $this->lang->line('countryName'); ?></label>
                    <div class="controls">
                        <?php echo form_dropdown($sel_countryName['name'], $sel_countryName['options'], $sel_countryName['selected_countryId'], $sel_countryName['attribute']); ?>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="selectError"><?php echo $this->lang->line('status'); ?></label>
                    <div class="controls">
                        <?php echo form_dropdown($sel_status['name'], $sel_status['options'], $sel_status['selected_status'], $sel_status['attribute']); ?>
                    </div>
                </div>				
                <div class="form-actions">
                    <button type="submit" class="btn btn-primary"><?php echo $this->lang->line('btnSave'); ?></button>
                    <button type="button" class="btn" onClick="javascript:history.back();"><?php echo $this->lang->line('btnCancel'); ?></button>
                </div>
            </fieldset>
            <?php echo form_close(); ?>
        </div>					
    </div><!--/span-->
</div><!--/row-->	
<!-- content ends -->