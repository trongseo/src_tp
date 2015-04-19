<?php 

### EDIT HERE ###
//define("DB_HOST","chuyennhat.vn");
//define("DB_NAME","test_glass1");
//define("DB_USERNAME","test_glass1");
//define("DB_PASSWORD","123456789");
// DB CONNECT INFO
require_once($_SERVER['DOCUMENT_ROOT'].'/DB_CONFIG.php');

$db_host = DB_HOST;
$db_name = DB_NAME;
$db_user = DB_USERNAME;
$db_pw = DB_PASSWORD;

// DB TABLE INFO
$GLOBALS['hits_table_name'] = "HITS_TABLE";
$GLOBALS['info_table_name'] = "HITS_TABLE_INFO";

### STOP EDITING HERE ###

// CONNECT TO DB
try {   
	$GLOBALS['db'] = new PDO("mysql:host=".$db_host.";dbname=".$db_name, $db_user, $db_pw, array(PDO::ATTR_PERSISTENT => false, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, PDO::ATTR_EMULATE_PREPARES => false));  
}  
catch(PDOException $e) {  
    echo $e->getMessage();
}

?>