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
    ${dog.img}
    ${dog.name}
    ${dog.gender}
    ${dog.age}
    ${dog.size}
    ${dog.bread}
    ${dog.fur}
    ${dog.desc}
    `)
}

