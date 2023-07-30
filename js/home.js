
let zoom = document.getElementById('bg')
let gt1 = document.getElementById('gt1')
let gt2 = document.getElementById('gt2')
window.addEventListener('scroll', function(){
  let value = window.scrollY;

      gt1.style.translate = `-${value + 'px'}`;
      
      gt2.style.translate = `${value + 'px'}`;
    
})



let mlogo = document.getElementById('main-logo')
mlogo.style.position = 'fixed';
window.addEventListener('scroll', function(){
  let value = window.scrollY;
    console.log(value);
    if (value<1000) {
        mlogo.style.position = 'fixed';
        mlogo.style.scale = `${value/1000}`;

    }
    else{
        mlogo.style.translate = `0 ${(1000-value) + 'px'}`;
    }

})



// scroll on click 
document.querySelector('#gallery').addEventListener("click", () => {

    var el = document.getElementById("gallery-data")
    el.scrollIntoView({ behavior: "smooth", block: "center" })
})

document.querySelector('#about').addEventListener("click", () => {

    var el = document.getElementById("about-data")
    el.scrollIntoView({ behavior: "smooth", block: "start" })
})
document.querySelector('#event').addEventListener("click", () => {

    var el = document.getElementById("event-data")
    el.scrollIntoView({ behavior: "smooth", block: "start" })
})

document.querySelector('#sponsor').addEventListener("click", () => {

    var el = document.getElementById("sponsor-data")
    el.scrollIntoView({ behavior: "smooth", block: "start" })
})
document.querySelector('#team').addEventListener("click", () => {

    var el = document.getElementById("team-data")
    el.scrollIntoView({ behavior: "smooth", block: "start" })
})



// document.querySelector('#abt').addEventListener("click", () => {

//     var el = document.getElementById("about-data")
//     el.scrollIntoView({ behavior: "smooth", block: "center" })
// })

// document.querySelector('#evt').addEventListener("click", () => {

//     var el = document.getElementById("event-data")
//     el.scrollIntoView({ behavior: "smooth", block: "center" })
// })
// document.querySelector('#spns').addEventListener("click", () => {

//     var el = document.getElementById("sponsor-data")
//     el.scrollIntoView({ behavior: "smooth", block: "center" })
// })
// document.querySelector('#tm').addEventListener("click", () => {

//     var el = document.getElementById("team-data")
//     el.scrollIntoView({ behavior: "smooth", block: "center" })
// })
// end of scroll on click 




// countdown 
// Set the date we're counting down to
var countDownDate = new Date("sep 18, 2023 10:00:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();
    
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
    
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Output the result in an element with id="demo"
  document.getElementById("dy").innerHTML = days;
  document.getElementById("hr").innerHTML =  hours;
  document.getElementById("mnit").innerHTML = minutes;
  document.getElementById("scond").innerHTML = seconds;
    
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EVENT ONGOING";
    document.getElementById("timer").style.display = "none";
    document.getElementById("timer_tle").style.display = "none";
  }
}, 1000);