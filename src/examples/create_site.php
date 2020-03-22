<?php
/**
 * PHP API usage example
 *
 * contributed by: Art of WiFi
 * description: example basic PHP script to create a new site, returns true upon success
 */

require_once __DIR__ . '/../config.php';

/**
 * description of the new site
 */
$description = 'new site';

/**
 * initialize the UniFi API connection class and log in to the controller and do our thing
 */
$unifi_connection = new UniFi_API\Client($controlleruser, $controllerpassword, $controllerurl, $site_id, $controllerversion);
$loginresults     = $unifi_connection->login();
$results          = $unifi_connection->create_site($description);

/**
 * provide feedback in json format
 */
echo json_encode($results, JSON_PRETTY_PRINT);
