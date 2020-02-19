<?php

require_once('database.php');
require_once('queries.php');
require_once('helpers.php');

$username = $_POST['username'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

// Save the username and password to the database
$query = createUser($username, $password);
$result = runQuery($query);

header("Content-type: application/json");
echo json_encode(["username" => $username, "password" => $password]);