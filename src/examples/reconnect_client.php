<?php
/**
 * PHP API usage example
 *
 * contributed by: Art of WiFi
 * description: example basic PHP script to force a client device to reconnect
 */

require_once __DIR__ . '/../config.php';

/**
 * the MAC address to reconnect
 */
$mac_to_reconnect = '<MAC address>';

/**
 * initialize the UniFi API connection class and log in to the controller
 */
$unifi_connection = new UniFi_API\Client($controlleruser, $controllerpassword, $controllerurl, $site_id, $controllerversion);
$set_debug_mode   = $unifi_connection->set_debug($debug);
$loginresults     = $unifi_connection->login();

/**
 * then we force the device to reconnect
 */
$reconnect_result = $unifi_connection->reconnect_sta($mac_to_reconnect);

/**
 * provide feedback in json format
 */
echo json_encode($reconnect_result, JSON_PRETTY_PRINT);
