
<div class="row">
    <?php echo form_open(base_url('user/create_user')); ?>
    <fieldset>
        <legend>New User</legend>
        <div class="control-group">
            <label class="control-label" for="username" >Username</label>
            <div class="controls">
                <input type="text" id="username" name="username" placeholder="Username" required>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="password">Password</label>
            <div class="controls">
                <input type="password" id="password" name="password" placeholder="Password"required>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="first_name">First Name</label>
            <div class="controls">
                <input type="text" id="first_name" name="first_name" placeholder="First Name">
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="last_name">Last Name</label>
            <div class="controls">
                <input type="text" id="last_name" name="last_name" placeholder="Last Name">
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="email">Email</label>
            <div class="controls">
                <input type="email" id="email" name="email" placeholder="Email">
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="role">Role</label>
            <div class="controls">
                <input type="text" id="role" name="role" placeholder="Role" required>
            </div>
        </div>
        <input type="submit" class="btn" value="Create New User" />
    </fieldset>
    <?php echo form_close(); ?>
</div>