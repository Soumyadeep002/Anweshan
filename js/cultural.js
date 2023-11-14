
let stage = document.getElementById('stage')
let title = document.getElementById('title')
let closeb = document.getElementById('close-button')


// parallax effect 
window.addEventListener('scroll', function () {
    let value = window.scrollY;
 
    stage.style.transform = `translate(0px,-${value-50 + 'px'})`;
    title.style.transform = `translate(0px,-${value/2.5 + 'px'})`;

})


document.getElementById('close-button').addEventListener('click', () => {

    console.log("clicked on close button");
    document.getElementById("sayan-card").classList.toggle('-translate-y-[60rem]')
})







