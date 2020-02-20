<?php

session_start();

require_once('./database.php');
require_once('./queries.php');
require_once('./helpers.php');

// This must be a post request with a username and a password
$username = $_POST['username'];
$password = $_POST['password'];

// Remember to use password_verify() to check the plain password against the hashed version

header("Content-type: application/json");

$checkUser = userLogin($username);
$result = runQuery($checkUser);

if(!$result){
    echo json_encode("This user does not exist!");
} else {
    $getInfo = getInfo($username);
    $fetch = runQuery($getInfo);

    $id = $fetch[0]['id'];
    $hash = $fetch[0]['password'];
    if (password_verify($password, $hash)) {
        $_SESSION['id'] = $id;
        $_SESSION['username'] = $username;
        echo json_encode(["username" => $username, "id" => $id]);
    } else {
        echo json_encode("Incorrect password, try again.");
    }
}