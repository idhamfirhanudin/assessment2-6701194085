<?php

/**
 * Open a connection via PDO to create a
 * new database and table with structure.
 *
 */

require "config.php";

try {
    $conn = new PDO("mysql:host=$host", $username, $password, $options);
    $sql = file_get_contents("pabw.sql");
    $conn->exec($sql);
    
    echo "Database and table users created successfully.";
} catch(PDOException $error) {
    echo $sql . "<br>" . $error->getMessage();
}
?>
