
<div class="row">
    <?php echo form_open(base_url('worklog/create_worklog')); ?>
    <fieldset>
        <legend>New Project</legend>
        <div class="control-group">
            <label class="control-label" for="description">Description</label>
            <div class="controls">
                <textarea rows="5" col="20" id="description" name="description" placeholder="Description"></textarea>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="project_id">Project</label>
            <div class="controls">
                <select id="project_id" name="project_id">
                    <?php
                    foreach ($project_list->result() as $project) {
                        ?>
                        <option value="<?php echo $project->id ?>"><?php echo $project->name ?></option>
                    <?php }
                    ?>
                </select>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="date">Date</label>
            <div class="controls">
                <input type="text" id="date" name="date" placeholder="YYYY-mm-dd">
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="start_time">Start Time</label>
            <div class="controls">
                <input type="text" id="start_time" name="start_time" placeholder="HH:MM">
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="end_time">End Time</label>
            <div class="controls">
                <input type="text" id="end_time" name="end_time" placeholder="HH:MM">
            </div>
        </div>
        <input type="submit" class="btn" value="Create New Worklog Entry" />
    </fieldset>
    <?php echo form_close(); ?>
</div>