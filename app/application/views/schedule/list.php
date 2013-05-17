
<div class="row">
    <input type="text" class="right search-query" placeholder="Search..."/>
    <div class="clear-r"></div>

    <?php
    $tmpl = array(
        'table_open' => "<table class='table table-hover'>"
    );
    $this->table->set_template($tmpl);
    $this->table->set_heading('ID', 'User', 'Check In', 'Check Out', 'Total', '');

    foreach ($checkins->result() as $checkin) {
        $this->table->add_row(
                anchor(base_url('schedule/detail/' . $checkin->id), $checkin->id), $checkin->full_name, date("d-M h:i a", human_to_unix($checkin->check_in)), date("d-M h:i a", human_to_unix($checkin->check_out)), $checkin->total_time, anchor(base_url('schedule/delete/' . $checkin->id), '<i class="icon-remove"></i>', array('onclick'=>"return confirm('Are you sure you want to delete this schedule?');"))
        );
    }
    echo $this->table->generate();
    ?>                
</div>
<div class="row">
    <a href="<?php echo base_url('schedule/create'); ?>" class="btn">New Schedule</a>
</div>