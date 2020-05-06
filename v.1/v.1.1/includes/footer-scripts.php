<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

<script><?php include("scripts/min/main.js");?></script>
<script src="scripts/plugins.min.js"></script>

<script>
    jQuery(function($){
        switch(window.location.hash){
            case "resume":  $("body").addClass("resume-shown"); break;
            case "portfolio":  $("body").addClass("portfolio-shown"); break;
            case "blog":  $("body").addClass("blog-shown"); break;
            case "about-me":  $("body").addClass(".about-me-shown"); break;
        }
    });
</script>
<script src="Bootstrap/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vanilla-lazyload@12.0.0/dist/lazyload.min.js"></script>
<script>    
    // Set the options to make LazyLoad self-initialize 
    var myLazyLoad = new LazyLoad({
        data_src: "src"
    });
    window.lazyLoadOptions = {  
        elements_selector: ".lazyload",  
    };
</script>
    <!-- First JQuery, Bootstrap, etc, ... -->
<!--<script src="https://keyvah-ab7d.restdb.io/rest/_jsapi.js"></script>
<script>var db = new restdb("5d52ff35f4e0a738c5ad6c6d | jwt token", options);</script>-->


<? if ($CURRENT_PAGE == "Blog") {?>
    <script>
        $(document).ready(function() {
        setTimeout(function() {
            $('.content-blocks.blog').addClass('showx');
            $('.menu-blocks').addClass('hidex');
            $('.inline-menu-container').addClass('showx');
        }, 800);
        });
        </script>

        <script>
        //Read Time
    $( document ).ready(function() {
        var txt = $(".article-text")[0].textContent,
        
        wordCount = txt.replace( /[^\w ]/g, "" ).split( /\s+/ ).length;

        var readingTimeInMinutes = Math.floor(wordCount / 228) + 1;
        var readingTimeAsString = readingTimeInMinutes + " min read";
        
        $('.readingTime').html( '<span>' + readingTimeAsString+'</span>');
    });
    </script>
<? } elseif ($CURRENT_PAGE == "Contact") { ?>
    <script>
        $(document).ready(function() {
        setTimeout(function() {
            $('.content-blocks.contact').addClass('showx');
            $('.menu-blocks').addClass('hidex');
            $('.inline-menu-container').addClass('showx');
        }, 800);
        });
    </script>
<? } elseif ($CURRENT_PAGE == "Resume") { ?>
    <script>
        $(document).ready(function() {
        setTimeout(function() {
            $('.content-blocks.about').addClass('showx');
            $('.menu-blocks').addClass('hidex');
            $('.inline-menu-container').addClass('showx');
        }, 800);
        });
    </script>
<? } elseif ($CURRENT_PAGE == "Portfolio") { ?>
    <script>
        $(document).ready(function() {
        setTimeout(function() {
            $('.content-blocks.portfolio').addClass('showx');
            $('.menu-blocks').addClass('hidex');
            $('.inline-menu-container').addClass('showx');
        }, 800);
        });
    </script>
<?php } ?>
