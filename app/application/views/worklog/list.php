
<div class="row">
    <input type="text" class="search search-query" placeholder="Search..."/>
    <div class="clear-r"></div>
    <?php
    $tmpl = array(
        'table_open' => "<table class='table table-hover'>"
    );
    $this->table->set_template($tmpl);
    $this->table->set_heading('ID', 'Customer', 'Project', 'User', 'Description', 'Start', 'End', 'Total');

    foreach ($logs->result() as $log) {
        $this->table->add_row(
                anchor(base_url('worklog/detail/' . $log->id), $log->id), $log->customer, $log->project, $log->username, $log->description, date("d-M h:i a", human_to_unix($log->start_time)), date("d-M h:i a", human_to_unix($log->end_time)), $log->total_time
        );
    }

    echo $this->table->generate();
    ?>

</div>
<div class="row">
    <a href="<?php echo base_url('worklog/create'); ?>" class="btn">New Worklog</a>
</div>