<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


//$mydb = new wpdb('root','admin12345','ra2wp','localhost');
require_once(ABSPATH . '/ra2wp/application/models/object_model.php');
require_once 'ra2wp_controller.php';

class Object extends Ra2wp_Controller {

    public function __construct() { 
        parent::__construct();
    }

    public function index() {

        $obj_model = new Object_model();
        $obj_model->connect();
        
    }

    public function view() {
        global $mydb;
    }

    function add_object() {
        
    }

    function get_object() {
        
    }

}
