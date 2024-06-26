<section class="main-content-wrapper">
    <section class="content-header">
        <h3 class="top-left-header">
            <?php echo lang('edit_table'); ?>
        </h3>
    </section>

    
        <div class="box-wrapper">
            
            <div class="table-box">
                
                <?php echo form_open(base_url('table/addEditTable/' . $encrypted_id)); ?>
                <div>
                    <div class="row">
                        <div class="col-sm-12 mb-2 col-md-4">

                            <div class="form-group">
                                <label><?php echo lang('area'); ?> <span class="required_star">*</span></label>
                                <select class="form-control select2" name="area">
                                    <option value=""><?php echo lang('select'); ?></option>
                                    <?php foreach ($areas as $value):?>
                                        <option <?php echo isset($table_information->area) && $table_information->area==$value->id?'selected':''?> <?php echo set_select('area',$value->id)?> value="<?php echo escape_output($value->id)?>"><?php echo escape_output($value->area_name)?></option>
                                    <?php endforeach;?>
                                </select>
                            </div>
                            <?php if (form_error('area')) { ?>
                                <div class="callout callout-danger my-2">
                                    <?php echo form_error('area'); ?>
                                </div>
                            <?php } ?>
                        </div>
                        <div class="col-sm-12 mb-2 col-md-4">

                            <div class="form-group">
                                <label><?php echo lang('table_name'); ?> <span class="required_star">*</span></label>
                                <input tabindex="1" type="text" name="name" class="form-control"
                                    placeholder="<?php echo lang('table_name'); ?>"
                                    value="<?php echo escape_output($table_information->name) ?>">
                            </div>
                            <?php if (form_error('name')) { ?>
                            <div class="callout callout-danger my-2">
                                <?php echo form_error('name'); ?>
                            </div>
                            <?php } ?>

                        </div>
                        <div class="col-sm-12 mb-2 col-md-4">

                            <div class="form-group">
                                <label><?php echo lang('seat_capacity'); ?></label>
                                <input tabindex="2" type="text" name="sit_capacity" class="form-control integerchk"
                                    placeholder="<?php echo lang('seat_capacity'); ?>"
                                    value="<?php echo escape_output($table_information->sit_capacity) ?>">
                            </div>
                            <?php if (form_error('sit_capacity')) { ?>
                            <div class="callout callout-danger my-2">
                                <?php echo form_error('sit_capacity'); ?>
                            </div>
                            <?php } ?>

                        </div>
                        <div class="col-sm-12 mb-2 col-md-4">

                            <div class="form-group">
                                <label><?php echo lang('position'); ?> </label>
                                <input tabindex="1" type="text" name="position" class="form-control"
                                       placeholder="<?php echo lang('position'); ?>"
                                       value="<?php echo escape_output($table_information->position) ?>">
                            </div>
                            <?php if (form_error('position')) { ?>
                                <div class="callout callout-danger my-2">
                                    <?php echo form_error('position'); ?>
                                </div>
                            <?php } ?>

                        </div>
                        <div class="col-sm-12 mb-2 col-md-4">

                            <div class="form-group">
                                <label><?php echo lang('description'); ?></label>
                                <input tabindex="2" type="text" name="description" class="form-control"
                                       placeholder="<?php echo lang('description'); ?>"
                                       value="<?php echo escape_output($table_information->description) ?>">
                            </div>
                            <?php if (form_error('description')) { ?>
                                <div class="callout callout-danger my-2">
                                    <?php echo form_error('description'); ?>
                                </div>
                            <?php } ?>

                        </div>

                    </div>

                </div>
                <div class="row mt-2">
                    <div class="col-sm-12 col-md-2 mb-2">
                        <button type="submit" name="submit" value="submit"
                        class="btn bg-blue-btn w-100"><?php echo lang('submit'); ?></button>
                    </div>
                    <div class="col-sm-12 col-md-2 mb-2">
                        <a class="btn bg-blue-btn w-100" href="<?php echo base_url() ?>table/tables">
                            <?php echo lang('back'); ?></a>
                    </div>
                </div>
                <?php echo form_close(); ?>
            </div>
        </div>
        
</section>