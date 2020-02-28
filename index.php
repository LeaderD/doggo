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
      </div>
      <li><a href="#contact">Contact</a></li>
      <li><a href="#donate">Donate</a></li>
      <li><a href="#home">Home</a></li>
    </ul>
  </div>
</div>


<div id="all-dogs">

</div> 


<div id="sidebarpopup" class="sidebar">
  
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


<script src="./js/jquery-3.4.1.js"></script>
<script src="./js/elements.js"></script>
<script src="./js/requests.js"></script>
<script src="./js/script.js"></script>  

</body>
</html>


