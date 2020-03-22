<?php
/**
 * PHP API usage example
 *
 * contributed by: Art of WiFi
 * description: example to pull connected user numbers for Access Points from the UniFi controller and output the results
 *              in raw HTML format
 */

require_once __DIR__ . '/../config.php';

/**
 * initialize the UniFi API connection class and log in to the controller and pull the requested data
 */
$unifi_connection = new UniFi_API\Client($controlleruser, $controllerpassword, $controllerurl, $site_id, $controllerversion);
$set_debug_mode   = $unifi_connection->set_debug($debug);
$loginresults     = $unifi_connection->login();
$aps_array        = $unifi_connection->list_aps();

/**
 * output the results in HTML format
 */
header('Content-Type: text/html; charset=utf-8');
foreach ($aps_array as $ap) {
    if ($ap->type === 'uap') {
        echo '<b>AP name:</b>' . $ap->name . ' <b>model:</b>' . $ap->model . ' <b># connected clients:</b>' . $ap->num_sta . '<br>';
    }
}
