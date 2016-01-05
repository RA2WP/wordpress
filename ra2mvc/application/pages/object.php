<?php
/**
 * Object Index
 *
 * @package    RA2WP
 * @subpackage Object
 */

require_once(ABSPATH. '/ra2mvc/application/controllers/object_controller.php');
$obj = new Object();
$obj->index();
//include('get_data_object_index.php');

