 let slide = document.querySelectorAll(".patientReview");
 let card = document.querySelectorAll(".card");
 let closeBtn = document.getElementById("closeBtn");
 let connectBtn = document.getElementById("connectBtn");


 let count = 0;

 slide.forEach(function(slides, index){
    slides.style.left=`${index * 100}%`
 })

 function myFun(){
    slide.forEach(function(curVal){
        curVal.style.transform=`translateX(-${count * 100}%)`
    })
 }
 setInterval(function(){
    count++;
    if(count == slide.length){
        count=0;
    }
    myFun()
 }, 2000)

 card.forEach(function(cards){
    cards.addEventListener("click", function(){
        console.log(cards);
        document.querySelector(".detail").style.display="block"
        
        document.querySelector(".content").innerHTML=`
        <img src=${cards.firstElementChild.src} alt="">
        <div class="contentText">
                    <h1>${name}</h1>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Commodi ex accusantium eius magnam, esse repellat veritatis, consectetur aut perspiciatis dolor labore sapiente.</p>
        </div>
        `        

// cards.forEach(function(card) {
//   card.addEventListener("click", function() {
//     const imgSrc = card.querySelector("img").src;
//     const name = card.querySelectorAll("p")[0].innerText;
//     const desc = card.querySelectorAll("p")[1].innerText;

//     // Show detail popup
//     detail.style.display = "block";

//     // Populate content dynamically
//     content.innerHTML = `
//       <img src="${card.firstElementChild.src}" alt="">
//       <div class="contentText">
//         <h1>${name}</h1>
//         <p>${desc}</p>
//       </div>
//     `;
// //   });
// // });

        closeBtn.addEventListener("click", function(){
        document.querySelector(".detail").style.display="none"
       })
    })
 })

 connectBtn.addEventListener("click", function(){
    let email = document.getElementById("email");
    let pass = document.getElementById("pass");

    if(email.value == "" && pass.value == ""){
        alert("Enter Details")
    }else{
        alert("You Logged IN")
    }
 })