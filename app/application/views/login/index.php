<div class="row">
    <?php
    echo form_open(base_url('login/validate'));
    echo form_fieldset('Login');
    echo 'Username<br/>';
    echo form_input(array(
        'name' => 'username',
        'value' => '',
        'placeholder' => 'Username'
    ));
    echo '<br/>Password<br/>';
    echo form_password(array(
        'name' => 'password',
        'value' => '',
        'placeholder' => 'Password'
    ));
    echo '<br/>';
    echo form_submit('login', 'Log In', 'class="btn"');
    echo ' ';
    echo anchor('account', 'Create a new account', 'class="btn"');
    echo form_fieldset_close();
    echo form_close();
    ?>
</div>