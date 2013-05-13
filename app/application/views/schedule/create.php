
<div class="row">
    <?php echo form_open(base_url('schedule/create_schedule')); ?>
    <fieldset>
        <legend>New Schedule</legend>
        <div class="control-group">
            <label class="control-label" for="check_in">Check In</label>
            <div class="controls">
                <div class="input-append date form_datetime">
                    <input size="16" type="text" id="check_in" name="check_in" readonly>
                    <span class="add-on"><i class="icon-th"></i></span>
                </div>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="check_out">Check Out</label>
            <div class="controls">
                <div class="input-append date form_datetime">
                    <input size="16" type="text" id="check_out" name="check_out" readonly>
                    <span class="add-on"><i class="icon-th"></i></span>
                </div>
            </div>
        </div>
        <input type="submit" class="btn" value="Create New Schedule" />
    </fieldset>
    <?php echo form_close(); ?>
</div>