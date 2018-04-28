<?php
    /******************************************************************************
     * honeypot-wasp - Simple website directory honeypot                          *
     * Copyright (C) 2018 by Ralf Kilian                                          *
     * Distributed under the MIT License (https://opensource.org/licenses/MIT)    *
     *                                                                            *
     * GitHub: https://github.com/urbanware-org/honeypot-wasp                     *
     ******************************************************************************/

    // Requires PHP 5.4 or higher
    http_response_code(500);

    $directory = getcwd();
    $agent = $_SERVER['HTTP_USER_AGENT'];
    if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        $ip_address = $_SERVER['REMOTE_ADDR'];
    }

    $file = 'logfile.txt';
    $timestamp = date("[Y-m-d - H:i:s]");
    file_put_contents($file, $timestamp . " Attempt to access '" . $directory . "'\n", FILE_APPEND);
    file_put_contents($file, $timestamp . " IP address: " . $ip_address . "\n", FILE_APPEND);
    file_put_contents($file, $timestamp . " User agent: " . $agent . "\n\n", FILE_APPEND);
?>
