<?php

session_start();

$staffInfo = [
    'staffID' => 1,
    'staffUsername' => 'ADMIN',
    'staffRole' => 'DB_ADMIN',
    'accessLevel' => [
        'level' => 99,                  //DB Admin requires access level 99, Manager requires access level 1
        'levelDescription' => 'ADMIN'   //All other require an access level of 0
    ]
];

$_SESSION['staffInformation'] = $staffInfo;

echo 'Development Session Started';

echo '<pre>';
var_dump($_SESSION['staffInformation']);
echo '</pre>';