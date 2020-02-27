<?php

include('dbconfig.php');
$connection = mysqli_connect($hostname, $databaseuser, $databasepw, $databasename);

$dogArray = array();

if($result = $connection->query("SELECT id FROM doggos")){
    while($row = $result->fetch_array(MYSQLI_ASSOC)){
        $dogArray[] = $row;
    }
    echo json_encode($dogArray);
}

$result->close();
$connection->close();
?>

<!DOCTYPE html>
<html>
    <body>

    </body>
</html>