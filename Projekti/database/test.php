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
include_once($_SERVER["DOCUMENT_ROOT"] . '/projekti-web/Projekti/database/mappers/policyMapper.php');
$policies = $mapper->getAllPolicies();
// for ($i = 0; $i < count($policies); $i++) {
//     echo $policies[$i]['policy_id'] . '<br>';
//     echo $policies[$i]['title'] . '<br>';
//     echo $policies[$i]['description'] . '<br>';
//     echo $policies[$i]['last_update'] . '<br>';
//     echo $policies[$i]['updated_by_user'] . '<br>';
// }

echo json_encode($policies);
