// Admin login 
function login(data) {
    return $.ajax({
      method: 'POST',
      data: data,
      url: 'login.php'
    })
  }

// Get all dogs in an array
function getAllDogs(){
    return $.ajax({
        url: 'fetchDoggo.php',
        method: 'GET'
      })
}

// Get one dog
function getDog(id){
    return $.ajax({
        url: `getDog.php`,
        method: 'POST',
        data: JSON.stringify({id:id})
      })
}

// Create a profile 
function createProfile(data){
    return $.ajax({
        method: 'POST',
        data: data,
        url: 'addDoggo.php'
      })
}
