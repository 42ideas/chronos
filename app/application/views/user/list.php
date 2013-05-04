
<div class="row">
    <input type="text" class="search search-query" placeholder="Search..."/>
    <div class="clear-r"></div>
    <?php
    $tmpl = array(
        'table_open' => "<table class='table table-hover'>"
    );
    $this->table->set_template($tmpl);
    $this->table->set_heading('ID', 'Username', 'First Name', 'Last Name', 'Email', 'Role');

    foreach ($users->result() as $user) {
        $this->table->add_row(
                anchor(base_url('user/detail/' . $user->id), $user->id), $user->username, $user->first_name, $user->last_name, $user->email, $user->role
        );
    }

    echo $this->table->generate();
    ?>  
</div>
<div class="row">
    <a href="<?php echo base_url('user/create'); ?>" class="btn">New User</a>
</div>