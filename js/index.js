$(document).ready(function () {
    var popoutShown = false;
    $(window).on("scroll", function() {
      popoutShown = scrollEvents(popoutShown);
    });
});

function scrollEvents(popoutShown) {
  if ($(window).scrollTop() > 147) {
    $("#my-name").addClass("show-name");
  } else {
    $("#my-name").removeClass("show-name");
  }

  if($(window).scrollTop() > $("#raft-container").offset().top - 400) {
    $("#raft-caption").addClass("show-caption");
  }

  if($(window).scrollTop() > $("#family-container").offset().top - 400) {
    $("#family-caption").addClass("show-caption");
  }

  if((!popoutShown)&&($(window).scrollTop() > $(".popout").offset().top - 400)) {
    Materialize.showStaggeredList(".popout");
    popoutShown = true;
  }
  return popoutShown;
}
