'use strict';

const tempv = document.getElementById('clsbtn');


const cityModal = document.getElementsByClassName('city-modal')[0];

const closeCitybtn = document.getElementById('clsbtn');

citybtn.addEventListener('click',openCityModal);

closeCitybtn.addEventListener('click',closeCityModal);

function openCityModal()
{
    cityModal.style.display = 'flex';
    document.getElementById('k1').style.overflow = 'hidden';
}
function closeCityModal()
{
    cityModal.style.display = 'none';
    document.getElementById('k1').style.overflow = 'visible';
    
}
function getCookie(cname) {
    let name = cname + "=";
    let decodedCookie = decodeURIComponent(document.cookie);
    let ca = decodedCookie.split(';');
    for(let i = 0; i <ca.length; i++) {
      let c = ca[i];
      while (c.charAt(0) == ' ') {
        c = c.substring(1);
      }
      if (c.indexOf(name) == 0) {
        return c.substring(name.length, c.length);
      }
    }
    return "";
  }

function checkCookie() {
    let username = getCookie("city");
    if (username != "") {
        tempv.style.display = 'flex';
    //  alert("Welcome again " + username);
    // alert("cookie exists");
    closeCityModal();
    } else {
        openCityModal();
        tempv.style.display = 'none';
    //   username = prompt("Please enter your name:", "");
    //   if (username != "" && username != null) {
    //     setCookie("username", username, 365);
    //   }
        // alert("welcome to PGHunt please select a city to continue");
    }
  }
  window.addEventListener("load", (event) => {
    checkCookie();
  });