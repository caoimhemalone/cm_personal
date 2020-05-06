<div class="container similar-articles">
    <span>Popular Articles</span>
    <div class="row">
        <?php if($BLOG_PAGE != 'Apple') : ?>
            <div class="col-sm-4 article-item article-airpods">
                <div class="article-card">
                    <a href="https://www.key-vah.com/blog/why-i-could-never-leave-apple" title="Apple's Powerful Ecosystem">
                        <div class="article-image">
                            <img class="lazyload" data-src="images/apple-products.jpeg" alt="apple products">
                        </div>
                        <div class="article-title">
                            Why I could never leave Apple
                        </div>
                    </a>
                </div>
            </div>
        <?php endif; ?>

        <?php if($BLOG_PAGE != '5am') : ?>
            <div class="col-sm-4 article-item article-5am">
                <div class="article-card">
                    <a href="https://www.key-vah.com/blog/the-5am-club" title="The 5am club isn't for everyone">
                        <div class="article-image">
                            <img class="lazyload" data-src="images/desk.jpeg" alt="desk">
                        </div>
                        <div class="article-title">
                            Why I don’t think the 5am club is...
                        </div>
                    </a>
                </div>
            </div>
        <?php endif; ?>

        <?php if($BLOG_PAGE != 'Amazon') : ?>
            <div class="col-sm-4 article-item article-airpods">
                <div class="article-card">
                    <a href="https://www.key-vah.com/blog/airpods-covers-review" title="Review of airpod covers">
                        <div class="article-image">
                            <img class="lazyload" data-src="images/airpods.jpeg" alt="airpods">
                        </div>
                        <div class="article-title">
                            How this £4.49 Amazon accessory changed...
                        </div>
                    </a>
                </div>
            </div>
        <?php endif; ?>
        
        <?php if(!($BLOG_PAGE == 'Cycle' || $BLOG_PAGE == 'Index')) : ?>
            <div class="col-sm-4 article-item article-cycle">
                <div class="article-card">
                    <a href="https://www.key-vah.com/blog/why-ill-still-cycle-now-that-I-have-my-drivers-licence" title="Why I love cycling">
                        <div class="article-image">
                            <img class="lazyload" data-src="images/bike.jpg" alt="bike">
                        </div>
                        <div class="article-title">
                            Why I'll still cycle now that I have my drivers licence
                        </div>
                    </a>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>

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