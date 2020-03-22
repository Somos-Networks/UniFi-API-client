<?php
/**
 * PHP API usage example
 *
 * contributed by: Art of WiFi
 * description: example basic PHP script to disable/enable a device, returns true upon success
 */

require_once __DIR__ . '/../config.php';

/**
 * the 24 character id of the device to disable/enable
 */
$device_id = '<enter the id of your device here>';

/**
 * initialize the UniFi API connection class and log in to the controller
 */
$unifi_connection = new UniFi_API\Client($controlleruser, $controllerpassword, $controllerurl, $site_id, $controllerversion);
$set_debug_mode   = $unifi_connection->set_debug($debug);
$loginresults     = $unifi_connection->login();

/**
 * then we disable the device
 */
$disable_result = $unifi_connection->disable_ap($device_id, true);

/**
 * or we enable the device, uncomment as neccesary (then also comment the previous call)
 */
//$disable_result = $unifi_connection->disable_ap($device_id, false);

/**
 * provide feedback in json format
 */
echo json_encode($disable_result, JSON_PRETTY_PRINT);
