const section = document.querySelector('.slider')
const images = {
    first: 'url(../img/22042019151530_G.jpg)',
    second: 'url(../img/2.jpg)',
    third: 'url(../img/3.jpg)',
    fourth: 'url(../img/4.jpg)'
}

let bola1 = document.querySelector('#um');
let bola2 = document.querySelector('#dois');
let bola3 = document.querySelector('#tres');
let bola4 = document.querySelector('#quatro');

const slide = [images.first, images.second, images.third, images.fourth];
const bolinhas = [bola1, bola2, bola3, bola4];
let i = 0;
function automatico(){
    setInterval("next()", 3000)
}

function next(){

    if(i >= 4){
        bolinhas[3].style.backgroundColor = 'black';
        i = 0;
    } else{
        //section.classList.add('slider');
        section.style.backgroundImage = slide[i];
        //bolinhas[i].style.backgroundColor = 'gray';
        i++
        let j = i - 2;
        //bolinhas[j].style.backgroundColor = 'black';
    }
}


function previous(){
    i -= 1;
    //section.classList.add('slider');
    section.style.backgroundImage = slide[i];
    //bolinhas[i].style.backgroundColor = 'gray';
}