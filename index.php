<?php

$db_server = "localhost";
$db_user   = "root";
$db_pass   = "";
$db_name   = "todolist_db";

try {
    $conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);
} catch (mysqli_sql_exception $e) {
    echo "Could not connect!<br>";
    die("Error: " . $e->getMessage());
}
?>