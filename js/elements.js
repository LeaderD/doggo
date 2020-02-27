function Profile(dog) {
    return $(`
    <div class="row">
    <div class="column">
      <div class="card" onclick="openSB(${dog.id})">
        <img src="${dog.img}" class="responsive">
        <p>${dog.name}</p>
        <p>Age:${dog.age}</p>
        <p>Breed: ${dog.breed}</p> 
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna</p>
      </div>
    </div>
  </div>
    `)
}

function SideBar(dog){
    return $(`
<a href="javascript:void(0)" class="closebtn" onclick="closeSB()">×</a>
  <img src=" ${dog.img}" width="550">
  <h1 class="name_breed"> ${dog.name} - ${dog.bread} </h1>
  <h3 class="name_breed">  ${dog.age} old • ${dog.gender} • ${dog.fur} • ${dog.size}</h3>
  <br>
  <h2 class="about"> About </h2>
  <p>${dog.desc}</p>
  <br>
  <br>
  <button type="button" class="button"> Adopt Me!  </button>
  <br>
  <br>
    `)
}

