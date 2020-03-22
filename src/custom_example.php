<?php
require_once __DIR__ . '/config.php';

$unifi_connection = new UniFi_API\Client(
    $controlleruser,
    $controllerpassword,
    $controllerurl,
    $site_id,
    $controllerversion
);
$set_debug_mode = $unifi_connection->set_debug( $debug );
$loginresults = $unifi_connection->login();
$data = $unifi_connection->list_alarms();

echo json_encode( $data, JSON_PRETTY_PRINT );
