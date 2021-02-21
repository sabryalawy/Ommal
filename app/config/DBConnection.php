<?php


$localhostDB="localhost";
$usernameDB="root";
$passwordDB="Sabry1998";
$dbName="ommal";


$db = new mysqli($localhostDB,$usernameDB,$passwordDB,$dbName);
if ($db->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
