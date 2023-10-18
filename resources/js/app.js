import "./bootstrap";

$("#carousel-scroll-left").on("click", function () {
  $("#carousel-wrapper")
    .children()
    .first()
    .appendTo("#carousel-wrapper")
    .addClass("hidden");

  $("#carousel-wrapper").children().eq(1).removeClass("hidden");
});

$("#carousel-scroll-right").on("click", function () {
  console.log("clicked");
  $("#carousel-wrapper")
    .children()
    .last()
    .prependTo("#carousel-wrapper")
    .addClass("hidden");

  $("#carousel-wrapper").children().eq(1).removeClass("hidden");
});

//If page is scrolled, fade in #scroll-hint
$(window).scroll(function () {
  if ($(this).scrollTop() > 100) {
    $("#scroll-hint").removeClass("hidden").addClass("flex");
  } else {
    $("#scroll-hint").removeClass("flex").addClass("hidden");
  }
});

$("#scroll-hint").click(function () {
  $("html, body").animate({ scrollTop: 0 }, 600);
  return false;
});
