function filterSelection(o){var l,n;for(l=document.getElementsByClassName("portfolio-item"),"all"==o&&(o=""),n=0;n<l.length;n++)w3RemoveClass(l[n],"show"),-1<l[n].className.indexOf(o)&&w3AddClass(l[n],"show")}function w3AddClass(o,l){var n,s,e;for(s=o.className.split(" "),e=l.split(" "),n=0;n<e.length;n++)-1==s.indexOf(e[n])&&(o.className+=" "+e[n])}function w3RemoveClass(o,l){var n,s,e;for(s=o.className.split(" "),e=l.split(" "),n=0;n<e.length;n++)for(;-1<s.indexOf(e[n]);)s.splice(s.indexOf(e[n]),1);o.className=s.join(" ")}$(".about-block").click(function(){$(".content-blocks.about").toggleClass("showx")}),$(".portfolio-block").click(function(){$(".content-blocks.portfolio").toggleClass("showx")}),$(".blog-block").click(function(){$(".content-blocks.blog").toggleClass("showx")}),$(".contact-block").click(function(){$(".content-blocks.contact").toggleClass("showx")}),$(".menu-block").click(function(){$(".menu-blocks").toggleClass("hidex"),$(".inline-menu-container").toggleClass("showx")}),$(".inline-menu .about").click(function(){$(".content-blocks").removeClass("showx"),$(".content-blocks.about").toggleClass("showx")}),$(".inline-menu .portfolio").click(function(){$(".content-blocks").removeClass("showx"),$(".content-blocks.portfolio").toggleClass("showx")}),$(".inline-menu .blog").click(function(){$(".content-blocks").removeClass("showx"),$(".content-blocks.blog").toggleClass("showx")}),$(".inline-menu .contact").click(function(){$(".content-blocks").removeClass("showx"),$(".content-blocks.contact").toggleClass("showx")}),$(".inline-menu #close").click(function(){$(".content-blocks").removeClass("showx"),$(".menu-blocks").removeClass("hidex"),$(".inline-menu-container").removeClass("showx")}),$(".service, .portfolio_link").click(function(){$(".content-blocks").removeClass("showx"),$(".content-blocks.portfolio").toggleClass("showx")}),filterSelection("all");var lazyLoadInstance=new LazyLoad({elements_selector:".lazyload"});