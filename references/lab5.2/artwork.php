<?php

include ('dbconfig.php');

//implement gets database 
class Artwork implements Database{
    //variables you need
    private $artName;
    private $desc;
    private $year;
    private $type;
    private $price;

    //constructor initializes object values (same function to every artwork object)
    public function __construct($artName, $desc, $year, $type, $price){
        $this -> artName = $artName;
        $this -> desc = $desc;
        $this -> year = $year;
        $this -> type = $type;
        $this -> price = $price;
    }
    //get connected to db
    public function connection($hostname, $databaseuser, $databasepw, $databasename){
        $connection = mysqli_connect($hostname, $databaseuser, $databasepw, $databasename);
        return $connection;
    } 
    //adding artwork
    public function addArtwork($hostname, $databaseuser, $databasepw, $databasename){
        //CALL THE CONNECTION FUNCTION
        $connection = $this->connection($hostname, $databaseuser, $databasepw, $databasename);

        //sql statement. ? means variables
        $stmt = $connection->prepare("INSERT INTO artwork (name, description, createYear, type, price) VALUES (?, ?, ?, ?, ?)");
        //bind the parameters, "sssss" is the number of objects
        $stmt->bind_param("sssss", $this->artName, $this->desc, $this->year, $this->type, $this->price);
        //execute
        $stmt->execute();
        $stmt->close();

        $connection->close();

        echo "Added {$this->type}";
    }
}

class Painting extends Artwork {
    //custom type
    private $type;

    public function __construct($artName, $desc, $year, $price){
        // $this -> artName = $artName;
        // $this -> desc = $desc;
        // $this -> year = $year;
        // $this -> price = $price;
        $this -> type = "Painting";

        parent::__construct($artName, $desc, $year, $this->type, $price);
    }
}

class Sculpture extends Artwork {
    private $type;

    public function __construct($artName, $desc, $year, $price){
        // $this -> artName = $artName;
        // $this -> desc = $desc;
        // $this -> year = $year;
        // $this -> price = $price;
        $this -> type = "Sculpture";

        parent::__construct($artName, $desc, $year, $this->type, $price);
    }
}

if(isset($_POST['submit'])){
    $artName = $_POST['artName'];
    $desc = $_POST['artDesc'];
    $year = $_POST['artYear'];
    $type = $_POST['artType'];
    $price = $_POST['artPrice'];

    // echo $artName;


    if($type == "Painting"){
        $painting = new Painting($artName, $desc, $year, $price);

        //painting is child object of artwork, so you can call this function
        $painting -> addArtwork($hostname,$databaseuser,$databasepw,$databasename);
    } else if($type == "Sculpture"){
        $sculpture = new Sculpture($artName, $desc, $year, $price);

        //sculpture is child object of artwork, so you can call this function
        $sculpture -> addArtwork($hostname,$databaseuser,$databasepw,$databasename);
    } else {
        echo "poo";
    }
}