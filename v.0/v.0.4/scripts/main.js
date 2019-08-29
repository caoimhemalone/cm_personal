 // Author: Caoimhe Malone (key-vah) 

// For nav items
//home
$("#homeNav").click(function() {
    $('html, body').animate({
        scrollTop: $("#home").offset().top
    }, 1000);
});

//memberships
$("#membershipsNav").click(function() {
    $('html, body').animate({
        scrollTop: $("#memberships").offset().top
    }, 1000);
});

//team
$("#teamNav").click(function() {
    $('html, body').animate({
        scrollTop: $("#team").offset().top
    }, 1000);
});

//timetable
$("#timetableNav").click(function() {
    $('html, body').animate({
        scrollTop: $("#timetable").offset().top
    }, 1000);
});

//about
$("#aboutNav").click(function() {
    $('html, body').animate({
        scrollTop: $("#about").offset().top
    }, 1000);
});

//blog
$("#blogNav").click(function() {
    $('html, body').animate({
        scrollTop: $("#blog").offset().top
    }, 1000);
});

//Sign Up nav
$("#signUpNav").click(function() {
    $('html, body').animate({
        scrollTop: $("#memberships").offset().top
    }, 1000);
});

//Nav collapse
 $(function(){ 
     var navbarResponsive = $(".navbar-collapse"); // avoid dependency on #id
     var navbarToggle = $(".navbar-toggler");
     // "a:not([data-toggle])" - to avoid issues caused
     // when you have dropdown inside navbar
     navbarResponsive.on("click", "a:not([data-toggle])", null, function () {
         $(".hamburgler").toggleClass('no-hamburgler');
         navbarResponsive.collapse('hide');
         navbarToggle.classList.toggle( "active" );
        
     });
 });

 //Nav active
var nav = document.getElementById("navbarResponsive");
var navItem = nav.getElementsByClassName("nav-item");
for (var i = 0; i < navItem.length; i++) {
  navItem[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}



//Nav X animation
$(document).ready(function(){
    $('.hamburgler').click(function(e){
        e.preventDefault();
        $(this).toggleClass('no-hamburgler');
    });
});

//For Sign Up Reveal

jQuery(document).ready(function(){
        jQuery('.signUpShow').on('click', function(event) {        
             jQuery('.signUpSection').removeClass('hide');
        });
    });


//For input fields 
( function( window ) {

'use strict';

// class helper functions from bonzo https://github.com/ded/bonzo

function classReg( className ) {
  return new RegExp("(^|\\s+)" + className + "(\\s+|$)");
}

// classList support for class management
// altho to be fair, the api sucks because it won't accept multiple classes at once
var hasClass, addClass, removeClass;

if ( 'classList' in document.documentElement ) {
  hasClass = function( elem, c ) {
    return elem.classList.contains( c );
  };
  addClass = function( elem, c ) {
    elem.classList.add( c );
  };
  removeClass = function( elem, c ) {
    elem.classList.remove( c );
  };
}
else {
  hasClass = function( elem, c ) {
    return classReg( c ).test( elem.className );
  };
  addClass = function( elem, c ) {
    if ( !hasClass( elem, c ) ) {
      elem.className = elem.className + ' ' + c;
    }
  };
  removeClass = function( elem, c ) {
    elem.className = elem.className.replace( classReg( c ), ' ' );
  };
}

function toggleClass( elem, c ) {
  var fn = hasClass( elem, c ) ? removeClass : addClass;
  fn( elem, c );
}

var classie = {
  // full names
  hasClass: hasClass,
  addClass: addClass,
  removeClass: removeClass,
  toggleClass: toggleClass,
  // short names
  has: hasClass,
  add: addClass,
  remove: removeClass,
  toggle: toggleClass
};

// transport
if ( typeof define === 'function' && define.amd ) {
  // AMD
  define( classie );
} else {
  // browser global
  window.classie = classie;
}

})( window );

function formFunction() {
	document.getElementById("contactForm").submit();
  document.getElementsByClassName("inputMessage").value = "";
  document.getElementsByClassName("inputSubject").value = "";
  document.getElementsByClassName("inputEmail").value = "";


}



// For scroll reveal

$(function(){  // $(document).ready shorthand
  $('.slowReveal').fadeIn('slow');
});

$(document).ready(function() {
    
    /* Every time the window is scrolled ... */
    $(window).scroll( function(){
    
        /* Check the location of each desired element */
        $('.reveal').each( function(i){
            
            var bottom_of_object = $(this).position().top + $(this).outerHeight();
            var bottom_of_window = $(window).scrollTop() + $(window).height();
            
            /* If the object is completely visible in the window, fade it it */
            if( bottom_of_window > bottom_of_object ){
                
                $(this).animate({'opacity':'1'},2500);
                    
            }
            
        }); 
    
    });
    
});


//For scroll to top
$("a[href='#top']").click(function() {
  $("html, body").animate({ scrollTop: 0 }, "slow");
  return false;
});