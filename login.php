<?php
//session_start();
include('dbconfig.php');

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $userpassword = $_POST['password'];

    // echo "haha ";
    // echo "</br>";
    // echo $username;
    // echo "</br>";
    // echo $userpassword;
    // echo "</br>";
    $connection = mysqli_connect($hostname, $databaseuser, $databasepw, $databasename);

    // if($stmt = $connection->prepare("SELECT id, password FROM users WHERE username = ?")){
    //     $stmt->bind_param("s", $_POST['username']);
    //     $stmt->execute();
    //     $stmt->store_result();
    //     echo "usr exist";
    // } else {
    //     echo "pen";
    // }

    $stmt = $connection->prepare("SELECT id, username FROM users WHERE username = ?");

    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();

        if($stmt->num_rows > 0){
            $stmt->bind_result($id, $password);
            $stmt->fetch();
            // echo "</br> bind pw is: ";
            // echo $password ;
            // echo "</br> user entered password is ";
            // echo $userpassword;
            // echo "</br>";
            if($userpassword === $password) {
                header("Location: index.php");
                // echo 'Welcome '.$username .'!';
            } else {
                echo 'Incorrect password!';
            }
            // $password = settype($password,"string");
            // $realpassword = settype($realpassword,"string");
            // if(password_verify($password, $realpassword)){
            //     session_regenerate_id();
            //     $_SESSION['loggedin'] = TRUE;
            //     $_SESSION['username'] = $_POST['username'];
            //     $_SESSION['id'] = $_POST['id'];
            //     echo 'Welcome' .$_SESSION['username'].'!';
            // } else {
            //     echo 'Incorrect password!';
            // }
        } else {
            echo 'This user does not exist.';
        }
        $stmt->close();
    } else {
        // echo "u didnt write anything nob";
    }

?>
