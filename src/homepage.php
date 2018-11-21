<?php /* Template Name: Homepage Template */ get_header(); ?>

<?php if(have_posts()): while(have_posts()): the_post(); ?>

<section class="app-home">
    <section class="app-home-canvas" style="background-image:url('<?php echo get_template_directory_uri(); ?>/img/_backoffice/canvas-img.jpg')">
        <div class="app-home-canvinner">
            <div class="container">
                <div class="row align-items-end">
                    <div class="col-md-9">
                        <div class="app-home-claim">
                            <h1 class="h2"><?php the_content(); ?></h1>
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
                <?php 
                $missionId = get_page_by_path( 'mission' );
                //echo $postId; 
                ?>
                <div class="col-md-6">
                    <div class="app-module-item">
                        <header class="app-module-itemheader">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/_backoffice/img-module.jpg">
                        </header>
                        <div class="app-module-itemcontent">
                            <h2><?php echo get_the_title($missionId); ?></h2>
                            <div><?php echo get_excerpt_by_id($missionId); ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php if( have_rows('blocco_privacy') ): 

	while( have_rows('blocco_privacy') ): the_row(); 
		
    // vars
    $privacyTitolo = get_sub_field('titolo');
    $privacyTesto = get_sub_field('testo');
    $privacyLink = get_sub_field('link');

    ?>
    <section class="app-cta-block" style="background-image:url('<?php echo get_template_directory_uri(); ?>/img/main-pattern.jpg');">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 offset-md-3">
                    <div class="app-cta-inner">
                        <?php if($privacyTitolo): ?>
                        <h2><?php echo $privacyTitolo; ?></h2>
                        <?php endif; ?>
                        <?php if($privacyTesto): ?>
                        <div class="app-cta-content">
                            <?php echo $privacyTesto; ?>
                        </div>
                        <?php endif; ?>
                        <div class="app-home-claim-buttons">
                            <a href="<?php echo $privacyLink['url']; ?>" class="btn btn-outline-light btn-sm"><?php echo $privacyLink['title']; ?></a>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
    <?php endwhile; 
    endif;
    ?>
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
                                <h3 class="h2"><?php echo get_the_title(20); ?></h3>
                                <div class="app-full-content">
                                    <?php echo get_excerpt_by_id(20); ?>
                                </div>
                                <div class="app-module-btn">
                                    <a href="<?php echo esc_url(get_permalink(20)); ?>" class="btn btn-primary btn-sm">SCopri le nostre soluzioni</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                </div>
            </div>
        </div>
    </section>
     <?php if( have_rows('bottom_cta') ): 

	while( have_rows('bottom_cta') ): the_row(); 
		
    // vars
    $bottomCtaTitolo = get_sub_field('titolo_blocco');
    $bottomCtaTesto = get_sub_field('testo_blocco');
    $bottomCtaLink = get_sub_field('link_blocco');

    ?>
    <section class="app-cta-block" style="background-image:url('<?php echo get_template_directory_uri(); ?>/img/main-pattern.jpg');">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 offset-md-3">
                    <div class="app-cta-inner">
                        <?php if($bottomCtaTitolo): ?>
                        <h2><?php echo $bottomCtaTitolo; ?></h2>
                        <?php endif; ?>
                        <?php if($bottomCtaTesto): ?>
                        <div class="app-cta-content">
                            <?php echo $bottomCtaTesto; ?>
                        </div>
                        <?php endif; ?>
                        <?php if($bottomCtaLink): ?>
                        <div class="app-home-claim-buttons">
                            <a href="<?php echo $bottomCtaLink['url']; ?>" class="btn btn-outline-light btn-sm"><?php echo $bottomCtaLink['title']; ?></a>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
    <?php endwhile; 
    endif;
    ?>
</section>


<?php endwhile; endif; ?>

<?php get_footer(); ?>

