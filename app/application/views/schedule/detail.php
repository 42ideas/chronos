<div class="row">
    <?php echo form_open(base_url('schedule/edit_schedule')); ?>
    <fieldset>
        <legend>Edit Schedule</legend>
        <input type="hidden" id="id" name="id" value="<?php echo $schedule->result()[0]->id ?>" />
        <div class="control-group">
            <label class="control-label" for="check_in">Check In</label>
            <div class="controls">
                <input size="16" type="text" id="check_in" name="check_in" class="form_datetime" value="<?php echo $schedule->result()[0]->check_in; ?>" readonly required>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="check_out">Check Out</label>
            <div class="controls">
                <input size="16" type="text" id="check_out" name="check_out" class="form_datetime" value="<?php echo $schedule->result()[0]->check_out; ?>" readonly required>
            </div>
        </div>
        <input type="submit" class="btn" value="Edit Schedule" />
    </fieldset>
    <?php echo form_close(); ?>
</div>