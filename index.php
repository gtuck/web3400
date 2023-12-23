<?php
// function to connect to our MariaDB instance
function pdo_connect_mariadb()
{
    $servername = "db";
    $dbname = "web3400";
    $username = "web3400";
    $password = "password";

    try {
        return new PDO(
            'mysql:host=' . $servername .
                ';dbname=' . $dbname .
                ';charset=utf8',
            $username,
            $password
        );
    } catch (PDOException $exception) {
        die("PDO failed to connect to the database: $exception");
    }
}

// Create a PDO databse connection object by calling our pdo_connect_mariadb function
$pdo = pdo_connect_mariadb();

// Test the connection to the database
if ($pdo) {
    echo "You are connected to the web3400 database.";
} else {
    echo "You are not connected...";
}

// Display the PHP server info
phpinfo();
