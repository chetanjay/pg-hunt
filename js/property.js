// 'use strict';

// const propertySelector = document.getElementsByClassName('propertys')[0];

// const propertyName = new FormData();

// function setProperty(clicked_id)
// {

//     propertyName.append('propertyind',clicked_id);
//     propertySelector.click();
// }

// // const propertySelector = document.getElementsByClassName('propertyDetail')[0];
// propertySelector.addEventListener('click',function(event){

//     //console.log('button is clicked')
//     let propertyXML = new XMLHttpRequest();

//     //  const propertydata = new FormData();

//     propertyXML.addEventListener("load", fetch_property);
    
//     // On error
//     propertyXML.addEventListener("error", show_error);
    
//     // Set up request
//     propertyXML.open("get","api/setProperty.php");
    
//     // Form data is sent with request
//     propertyXML.send(propertyName);
    
//     event.preventDefault();
//     });
    
//     let fetch_property = function()
//     {
//          window.location.href = "api/setProperty.php";
//     }
//     let show_error = function()
//     {
//          alert("something went wrong");
//     }
