<?php
include_once($_SERVER["DOCUMENT_ROOT"] . '/projekti-web/Projekti/database/mappers/carMapper.php');
$mapper = new CarMapper();
$carHeader = $mapper->getAllCars();

?>
<th>ID</th>
<th>Manufacturer</th>
<th>Model</th>
<th>Color</th>
<th>Prod. Year</th>
<th>Transmission</th>
<th>Category</th>
<th>Image</th>
<th>Rental Rate</th>
<th>Capacity</th>
<th>Last Update</th>
<th>Updated By User</th>