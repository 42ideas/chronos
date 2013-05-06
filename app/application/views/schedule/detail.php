<div class="row">
    <?php echo form_open(base_url('schedule/edit_schedule')); ?>
    <fieldset>
        <legend>New Schedule</legend>
        <input type="hidden" id="id" name="id" value="<?php echo $schedule->result()[0]->id ?>" />
        <div class="control-group">
            <label class="control-label" for="check_in">Check In</label>
            <div class="controls">
                <input type="text" id="check_in" name="check_in" placeholder="Check In" value="<?php echo $schedule->result()[0]->check_in ?>" />
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="check_out">Check Out</label>
            <div class="controls">
                <input type="text" id="check_out" name="check_out" placeholder="Check Out" value="<?php echo $schedule->result()[0]->check_out ?>" />
            </div>
        </div>
        <input type="submit" class="btn" value="Edit Schedule" />
    </fieldset>
    <?php echo form_close(); ?>
</div>