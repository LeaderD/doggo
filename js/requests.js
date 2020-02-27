// Admin login 
function login(data) {
    return $.ajax({
      method: 'POST',
      data: data,
      url: 'php/login.php'
    })
  }

// Get all dogs in an array
function getAllDogs(){
    return $.ajax({
        url: 'php/fetchDoggo.php',
        method: 'GET'
      })
}

// Get one dog
function getDog(id){
    return $.ajax({
        url: `php/getDog.php?id=${id}`,
        method: 'GET'
      })
}

// Create a profile 
function createProfile(data){
    return $.ajax({
        method: 'POST',
        data: data,
        url: 'php/addDoggo.php'
      })
}
