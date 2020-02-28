function Profile(dog) {
    return $(`
  <div class="row card" onclick="openSB(${dog.id})">
        <div class="profile-pic" style="background-image:url(${dog.img})"></div>
        <div class="dog-des">
          <h2>${dog.name}</h2>
          <h3>Age: ${dog.age}</h3>
          <h3>Breed: ${dog.breed}</h3> 
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna</p>
        </div>
  </div>
    `)
}

function SideBar(dog){
    return $(`
<a href="javascript:void(0)" class="closebtn" onclick="closeSB()">×</a>
  <img src=" ${dog.img}" width="550">
  <div class="sb-des">
    <h1 class="name_breed"> ${dog.name} - ${dog.breed} </h1>
    <h3>  ${dog.age} old • ${dog.gender} • ${dog.coat} • ${dog.size}</h3>
    <p>${dog.description}</p>
    <button type="button" class="button"> Adopt Me!  </button>
  </div>
    `)
}

