// pre loader ========================
$(document).ready(function() {
  $("#overlay").delay(2000).fadeOut()
});

// numcount up ============================================================
$('.stat-number').each(function () {
    var size = $(this).text().split(".")[1] ? $(this).text().split(".")[1].length : 0;
    $(this).prop('Counter', 0).animate({
       Counter: $(this).text()
    }, {
       duration: 5000,
       step: function (func) {
          $(this).text(parseFloat(func).toFixed(size));
       }
    });
});
 


// pop up =====================================================================
// window.addEventListener("load", function(){
//    setTimeout(
//        function open(event){
//            document.querySelector(".popup").style.display = "block";
//        },
//        3000
//    );
// });
// document.querySelector("#close").addEventListener("click", function(){
//    document.querySelector(".popup").style.display = "none";
// });

// percentage page loader====================================

// let scrollPercentage = () => {
//    let scrollProgress = document.getElementById("progress");
//    let progressValue = document.getElementById("progress-value");
//    let pos = document.documentElement.scrollTop;
//    let calcHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
//    let scrollValue = Math.round( pos * 100 / calcHeight);
//    scrollProgress.style.background = `conic-gradient(#008fff ${scrollValue}%, #c0c0ff ${scrollValue}%)`;
//    progressValue.textContent = `${scrollValue}%`;
// }
// window.onscroll = scrollPercentage;
// window.onload = scrollPercentage;

// scroll top section start ========================================

let calcScrollValue = () => {
   let scrollProgress = document.getElementById("progress");
   let progressValue = document.getElementById("progress-value");
   let pos = document.documentElement.scrollTop;
   let calcHeight =
     document.documentElement.scrollHeight -
     document.documentElement.clientHeight;
   let scrollValue = Math.round((pos * 100) / calcHeight);
   if (pos > 100) {
     scrollProgress.style.display = "grid";
   } else {
     scrollProgress.style.display = "none";
   }
   scrollProgress.addEventListener("click", () => {
     document.documentElement.scrollTop = 0;
   });
   scrollProgress.style.background = `conic-gradient(#ff6d34 ${scrollValue}%, #d7d7d7 ${scrollValue}%)`;
 };
 window.onscroll = calcScrollValue;
 window.onload = calcScrollValue;

// testimonial secrion start ==============================

$(document).ready(function () {

   $('.client-single').on('click', function (event) {
      event.preventDefault();

      var active = $(this).hasClass('active');

      var parent = $(this).parents('.testimonial_section');

      if (!active) {
          var activeBlock = parent.find('.client-single.active');

          var currentPos = $(this).attr('data-position');

          var newPos = activeBlock.attr('data-position');

          activeBlock.removeClass('active').removeClass(newPos).addClass('inactive').addClass(currentPos);
          activeBlock.attr('data-position', currentPos);

          $(this).addClass('active').removeClass('inactive').removeClass(currentPos).addClass(newPos);
          $(this).attr('data-position', newPos);

      }
  });

}(jQuery));



// mobile nav =======================
 
function myFunction(x) {
   x.classList.toggle("change");
}
//  manu click disply ul =====================

$(document).ready(function(){
   $(".myNav").click(function(){
     $(".nav_ul").toggleClass("ul_li", "slow");
   });
 });




// scrolling section  =============================

//  $(document).ready(function(){
//   $("#nav_section a").on('click', function(event) {

//     if (this.hash !== "") {
//       event.preventDefault();

//       var hash = this.hash;

//       $('html, body').animate({
//         scrollTop: $(hash).offset().top
//       }, 1000, function(){
   
//         window.location.hash = hash;
//       });
//     }
//   });
// });


