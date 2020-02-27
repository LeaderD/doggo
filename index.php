<?php session_start();
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="index.css">
</head>

<body>
<!-- Navigation -->
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


<!-- Sidebar -->
<div id="sidebarpopup" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeSB()">×</a>
  <img src="https://i0.wp.com/cdn-prod.medicalnewstoday.com/content/images/articles/322/322868/golden-retriever-puppy.jpg?w=1155&h=1541" width="550">
  <h1 class="name_breed"> Coco the Golden Retriever Mix </h1>
  <h3 class="name_breed"> 7 months old • Male • Medium coat length </h3>
  <br>
  <h2 class="about"> About </h2>
  <p> Coco was surrendered to us by a member of the community who had an unwanted litter of puppies. This is unfortunately very common in rural South Texas and the puppies desperately needed help. Thankfully a foster offered to take them in and we were able to get them help.Coco and his siblings are about 8 weeks old. The parent to these pups were 40 and 50 pounds so we can assume Hunter and his siblings will be the same size when full grown. They're sweet, playful and snuggly! We hope to find great homes for Hunter and his siblings.If you're interested in applying to adopt Coco please fill out the application<br><br><br>
  </p>
  <br>
  <br>
  <button type="button" class="button"> Adopt Me!  </button>
  <br>
  <br>
</div>


<!-- One dog -->
<div class="row">
  <div class="column">
    <div class="card" onclick="openSB()">
      <img src="https://i0.wp.com/cdn-prod.medicalnewstoday.com/content/images/articles/322/322868/golden-retriever-puppy.jpg?w=1155&h=1541" class="responsive">
      <p>Coco</p>
     
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna</p>
    </div>
  </div>
</div>
  
<script src="./js/jquery.js"></script>
<script src="./js/elements.js"></script>
<script src="./js/requests.js"></script>
<script src="./js/script.js"></script>

</body>
</html>
