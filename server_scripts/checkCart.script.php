<?php

session_start();

if (!isset($_SESSION['cart_items'])) return false;

header('Content-Type: application/json; charset=utf-8');
echo json_encode($_SESSION['cart_items']);