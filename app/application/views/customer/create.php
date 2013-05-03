
<div class="row">
    <?php echo form_open(base_url('customer/create_customer')); ?>
    
            <legend>New Customer</legend>
            <div class="control-group">
                <label class="control-label" for="name">Name</label>
                <div class="controls">
                    <input type="text" id="name" name="name" placeholder="Name" required>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="description">Description</label>
                <div class="controls">
                    <textarea rows="3" id="description" name="description" placeholder="Description"></textarea>
                </div>
            </div>
            <input type="submit" class="btn" value="Create New Customer" />
        </fieldset>
    <?php echo form_close(); ?>
</div>