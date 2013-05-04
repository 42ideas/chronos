
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
                anchor(base_url('customer/detail/' . $customer->id), $customer->id),
                $customer->name,
                $customer->description
            );
        }

        echo $this->table->generate();
    ?>  
</div>
<div class="row">
    <a href="<?php echo base_url('customer/create'); ?>" class="btn">New Customer</a>
</div>