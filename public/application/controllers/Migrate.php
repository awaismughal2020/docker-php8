<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migrate extends CI_Controller {
    public function index() {
        error_reporting(E_ALL);
        $this->load->library('migration');
        if ($this->migration->latest() === FALSE)
        {
            echo $this->migration->error_string();
        }else{
            echo "Table Migrated Successfully.";
        }
    }

}
