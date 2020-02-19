<?php

include ('dbconfig.php');

class Artist implements Database{
    private $firstname;
    private $lastname;
    private $birthyear;
    private $deathyear;

    public function __construct($firstname, $lastname, $birthyear, $deathyear){
        $this -> firstname = $firstname;
        $this -> lastname = $lastname;
        $this -> birthyear = $birthyear;
        $this -> deathyear = $deathyear;
    }

    public function connection($hostname, $databaseuser, $databasepw, $databasename){
        $connection = mysqli_connect($hostname, $databaseuser, $databasepw, $databasename);
        return $connection;
    } 
    
    public function addArtist($hostname, $databaseuser, $databasepw, $databasename){


        $connection = $this->connection($hostname, $databaseuser, $databasepw, $databasename);
        // $sql = "INSERT INTO artists (FirstName, LastName, BirthDate, DeathDate) VALUES ($this->firstname, $this->lastname, $this->birthyear, $this->deathyear)";

        $stmt = $connection->prepare("INSERT INTO artists (FirstName, LastName, BirthDate, DeathDate) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $this->firstname, $this->lastname, $this->birthyear, $this->deathyear);
        $stmt->execute();
        $stmt->close();
        
        // $result = $connection->query($sql);
        $connection->close();
        
    }

}

echo "Artist Added";
if(isset($_POST['submit'])){  
    $firstname = $_POST['FirstName'];
    $lastname = $_POST['LastName'];
    $birthyear = $_POST['BirthYear'];
    $deathyear = $_POST['DeathYear'];

    $artist = new Artist($firstname, $lastname, $birthyear, $deathyear);

    $artist -> addArtist($hostname, $databaseuser, $databasepw, $databasename);

} else {
    echo "error";
}



