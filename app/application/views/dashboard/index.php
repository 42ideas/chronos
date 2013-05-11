<div class="row">
    <div class="span6">
        <legend>Work Log</legend>
        <?php
        $tmpl = array(
            'table_open' => "<table class='table table-hover'>"
        );
        $this->table->set_template($tmpl);
        $this->table->set_heading('ID', 'Project', 'Description', 'Total');

        foreach ($logs->result() as $log) {
            $this->table->add_row(
                    anchor(base_url('worklog/detail/' . $log->id), $log->id), $log->project, $log->description, $log->total_time
            );
        }

        echo $this->table->generate();
        ?>
    </div> 
    <div class="span6">
        <legend>Schedule</legend>
        <?php
        $tmpl = array(
            'table_open' => "<table class='table table-hover'>"
        );
        $this->table->set_template($tmpl);
        $this->table->set_heading('ID', 'Check In', 'Check Out', 'Total');

        foreach ($schedules->result() as $schedule) {
            $this->table->add_row(
                    anchor(base_url('schedule/detail/' . $schedule->id), $schedule->id), date("d-M h:i a", human_to_unix($schedule->check_in)), date("d-M h:i a", human_to_unix($schedule->check_out)), $schedule->total_time
            );
        }
 
        echo $this->table->generate();
        ?>    
    </div>
    <?php
        echo anchor(base_url('schedule/check_in/'), 'Check-In', 'class="btn btn-success" id="checkInBtn"');
        echo anchor(base_url('schedule/check_out/'), 'Check-Out', 'class="btn btn-danger" id="checkOutBtn"');
    ?>
</div>