$(document).ready(function () {
  //showHome();
  Materialize.showStaggeredList('#link-list');
  materializeStockFunctions();
  $(".contact-container").addClass("show-contact");
});

function materializeStockFunctions() {
  $(".button-collapse").sideNav();
  $('.parallax').parallax();
  $('.collapsible').collapsible();
}
function showHome() {
  $(".page").hide();
  $("#home-page").show();
}

function showAbout() {
  $(".page").hide();
  $("#about-page").show();
}

function showContact() {
  $(".page").hide();
  $("#contact-page").show();
}
