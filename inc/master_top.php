<?php
    require_once 'config.php';
    foreach ($_GET as $key => $value) {
        $parameters[] = $key;
    }
    /*
        $parameters[0] for Country
        $parameters[1] for Aff
        $parameters[2] for Lang
    */

    $country = ( empty($parameters[0]) ) ? strtolower($_SERVER['HTTP_CF_IPCOUNTRY']) : $parameters[0];

    if (! file_exists(__DIR__ . '/../countries/'.$country.'.php') )
        $country = DEFAULT_COUNTRY;

    $country_file = __DIR__ . '/../countries/'.$country.'.php';
    require_once $country_file;

    // Include and instantiate the class.
    require_once 'Mobile_Detect.php';
    $detect = new Mobile_Detect;
    $affs_check = ( empty($parameters[1]) )? 'x1' : $parameters[1];

?>
