<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once 'ra2wp_controller.php';
class People extends Ra2wp_controller{

    public function __construct() {
        parent::__construct();
//        $this->load->model('people_model');
    }
    
    public function people_Info($Name, $Education, $Experience, $Duties, $Contact) {
        require_once '../views/people_info.php';
    }

}
