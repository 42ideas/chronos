<div class="row">
    <?php echo form_open(base_url('schedule/edit_schedule')); ?>
    <fieldset>
        <legend>Edit Schedule</legend>
        <input type="hidden" id="id" name="id" value="<?php echo $schedule->result()[0]->id ?>" />
        <div class="control-group">
            <label class="control-label" for="check_in">Check In</label>
            <div class="controls">
                <div class="input-append date form_datetime">
                    <input size="16" type="text" id="check_in" name="check_in" value="<?php echo $schedule->result()[0]->check_in; ?>" readonly>
                    <span class="add-on"><i class="icon-th"></i></span>
                </div>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="check_out">Check Out</label>
            <div class="controls">
                <div class="input-append date form_datetime">
                    <input size="16" type="text" id="check_out" name="check_out" value="<?php echo $schedule->result()[0]->check_out; ?>" readonly>
                    <span class="add-on"><i class="icon-th"></i></span>
                </div>
            </div>
        </div>
        <input type="submit" class="btn" value="Edit Schedule" />
    </fieldset>
    <?php echo form_close(); ?>
</div>