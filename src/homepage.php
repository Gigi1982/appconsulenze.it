<?php /* Template Name: Homepage Template */ get_header(); ?>

<?php if(have_posts()): while(have_posts()): the_post(); ?>

<section class="app-home">
    <section class="app-home-canvas" style="background-image:url('<?php echo get_template_directory_uri(); ?>/img/_backoffice/canvas-img.jpg')">
        <div class="app-home-canvinner">
            <div class="container">
                <div class="row align-items-end">
                    <div class="col-md-9">
                        <div class="app-home-claim">
                            <h1 class="h2">APP Consulenze integrate: il benessere e la sicurezza dei lavoratori al primo posto</h1>
                            <div class="app-home-claim-buttons">
                                <a href="#" class="btn btn-outline-light btn-sm">Scopri di più</a>
                                <a href="#" class="btn btn-light btn-sm">Contattaci</a>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <section class="app-two-modules module-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="app-module-item">
                        <header class="app-module-itemheader">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/_backoffice/img-module.jpg">
                        </header>
                        <div class="app-module-itemcontent">
                            <h2>Mission</h2>
                            <p>APP Consulenze Integrate nasce nel 2013 come società di consulenza e di formazione per la sicurezza sul lavoro. 
Con l’intento di trasmettere l’importanza del benessere e della sicurezza dei lavoratori, APP Consulenze Integrate…</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="app-cta-block" style="background-image:url('<?php echo get_template_directory_uri(); ?>/img/main-pattern.jpg');">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 offset-md-3">
                    <div class="app-cta-inner">
                        <h2>Privacy</h2>
                        <div class="app-cta-content">
                            <p>I nostri consulenti esperti affiancheranno il titolare nella gestione delle problematiche del trattamento dei dati personali in tal modo da garantire che un soggetto qualificato...</p>
                        </div>
                        <div class="app-home-claim-buttons">
                            <a href="#" class="btn btn-outline-light btn-sm">Scopri di più</a>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
</section>


<?php endwhile; endif; ?>

<?php get_footer(); ?>

