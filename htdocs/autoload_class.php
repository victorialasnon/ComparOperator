<?php
function myAutoLoader ($className) {
    $path = "classes/";
    $extension = ".php";
    $fileName = $path . ucfirst($className) . $extension;
    if (file_exists ($fileName)) {
        require_once $fileName;
    }
}
spl_autoload_register ('myAutoLoader');
