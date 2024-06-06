'use strict';

// let getName = function()
// {
//     let name = document.getElementById('i1').value;
//     console.log(name);
// }
// document.getElementById('b1').addEventListener("click",getName);
document.getElementById('b1').addEventListener('click',function(){

    let name = document.getElementById('i1').value;
    if(name==="")
    {
        alert("cannot accept empty string");
    }
    else
    {
        chngName();
    }
})
let chngName = function(event){

    let name = document.getElementById('i1').value;
    // console.log(name);
    //console.log('button is clicked')
    const changeMade = new FormData();
    changeMade.append('name',name);
    let changeXML = new XMLHttpRequest();
 
    changeXML.addEventListener("load", on_success);
    
    // On error
    changeXML.addEventListener("error", on_error);
    
    // Set up request
    changeXML.open("post","api/change.php");
    
    // Form data is sent with request
    changeXML.send(changeMade);
    
    event.preventDefault();
    }

    document.getElementById('b2').addEventListener('click',function(event){

        let number = document.getElementById('i2').value;
        // console.log(name);
        //console.log('button is clicked')
        const changeMade = new FormData();
        changeMade.append('number',number);
        let changeXML = new XMLHttpRequest();
     
        changeXML.addEventListener("load", on_success);
        
        // On error
        changeXML.addEventListener("error", on_error);
        
        // Set up request
        changeXML.open("post","api/change.php");
        
        // Form data is sent with request
        changeXML.send(changeMade);
        
        event.preventDefault();
        });
    document.getElementById('b3').addEventListener('click',function(event){

            let college = document.getElementById('i3').value;
            // console.log(name);
            //console.log('button is clicked')
            const changeMade = new FormData();
            changeMade.append('college',college);
            let changeXML = new XMLHttpRequest();
         
            changeXML.addEventListener("load", on_success);
            
            // On error
            changeXML.addEventListener("error", on_error);
            
            // Set up request
            changeXML.open("post","api/change.php");
            
            // Form data is sent with request
            changeXML.send(changeMade);
            
            event.preventDefault();
        });

        const passwordForm = document.getElementsByClassName('change_password')[0];

        passwordForm.addEventListener('submit',function(event){
        
            const passwordXHR = new XMLHttpRequest();
        
            const passwordData  = new FormData(passwordForm);
            
            passwordXHR.addEventListener('load',on_change);
        
            passwordXHR.addEventListener('error', on_error);
        
            passwordXHR.open('POST','api/change_password.php');
        
            passwordXHR.send(passwordData);
        
            event.preventDefault();
        })
    let on_success = function(event)
    {
        alert("information updated")
        window.location.href = "dashboard.php";
    }
    let on_error = function()
    {
        alert("something went wrong");
    }
    let on_change = function(event)
    {
        var response = JSON.parse(event.target.responseText);
        if(response.success) {
        
            alert(response.message);    
            window.location.href = "dashboard.php";
        }
        else {
            alert(response.message);
        } 
    }
