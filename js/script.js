let alldogs=[];

// Fetch all dogs when the page loads, and display it
getAllDogs()
.then(dogs => {
    alldogs = dogs
    displayProfile(alldogs)
})
.catch(error=>{
    console.log("error",error)
})


// Loop thru array of dogs and display profiles on the page
function displayProfile(alldogs){
    $browseContainer.empty()
    for (const dog of alldogs) {
        const profile = setupProfile(dog)
        $browseContainer.append(profile)
    }
}

// setup single profile
function setupProfile(dog){
    // create the profile
    const profile = Profile(dog)
    // show side bar when it's clicked on
    profile.find('browse-container').on('click',
    function(){
        // get the dog's detail profile
        getDog(dog.id)
        .then(dog => {
            // insert the profile into sidebar
            const sidebar = SideBar(dog)
            // sidebar slides in
            $('sidebar-container').empty().append(sidebar)
        })
    })
    return profile;
}