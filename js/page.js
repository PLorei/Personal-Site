$(document).ready(function () {
  //showHome();
  materializeStockFunctions();
  $(".contact-container").addClass("show-container");
  $(".page-wrapper").addClass("show-container");

  // delay the staggered list .5s so that page can fade in
  setTimeout(showList, 500);
});

function showList() {
  Materialize.showStaggeredList('#linkList');
}

function materializeStockFunctions() {
  $(".button-collapse").sideNav();
  $('.parallax').parallax();
  $('.collapsible').collapsible();
}
