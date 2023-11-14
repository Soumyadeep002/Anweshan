let zoom = document.getElementById('zoom')
let title = document.getElementById('title')
let explore = document.getElementById('explore')



window.addEventListener('scroll', function(){
  let value = window.scrollY;
  
    if (value != 0) {
        
        zoom.style.transform= `scale(${(value+100)/100})`;
 
    }
        
    title.style.opacity= `${ 1 - (value / 600)}`;


    explore.style.opacity= `${ 1 - (value / 50)}`;
    explore.style.left = `${value}px`;

})

// explore scrolling 
document.querySelector('#explore').addEventListener("click", () => {

  var el = document.getElementById("event")
  el.scrollIntoView({ behavior: "smooth", block: "center" })
})






