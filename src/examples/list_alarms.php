<?php
/**
 * PHP API usage example
 *
 * contributed by: Art of WiFi
 * description: example basic PHP script to pull current alarms from the UniFi controller and output in json format
 */

require_once __DIR__ . '/../config.php';

/**
 * initialize the UniFi API connection class and log in to the controller and do our thing
 */
$unifi_connection = new UniFi_API\Client($controlleruser, $controllerpassword, $controllerurl, $site_id, $controllerversion);
$set_debug_mode   = $unifi_connection->set_debug($debug);
$loginresults     = $unifi_connection->login();
$data             = $unifi_connection->list_alarms();

/**
 * provide feedback in json format
 */
echo json_encode($data, JSON_PRETTY_PRINT);
