
<div class="row">
    <legend>Customer</legend>
    <?php echo form_open(base_url('customer/edit_customer')); ?>
    <fieldset>
        <input type="hidden" id="id" name="id" value="<?php echo $customer->result()[0]->id ?>" />
        <div class="control-group">
            <label class="control-label" for="name">Name</label>
            <div class="controls">
                <input type="text" id="name" name="name" placeholder="Name" value="<?php echo $customer->result()[0]->name ?>" required>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="description">Description</label>
            <div class="controls">
                <input type="text" id="description" name="description" placeholder="Description" value="<?php echo $customer->result()[0]->description ?>" required>
            </div>
        </div>
        <input type="submit" class="btn" value="Edit Customer" />
    </fieldset>
    <?php echo form_close(); ?>
</div>