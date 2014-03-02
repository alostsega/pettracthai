<?php
//set db encoding
mb_internal_encoding('utf-8');
//set time zone
date_default_timezone_set('Asia/Bangkok');
//set db host user pass
define("DB_HOST", "127.0.0.1");
define("DB_USERNAME", "root");
define("DB_PASSWORD", "1234");
define("DB_NAME", "pettracthai");
//connect db
$conn = mysql_connect(DB_HOST,DB_USERNAME,DB_PASSWORD);
$conn_db = mysql_select_db(DB_NAME, $conn);
mysql_query("SET NAMES utf8");
?>