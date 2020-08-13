<?php

define('URL', 'http://php-mvc.local.com/');

define('DB_HOST', 'localhost');
define('DB_NAME', 'mvc');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_CHARSET', "utf8mb4");

define('DB_BACKTRACE', 1);
define('DB_DEBUG', 1);

define('APP_LOG_PATH', 'log/');


define('MODELS_NS_PATH', 'models\\');
define('CONTROLLERS_NS_PATH', 'controllers\\');

require 'includes/autoload.php';

?>