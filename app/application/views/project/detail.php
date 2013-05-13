
<div class="row">
    <legend>Project</legend>
    <?php echo form_open(base_url('project/edit_project')); ?>
    <fieldset>
        <input type="hidden" id="id" name="id" value="<?php echo $project->result()[0]->id ?>" />
        <div class="control-group">
            <label class="control-label" for="name">Name</label>
            <div class="controls">
                <input type="text" id="name" name="name" placeholder="Name" value="<?php echo $project->result()[0]->name ?>" required>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="description">Description</label>
            <div class="controls">
                <textarea rows="3" id="description" name="description" placeholder="Description" required><?php echo $project->result()[0]->description ?></textarea>
            </div>
        </div>
        
        <input type="submit" class="btn" value="Edit Project" />
    </fieldset>
    <?php echo form_close(); ?>
</div>