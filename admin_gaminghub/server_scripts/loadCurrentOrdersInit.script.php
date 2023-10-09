<?php
include '../includes/autoLoader.inc.php';

if (!isset($_POST['params'])) return;

$_STAFF = new Staff();
$_UTIL = new Util();

$orders = $_STAFF->initializeOrders();
$orderDetails = $_STAFF->initializeOrderTypes();

header('Content-Type: application/json; charset=utf-8');
echo json_encode($_UTIL->sortOrders($orders, $orderDetails));

// $rows_json = '../content/rows.json';
// if (!file_put_contents($rows_json, json_encode($currentOrders)));
