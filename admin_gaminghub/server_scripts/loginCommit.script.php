<?php

session_start();


if (!isset($_POST['params'])) { return; }

include '../includes/autoLoader.inc.php';

$_STAFF_MANAGEMENT = new StaffManagement();

$params = $_POST['params'];

$result = $_STAFF_MANAGEMENT->staffLogin([$params['_user']]);

if (count($result[0]) < 2) { 
    echo json_encode(['ERROR' => 'no_user_match']); 
    return;
}

if (!password_verify(base64_decode($params['_pass']), $result[0]['_password_hash'])) {
    echo json_encode(['ERROR' => 'no_password_match']);
    return;
}

$staff_info = [
    'staffID' => $result[0]['_id'],
    'staffUsername' => $result[0]['_username'],
    'staffRole' => $result[0]['_role'],
    'accessLevel' => [
        'level' => $result[0]['_access_level'],                 
        'levelDescription' => $result[0]['_level_description']
    ]
];

$_SESSION['staffInformation'] = $staff_info;
$headerTarget = '';

switch ($staff_info['staffRole']) {
    case 'WTR':
        $headerTarget = 'service.php';
        break;
    case 'KTC': 
        $headerTarget = 'kitchen.php';
        break;        
    case 'MGR':
    case 'ADMN':
        $headerTarget = 'management.php';
        break;
}

$_STAFF_MANAGEMENT->onUserSessionUpdate([$staff_info['staffID'], 1]);

header('Content-Type: application/json; charset=utf-8');
echo json_encode(['SUCCESS' => $headerTarget]);
