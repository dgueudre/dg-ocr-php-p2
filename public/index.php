<?php


// $url = $_SERVER['REQUEST_URI'] ?? $argv[1] ?? null;

define('WP_CONFIG_PATH', __DIR__ . '/../../wp-config.php');

// define( 'ABSPATH', __DIR__ . '/wp-core/' );

include './wp-core/index.php';

/*
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

chdir(__DIR__.'/..');

require 'vendor/autoload.php';

require 'src/app.php';
*/
