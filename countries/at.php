<?php

    $default_lang = 'de';
    $lang_file = ( empty($parameters[2]) ) ? $default_lang : $parameters[2];

    $default_aff = 'x1';
    $aff_file = ( empty($parameters[1]) ) ? $default_aff : $parameters[1];
    
    require_once __DIR__ . '/../affs/'.$aff_file.'.php';    
    require_once __DIR__ . '/../langs/'.$lang_file.'.php';
