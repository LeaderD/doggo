<?php

include ('dbconfig.php');

session_start();
$connection = mysqli_connect($hostname, $databaseuser, $databasepw, $databasename);
if ( mysqli_connect_errno() ) {
	// If there is an error with the connection, stop the script and display the error.
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());
}

// if(!isset($_POST['username'], $_POST['password'])){
//     die('Please enter a username and password.');
// }

if($stmt = $connection->prepare('SELECT password FROM users WHERE username = ?')){
    $stmt->bind_param('s', $_POST['username']);
    $stmt->execute();
    $stmt->store_result();

    $stmt->close();
}

if($stmt->num_rows > 0){
    $stmt->bind_result($password);
    $stmt->fetch();

    if(password_verify($_POST['password'], $passwor)){
        session_regenerate_id();
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $_POST['username'];

        echo 'Welcome' .$_SESSION['username'].'!';
    } else {
        echo 'Incorrect password!';
    }
} else {
    echo 'This user does not exist.';
}
?>

<!DOCTYPE html>
<html>
    <body>
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="pw" placeholder="Password">
        <input type="submit" name="submit" value="Login">
</body>
</html>