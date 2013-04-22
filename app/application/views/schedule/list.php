
            <div class="row">
                <input type="text" class="search search-query" placeholder="Search..."/>
                <div class="clear-r"></div>

                <?php
                    $tmpl = array(
                        'table_open' => "<table class='table table-hover'>"
                    );
                    $this->table->set_template($tmpl); 
                    $this->table->set_heading('ID', 'User', 'Check In', 'Check Out', 'Total');

                    foreach($checkins->result() as $checkin) {
                        $this->table->add_row(
                            $checkin->id,
                            $checkin->full_name,
                            date("d-M h:i a", human_to_unix($checkin->check_in)),
                            date("d-M h:i a", human_to_unix($checkin->check_out)),
                            $checkin->total_time
                        );
                    }

                    echo $this->table->generate();
                ?>                
            </div>