<?php

if (!isset($_POST['params'])) return;

include '../includes/autoLoader.inc.php';

$_STAFF = new Staff();

$_params = $_POST['params'];
$iterations = 2;

$new_status = [
    'service' => '',
    'kitchen' => ''
];

if ($_params['_status_identifier'] === 'SERVICE' && $_params['_status'] === 'END') { $iterations--; }

switch ($_params['_status']) {
    case 'EP':
        $new_status['service'] = 'En Preparación';
        $new_status['kitchen'] = 'En Preparación';
        break;
    case 'CD':
        $new_status['service'] = 'Cancelado';
        $new_status['kitchen'] = 'Cancelado';
        break;
    case 'END':
        if ($_params['_status_identifier'] === 'KITCHEN') {
            $new_status['service'] = 'Preparación Completa';
            $new_status['kitchen'] = 'Entregado';
        } else {
            $new_status['service'] = 'Entregado';
        }
        break;
}

// var_dump(array_values($new_status));

$status_commit = [
    $_params['_id']
];

for ($i = 0; $i < $iterations; $i++) {
    array_push($status_commit, $i, array_values($new_status)[$i]);

    $_STAFF->updateOrderStatus($status_commit);

    unset($status_commit[1]);
    unset($status_commit[2]);
    $status_commit = array_values($status_commit);
}



