var carouselWidth = $(".carousel-inner")[0].scrollWidth;
var cardWidth = $(".carousel-item").width();
var scrollPosition = 0;
$(".carousel-control-next").on("click", function () {
  if (scrollPosition < (carouselWidth - cardWidth * 4)) { //check if you can go any further
    scrollPosition += cardWidth;  //update scroll position
    $(".carousel-inner").animate({ scrollLeft: scrollPosition },600); //scroll left
  }
});
$(".carousel-control-prev").on("click", function () {
  if (scrollPosition > 0) {
    scrollPosition -= cardWidth;
    $(".carousel-inner").animate(
      { scrollLeft: scrollPosition },
      600
    );
  }
});












var multipleCardCarousel1 = document.querySelector(
  "#carouselExampleControls-1"
);
if (window.matchMedia("(min-width: 1024px)").matches) {
  //rest of the code
  var carousel = new bootstrap.Carousel(multipleCardCarousel1, {
    interval: false
  });
} else {
  $(multipleCardCarousel1).addClass("slide");
}

var multipleCardCarousel = document.querySelector(
  "#carouselExampleControls-2"
);
if (window.matchMedia("(min-width: 1024px)").matches) {
  //rest of the code
  var carousel = new bootstrap.Carousel(multipleCardCarousel, {
    interval: false
  });
} else {
  $(multipleCardCarousel).addClass("slide");
}

var multipleCardCarousel = document.querySelector(
  "#carouselExampleControls-3"
);
if (window.matchMedia("(min-width: 1024px)").matches) {
  //rest of the code
  var carousel = new bootstrap.Carousel(multipleCardCarousel, {
    interval: false
  });
} else {
  $(multipleCardCarousel).addClass("slide");
}

var multipleCardCarousel = document.querySelector(
  "#carouselExampleControls-4"
);
if (window.matchMedia("(min-width: 1024px)").matches) {
  //rest of the code
  var carousel = new bootstrap.Carousel(multipleCardCarousel, {
    interval: false
  });
} else {
  $(multipleCardCarousel).addClass("slide");
}

var multipleCardCarousel = document.querySelector(
  "#carouselExampleControls-5"
);
if (window.matchMedia("(min-width: 1024px)").matches) {
  //rest of the code
  var carousel = new bootstrap.Carousel(multipleCardCarousel, {
    interval: false
  });
} else {
  $(multipleCardCarousel).addClass("slide");
}

var multipleCardCarousel = document.querySelector(
  "#carouselExampleControls-6"
);
if (window.matchMedia("(min-width: 1024px)").matches) {
  //rest of the code
  var carousel = new bootstrap.Carousel(multipleCardCarousel, {
    interval: false
  });
} else {
  $(multipleCardCarousel).addClass("slide");
}