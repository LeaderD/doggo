
    const $allDogs = $('#all-dogs');
    // Delete function
    function deleteDog(dogID){
        deleteProfile(dogID)
        getAllDogs()
        .then(dogs => {
            alldogs = dogs
            console.log('getAllDogs',alldogs)
            displayProfile(alldogs)
        })
        .catch(error=>{
            console.log("error",error)
        })
    }

    function openSB(dogID) {
        getDog(dogID)
        .then(dog => {
            console.log('sb dog',JSON.parse(dog))
            const sbdog = SideBar(JSON.parse(dog))
            $('#sidebarpopup').empty().append(sbdog)
        })
        // document.getElementById("sidebarpopup").innerHTML = SBcontent;
        document.getElementById("sidebarpopup").style.width = "30%";
        // document.getElementById("main").style.marginLeft = "550px";
    }

    function closeSB() {
        document.getElementById("sidebarpopup").style.width = "0";
        document.getElementById("main").style.marginLeft= "0";
    }
    
    function openForm(){
        document.getElementById("addDogForm-bg").style.visibility = "visible";
    }

    function closeForm(){
        document.getElementById("addDogForm-bg").style.visibility = "hidden";
    }

    function openLogin(){
        document.getElementById("loginBG").style.visibility = "visible";
    }

    function closeLogin(){
        document.getElementById("loginBG").style.visibility = "hidden";
    }

    function donateScroll() {
        window.scrollBy(0, 1000);
      }
    let alldogs=[];

    // Fetch all dogs when the page loads, and display it
    getAllDogs()
    .then(dogs => {
        alldogs = dogs
        console.log('getAllDogs',alldogs)
        displayProfile(alldogs)
    })
    .catch(error=>{
        console.log("error",error)
    })


    // Loop thru array of dogs and display profiles on the page
    function displayProfile(alldogs){
        $allDogs.empty()
        for (const dog of alldogs) {
            const profile = setupProfile(dog)
            $allDogs.append(profile)
        }
    }

    // setup single profile
    function setupProfile(dog){
        // create the profile
        const profile = Profile(dog)
        return profile;
    }