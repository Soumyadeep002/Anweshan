$('.portfolio-menu ul li').click(function(){
    $('.portfolio-menu ul li').removeClass('active');
    $(this).addClass('active');
    
    var selector = $(this).attr('data-filter');
    $('.portfolio-item').isotope({
        filter:selector
    });
    return  false;
});
$(document).ready(function() {
var popup_btn = $('.popup-btn');
popup_btn.magnificPopup({
type : 'image',
gallery : {
    enabled : true
}
});
});




document.querySelector('#hamb-btn').addEventListener('click', () => {
    
    document.getElementById("l1").classList.toggle('rotate-down')
    document.getElementById("l2").classList.toggle('opacity-0')
    document.getElementById("l3").classList.toggle('rotate-up')
    document.getElementById("mob-nav").classList.toggle('hidden')
    
  })
  document.querySelector('#home').addEventListener('click', () => {
    
    document.getElementById("l1").classList.toggle('rotate-down')
    document.getElementById("l2").classList.toggle('opacity-0')
    document.getElementById("l3").classList.toggle('rotate-up')
    document.getElementById("mob-nav").classList.toggle('hidden')
    
  })
  document.querySelector('#about').addEventListener('click', () => {
    
    document.getElementById("l1").classList.toggle('rotate-down')
    document.getElementById("l2").classList.toggle('opacity-0')
    document.getElementById("l3").classList.toggle('rotate-up')
    document.getElementById("mob-nav").classList.toggle('hidden')
    
  })
  document.querySelector('#sponsor').addEventListener('click', () => {
    
    document.getElementById("l1").classList.toggle('rotate-down')
    document.getElementById("l2").classList.toggle('opacity-0')
    document.getElementById("l3").classList.toggle('rotate-up')
    document.getElementById("mob-nav").classList.toggle('hidden')
    
  })
  
  document.querySelector('#gallery').addEventListener('click', () => {
    
    document.getElementById("l1").classList.toggle('rotate-down')
    document.getElementById("l2").classList.toggle('opacity-0')
    document.getElementById("l3").classList.toggle('rotate-up')
    document.getElementById("mob-nav").classList.toggle('hidden')
    
  })
  document.querySelector('#team').addEventListener('click', () => {
    
    document.getElementById("l1").classList.toggle('rotate-down')
    document.getElementById("l2").classList.toggle('opacity-0')
    document.getElementById("l3").classList.toggle('rotate-up')
    document.getElementById("mob-nav").classList.toggle('hidden')
    
  })
