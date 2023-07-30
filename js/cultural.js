
let stage = document.getElementById('stage')
let title = document.getElementById('title')


// parallax effect 
window.addEventListener('scroll', function () {
    let value = window.scrollY;
 
    stage.style.transform = `translate(0px,-${value-50 + 'px'})`;
    title.style.transform = `translate(0px,-${value/2.5 + 'px'})`;

})







