setTimeout(function(){
    $('.preloader').fadeToggle();
  },1500);
var swiper = new Swiper('#session_buttons', {
    navigation: {
      nextEl: '#next_session',
      prevEl: '#prev_session',
    },
    spaceBetween:10,
    slidesPerView: 3,
    loop:true,
});
console.log('njednfkdie');