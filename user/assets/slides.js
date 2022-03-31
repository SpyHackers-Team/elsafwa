"use strict";
var slide = document.getElementById("slide");
var upArrow = document.querySelectorAll("#upArrow");
var downArrow = document.querySelectorAll("#downArrow");

var Number1 = document.querySelector(".title1");
var Number2 = document.querySelector(".title2");
var Number3 = document.querySelector(".title3");
var Number4 = document.querySelector(".title4");
var Number5 = document.querySelector(".title5");
var Number6 = document.querySelector(".title6");
var Number7 = document.querySelector(".title7");
var Number8 = document.querySelector(".title8");
var Number9 = document.querySelector(".title9");
var Number10 = document.querySelector(".title10");
var Number11 = document.querySelector(".title11");
var Number12 = document.querySelector(".title12")

var button1 = document.querySelector(".my-button1");
var button2 = document.querySelector(".my-button2");
var button3 = document.querySelector(".my-button3");
var button4 = document.querySelector(".my-button4");
var button5 = document.querySelector(".my-button5");
var button6 = document.querySelector(".my-button6");
var button7 = document.querySelector(".my-button7");
var button8 = document.querySelector(".my-button8");
var button9 = document.querySelector(".my-button9");
var button10 = document.querySelector(".my-button10");
var button11 = document.querySelector(".my-button11");
var button12 = document.querySelector(".my-button12");

var input1 = document.querySelector(".no1");
var input2 = document.querySelector(".no2");
var input3 = document.querySelector(".no3");
var input4 = document.querySelector(".no4");
var input5 = document.querySelector(".no5");
var input6 = document.querySelector(".no6");
var input7 = document.querySelector(".no7");
var input8 = document.querySelector(".no8");
var input9 = document.querySelector(".no9");
var input10 = document.querySelector(".no10");
var input11 = document.querySelector(".no11");
var input12 = document.querySelector(".no12");

var cardBtn1 = document.querySelector(".count1");
var cardBtn2 = document.querySelector(".count2");
var cardBtn3 = document.querySelector(".count3");
var cardBtn4 = document.querySelector(".count4");
var cardBtn5 = document.querySelector(".count5");
var cardBtn6 = document.querySelector(".count6");
var cardBtn7 = document.querySelector(".count7");
var cardBtn8 = document.querySelector(".count8");
var cardBtn9 = document.querySelector(".count9");
var cardBtn10 = document.querySelector(".count10");
var cardBtn11 = document.querySelector(".count11");
var cardBtn12 = document.querySelector(".count12");

var ispaused = false;
let time = 30;
var myInterval = -1;

let x = 0;
upArrow.forEach(function (i) {
    i.addEventListener("click", (e) =>{
        if(x > "-3300"){
            x = x - 300;
            slide.style.top = x + "px"
        }
        e.preventDefault();
        time = 30;

        cardBtn1.classList.remove("hidden");
        cardBtn2.classList.remove("hidden");
        cardBtn3.classList.remove("hidden");
        cardBtn4.classList.remove("hidden");
        cardBtn5.classList.remove("hidden");
        cardBtn6.classList.remove("hidden");
        cardBtn7.classList.remove("hidden");
        cardBtn8.classList.remove("hidden");
        cardBtn9.classList.remove("hidden");
        cardBtn10.classList.remove("hidden");
        cardBtn11.classList.remove("hidden");
        cardBtn12.classList.remove("hidden");

        input1.classList.remove("hidden");
        input2.classList.remove("hidden");
        input3.classList.remove("hidden");
        input4.classList.remove("hidden");
        input5.classList.remove("hidden");
        input6.classList.remove("hidden");
        input7.classList.remove("hidden");
        input8.classList.remove("hidden");
        input9.classList.remove("hidden");
        input10.classList.remove("hidden");
        input11.classList.remove("hidden");
        input12.classList.remove("hidden");
    });
});
downArrow.forEach(function (i) {
    i.addEventListener("click", (e) => {
        if (x < "0") {
            x = x + 300;
            slide.style.top = x + "px"
        }
        e.preventDefault();
        time = 30;

        cardBtn1.classList.add("hidden");
        cardBtn2.classList.add("hidden");
        cardBtn3.classList.add("hidden");
        cardBtn4.classList.add("hidden");
        cardBtn5.classList.add("hidden");
        cardBtn6.classList.add("hidden");
        cardBtn7.classList.add("hidden");
        cardBtn8.classList.add("hidden");
        cardBtn9.classList.add("hidden");
        cardBtn10.classList.add("hidden");
        cardBtn11.classList.add("hidden");
        cardBtn12.classList.add("hidden");

        input1.classList.add("hidden");
        input2.classList.add("hidden");
        input3.classList.add("hidden");
        input4.classList.add("hidden");
        input5.classList.add("hidden");
        input6.classList.add("hidden");
        input7.classList.add("hidden");
        input8.classList.add("hidden");
        input9.classList.add("hidden");
        input10.classList.add("hidden");
        input11.classList.add("hidden");
        input12.classList.add("hidden");
    });
});

