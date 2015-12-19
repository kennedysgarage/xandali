$(document).ready(function(){


  var xheight = $("#x").height();
  $('header').css('margin-top',xheight);

  // Make the X Disappear
  // http://stackoverflow.com/questions/24636278/javascript-on-scroll-to-change-nav-bar-opacity-is-making-my-nav-content-dissapea
  var target = $('#x');
  var targetHeight = target.outerHeight();

  $(document).scroll(function(e){
    var scrollPercent = (targetHeight - window.scrollY) / targetHeight;
    if(scrollPercent >= 0.2){
        target.css('opacity', scrollPercent);
    }

  });

  //https://github.com/senff/Sticky-Anything
  $('.main-menu').stickThis();

  // FitVids
  // https://github.com/davatron5000/FitVids.js
  $("article").fitVids();

  // var height = document.getElementById("head").offsetHeight;
  // document.getElementById("section").style.marginTop = height + 'px';

});
