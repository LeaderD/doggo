<?php session_start();
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="index.css">
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

<div id="sidebarpopup" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeSB()">×</a>
  <img src="https://i0.wp.com/cdn-prod.medicalnewstoday.com/content/images/articles/322/322868/golden-retriever-puppy.jpg?w=1155&h=1541" width="550">
  <h1 class="name_breed"> Coco the Golden Retriever Mix </h1>
  <h3 class="name_breed"> 7 months old • Male • Medium coat length </h3>
  <br>
  <h2 class="about"> About </h2>
  <text> Coco was surrendered to us by a member of the community who had an unwanted litter of puppies. This is unfortunately very common in rural South Texas and the puppies desperately needed help. Thankfully a foster offered to take them in and we were able to get them help.
Coco and his siblings are about 8 weeks old. The parent to these pups were 40 and 50 pounds so we can assume Hunter and his siblings will be the same size when full grown. They're sweet, playful and snuggly! We hope to find great homes for Hunter and his siblings.
If you're interested in applying to adopt Coco please fill out the application<br><br><br></text>
<br>
<br>
<button type="button" class="button"> Adopt Me!  </button>
<br>
<br>
</div>



<div class="row">
  <div class="column">
    <div class="card" onclick="openSB()"></button>
      <img src="https://i0.wp.com/cdn-prod.medicalnewstoday.com/content/images/articles/322/322868/golden-retriever-puppy.jpg?w=1155&h=1541" class="responsive">
      <p>Coco</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna</p>
    </div>
  </div>

  <div class="column">
     <div class="card" onclick="openSB()"></button> 
      <img src="https://storage.needpix.com/rsynced_images/puppy-2357418_1280.jpg" class="responsive">
      <p> Meatloaf </p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna</p>
    </div>
  </div>
  
  <div class="column">
    <div class="card" onclick="openSB()"></button> 
      <img src="https://boygeniusreport.files.wordpress.com/2016/11/puppy-dog.jpg?quality=98&strip=all&w=782" class="responsive">
      <p>Tofu</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna</p>
    </div>
  </div>
  
  <div class="column">
    <div class="card" onclick="openSB()"></button>
      <img src="https://dogstruggles.com/wp-content/uploads/2018/09/best_dog_brush_corgi_dogstruggles.jpg" class="responsive">
      <p>Cheddar</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna</p>
    </div>
  </div>
</div>

<div class="row">
  <div class="column">
    <div class="card" onclick="openSB()"></button>
      <img src="https://i0.wp.com/cdn-prod.medicalnewstoday.com/content/images/articles/322/322868/golden-retriever-puppy.jpg?w=1155&h=1541" class="responsive">
      <p>Coco</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna</p>
    </div>
  </div>

  <div class="column">
    <div class="card" onclick="openSB()"></button>
      <img src="https://storage.needpix.com/rsynced_images/puppy-2357418_1280.jpg" class="responsive">
      <p> Meatloaf </p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna</p>
    </div>
  </div>
  
  <div class="column">
    <div class="card" onclick="openSB()"></button>
      <img src="https://boygeniusreport.files.wordpress.com/2016/11/puppy-dog.jpg?quality=98&strip=all&w=782" class="responsive">
      <p>Tofu</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna</p>
    </div>
  </div>
  
  <div class="column">
    <div class="card" onclick="openSB()"></button>
      <img src="https://dogstruggles.com/wp-content/uploads/2018/09/best_dog_brush_corgi_dogstruggles.jpg" class="responsive">
      <p>Cheddar</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna</p>
    </div>
  </div>
</div>

<script>
function openSB() {
  document.getElementById("sidebarpopup").style.width = "550px";
  document.getElementById("main").style.marginLeft = "550px";
}

function closeSB() {
  document.getElementById("sidebarpopup").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
</script>

</body>
</html>
