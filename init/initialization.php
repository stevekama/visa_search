<?php
defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);
// defined('SITE_ROOT') ? null : define('SITE_ROOT', DS.'app');
defined('SITE_ROOT') ? null : define('SITE_ROOT', DS.'xampp'.DS.'htdocs'.DS.'visa_search');
defined('CONFIG_PATH') ? null : define('CONFIG_PATH', SITE_ROOT.DS.'config');
defined('INIT_PATH') ? null : define('INIT_PATH', SITE_ROOT.DS.'init');
defined('MODELS_PATH') ? null : define('MODELS_PATH', SITE_ROOT.DS.'models');
defined('PUBLIC_PATH') ? null : define('PUBLIC_PATH', SITE_ROOT.DS.'public');
defined('MIGRATION_PATH') ? null : define('MIGRATION_PATH', SITE_ROOT.DS.'migrations');

// $site_url = "https://visa-search.herokuapp.com/";
$site_url = "http://localhost/visa_search/";

// db connections
// require_once(CONFIG_PATH.DS.'database.php');

// load sessions 
// require_once(CONFIG_PATH.DS.'sessions.php');

// load all system functions
require_once(CONFIG_PATH.DS.'functions.php');