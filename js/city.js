'use strict';

const citySelector = document.getElementsByClassName('citys')[0];

const cityName = new FormData();

function demo(clicked_id)
{

    cityName.append('city',clicked_id);
    citySelector.click();
}


citySelector.addEventListener('click',function(event){

    //console.log('button is clicked')
    let cityXML = new XMLHttpRequest();
 
    cityXML.addEventListener("load", fetch_success);
    
    // On error
    cityXML.addEventListener("error", on_error);
    
    // Set up request
    cityXML.open("post","api/city.php");
    
    // Form data is sent with request
    cityXML.send(cityName);
    
    document.getElementsByClassName('loading')[0].style.display = 'flex';
    event.preventDefault();
    });
    
    let fetch_success = function()
    {
        document.getElementsByClassName('loading')[0].style.display = 'none';
        // // alert("city changes successfully")
         window.location.href = "index.php";
    }
    let on_error = function()
    {
        document.getElementsByClassName('loading')[0].style.display = 'none';
        // alert("something went wrong");
    }
