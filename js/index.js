$(document).ready(function () {
    var popoutShown = false;
    $(window).on("scroll", function() {
      popoutShown = scrollEvents(popoutShown);
    });
});

function scrollEvents(popoutShown) {
  if ($(window).scrollTop() > 147) {
    $("#myName").addClass("show-name");
  } else {
    $("#myName").removeClass("show-name");
  }

  if($(window).scrollTop() > $("#raftContainer").offset().top - 400) {
    $("#raftCaption").addClass("show-caption");
  }

  if($(window).scrollTop() > $("#familyContainer").offset().top - 400) {
    $("#familyCaption").addClass("show-caption");
  }

  if((!popoutShown)&&($(window).scrollTop() > $(".popout").offset().top - 400)) {
    Materialize.showStaggeredList(".popout");
    popoutShown = true;
  }
  return popoutShown;
}
