function myFunction(){

    document.getElementById('demo').innerHTML = Date();
}

// function changeColor(){
//     document.querySelector("body").style.backgroundColor = "red";
//     document.querySelector("#changeColor").innerHTML = "Red";
// }

function changeBtn(){
document.querySelector("#change").style.visibility = "hidden";
document.querySelector("#change2").style.visibility = "visible";
}

function changeBtn2(){
    document.querySelector("#change2").style.visibility = "hidden";
    document.querySelector("#change").style.visibility = "visible";
    }


    // let clickCount = 0;
    // const colors = ["red", "green", "blue", "yellow", "purple", "orange", "pink"];
    // const btn = ["red", "green", "blue", "yellow", "purple", "orange", "pink"];
    // const myDiv = document.querySelector("body");

    // myDiv.addEventListener("click", function() {
    //   clickCount++;
    //   if (clickCount <= 7) {
    //     myDiv.style.backgroundColor = colors[clickCount - 1];
    //     myDiv.innerHTML = btn[clickCount - 1];
    //     myDiv.style.color = "white";
    //   } else {
    //     clickCount = 1;
    //     myDiv.style.backgroundColor = colors[0];
    //     myDiv.innerHTML = "Onclick";
    //   }
    // });





