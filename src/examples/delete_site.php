<?php
/**
 * PHP API usage example
 *
 * contributed by: Art of WiFi
 * description: example basic PHP script to delete a site, returns true upon success
 */

require_once __DIR__ . '/../config.php';

/**
 * the site to delete, must not be the same site as referenced by $site_id
 */
$site_to_delete = '<_id value of the site>';

/**
 * initialize the UniFi API connection class and log in to the controller and do our thing
 */
$unifi_connection = new UniFi_API\Client($controlleruser, $controllerpassword, $controllerurl, $site_id, $controllerversion);
$loginresults     = $unifi_connection->login();
$results          = $unifi_connection->delete_site($site_to_delete);

/**
 * provide feedback in json format
 */
echo json_encode($results, JSON_PRETTY_PRINT);
