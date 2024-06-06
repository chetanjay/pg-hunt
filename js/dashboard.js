'use strict';

let editFunction = function(){
    document.getElementById('b1').style.display = 'flex';
    document.getElementById('c1').style.display = 'flex';
    document.getElementById('i1').style.display = 'flex';
    document.getElementById('n1').style.display = 'none';
}
let cancel = function(){
    document.getElementById('b1').style.display = 'none';
    document.getElementById('c1').style.display = 'none';
    document.getElementById('i1').style.display = 'none';
    document.getElementById('n1').style.display = 'flex';
}
let editFunction1 = function(){
    document.getElementById('b2').style.display = 'flex';
    document.getElementById('c2').style.display = 'flex';
    document.getElementById('i2').style.display = 'flex';
    document.getElementById('n2').style.display = 'none';
}
let cancel1 = function(){
    document.getElementById('b2').style.display = 'none';
    document.getElementById('c2').style.display = 'none';
    document.getElementById('i2').style.display = 'none';
    document.getElementById('n2').style.display = 'flex';
}
let editFunction2 = function(){
    document.getElementById('b3').style.display = 'flex';
    document.getElementById('c3').style.display = 'flex';
    document.getElementById('i3').style.display = 'flex';
    document.getElementById('n3').style.display = 'none';
}
let cancel2 = function(){
    document.getElementById('b3').style.display = 'none';
    document.getElementById('c3').style.display = 'none';
    document.getElementById('i3').style.display = 'none';
    document.getElementById('n3').style.display = 'flex';
}
let changePassword = function()
{
    document.getElementsByClassName('password_change')[0].style.display = 'flex';
}
let hide = function()
{
    document.getElementsByClassName('password_change')[0].style.display = 'none';
}
document.getElementById('e1').addEventListener("click",editFunction);
document.getElementById('c1').addEventListener("click",cancel);
document.getElementById('e2').addEventListener("click",editFunction1);
document.getElementById('c2').addEventListener("click",cancel1);
document.getElementById('e3').addEventListener("click",editFunction2);
document.getElementById('c3').addEventListener("click",cancel2);
document.getElementById('pc').addEventListener("click",changePassword);
document.getElementById('cancel-request').addEventListener("click",hide);



