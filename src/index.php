<?php

$conn = new mysqli(
    "mysql",
    "myuser",
    "mypassword",
    "mydatabase"
);

if ($conn->connect_error) {
    die("Connection failed");
}

echo "MySQL Connected Successfully";
?>