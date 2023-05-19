<?php
    $env = parse_ini_file('./../.env');

    $DB_HOST= $env['DB_MARKET_HOST'];
    $DB_USER=$env['DB_MARKET_USER'];
    $DB_PASSWORD=$env['DB_MARKET_PASSWORD'];
    $DB_NAME=$env['DB_MARKET_NAME'];

    $mysqli  = new mysqli($DB_HOST, $DB_USER, $DB_PASSWORD, $DB_NAME);

    if ($mysqli->connect_errno) die("Failed to connect to MySQL" . $mysqli->connect_error);
?>