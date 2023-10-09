<?php

if (!isset($_POST['params'])) return;

include '../includes/autoLoader.inc.php';

$_STAFF = new Staff();

$_params = $_POST['params'];
$_params['_id'] = intval($_params['_id']);

$_STAFF->updateOrderComment($_params);