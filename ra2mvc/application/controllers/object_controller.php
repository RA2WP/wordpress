<?php
/**
 * Object Controller
 *
 * @package    RA2WP
 * @subpackage Object
 */

require_once 'ra2wp_controller.php';
class Object extends Ra2wp_Controller {

    public function __construct() {
        parent::__construct();
        
        require_once(ABSPATH . '/ra2mvc/application/models/object_model.php');

    }

    public function index() {
        $obj_model = new Object_model();
        $obj_model->connect();

        require_once(ABSPATH . '/ra2mvc/application/views/object_views.php');
    }

    public function view() {
        global $mydb;
    }

    function add_object() {
        
    }

    function get_object() {
        
    }

}
