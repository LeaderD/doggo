<?php

include('dbconfig.php');
$connection = mysqli_connect($hostname, $databaseuser, $databasepw, $databasename);

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
} 
// echo "Connected successfully";

$dogArray = array();


if($result = $connection->query("SELECT id, img, name, breed, age, gender, size, coat, description WHERE deleted = 0 ORDER BY id DESC   FROM doggos")){
    while($row = $result->fetch_array(MYSQLI_ASSOC)){
        $dogArray[] = $row;
    }
    // echo json_encode(['alldogs'=>$dogArray]);
    header("Content-type: application/json");
    echo json_encode($dogArray);
}

$result->close();
$connection->close();
// echo 'lala'
// <!-- <!DOCTYPE html>
// <html>
//     <body>
//         <img src=
//     </body>
// </html> -->
?>

