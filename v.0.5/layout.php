<!--<?php include("includes/a_config.php");?> -->
<!DOCTYPE html>
<html>
<head>
	<style type="text/css"><?php include("styles/main.css");?></style>
</head>


<body>
    <div class="preloader">
        <div class="anim pulse"><i class="ion-ios-bolt-outline"></i></div>
    </div>
    <div class="preloader-left"></div>
    <div class="inline-menu-container">
        <span class="status contact menu-item">I am available for freelance</span>
        <ul class="inline-menu">
            <li class="about menu-item">Resume</li>
            <li class="portfolio menu-item">Portfolio</li>
            <li class="blog menu-item">Blog</li>
            <li class="contact menu-item">Contact</li>
            <li id="close" class="menu-item"><i class="ion-ios-close-empty"></i></li>
        </ul>
    </div>
    <section class="home img-bg" style="background: url(images/bg/img-bg2.jpg) 0 0; background-size: cover;">
        <div class="overlay opacity5"></div>
        <div class="container">
            <div class="name-block">
                <div class="name-block-container">
                    <h1><span>Hi, I'm</span>James Bond</h1>
                    <h2>Designer & Developer</h2>
                    <a target="_blank" href="https://themeforest.net/item/alpha-cv-resume-vcard-portfolio-template/20381622?s_rank=24" class="btn btn-download">Download Resume</a>
                    <ul class="social">
                        <li><a href=""><i class="ion-social-facebook"></i></a></li>
                        <li><a href=""><i class="ion-social-twitter"></i></a></li>
                        <li><a href=""><i class="ion-social-googleplus"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="menu-blocks">
                <div class="about-block menu-block">
                    <div class="about-block-container">
                        <h2 class="about menu-item">Resume</h2>
                    </div>
                </div>
                <div class="portfolio-block  menu-block">
                    <div class="portfolio-block-container">
                        <h2 class="portfolio menu-item">Portfolio</h2>
                    </div>
                </div>
                <div class="blog-block  menu-block">
                    <div class="blog-block-container">
                        <h2 class="blog menu-item">Blog</h2>
                    </div>
                </div>
                <div class="contact-block  menu-block">
                    <div class="contact-block-container">
                        <h2 class="contact menu-item">Contact</h2>
                    </div>
                </div>
            </div>
           
            <?php include("includes/resume.php");?>
            <?php include("includes/blog.php");?>
           
        </div>
    </section>

    <script src="js/main.js"></script>
</body>
</html>