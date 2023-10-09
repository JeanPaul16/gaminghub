<?php

session_start();

include '../includes/autoLoader.inc.php';

if (!isset($_SESSION['cart_items'])) return;

$orderDescription = $_SESSION['cart_items'];

$_CLIENT = new Client();

$_CLIENT->registerClientOrder($orderDescription['table_code']);

foreach ($orderDescription as $code => $desc) {
    if (!is_array($desc)) continue;

    $item_code = substr($code, 0, 6);
    $type_code = substr($code, 6, strlen($code));

    $_CLIENT->registerClientOrderTypes([$item_code, $type_code, $desc['quantity']]);
}

unset($_SESSION['cart_items']);
