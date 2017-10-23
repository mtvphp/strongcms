<?php

use System\{Registry, Config, Request, Response};

error_reporting(E_ALL);

if(version_compare(PHP_VERSION, '7.0', '<')) {
    exit('PHP7+ Required');
}

/**
 * Composer
 */
require_once '../vendor/autoload.php';

/**
 * Config
 */
$config = new Config();
$config->load('app');

Registry::set('config', $config);

/**
 * Request
 */
$request = new Request();
Registry::set('request', $request);

/**
 * Response
 */
$response = new Response();
Registry::set('response', $response);

/**
 * Database
 */

$db = new PDO('mysql:host=' . $config->get('db_hostname') . ';dbname=' . $config->get('db_database'), $config->get('db_username'), $config->get('db_password'));
ActiveRecord::setDb($db);