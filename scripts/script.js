
var top;
var showed = [false, false, false, false, false, false, false]
$(window).scroll( function() {

    if ($(this).scrollTop() > $("#shower-1").offset().top-450 && !showed[1]){
      $('#shower-1').removeClass('shower-down', 1000);
      showed[1] = true;
    }
    if ($(this).scrollTop() > $("#shower-2").offset().top-450 && !showed[2]){
      $('#shower-2').removeClass('shower-down', 1000);
      showed[2] = true;
    }
    if ($(this).scrollTop() > $("#shower-3").offset().top-450 && !showed[3]){
      $('#shower-3').removeClass('shower-down', 1000);
      showed[3] = true;
    }
    if ($(this).scrollTop() > $("#shower-4").offset().top-450 && !showed[4]){
      $('#shower-4').removeClass('shower-down', 1000);
      showed[4] = true;
    }
    if ($(this).scrollTop() > $("#shower-5").offset().top-450 && !showed[5]){
      $('#shower-5').removeClass('shower-down', 1000);
      showed[5] = true;
    }
    if ($(this).scrollTop() > $("#shower-7").offset().top-470 && !showed[7]){
      $('#shower-7').removeClass('shower-down', 1000);
      showed[7] = true;
    }
    if ($(this).scrollTop() > $("#shower-6").offset().top-550 && !showed[6]){
      $('#shower-6').removeClass('shower-down', 1000);
      showed[6] = true;
    }
});
