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