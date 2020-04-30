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
                        <?php include("portfolio/photography/snippets/coronado_snippet.php");?>

                        <?php include("portfolio/web_design/snippets/bodynamics_snippet.php");?>

                        <?php include("portfolio/photography/snippets/paris_snippet.php");?>

                        <?php include("portfolio/videography/snippets/summer_2018_snippet.php");?>

                        <?php include("portfolio/photography/snippets/grand_canyon_snippet.php");?>

                        <?php include("portfolio/web_design/snippets/inferno_snippet.php");?>

                        <?php include("portfolio/videography/snippets/new_york_snippet.php");?>

                        <?php include("portfolio/web_design/snippets/casinosource_snippet.php");?>

                        <?php include("portfolio/photography/snippets/london_snippet.php");?>

                        <?php include("portfolio/web_design/snippets/top_pa_sportsbooks_snippet.php");?>

                        <?php include("portfolio/videography/snippets/new_york_snippet.php");?>

                        <?php include("portfolio/web_design/snippets/casinos_co_nz_snippet.php");?>

                        <?php include("portfolio/videography/snippets/new_york_snippet.php");?>

                        <?php include("portfolio/photography/snippets/los_angeles_snippet.php");?>

                        <?php include("portfolio/videography/snippets/london_snippet.php");?>
                    
                        <?php include("portfolio/photography/snippets/bodynamics_snippet.php");?>

                        <?php include("portfolio/web_design/snippets/hello_caoimhe_snippet.php");?>
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