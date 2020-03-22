<?php
/**
 * PHP API usage example
 *
 * contributed by: Art of WiFi
 * description: example to pull site health metrics from the UniFi controller and output the results
 *              in json format
 */

require_once __DIR__ . '/../config.php';

/**
 * initialize the UniFi API connection class and log in to the controller and pull the requested data
 */

$unifi_connection = new UniFi_API\Client($controlleruser, $controllerpassword, $controllerurl, $site_id, $controllerversion);
$set_debug_mode   = $unifi_connection->set_debug($debug);
$loginresults     = $unifi_connection->login();
$result           = $unifi_connection->list_health();

/**
 * output the results in correct json formatting
 */
header('Content-Type: application/json');
echo (json_encode($result, JSON_PRETTY_PRINT));
