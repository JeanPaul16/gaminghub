<?php

if (!isset($_POST['params'])) return;

include '../includes/autoLoader.inc.php';
$_STAFFMANAGEMENT = new StaffManagement();

$params = $_POST['params'];

$params['password'] = password_hash($params['password'], PASSWORD_BCRYPT);

$identifier = '';

switch (substr($params['username'], -3)) {
    case 'MGR':
        $params['role'] = 'MGR';
        break;
    case 'KTC':
        $params['role'] = 'KTC';
        break;
    default: 
        $params['role'] = 'WTR';
        break;
}

$_STAFFMANAGEMENT->registerNewStaffUser($params);

if (substr($params['username'], -3) == 'MGR') {
    $_STAFFMANAGEMENT->updateStaffAccessLevel();
}