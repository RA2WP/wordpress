<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

global $mydb;
$mydb = new wpdb('root','admin12345','ra2wp','localhost');
$rows = $mydb->get_results("select Name from ra2db_object");
echo "<ul>";
foreach ($rows as $obj) :
   echo "<li>".$obj->Name."</li>";
endforeach;
echo "</ul>";

