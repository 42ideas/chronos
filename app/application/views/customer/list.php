
            <div class="row">
                <input type="text" class="search search-query" placeholder="Search..."/>
                <div class="clear-r"></div>
                <?php
                    $tmpl = array(
                        'table_open' => "<table class='table table-hover'>"
                    );
                    $this->table->set_template($tmpl); 
                    $this->table->set_heading('ID', 'Name', 'Description');

                    foreach($customers->result() as $customer) {
                        $this->table->add_row(
                            $customer->id,
                            $customer->name,
                            $customer->description
                        );
                    }

                    echo $this->table->generate();
                ?>  
            </div>