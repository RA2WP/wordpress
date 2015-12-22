<h2 align="center">View All Objects with tracking information</h2>

<table id="example" class="footable" cellspacing="0" width="40%">
    <thead>
        <tr>
            <th>Object Name</th>
            <th>Purchase No</th>
            <th>Date Deliver</th>
            <th>Date Test</th>
            <th>Price</th>
            <th>Series No</th>
            <th>Locations</th>
            <th>People Modified</th>
            <th>Date Modified</th>
            <th>Note Modified</th>
        </tr>
    </thead>

<?php    
// test the connection to get result from object_model.php
require_once(ABSPATH . '/ra2wp/application/models/object_model.php');
$obj_model = new Object_model();
$object_modify = $obj_model->get_object_with_modify_info();

foreach ($object_modify as $object_modify1) :
echo "<tr><td>".$object_modify1->Name."</td><td>".$object_modify1->Purchase_No."</td><td>".$object_modify1->Date_Deliver.
        "</td><td>".$object_modify1->Date_Test."</td><td>".$object_modify1->Price."</td><td>".$object_modify1->Series_No.
        "</td><td>".$object_modify1->LastLocation."</td><td>".$object_modify1->People_Modified."</td><td>".$object_modify1->Date_Modified.
        "</td><td>".$object_modify1->Note_Modified."</td><td></tr>";
endforeach;
?>
    
    
    <tfoot>
        <tr>
            <th>Object Name</th>
            <th>Purchase No</th>
            <th>Date Deliver</th>
            <th>Date Test</th>
            <th>Price</th>
            <th>Series No</th>
            <th>Locations</th>
            <th>People Modified</th>
            <th>Date Modified</th>
            <th>Note Modified</th>
        </tr>
    </tfoot>
</table>
