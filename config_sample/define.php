<?php
	define('ROOT', dirname(dirname(__FILE__))); // /var/www/projectName
	define('HOST_URL', '');
	define('FQDN', '');
	define('DB_CONF_PATH', '');
	define('DB_UTIL', ROOT.'/include/db_util.php');
	define('UTIL', ROOT.'/include/util.php');
	define('INC',ROOT.'/include');
	define('MODEL', ROOT.'/model');
	define('VIEW', ROOT.'/view');
	define('VIEW_URL', HOST_URL.'/view');
	define('CTRL', ROOT.'/controller');
	define('CTRL_URL', HOST_URL.'/controller');
	define('ADMIN', ROOT.'/model/admin.php');
	define('SESSION_MAX_TIME', 0);
	define('COM', ROOT.'/components/panel.php');
	
	$ROOT =  ROOT;
	$DB_CONF_PATH = DB_CONF_PATH;
	$FQDN = FQDN;
	$HOST_URL = HOST_URL;
	$CTRL_URL = CTRL_URL;
	$VIEW_URL = VIEW_URL;	
?>
