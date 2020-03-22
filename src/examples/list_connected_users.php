<?php
/**
 * PHP API usage example
 *
 * contributed by: @gahujipo
 * description: example to pull connected users and their details from the UniFi controller and output the results
 *              in JSON format
 */

require_once __DIR__ . '/../config.php';

/**
 * initialize the UniFi API connection class and log in to the controller and pull the requested data
 */
$unifi_connection = new UniFi_API\Client($controlleruser, $controllerpassword, $controllerurl, $site_id, $controllerversion);
$set_debug_mode   = $unifi_connection->set_debug($debug);
$loginresults     = $unifi_connection->login();
$clients_array    = $unifi_connection->list_clients();

/**
 * output the results in JSON format
 */
header('Content-Type: application/json; charset=utf-8');
echo json_encode($clients_array);
