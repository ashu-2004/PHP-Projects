<?php
// DB credentials.
define('DB_HOST', 'sql306.infinityfree.com');
define('DB_USER', 'if0_37681612');
define('DB_PASS', 'ucyna0Xv87O');
define('DB_NAME', 'if0_37681612_car');
// Establish database connection.
try {
    $dbh = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
} catch (PDOException $e) {
    exit("Error: " . $e->getMessage());
}
?>