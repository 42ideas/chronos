
<div class="row">
    <?php echo form_open(base_url('project/create_project')); ?>
    <fieldset>
        <legend>New Project</legend>
        <div class="control-group">
            <label class="control-label" for="name">Name</label>
            <div class="controls">
                <input type="text" id="name" name="name" placeholder="Name">
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="description">Description</label>
            <div class="controls">
                <textarea rows="5" col="20" id="description" name="description" placeholder="Description"></textarea>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="customer">Customer</label>
            <div class="controls">
                <select id="customer" name="customer">
                    <?php
                    foreach ($customer_list->result() as $customer) {
                        ?>
                        <option value="<?php echo $customer->id ?>"><?php echo $customer->name ?></option>
                    <?php }
                    ?>
                </select>
            </div>
        </div>
        <input type="submit" class="btn" value="Create New Project" />
    </fieldset>
    <?php echo form_close(); ?>
</div>