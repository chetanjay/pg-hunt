'use strict'

const signupForm = document.getElementById('signup-form');

signupForm.addEventListener('submit',function(event){

    const signupXHR = new XMLHttpRequest();

    const signupData  = new FormData(signupForm);
    
    signupXHR.addEventListener('load',toSignup);

    signupXHR.addEventListener('error', toShowError);

    signupXHR.open('POST','api/toSignup.php');

    signupXHR.send(signupData);

    document.getElementsByClassName('loading')[0].style.display = 'flex';
    event.preventDefault();
})

const loginForm = document.getElementById('login-form');

loginForm.addEventListener('submit',function(event){

    const loginXHR = new XMLHttpRequest();

    const loginData  = new FormData(loginForm);
    
    loginXHR.addEventListener('load',toLogin);

    loginXHR.addEventListener('error', toShowError);

    loginXHR.open('POST','api/toLogin.php');

    loginXHR.send(loginData);

    document.getElementsByClassName('loading')[0].style.display = 'flex';
    event.preventDefault();
})

const toLogin = function(event)
{
    var response = JSON.parse(event.target.responseText);
    if(response.success) {
    
        document.getElementsByClassName('loading')[0].style.display = 'none';
        alert(response.message);
        
        window.location.href = "index.php";
    }
    else {
        document.getElementsByClassName('loading')[0].style.display = 'none';
        alert(response.message);
    } 
}
const toSignup = function(event)
{
    var response = JSON.parse(event.target.responseText);

    if(response.success) {
    
        document.getElementsByClassName('loading')[0].style.display = 'none';
        alert(response.message);
        
        window.location.href = "index.php";
    }
    else {
        document.getElementsByClassName('loading')[0].style.display = 'none';
        alert(response.message);
    } 
}

let toShowError = function (event) {

    document.getElementsByClassName("loading")[0].style.display = 'none';

    alert('Oops! Something went wrong.');  
};

