<div class="row">
    <div class="span6">
        <legend>Work Log</legend>
        <?php
        $tmpl = array(
            'table_open' => "<table class='table table-hover'>"
        );
        $this->table->set_template($tmpl);
        $this->table->set_heading('ID', 'Project', 'User', 'Description', 'Start', 'End', 'Total');

        foreach ($logs->result() as $log) {
            $this->table->add_row(
                    anchor(base_url('worklog/detail/' . $log->id), $log->id), $log->project, $log->username, $log->description, date("d-M h:i a", human_to_unix($log->start_time)), date("d-M h:i a", human_to_unix($log->end_time)), $log->total_time
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
        $this->table->set_heading('ID', 'User', 'Check In', 'Check Out', 'Total');

        foreach ($schedules->result() as $schedule) {
            $this->table->add_row(
                    anchor(base_url('schedule/detail/' . $schedule->id), $schedule->id), $schedule->full_name, date("d-M h:i a", human_to_unix($schedule->check_in)), date("d-M h:i a", human_to_unix($schedule->check_out)), $schedule->total_time
            );
        }

        echo $this->table->generate();
        ?>    
    </div>
</div>