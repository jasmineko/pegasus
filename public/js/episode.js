setTimeout(function(){
    $('.preloader').fadeToggle();
  },1500);
// var swiper = new Swiper('.swiper-container', {
//     // navigation: {
//     //   nextEl: '#next_session',
//     //   prevEl: '#prev_session',
//     // },
//     spaceBetween:10,
//     slidesPerView: 1,
//     loop:true,
// });
var mySwiper = new Swiper('.swiper-container', {
  onInit: function (slider) {
      debugger;
  }
}); 
console.log('njednfkdie');