<?php
require_once 'config.local.php';

set_include_path($GLOBALS['path_include']);

require_once 'k.php';

$application = new Campsommer_Controller_Root();
$application->dispatch();
