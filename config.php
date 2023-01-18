<?php
/*
This file contains database configuration assuming you are running mysql using user "root" and password ""
*/

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'login');

// define('DB_SERVER', '	sql210.epizy.com');
// define('DB_USERNAME', 'epiz_33390319');
// define('DB_PASSWORD', 'NVEuhuzOOkxic');
// define('DB_NAME', 'epiz_33390319_users');

// Try connecting to the Database
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

//Check the connection
if($conn == false){
    dir('Error: Cannot connect');
}
?>
