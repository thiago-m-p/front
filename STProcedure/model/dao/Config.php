<?php

namespace model\dao;

define('DB_HOSTNAME','192.168.72.2');
define('DB_USERNAME','localhost');
define('DB_PASSWORD','localhost');
define('DB_DATABASE','BOTTINO');
define('DB_PORT','1433');
define('DB_CHARSET','utf8');
$dsn = "jdbc:sqlserver=".DB_HOSTNAME.";port=".DB_PORT."; dbName=".DB_DATABASE;
define('DB_DSN',$dsn);
