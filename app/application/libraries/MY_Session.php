<?php
class MY_Session extends CI_Session {

    public function __construct()
    {
        parent::__construct();
    }
    
    function is_logged_in() {
        $is_logged_in = $this->userdata('is_logged_in');
        
        if(!isset($is_logged_in) || $is_logged_in != true) {
            redirect(base_url('login/index'));
        }
    }
}
?>