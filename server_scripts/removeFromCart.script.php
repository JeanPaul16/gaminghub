<?php
session_start();

if (!isset($_POST['params'])) return;

if (!isset($_SESSION['cart_items'])) return;

$cart_items = $_SESSION['cart_items'];

if (array_key_exists($_POST['params']['item_code'], $cart_items)) {
    $cart_items['total'] = $_POST['params']['total'];

    $quantity = $cart_items[$_POST['params']['item_code']]['quantity'];
    $quantity--;
    $cart_items[$_POST['params']['item_code']]['quantity'] = $quantity;
    
    if ($quantity == 0) {
        unset($cart_items[$_POST['params']['item_code']]);
    }

    $_SESSION['cart_items'] = $cart_items;
    if (count($cart_items) == 2) {
        unset($_SESSION['cart_items']);
    }
}