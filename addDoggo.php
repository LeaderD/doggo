<?php

include('dbconfig.php');

class Doggo implements Database{
    private $img;
    private $name;
    private $breed;
    private $age;
    private $gender;
    private $size;
    private $coat;
    private $description;

public function __construct($img, $name, $breed, $age, $gender, $size, $coat, $description){
    $this -> img = $img;
    $this -> name = $name;
    $this -> breed = $breed;
    $this -> age = $age;
    $this -> gender = $gender;
    $this -> size = $size;
    $this -> coat = $coat;
    $this -> description = $description;

    echo "constructor works";
}

public function connection($hostname, $databaseuser, $databasepw, $databasename){
    $connection = mysqli_connect($hostname, $databaseuser, $databasepw, $databasename);
    return $connection;
    echo "connected";
} 

public function addDoggo($hostname, $databaseuser, $databasepw, $databasename){
    echo "addDoggo";
    $connection = $this->connection($hostname, $databaseuser, $databasepw, $databasename);

    $stmt = $connection->prepare("INSERT INTO doggos(img, name, breed, age, gender, size, coat, description) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");

    $stmt->bind_param("ssssssss",$this->img, $this->name, $this->breed, $this->age, $this->gender, $this->size, $this->coat, $this->description);

    $stmt->execute();
    $stmt->close();

    $connection->close();

    echo "Added doggo!";
    }
}

if(isset($_POST['submit'])){
    $img = $_POST['img'];
    $name = $_POST['name'];
    $breed = $_POST['breed'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $size = $_POST['size'];
    $coat = $_POST['coat'];
    $description = $_POST['description'];

    echo "post Doggo";

    $addDoggo = new Doggo($img, $name, $breed, $age, $gender, $size, $coat, $description);

    $addDoggo -> addDoggo($hostname, $databaseuser, $databasepw, $databasename);
}


?>
<!DOCTYPE html>
    <html>
        <head>
        <link rel="stylesheet" href="index.css">
        <script src="./js/script.js"></script>
        </head>
    <body >
       
        </body>
        </html>