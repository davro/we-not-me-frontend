<?php
namespace WWW;

use Library\Fabrication;

//------------------------------------------------------------------------------
// Project configuration, @todo move into configuration/project.ini
//------------------------------------------------------------------------------
define('PROJECT_DOMAIN', 'davro.net');
define('PROJECT_NAME', 'WE not ME');
define('PROJECT_DATABASE', 'project-we-not-me');
define('PROJECT_DOCTYPE', 'html.5');
define('PROJECT_ROOT_DIR', realpath(dirname(dirname(__FILE__))));

//------------------------------------------------------------------------------
// Framework configuration, @todo move into configuration/framework.ini
//------------------------------------------------------------------------------
define('FRAMEWORK_ROOT_DIR', realpath(PROJECT_ROOT_DIR . '/../project-fabrication-framework'));

//require_once(PROJECT_ROOT_DIR . '/vendor/autoload.php');
$loader = require PROJECT_ROOT_DIR . '/vendor/autoload.php';

require_once(FRAMEWORK_ROOT_DIR . '/library/Fabrication/bootstrap.php');