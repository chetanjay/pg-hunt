'use strict';
const cityTitle = document.getElementById("others");
function searchFunction() {
    // Declare variables
    var input,filter, outerDiv, innerDiv, p, i, txtValue;
    input = document.getElementById('search');
    filter = input.value.toUpperCase();
    outerDiv = document.getElementsByClassName("city-template")[0];
    innerDiv = outerDiv.getElementsByTagName('div');
  
    // Loop through all list items, and hide those who don't match the search query
    for (i = 0; i < innerDiv.length; i++) {
      p = innerDiv[i].getElementsByTagName("p")[0];
      // txtValue = p.textContent || p.innerText;
      txtValue = p.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        innerDiv[i].style.display = "";
        cityTitle.style.display = "block";
      } else {
        innerDiv[i].style.display = "none";
        cityTitle.style.display = "none";
      }
    }
  }
  