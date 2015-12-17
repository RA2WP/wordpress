<?php
/**
 * Object Index
 *
 * @package    RA2WP
 * @subpackage Object
 */

require_once(ABSPATH. '/ra2wp/application/controllers/object_controller.php');
$obj = new Object();
$obj->index();
//include('get_data_object_index.php');

require_once(ABSPATH. '/ra2wp/application/views/object_views.php');  

//// test the connection to get result from object_model.php
//require_once(ABSPATH . '/ra2wp/application/scripts/object_model.php');
//$obj_model = new Object_model();
//$object_modify = $obj_model->get_object_with_modify_info();
//echo "<ul>";
//foreach ($object_modify as $object_modify1) :
//    echo "<li>" . $object_modify1->LastLocation . "</li>";
//endforeach;
//echo "</ul>";
