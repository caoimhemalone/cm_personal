 <div class="content-blocks portfolio">
    <section class="content">
        <div class="block-content">
            <h3 class="block-title">Portfolio</h3>
            <div class="row">
                <div class="col-md-12">
                    <div class="filters">
                        <span>Filters :</span>
                        <ul id="filters">
                            <li onclick="filterSelection('all')" class="active" data-filter="*">All</li>
                            <li class="photography" data-filter=".photography" onclick="filterSelection('photography')">Photography</li>
                            <li class="webdevelopment" data-filter=".webdevelopment" onclick="filterSelection('webdevelopment')">Web Development</li>
                            <li class="videography" data-filter=".videography" onclick="filterSelection('videography')">Videography</li>
                        </ul>
                    </div>
                    <div class="portfolio-container row isotope" id="portfolio-container">
                        <!-- WORK 1 START -->
                            <?php include("portfolio/photography/snippets/coronado_snippet.php");?>
                        <!-- WORK 1 END -->

                        <!-- WORK 2 START -->
                            <?php include("portfolio/web_design/snippets/bodynamics_snippet.php");?>
                        <!-- WORK 2 END -->

                        <!-- WORK 3 START -->
                            <?php include("portfolio/photography/snippets/paris_snippet.php");?>
                        <!-- WORK 3 END -->

                        <!-- WORK 4 START -->
                          <?php include("portfolio/videography/snippets/summer_2018_snippet.php");?>
                        <!-- WORK 4 END -->

                        <!-- WORK 5 START -->
                            <?php include("portfolio/photography/snippets/grand_canyon_snippet.php");?>
                        <!-- WORK 5 END -->

                        <!-- WORK 6 START -->
                            <?php include("portfolio/videography/snippets/new_york_snippet.php");?>
                        <!-- WORK 6 END -->

                        <!-- WORK 7 START -->
                            <?php include("portfolio/web_design/snippets/casinosource_snippet.php");?>
                        <!-- WORK 7 END -->

                        <!-- WORK 8 START -->
                            <?php include("portfolio/photography/snippets/london_snippet.php");?>
                        <!-- WORK 8 END -->

                        <!-- WORK 9 START -->
                            <?php include("portfolio/web_design/snippets/top_pa_sportsbooks_snippet.php");?>
                        <!-- WORK 9 END -->

                        <!-- WORK 10 START -->
                            <?php include("portfolio/videography/snippets/new_york_snippet.php");?>
                        <!-- WORK 10 END -->

                        <!-- WORK 11 START -->
                            <?php include("portfolio/web_design/snippets/casinos_co_nz_snippet.php");?>
                        <!-- WORK 11 END -->

                        <!-- WORK 12 START -->
                            <?php include("portfolio/videography/snippets/new_york_snippet.php");?>
                        <!-- WORK 12 END -->

                        <!-- WORK 13 START -->
                            <?php include("portfolio/photography/snippets/los_angeles_snippet.php");?>
                        <!-- WORK 13 END -->

                        <!-- WORK 14 START -->
                            <?php include("portfolio/videography/snippets/london_snippet.php");?>
                        <!-- WORK 14 END -->
                        
                        <!-- WORK 15 START -->
                            <?php include("portfolio/photography/snippets/bodynamics_snippet.php");?>
                        <!-- WORK 15 END -->

                        <!-- WORK 16 START -->
                            <?php include("portfolio/web_design/snippets/hello_caoimhe_snippet.php");?>
                        <!-- WORK 16 END -->
                    </div>
                </div>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-md-12 btn-email">
                <a class="btn lowercase" href="mailto:caoimhegmalone@gmail.com" target="_top">caoimhegmalone@gmail.com</a>
            </div>
        </div>
    </section>
</div>