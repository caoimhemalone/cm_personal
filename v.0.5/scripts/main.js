$(".about-block").click(function() {
	$(".about").toggleClass("showx");
});
$(".portfolio-block").click(function() {
	$(".portfolio").toggleClass("showx");
});
$(".blog-block").click(function() {
	$(".blog").toggleClass("showx");
});
$(".contact-block").click(function() {
	$(".contact").toggleClass("showx");
});

$(".menu-block").click(function() {
  	$(".menu-blocks").toggleClass("hidex");
	$(".inline-menu-container").toggleClass("showx");
});

$(".inline-menu .about").click(function() {
	$(".about").toggleClass("showx");
});
$(".inline-menu .portfolio").click(function() {
	$(".portfolio").toggleClass("showx");
});
$(".inline-menu .blog").click(function() {
	$(".blog").toggleClass("showx");
});
$(".inline-menu .contact").click(function() {
	$(".contact").toggleClass("showx");
});