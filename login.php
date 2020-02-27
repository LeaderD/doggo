<?php
session_start();

include('dbconfig.php');

$connection = mysqli_connect($hostname, $databaseuser, $databasepw, $databasename);

if($stmt = $connection->prepare('SELECT id, password FROM users WHERE username = ?')){
    $stmt->bind_param('s', $_POST['username']);
    $stmt->execute();
    $stmt->store_result();

    if($stmt->num_rows > 0){
        $stmt->bind_result($password);
        $stmt->fetch();
    
        if(password_verify($_POST['password'], $password)){
            session_regenerate_id();
            $_SESSION['loggedin'] = TRUE;
            $_SESSION['username'] = $_POST['username'];
    
            echo 'Welcome' .$_SESSION['username'].'!';
        } else {
            echo 'Incorrect password!';
        }
    } else {
        echo 'This user does not exist.';
    }
    $stmt->close();
}

if(!isset($_POST['username'], $_POST['password'])){
    die('Please enter a username and password.');
}

?>

<!DOCTYPE html>
<html>
    <body>
        <form action="login.php" method="POST">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="pw" placeholder="Password">
        <input type="submit" name="submit" value="Login">
</form>
</body>
</html>