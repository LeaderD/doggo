<?php

include('dbconfig.php');
$connection = mysqli_connect($hostname, $databaseuser, $databasepw, $databasename);

$query = "SELECT id, img, name, breed, age, gender, size, coat, description FROM doggos";
$result = mysqli_query($connection, $query);
$json = json_encode($result);

echo $json;
?>

<!DOCTYPE html>
<html>
    <body>

    </body>
</html>