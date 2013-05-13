
<div class="row">
    <?php echo form_open(base_url('worklog/edit_worklog')); ?>
    <fieldset>
        <legend>Edit Worklog</legend>
        <input type="hidden" id="id" name="id" value="<?php echo $worklog->result()[0]->id ?>" />
        <div class="control-group">
            <label class="control-label" for="description">Description</label>
            <div class="controls">
                <textarea rows="5" col="20" id="description" name="description" placeholder="Description"><?php echo $worklog->result()[0]->description ?></textarea>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="project_id">Project</label>
            <div class="controls">
                <select id="project_id" name="project_id">
                    <?php
                    foreach ($project_list->result() as $project) {
                        ?>
                        <option value="<?php echo $project->id ?>" <?php 
                                if($project->id == $worklog->result()[0]->project_id) {
                                    echo "selected";
                                }
                            ?>><?php echo $project->name ?></option>
                    <?php }
                    ?>
                </select>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="start_time">Start Time</label>
            <div class="controls">
                <input size="16" type="text" id="start_time" name="start_time" class="form_datetime" value="<?php echo $worklog->result()[0]->start_time;?>" readonly>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="end_time">End Time</label>
            <div class="controls">
                <input size="16" type="text" id="end_time" name="end_time" class="form_datetime" value="<?php echo $worklog->result()[0]->end_time; ?>" readonly>
            </div>
        </div>
        <input type="submit" class="btn" value="Edit Worklog Entry" />
    </fieldset>
    <?php echo form_close(); ?>
</div>