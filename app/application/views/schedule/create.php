
<div class="row">
    <?php echo form_open(base_url('schedule/create_schedule')); ?>
    <fieldset>
        <legend>New Schedule</legend>
        <div class="control-group">
            <label class="control-label" for="check_in">Check In</label>
            <div class="controls">
                <input size="16" type="text" id="check_in" name="check_in" class="form_datetime" readonly required>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="check_out">Check Out</label>
            <div class="controls">
                <input size="16" type="text" id="check_out" name="check_out" class="form_datetime" readonly required>
            </div>
        </div>
        <input type="submit" class="btn" value="Create New Schedule" />
    </fieldset>
    <?php echo form_close(); ?>
</div>