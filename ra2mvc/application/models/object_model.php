<?php
/**
 * Object Index
 *
 * @package    RA2WP
 * @subpackage Object
 */

require_once 'ra2wp_wpdb.php';
class Object_model extends Ra2wp_Wpdb{

    public function __construct() {
        parent::__construct();
    }

    public function get_object_with_modify_info($Id = FALSE) {
        global $mydb;
        if ($Id === FALSE) {
            $obj_query = "SELECT o.*, m.BuildingRoom AS LastLocation, m.People_Modified AS People_Modified, m.Date_Modified AS Date_Modified, m.Note AS Note_Modified "
                    . "FROM (ra2db_object AS o) LEFT OUTER JOIN (ra2db_object_modify AS m) ON (o.Name=m.Name_Object) "
                    . "ORDER BY o.Name ASC, m.Date_Modified ASC";
        } else {
            $obj_query = "SELECT o.*, m.BuildingRoom AS LastLocation, m.People_Modified AS People_Modified, m.Date_Modified AS Date_Modified, m.Note AS Note_Modified "
                    . "FROM (ra2db_object AS o) LEFT OUTER JOIN (ra2db_object_modify AS m) ON (o.Name=m.Name_Object) "
                    . "WHERE o.Id = '" . $Id . "'"
                    . "ORDER BY o.Name ASC, m.Date_Modified DESC";
        }
        $results = $mydb->get_results($obj_query);
        return $results;
    }

}
