
<div class="row">
    <?php echo form_open(base_url('user/edit_user')); ?>
    <fieldset>
        <legend>Edit User</legend>
        <input type="hidden" id="id" name="id" value="<?php echo $user->result()[0]->id ?>" />
        <div class="control-group">
            <label class="control-label" for="username">Username</label>
            <div class="controls">
                <input type="text" id="username" name="username" placeholder="Username" value="<?php echo $user->result()[0]->username ?>"/>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="password">Password</label>
            <div class="controls">
                <input type="password" id="password" name="password" placeholder="Password" />
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="first_name">First Name</label>
            <div class="controls">
                <input type="text" id="first_name" name="first_name" placeholder="First Name" value="<?php echo $user->result()[0]->first_name ?>"/>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="last_name">Last Name</label>
            <div class="controls">
                <input type="text" id="last_name" name="last_name" placeholder="Last Name" value="<?php echo $user->result()[0]->last_name ?>"/>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="email">Email</label>
            <div class="controls">
                <input type="email" id="email" name="email" placeholder="Email" value="<?php echo $user->result()[0]->email ?>"/>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="role">Role</label>
            <div class="controls">
                <input type="text" id="role" name="role" placeholder="Role" value="<?php echo $user->result()[0]->role ?>"/>
            </div>
        </div>
        <input type="submit" class="btn" value="Edit User" />
    </fieldset>
    <?php echo form_close(); ?>
</div>