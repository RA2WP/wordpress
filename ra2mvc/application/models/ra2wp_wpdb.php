<?php
/**
 * Ra2wp Wpdb
 *
 * @package    RA2WP
 * @subpackage Database Connection
 */

class Ra2wp_Wpdb {

    public function __construct() {
        $this->connect();
    }
    
    public function connect() {
        global $mydb;
        $mydb = new wpdb('root', 'admin12345', 'ra2wp', 'localhost');
    }

}