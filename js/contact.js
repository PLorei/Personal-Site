$(document).ready(function () {
  //$("input").keyup(checkValid);
  //$("textarea").keyup(checkValid);
});

function checkValid() {
  var allValid = false;

  $("body input").each(function() {
    if($(this).val() == "") {
      allValid = false;
    }
  });

  if($("#message-text").val() == "") {
    allValid = false;
  }
  else if($("#email").hasClass("invalid")) {
    allValid = false;
  }

  var submit = $("#submit");
  allValid ? submit.attr('disabled', true) : submit.removeAttr('disabled');
}
