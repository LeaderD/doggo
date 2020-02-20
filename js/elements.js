function Profile(dog) {
    return $(`
    ${dog.id}
    ${dog.name}
    ${dog.breed}
    ${dog.age}
    ${dog.img}
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