myInterval = setInterval((e) => {
    if(!ispaused && time >= 0){
        Number1.innerHTML = parseInt(time % 60, 10);
        Number2.innerHTML = parseInt(time % 60, 10);
        Number3.innerHTML = parseInt(time % 60, 10);
        Number4.innerHTML = parseInt(time % 60, 10);
        Number5.innerHTML = parseInt(time % 60, 10);
        Number6.innerHTML = parseInt(time % 60, 10);
        Number7.innerHTML = parseInt(time % 60, 10);
        Number8.innerHTML = parseInt(time % 60, 10);
        Number9.innerHTML = parseInt(time % 60, 10);
        Number10.innerHTML = parseInt(time % 60, 10);
        Number11.innerHTML = parseInt(time % 60, 10);
        Number12.innerHTML = parseInt(time % 60, 10);
        time--;
    }
    if(time === -1){
        cardBtn1.classList.add("hidden");
        cardBtn2.classList.add("hidden");
        cardBtn3.classList.add("hidden");
        cardBtn4.classList.add("hidden");
        cardBtn5.classList.add("hidden");
        cardBtn6.classList.add("hidden");
        cardBtn7.classList.add("hidden");
        cardBtn8.classList.add("hidden");
        cardBtn9.classList.add("hidden");
        cardBtn10.classList.add("hidden");
        cardBtn11.classList.add("hidden");
        cardBtn12.classList.add("hidden");

        input1.classList.add("hidden");
        input2.classList.add("hidden");
        input3.classList.add("hidden");
        input4.classList.add("hidden");
        input5.classList.add("hidden");
        input6.classList.add("hidden");
        input7.classList.add("hidden");
        input8.classList.add("hidden");
        input9.classList.add("hidden");
        input10.classList.add("hidden");
        input11.classList.add("hidden");
        input12.classList.add("hidden");
    }
}, 1000);
button1.addEventListener("click", (e)=>{
    if (Number1.classList.contains("pause")){

        Number1.classList.remove('pause');
        Number1.classList.add('play');
        button1.innerHTML = "<i class=\"fa-solid fa-play\"></i>";
        e.preventDefault();
        ispaused = true
    }else{
        Number1.classList.remove('play');
        Number1.classList.add('pause');
        button1.innerHTML = "<i class=\"fa-solid fa-pause\"></i>";

        e.preventDefault();
        ispaused = false
    }
});
button2.addEventListener("click", (e)=>{
    if (Number2.classList.contains("pause")){

        Number2.classList.remove('pause');
        Number2.classList.add('play');
        button2.innerHTML = "<i class=\"fa-solid fa-play\"></i>";
        e.preventDefault();
        ispaused = true
    }else{
        Number2.classList.remove('play');
        Number2.classList.add('pause');
        button2.innerHTML = "<i class=\"fa-solid fa-pause\"></i>";

        e.preventDefault();
        ispaused = false
    }
});
button3.addEventListener("click", (e)=>{
    if (Number3.classList.contains("pause")){

        Number3.classList.remove('pause');
        Number3.classList.add('play');
        button3.innerHTML = "<i class=\"fa-solid fa-play\"></i>";
        e.preventDefault();
        ispaused = true
    }else{
        Number3.classList.remove('play');
        Number3.classList.add('pause');
        button3.innerHTML = "<i class=\"fa-solid fa-pause\"></i>";

        e.preventDefault();
        ispaused = false
    }
});
button4.addEventListener("click", (e)=>{
    if (Number4.classList.contains("pause")){

        Number4.classList.remove('pause');
        Number4.classList.add('play');
        button4.innerHTML = "<i class=\"fa-solid fa-play\"></i>";
        e.preventDefault();
        ispaused = true
    }else{
        Number4.classList.remove('play');
        Number4.classList.add('pause');
        button4.innerHTML = "<i class=\"fa-solid fa-pause\"></i>";

        e.preventDefault();
        ispaused = false
    }
});
button5.addEventListener("click", (e)=>{
    if (Number5.classList.contains("pause")){

        Number5.classList.remove('pause');
        Number5.classList.add('play');
        button5.innerHTML = "<i class=\"fa-solid fa-play\"></i>";
        e.preventDefault();
        ispaused = true
    }else{
        Number5.classList.remove('play');
        Number5.classList.add('pause');
        button5.innerHTML = "<i class=\"fa-solid fa-pause\"></i>";

        e.preventDefault();
        ispaused = false
    }
});
button6.addEventListener("click", (e)=>{
    if (Number6.classList.contains("pause")){

        Number6.classList.remove('pause');
        Number6.classList.add('play');
        button6.innerHTML = "<i class=\"fa-solid fa-play\"></i>";
        e.preventDefault();
        ispaused = true
    }else{
        Number6.classList.remove('play');
        Number6.classList.add('pause');
        button6.innerHTML = "<i class=\"fa-solid fa-pause\"></i>";

        e.preventDefault();
        ispaused = false
    }
});
button7.addEventListener("click", (e)=>{
    if (Number7.classList.contains("pause")){

        Number7.classList.remove('pause');
        Number7.classList.add('play');
        button7.innerHTML = "<i class=\"fa-solid fa-play\"></i>";
        e.preventDefault();
        ispaused = true
    }else{
        Number7.classList.remove('play');
        Number7.classList.add('pause');
        button7.innerHTML = "<i class=\"fa-solid fa-pause\"></i>";

        e.preventDefault();
        ispaused = false
    }
});
button8.addEventListener("click", (e)=>{
    if (Number8.classList.contains("pause")){

        Number8.classList.remove('pause');
        Number8.classList.add('play');
        button8.innerHTML = "<i class=\"fa-solid fa-play\"></i>";
        e.preventDefault();
        ispaused = true
    }else{
        Number8.classList.remove('play');
        Number8.classList.add('pause');
        button8.innerHTML = "<i class=\"fa-solid fa-pause\"></i>";

        e.preventDefault();
        ispaused = false
    }
});
button9.addEventListener("click", (e)=>{
    if (Number9.classList.contains("pause")){

        Number9.classList.remove('pause');
        Number9.classList.add('play');
        button9.innerHTML = "<i class=\"fa-solid fa-play\"></i>";
        e.preventDefault();
        ispaused = true
    }else{
        Number9.classList.remove('play');
        Number9.classList.add('pause');
        button9.innerHTML = "<i class=\"fa-solid fa-pause\"></i>";

        e.preventDefault();
        ispaused = false
    }
});
button10.addEventListener("click", (e)=>{
    if (Number10.classList.contains("pause")){

        Number10.classList.remove('pause');
        Number10.classList.add('play');
        button10.innerHTML = "<i class=\"fa-solid fa-play\"></i>";
        e.preventDefault();
        ispaused = true
    }else{
        Number10.classList.remove('play');
        Number10.classList.add('pause');
        button10.innerHTML = "<i class=\"fa-solid fa-pause\"></i>";

        e.preventDefault();
        ispaused = false
    }
});
button11.addEventListener("click", (e)=>{
    if (Number11.classList.contains("pause")){

        Number11.classList.remove('pause');
        Number11.classList.add('play');
        button11.innerHTML = "<i class=\"fa-solid fa-play\"></i>";
        e.preventDefault();
        ispaused = true
    }else{
        Number11.classList.remove('play');
        Number11.classList.add('pause');
        button11.innerHTML = "<i class=\"fa-solid fa-pause\"></i>";

        e.preventDefault();
        ispaused = false
    }
});
button12.addEventListener("click", (e)=>{
    if (Number12.classList.contains("pause")){

        Number12.classList.remove('pause');
        Number12.classList.add('play');
        button12.innerHTML = "<i class=\"fa-solid fa-play\"></i>";
        e.preventDefault();
        ispaused = true
    }else{
        Number12.classList.remove('play');
        Number12.classList.add('pause');
        button12.innerHTML = "<i class=\"fa-solid fa-pause\"></i>";

        e.preventDefault();
        ispaused = false
    }
});