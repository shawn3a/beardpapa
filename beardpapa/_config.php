<?php

global $project;
$project = 'beardpapa';

global $database;

$database = 'beardpapa';

require_once('conf/ConfigureFromEnv.php');

Director::setBaseURL('/');

// Set the site locale
i18n::set_locale('en_US');

define('CSS_DIR', THEMES_DIR. "/" . SSViewer::current_custom_theme() . '/css');
define('JS_DIR', THEMES_DIR. "/" . SSViewer::current_custom_theme() . '/javascript');
define('BOWER_PATH', 'bower_components');