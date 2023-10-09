<?php

include '../includes/autoLoader.inc.php';

if (!isset($_POST['params'])) return;

$_CLIENT = new Client();

$condition = $_POST['params']['condition'];

if (filter_var($condition, FILTER_VALIDATE_BOOLEAN)) {
    $item_code = substr($_POST['params']['item_code'], 0, 6);
    $name = $_CLIENT->getMenuItemOnOrder([$item_code]);
    foreach ($name as $val) {
        echo $val['item_name'];
    }
} else {
    $item_code = substr($_POST['params']['item_code'], 0, 6);
    $type_code = substr($_POST['params']['item_code'], 6, strlen($_POST['params']['item_code']));
    $item = [$item_code, $type_code];
    $name = $_CLIENT->getMenuItemTypeOnOrder($item);
    foreach ($name as $val) {
        echo $val['type_name'];
    }
}



