"use strict";
var title = document.getElementById("title");
var button = document.getElementById("my-button");
var time = 30;
var myInterval = -1;
myInterval = setInterval(function(){
            if(time > 0){
                time--;
                title.innerHTML = time;
            }else{
                time =0;
                title.innerHTML = time;
            }
        }, 1000);
button.addEventListener("click", function(event){
    if (myInterval === -1){
        button.innerHTML = "<i class=\"fa-solid fa-pause\"></i>";
        myInterval = setInterval(function(){
            if(time > 0){
                time--;
                title.innerHTML = time;
            }else{
                time =0;
                title.innerHTML = time;
            }
        }, 1000);
    }else{
        button.innerHTML = "<i class=\"fa-solid fa-play\"></i>";
        clearInterval(myInterval);
        myInterval = -1;
    }
});

//
//myInterval = setInterval(function(){
//            if(time > 0){
//                time--;
//                Number1.innerHTML = time;
//                Number2.innerHTML = time;
//                Number3.innerHTML = time;
//                Number4.innerHTML = time;
//                Number5.innerHTML = time;
//                Number6.innerHTML = time;
//                Number7.innerHTML = time;
//                Number8.innerHTML = time;
//                Number9.innerHTML = time;
//                Number10.innerHTML = time;
//                Number11.innerHTML = time;
//                Number12.innerHTML = time;
//            }else{
//                time =0;
//                Number1.innerHTML = time;
//                Number2.innerHTML = time;
//                Number3.innerHTML = time;
//                Number4.innerHTML = time;
//                Number5.innerHTML = time;
//                Number6.innerHTML = time;
//                Number7.innerHTML = time;
//                Number8.innerHTML = time;
//                Number9.innerHTML = time;
//                Number10.innerHTML = time;
//                Number11.innerHTML = time;
//                Number12.innerHTML = time;
//            }
//        }, 1000);
//button1.addEventListener("click", function(){
//    if (myInterval === -1){
//        button1.innerHTML = "<i class=\"fa-solid fa-pause\"></i>";
//        myInterval = setInterval(function(){
//            if(time > 0){
//                time--;
//                Number1.innerHTML = time;
//            }else{
//                time =0;
//                Number1.innerHTML = time;
//            }
//        }, 1000);
//    }else{
//        button1.innerHTML = "<i class=\"fa-solid fa-play\"></i>";
//        clearInterval(myInterval);
//        myInterval = -1;
//    }
//});
//button2.addEventListener("click", function(){
//    if (myInterval === -1){
//        button2.innerHTML = "<i class=\"fa-solid fa-pause\"></i>";
//        myInterval = setInterval(function(){
//            if(time > 0){
//                time--;
//                Number2.innerHTML = time;
//            }else{
//                time =0;
//                Number2.innerHTML = time;
//            }
//        }, 1000);
//    }else{
//        button2.innerHTML = "<i class=\"fa-solid fa-play\"></i>";
//        clearInterval(myInterval);
//        myInterval = -1;
//    }
//});
//button3.addEventListener("click", function(){
//    if (myInterval === -1){
//        button3.innerHTML = "<i class=\"fa-solid fa-pause\"></i>";
//        myInterval = setInterval(function(){
//            if(time > 0){
//                time--;
//                Number3.innerHTML = time;
//            }else{
//                time =0;
//                Number3.innerHTML = time;
//            }
//        }, 1000);
//    }else{
//        button3.innerHTML = "<i class=\"fa-solid fa-play\"></i>";
//        clearInterval(myInterval);
//        myInterval = -1;
//    }
//});
//button4.addEventListener("click", function(){
//    if (myInterval === -1){
//        button4.innerHTML = "<i class=\"fa-solid fa-pause\"></i>";
//        myInterval = setInterval(function(){
//            if(time > 0){
//                time--;
//                Number4.innerHTML = time;
//            }else{
//                time =0;
//                Number4.innerHTML = time;
//            }
//        }, 1000);
//    }else{
//        button4.innerHTML = "<i class=\"fa-solid fa-play\"></i>";
//        clearInterval(myInterval);
//        myInterval = -1;
//    }
//});
//button5.addEventListener("click", function(){
//    if (myInterval === -1){
//        button5.innerHTML = "<i class=\"fa-solid fa-pause\"></i>";
//        myInterval = setInterval(function(){
//            if(time > 0){
//                time--;
//                Number5.innerHTML = time;
//            }else{
//                time =0;
//                Number5.innerHTML = time;
//            }
//        }, 1000);
//    }else{
//        button5.innerHTML = "<i class=\"fa-solid fa-play\"></i>";
//        clearInterval(myInterval);
//        myInterval = -1;
//    }
//});
//button6.addEventListener("click", function(){
//    if (myInterval === -1){
//        button6.innerHTML = "<i class=\"fa-solid fa-pause\"></i>";
//        myInterval = setInterval(function(){
//            if(time > 0){
//                time--;
//                Number6.innerHTML = time;
//            }else{
//                time =0;
//                Number6.innerHTML = time;
//            }
//        }, 1000);
//    }else{
//        button6.innerHTML = "<i class=\"fa-solid fa-play\"></i>";
//        clearInterval(myInterval);
//        myInterval = -1;
//    }
//});
//button7.addEventListener("click", function(){
//    if (myInterval === -1){
//        button7.innerHTML = "<i class=\"fa-solid fa-pause\"></i>";
//        myInterval = setInterval(function(){
//            if(time > 0){
//                time--;
//                Number7.innerHTML = time;
//            }else{
//                time =0;
//                Number7.innerHTML = time;
//            }
//        }, 1000);
//    }else{
//        button7.innerHTML = "<i class=\"fa-solid fa-play\"></i>";
//        clearInterval(myInterval);
//        myInterval = -1;
//    }
//});
//button8.addEventListener("click", function(){
//    if (myInterval === -1){
//        button8.innerHTML = "<i class=\"fa-solid fa-pause\"></i>";
//        myInterval = setInterval(function(){
//            if(time > 0){
//                time--;
//                Number8.innerHTML = time;
//            }else{
//                time =0;
//                Number8.innerHTML = time;
//            }
//        }, 1000);
//    }else{
//        button8.innerHTML = "<i class=\"fa-solid fa-play\"></i>";
//        clearInterval(myInterval);
//        myInterval = -1;
//    }
//});
//button9.addEventListener("click", function(){
//    if (myInterval === -1){
//        button9.innerHTML = "<i class=\"fa-solid fa-pause\"></i>";
//        myInterval = setInterval(function(){
//            if(time > 0){
//                time--;
//                Number9.innerHTML = time;
//            }else{
//                time =0;
//                Number9.innerHTML = time;
//            }
//        }, 1000);
//    }else{
//        button9.innerHTML = "<i class=\"fa-solid fa-play\"></i>";
//        clearInterval(myInterval);
//        myInterval = -1;
//    }
//});
//button10.addEventListener("click", function(){
//    if (myInterval === -1){
//        button10.innerHTML = "<i class=\"fa-solid fa-pause\"></i>";
//        myInterval = setInterval(function(){
//            if(time > 0){
//                time--;
//                Number10.innerHTML = time;
//            }else{
//                time =0;
//                Number10.innerHTML = time;
//            }
//        }, 1000);
//    }else{
//        button10.innerHTML = "<i class=\"fa-solid fa-play\"></i>";
//        clearInterval(myInterval);
//        myInterval = -1;
//    }
//});
//button11.addEventListener("click", function(){
//    if (myInterval === -1){
//        button11.innerHTML = "<i class=\"fa-solid fa-pause\"></i>";
//        myInterval = setInterval(function(){
//            if(time > 0){
//                time--;
//                Number11.innerHTML = time;
//            }else{
//                time =0;
//                Number11.innerHTML = time;
//            }
//        }, 1000);
//    }else{
//        button11.innerHTML = "<i class=\"fa-solid fa-play\"></i>";
//        clearInterval(myInterval);
//        myInterval = -1;
//    }
//});
//button12.addEventListener("click", function(){
//    if (myInterval === -1){
//        button12.innerHTML = "<i class=\"fa-solid fa-pause\"></i>";
//        myInterval = setInterval(function(){
//            if(time > 0){
//                time--;
//                Number12.innerHTML = time;
//            }else{
//                time =0;
//                Number12.innerHTML = time;
//            }
//        }, 1000);
//    }else{
//        button12.innerHTML = "<i class=\"fa-solid fa-play\"></i>";
//        clearInterval(myInterval);
//        myInterval = -1;
//    }
//});