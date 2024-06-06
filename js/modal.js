'use strict';

const Button1 = document.getElementsByClassName('bars')[0];

const content = document.getElementsByClassName('main-body')[0];

const layer = document.getElementsByClassName('layer')[0];

const modal1 = document.getElementsByClassName('modal-part')[0];

const Button2  = document.getElementsByClassName('B1')[0];

const modal2 = document.getElementsByClassName('signup')[0];

const forLogin = document.getElementsByClassName('login')[0];

const citybtn = document.getElementsByClassName('modal1')[0];

Button1.addEventListener('click',OpenModal1);

Button2.addEventListener('click',OpenSignup);

var flag = false;

function OpenModal1()
{
    if((modal1.style.width === '310px') &&(!flag))
    {
        document.getElementById('k1').style.overflow = 'visible';
        document.getElementsByClassName('login')[0].style.display = 'none';
        layer.style.display = 'none';
        modal1.style.width = '0px';
        content.style.marginLeft = '0px';
    }
    else if(flag)
    {
        modal2.style.display = 'none';
        document.getElementById('k1').style.overflow = 'visible';
        layer.style.display = 'none';
        flag = false;
    }
    else
    {
        window.scrollTo(0,0);
        content.style.marginLeft = '-310px';
        modal1.style.width = '310px';
        layer.style.display = 'flex';
        document.getElementsByClassName('login')[0].style.display = 'flex';
        document.getElementById('k1').style.overflow = 'hidden';
    }
}
function OpenSignup()
{
        flag = true;
        document.getElementsByClassName('login')[0].style.display = 'none';
        modal1.style.width = '0px';
        content.style.marginLeft = '0px';
        modal2.style.display ='flex';
}