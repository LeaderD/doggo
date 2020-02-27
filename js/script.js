
    const $allDogs = $('#all-dogs');

    function openSB(dogID) {
        const SBcontent = SideBar(dogID);
        document.getElementById("sidebarpopup").innerHTML = SBcontent;
        document.getElementById("sidebarpopup").style.width = "550px";
        // document.getElementById("main").style.marginLeft = "550px";
    }
    
    function closeSB() {
        document.getElementById("sidebarpopup").style.width = "0";
        document.getElementById("main").style.marginLeft= "0";
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
       
        // show side bar when it's clicked on
        profile.find('.row').on('click',
        function(){
            // get the dog's detail profile
            getDog(dog.id)
            .then(dog => {
                // insert the profile into sidebar
                console.log('single dog',dog)
                const sidebar = SideBar(dog)
                // sidebar slides in
                $('sidebarpopup').empty().append(sidebar)
            })
        })
       
        return profile;
    }