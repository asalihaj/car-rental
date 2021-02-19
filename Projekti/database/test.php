<?php
session_start();
// foreach ($users as $user => $user_data) {
//     echo $user . ' = ' . $user_data['user_id'] . ' |';
//     echo $user_data['email'] . ' |';
//     echo $user_data['role'] . '<br>';
//     echo '<br>';
// }

// echo $users[0] . '<br>';
// echo $users[0] . '<br>';
// echo $users[0] . '<br>';
// for ($i = 0; $i < 1; $i++) {
//     foreach ($users[$i] as $user => $user_d) {
//         echo $user;
//     }
//     echo '<br>';
// }
// $contact = new Contact('Rick Adams', 'rickadams@asdas.asd', 'Helloo');
// Use comparison operator to  
include_once($_SERVER["DOCUMENT_ROOT"] . '/projekti-web/Projekti/database/mappers/carMapper.php');

// for ($i = 0; $i < count($policies); $i++) {
//     echo $policies[$i]['policy_id'] . '<br>';
//     echo $policies[$i]['title'] . '<br>';
//     echo $policies[$i]['description'] . '<br>';
//     echo $policies[$i]['last_update'] . '<br>';
//     echo $policies[$i]['updated_by_user'] . '<br>';
// }
if (isset($_POST['car-edit'])) {
    if (empty($_POST['image'])) {
        $mapper = new CarMapper();
        $carId = isset($_POST['id']) ? $_POST['id'] : '';
        $image = $mapper->getCarById($carId)['image'];
        echo isset($_FILES['image']['name']) ? $_FILES['image']['name'] : 'd';
        echo '<br>' . empty($_FILES['image']['name']) ? "Y" : "N";
    }
}
