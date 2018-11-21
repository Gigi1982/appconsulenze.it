<?php /* Template Name: Privacy Template */ get_header(); ?>
    
    <?php if (have_posts()): while (have_posts()) : the_post(); ?>
	<main role="main">
		<!-- section -->
		<section class="app-internal">
            <div class="app-internal-header" style="background-image:url('<?php echo get_template_directory_uri(); ?>/img/main-pattern.jpg');">
                <div class="app-internal-headout">
                    <div class="container">
                        <div class="app-internal-headinn d-flex align-items-center justify-content-between">
                            <h1><?php the_title(); ?></h1>
                            <div class="scrollto-container"><a href="#" class="btn btn-round btn-lg">giù</a></div>
                        </div>
                    </div>
                </div>            
            </div>
            
            <section class="app-full-column module-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12">
                                    <header class="app-module-itemimg">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/_backoffice/img-module.jpg">
                                    </header>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-10 offset-md-1">
                                    <div class="app-module-itemcontent">
                                        <h3 class="has-decoration-bottom">Formazione</h3>
                                        <div class="app-full-content">
                                            <?php the_content(); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </section>
            <section class="app-full-accordion module-padding">
                <div class="container">
                    <div id="accordion">
                          <div class="card">
                            <div class="card-header" id="headingOne">
                              <h5 class="mb-0">
                                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                  Quando nominare il DPO/RPD?
                                </button>
                              </h5>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                              <div class="card-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                              </div>
                            </div>
                          </div>


                        </div>
                </div>
                
            </section>

		<?php endwhile; ?>

		<?php endif; ?>

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
