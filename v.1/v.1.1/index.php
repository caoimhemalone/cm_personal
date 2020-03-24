<!DOCTYPE html>
<html lang="en">

<head>

     <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>keyvah | Caoimhe Malone</title>
    <meta name="description" content="key-vah.com | Caoimhe Malone">
    <meta name="author" content="Caoimhe Malone" />
    
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-139553932-2"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'UA-139553932-2');
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="styles/plugins.min.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <link href="Bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<style type="text/css"><?php include("styles/main.css");?></style>
</head>


<body style="margin: 0">
    <section class="all-content">
        <?php include("includes/inlinemenu.php");?>
        <?php include("home.php");?>

    </section>

    

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"   integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="   crossorigin="anonymous"></script>

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
</body>
</html>