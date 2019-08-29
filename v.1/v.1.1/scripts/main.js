$(".about-block").click(function() {
	$(".content-blocks.about").toggleClass("showx");
});
$(".portfolio-block").click(function() {
	$(".content-blocks.portfolio").toggleClass("showx");
});
$(".blog-block").click(function() {
	$(".content-blocks.blog").toggleClass("showx");
});
$(".contact-block").click(function() {
	$(".content-blocks.contact").toggleClass("showx");
});

$(".menu-block").click(function() {
  	$(".menu-blocks").toggleClass("hidex");
	$(".inline-menu-container").toggleClass("showx");
});

$(".inline-menu .about").click(function() {
	$(".content-blocks").removeClass("showx");
	$(".content-blocks.about").toggleClass("showx");
});
$(".inline-menu .portfolio").click(function() {
	$(".content-blocks").removeClass("showx");
	$(".content-blocks.portfolio").toggleClass("showx");
});
$(".inline-menu .blog").click(function() {
	$(".content-blocks").removeClass("showx");
	$(".content-blocks.blog").toggleClass("showx");
});
$(".inline-menu .contact").click(function() {
	$(".content-blocks").removeClass("showx");
	$(".content-blocks.contact").toggleClass("showx");
});

$(".inline-menu #close").click(function() {
	$(".content-blocks").removeClass("showx");
	$(".menu-blocks").removeClass("hidex");
	$(".inline-menu-container").removeClass("showx");
});

$(".service, .portfolio_link").click(function() {
  $(".content-blocks").removeClass("showx");
  $(".content-blocks.portfolio").toggleClass("showx");
  });

filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("portfolio-item");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");

    if (x[i].className.indexOf(c) > -1) 
      w3AddClass(x[i], "show");
    //x[i].style.display = "table-cell";
  }
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  }
  element.className = arr1.join(" ");
}

var lazyLoadInstance = new LazyLoad({
    elements_selector: ".lazyload"
    // ... more custom settings?
});


