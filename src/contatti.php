<?php /* Template Name: Contatti Template */ get_header(); ?>

<?php if(have_posts()): while(have_posts()): the_post(); ?>

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
                        <div class="module-section">
                            <div class="row">
                                <div class="col-12">
                                    <header class="app-module-map">
                                        
                                    </header>
                                </div>
                            </div>
                        </div>
                        <?php if( have_rows('dati_contatti') ): while( have_rows('dati_contatti') ): the_row(); 
                        $contatti = get_sub_field('blocco_contatti');
                        //if($blocco):
                        ?>
                        <div class="row">
                            <?php foreach($contatti as $contatto): ?>
                            <div class="col-12 offset-md-1 col-md-5">
                                <div class="contact-block">
                                    <?php if($contatto['titolo']): ?> 
                                    <h3><?php echo $contatto['titolo']; ?></h3>
                                    <?php endif; ?>
                                    <?php if($contatto['testo']): ?>
                                    <div class="contact-block-content">
                                        <?php echo $contatto['testo']; ?>
                                    </div>
                                    <?php endif; ?>
                                </div>
                                
                            </div>
                            <?php endforeach; ?>
                        </div>
                        <?php 
                        //endif;
                        endwhile; 
                        endif; ?>
                        <div class="row">
                            <div class="col-md-10 offset-md-2">
                            <?php echo do_shortcode( '[contact-form-7 id="117" title="Contatto form"]' ); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
</main>


<?php endwhile; endif; ?>

<?php get_footer(); ?>

