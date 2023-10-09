<?php

if (!isset($_POST['params'])) return;

session_start();
// unset($_SESSION['cart_items']);

if (!isset($_SESSION['cart_items'])) {
    $cart_items = [
        'table_code' => $_POST['params']['table_code'],
        'total' => $_POST['params']['total'],
        $_POST['params']['item_code'] => [
            'quantity' => 1,
            'price' => $_POST['params']['price']
        ]
    ];
    $_SESSION['cart_items'] = $cart_items;
} else {
    $cart_items = $_SESSION['cart_items'];
    if (array_key_exists($_POST['params']['item_code'], $cart_items)) {
        $cart_items[$_POST['params']['item_code']]['quantity']++;
    } else {
        $cart_items[$_POST['params']['item_code']] = [
            'quantity' => 1,
            'price' => $_POST['params']['price']
        ];
    }

    $cart_items['total'] = $_POST['params']['total'];
    
    $_SESSION['cart_items'] = $cart_items;
}
