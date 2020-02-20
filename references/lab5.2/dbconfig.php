<?php
    // $hostname = "localhost";
    // $databasename = "artgallery";
    // $databaseuser = "root";
    // $databasepw = "123";
    //     $connection = mysqli_connect($hostname, $databaseuser, $databasepw, $databasename);
    //     $sql = "SELECT firstName, lastName FROM artists WHERE id = 1 ";
    //     $result = $connection->query($sql);
    //     if ($result->num_rows > 0) {
    //         // output data of each row
    //         while($row = $result->fetch_assoc()) {
    //             echo  "Name: " . $row["firstName"]. " " . $row["lastName"]. "<br>";
    //         }
    //     } else {
    //         echo "0 results";
    //     }
    //     $connection->close();

    $hostname = "localhost";
    $databasename = "artgallery";
    $databaseuser = "root";
    $databasepw = "123";

interface Database {
   public function connection($hostname, $databaseuser, $databasepw, $databasename);
//    {
//         $connection = mysqli_connect($hostname, $databaseuser, $databasepw, $databasename);
//         return $connection;
//     }
}

?>