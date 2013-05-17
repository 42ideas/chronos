
<div class="row">
    <input type="text" class="pull-right search-query" placeholder="Search..."/>
    <div class="clear-r"></div>
    <?php
    $tmpl = array(
        'table_open' => "<table class='table table-hover'>"
    );
    $this->table->set_template($tmpl);
    $this->table->set_heading('ID', 'Name', 'Description', 'Customer', '');

    foreach ($projects->result() as $project) {
        $this->table->add_row(
                anchor(base_url('project/detail/' . $project->id), $project->id), $project->name, $project->description, $project->customer,
                anchor(base_url('project/delete/' . $project->id), '<i class="icon-remove"></i>', array ('onclick' => "return confirm('Are you sure you want to delete this project?');"))
        );
    }
    echo $this->table->generate();
    ?>  
</div>
<div class="row">
    <a href="<?php echo base_url('project/create'); ?>" class="btn">New Project</a>
</div>