<?php

spl_autoload_register('autoLoader');

function autoLoader($className) {
    $path = "../classes/"; //EDIT this to classes/ if testing! Or save all php tests on same folder!
    $ext = ".class.php";
    $fp = $path . $className . $ext;

    if (!file_exists($fp)) {
        return false;
    }

    include_once $fp;
}

?>