<?php

if (!isset($_POST['params'])) return;

echo unserialize(base64_decode($_POST['params']))['table_code'];