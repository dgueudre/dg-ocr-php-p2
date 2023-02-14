<?php


define('PUBLIC_DIR', $_SERVER['DOCUMENT_ROOT']);
define('ROOT_DIR', __DIR__ . '/../..');
define('WP_CONTENT_DIR', PUBLIC_DIR. '/wp-content');
define( 'ABSPATH', __DIR__ . '/' );

define('WP_HOME', 'http://' . $_SERVER['HTTP_HOST']);
define('WP_SITEURL', WP_HOME . '/wp-core');
define('WP_CONTENT_URL', WP_HOME. '/wp-content');

require_once(ROOT_DIR . '/wp-config.php');
require_once(ABSPATH . 'wp-settings.php');
