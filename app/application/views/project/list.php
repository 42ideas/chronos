
            <div class="row">
                <input type="text" class="search search-query" placeholder="Search..."/>
                <div class="clear-r"></div>
                <?php
                    $tmpl = array(
                        'table_open' => "<table class='table table-hover'>"
                    );
                    $this->table->set_template($tmpl); 
                    $this->table->set_heading('ID', 'Name', 'Description', 'Customer');

                    foreach($projects->result() as $project) {
                        $this->table->add_row(
                            $project->id,
                            $project->name,
                            $project->description,
                            $project->customer
                        );
                    }

                    echo $this->table->generate();
                ?>  
            </div>