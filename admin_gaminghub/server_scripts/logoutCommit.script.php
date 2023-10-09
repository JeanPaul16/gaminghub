<?php

session_start();

if (!isset($_POST['params'])) { return; }
if (!isset($_SESSION['staffInformation'])) { return; }

include '../includes/autoLoader.inc.php';
$_STAFF_MANAGEMENT = new StaffManagement();

$staffID = $_SESSION['staffInformation']['staffID'];

$_STAFF_MANAGEMENT->onUserSessionUpdate([$staffID, 0]);

unset($_SESSION['staffInformation']);