<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */

define('DB_SERVER_TEA_STORE', getenv('DB_SERVER_TEA_STORE'));
define('DB_USERNAME_TEA_STORE', getenv('DB_USERNAME_TEA_STORE'));
define('DB_PASSWORD_TEA_STORE', getenv('DB_PASSWORD_TEA_STORE'));
define('DB_NAME_TEA_STORE', getenv('DB_NAME_TEA_STORE'));

 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER_TEA_STORE, DB_USERNAME_TEA_STORE, DB_PASSWORD_TEA_STORE, DB_NAME_TEA_STORE);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>