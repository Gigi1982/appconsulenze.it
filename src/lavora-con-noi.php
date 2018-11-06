<?php /* Template Name: Lavora Con Noi Template */ get_header(); ?>

	<main role="main">
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
        <?php
        $menuitems = wp_get_nav_menu_items('Main menu');
        ?>

        <section class="intcanvas lavora">
            <div class="pallozzo pallozzo1 js-parallax" data-parallax="-400"></div>
            <div class="pallozzo pallozzo2 js-parallax" data-parallax="-200"></div>
            <div class="intcanvas-inner transitioned-fade">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="intcanvas-heading d-flex justify-content-between align-items-end">
                                <div class="intcanvas-heading-sx">
                                    <span href="#" class="badge badge-light"><?php echo $menuitems[10]->title; ?></span>
                                    <h1 class="pt-3"><?php the_title(); ?></h1>
                                </div>
                                <div class="intcanvas-heading-dx">
                                    <a href="#hpBody" class="js-scroll-to btn btn-round btn-lg btn-outline-light"><i class="ico ico-simple-arrow-down"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="intpages-negative-inner" id="hpBody">
            <div class="intpages-negative-content transitioned-fade">
                <div class="container" id="fixedBarBlock">
                    <div class="hr-block two-boxes-block content-block">
                        <div class="row align-items-center">
                            <div class="col-md-3 offset-md-1 order-2 order-md-1">
                                <div class="two-boxes-bodymovin hr-image">
                                    <div class="bodymovin-container" data-path="<?php echo get_template_directory_uri()?>/img/animations/lavora.json"></div>
                                </div>
                            </div>
                            <div class="col-md-5 offset-md-1 order-1 order-md-2">
                                <div class="hr-text-block">
                                    <?php if(get_field('titolo_blocco')): ?>
                                    <h3><?php lastString(get_field('titolo_blocco')); ?></h3>
                                    <?php endif; ?>
                                    <div class="hr-content mt-3"><?php the_content(); ?></div>
                                    <div class="hr-button-container pt-3">
                                        <a href="#hrForm" class="js-scroll-to btn btn-primary btn-lg">lavora con noi</a>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php
        if(have_rows('blocco_pagina') ):
        while ( have_rows('blocco_pagina') ) : the_row(); ?>
        <?php if( get_row_layout() == 'blocco_citazione_testo' ): ?>
        <section class="quote-section hr-quote d-flex contenzioso js-block-revealquot">
             <?php
                $image = get_sub_field('immagine');
                if($image): 
            ?>
            <div class="quote-section-bg">
                <img src="<?php echo $image['url']; ?>">
            </div>
            <?php endif; ?>
            <div class="container d-flex">
                <div class="row">
                    <div class="col-md-6 offset-md-1 d-flex">
                        <div class="quote-section-inner d-flex justify-content-center flex-column">
                            <?php if(get_sub_field('etichetta')): ?>
                            <span class="label2 text-primary"><?php echo get_sub_field('etichetta'); ?></span>
                            <?php endif; ?>
                            <?php if(get_sub_field('titolo')): ?>
                            <h2 class="pt-3 pb-3"><?php echo get_sub_field('titolo'); ?></h2>
                            <?php endif; ?>
                            <?php if(get_sub_field('testo')): ?>
                            <div class="quote-section-text"><?php echo get_sub_field('testo'); ?></div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php endif; ?>
        <?php 
            endwhile;
        endif; ?>
        <section class="hr-form transitioned-fade" id="hrForm">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 offset-md-1">
                        <div class="content-block contact-block">
                            <header class="contact-header">
                                <h3><?php echo get_field('titolo_form')?></h3>
                            </header>
                            <div class="material-form pt-4">
                                <?php echo do_shortcode('[contact-form-7 id="114" title="Lavora Con Noi"]');?>                        
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            
        </section>
		<?php endwhile; ?>
			<!-- /article -->

		<?php endif; ?>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
