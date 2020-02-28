<?php session_start();
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="index.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>

<body>
<div class="navigation-bar">
  <div id="navigation-containter">
    <ul>
      <div class="logo-name">
        <text>Doggo</text>
        <img src="img/White_paw_print.png">
      </div>
      <li><a onclick="openLogin(this)">Login</a></li>
      <li><a href="#contact">Contact</a></li>
      <li><a href="#donate">Donate</a></li>
      <li><a href="#home">Home</a></li>
    </ul>
  </div>
</div>

<header>
  <div id="headerCont">
  <div id="headertitle">
  <h1>Doggo</h1>
  <img src="img/White_paw_print.png">
</div>
  <hr>
  <h4>
    We are a non-profit organization that rescues neglected or homeless dogs. Our dogs are cared for in loving foster homes until they are found suitable and caring permanent homes, giving them a second chance for a better life.
  </h4>
  <p>For inquiries, please email us at <a href="mailto:doggo@doggo.com"> info@doggo.com </a></p>
</div>
</header>

<h2 class="siteHead"> Adoptable Dogs </h2>
<div id="all-dogs">

</div> 


<div id="sidebarpopup" class="sidebar">
  
</div>
<div id="loginBG" style="visibility:hidden;">
<div id="loginForm">
            <h2> Login </h2>
        <form action="login.php" method="POST">
            <label> Username: </label>
            <input  type="text" name="username" placeholder="Username" required>
            <label> Password: </label>
            <input type="password" name="password" placeholder="Password" required>
            <div id="buttons">
            <input onclick="closeLogin()" type="button" name="cancel" value="Cancel" id="cancelLogin">
            <input type="submit" name="submit" value="Log In" id="submitLogin">
</div>
        </form>
</div>
</div>


<div id="addDog" onclick="openForm()"> 
  <button> + </button>
</div>


<div id="addDogForm-bg" style="visibility:hidden;">
<div id="addDogForm" >
        <h2> Add a Dog </h2>
        <form action="addDoggo.php" method="POST"> 
            <label> Image </label>
            <input type="text" name="img" placeholder="Image URL">
            <label> Name </label>
            <input type="text" name="name" placeholder="Name">
            <label> Breed </label>
            <input type="text" name="breed" placeholder="Breed">
            <label> Age </label>
            <input type="text" name="age" placeholder="Age">
            <label> Gender </label>
            <select name="gender">
                <option value="Select"> Select Gender </option>
                <option value="Male"> Male </option>
                <option value="Female"> Female </option>
            </select>
            <label> Size </label>
            <select name="size">
                <option value="Select"> Select Size </option>
                <option value="Small"> Small </option>
                <option value="Medium"> Medium </option>
                <option value="Large"> Large </option>
            </select>
            <label> Coat Type </label>
            <select name="coat">
                <option value="Select"> Select Coat Type </option>
                <option value="Short"> Short </option>
                <option value="Medium"> Medium </option>
                <option value="Long"> Long </option>
            </select>
            <label> Description </label>
            <textarea name="description" id="description" placeholder="Description" rows="10" cols="40"></textarea>
            <div id="buttons">
            <input onclick="closeForm()" type="button" name="cancel" id="cancel" value="Cancel">
            <input type="submit" name="submit" id="submit" value="Add Dog">
            </div>
            </form>
</div>
</div>

<footer>
  <a name="donate"></a>
  <h2> Donate </h2>
  <hr>
  <h4> If you would like to help Doggo and the rescued dogs, please click below to donate. </h4>

  <button id="donateBut"> DONATE </button>
</footer>

<script src="./js/jquery-3.4.1.js"></script>
<script src="./js/elements.js"></script>
<script src="./js/requests.js"></script>
<script src="./js/script.js"></script>  

</body>
</html>


