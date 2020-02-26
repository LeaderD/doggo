<?php

include ('dbconfig.php');

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
}

public function connection($hostname, $databaseuser, $databasepw, $databasename){
    $connection = mysqli_connect($hostname, $databaseuser, $databasepw, $databasename);
    return $connection;
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
}


?>
<!DOCTYPE html>
    <html>
    <body>
        <h2> Add a Dog </h2>
        <form action="" method="POST" style="display:flex; flex-direction: column; width: 20%;"> 
            <input type="text" name="img" placeholder="Image URL">
            <input type="text" name="name" placeholder="Name">
            <input type="text" name="breed" placeholder="Breed">
            <input type="text" name="age" placeholder="Age">
            <select name="gender">
                <option value="Select"> Select Gender </option>
                <option value="Male"> Male </option>
                <option value="Female"> Female </option>
            </select>
            <select name="size">
                <option value="Select"> Select Size </option>
                <option value="Small"> Small </option>
                <option value="Medium"> Medium </option>
                <option value="Large"> Large </option>
            </select>
            <select name="coat">
                <option value="Select"> Select Coat Type </option>
                <option value="Short"> Short </option>
                <option value="Medium"> Medium </option>
                <option value="Long"> Long </option>
            </select>
            <input type="text" name="description" placeholder="Description">

            <input type="submit" name="submit" value="Add Dog">
            </form>
        </body>
        </html>