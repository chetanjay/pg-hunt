'use strict'
const logout = document.getElementsByClassName('logout')[0];

logout.addEventListener('click',function(event){

    //console.log('button is clicked')
    let logoutXHR = new XMLHttpRequest();

    // On success
    logoutXHR.addEventListener("load", logoutfunc);
    
    // On error
    logoutXHR.addEventListener("error", logoutError);
    
    // Set up request
    logoutXHR.open("POST", "api/logout.php");
    
    // Form data is sent with request
    logoutXHR.send();
    
    event.preventDefault();
    });

    let logoutfunc = function () {
        // document.getElementById("loading").style.display = 'none';

        alert("Logout successfull");
            
        window.location.href = "index.php";
    
            //hidelogin(); 
    };

    let logoutError = function (event) {

        // document.getElementsByClassName("loading")[0].style.display = 'none';
    
        alert('Oops! Something went wrong.');  
    };