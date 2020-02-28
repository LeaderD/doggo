<?php

include('dbconfig.php');
$connection = mysqli_connect($hostname, $databaseuser, $databasepw, $databasename);
$_POST = json_decode(file_get_contents("php://input"), true);

$dogArray = array();
$id = $_POST['id'];
$sql = "UPDATE doggos SET deleted=1 WHERE id=$id";
if($result = $connection->query($sql)){
    while($row = $result->fetch_array(MYSQLI_ASSOC)){
        $dogArray = $row;
    }
    echo json_encode($dogArray);
}

$result->close();
$connection->close();
?>
