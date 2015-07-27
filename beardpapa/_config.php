<?php

global $project;
$project = 'beardpapa';

global $database;

$database = 'beardpapa';

require_once('conf/ConfigureFromEnv.php');

Director::setBaseURL('/');

// Set the site locale
i18n::set_locale('en_US');