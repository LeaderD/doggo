<?php

include('dbconfig.php');
$connection = mysqli_connect($hostname, $databaseuser, $databasepw, $databasename);
// $_POST = json_decode(file_get_contents("php://input"), true);

$dogArray = array();
// echo json_encode($_POST);

if($result = $connection->query("SELECT * FROM doggos where id=2")){
    while($row = $result->fetch_array(MYSQLI_ASSOC)){
        // $dogArray[] = $row;
        $dogArray = $row;
    }
    echo json_encode($dogArray);
}

$result->close();
$connection->close();
?>
