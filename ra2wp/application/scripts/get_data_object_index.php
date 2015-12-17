<?php
require_once(ABSPATH . '/ra2wp/application/scripts/object_model.php');
$obj_modify = new Object_model();
$object_modify = $obj_modify->get_object_with_modify_info();

$values = array();
foreach ($object_modify as $object_item) {
    $t_Name = $object_item['Name'];
    $t_Purchase_No = $object_item['Purchase_No'];
    $t_Date_Deliver = $object_item['Date_Deliver'];
    $t_Date_Test = $object_item['Date_Test'];
    $t_Price = $object_item['Price'];
    $t_Series_No = $object_item['Series_No'];
    $t_LastLocation = $object_item['LastLocation'];
    $t_People_Modified = $object_item['People_Modified'];
    $t_Date_Modified = $object_item['Date_Modified'];
    $t_Note_Modified = $object_item['Note_Modified'];

    $temp_array = array($t_Name, $t_Purchase_No, $t_Date_Deliver, $t_Date_Test, $t_Price, $t_Series_No, $t_LastLocation, $t_People_Modified, $t_Date_Modified, $t_Note_Modified);

    array_push($values, $temp_array);
}

echo json_encode($values);
