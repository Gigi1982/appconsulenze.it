<?php /* Template Name: Formazione Template */ get_header(); ?>
    
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
            <?php if( have_rows('contenuto_pagina') ): while( have_rows('contenuto_pagina') ): the_row(); 

            // vars
            $titolo = get_sub_field('primo_titolo');
            $bloccoTesto = get_sub_field('blocco_testo');

            ?>
            <section class="app-full-column module-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="module-section">
                                <div class="row">
                                    <div class="col-12">
                                        <header class="app-module-itemimg">
                                            <img src="<?php echo get_the_post_thumbnail_url(); ?>">
                                        </header>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-md-10 offset-md-1">
                                        <div class="app-module-itemcontent">
                                            <?php if($titolo): ?>
                                            <h3 class="has-decoration-bottom"><?php echo $titolo; ?></h3>
                                            <?php endif; ?>
                                            <div class="app-full-content">
                                                <?php the_content(); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php if( have_rows('gallery') ): while( have_rows('gallery') ): the_row(); 

                            // vars
                            $gallery = get_sub_field('galleria_immagini');
                            if($gallery):
                            ?>
                            <div class="module-section module-padding">
                                <!-- Swiper -->
                                <div class="swiper-container app-formazione-gallery">
                                    <div class="swiper-wrapper">
                                        <?php foreach($gallery as $image): ?>
                                        <div class="swiper-slide">
                                            <div class="app-image-container">
                                                <img src="<?php echo $image['url'] ?>">
                                            </div>
                                            <div class="row">
                                                <div class="col-md-10 offset-md-1">
                                                    <div class="app-gallery-caption">
                                                        <span><?php echo $image['caption'] ?></span>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <?php endforeach; ?>
                                    </div>
                                    <!-- Add Arrows -->
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                </div>
                            </div>
                            <?php endif; 
                                endwhile; 
                            endif; ?>
                            <?php if($bloccoTesto): 
                            foreach($bloccoTesto as $blocco): ?>
                            <div class="module-section module-padding">
                                <?php if($blocco['immagine']): ?>
                                <div class="row">
                                    <div class="col-12">
                                        <header class="app-module-itemimg">
                                            <img src="<?php echo $blocco['immagine']['url']; ?>" alt="<?php echo $blocco['titolo']; ?>">
                                        </header>
                                    </div>
                                </div>
                                <?php endif; ?>
                                <div class="row">
                                    <div class="col-12 col-md-10 offset-md-1">
                                        <div class="app-module-itemcontent">
                                            <h3 class="has-decoration-bottom"><?php echo $blocco['titolo']; ?></h3>
                                            <div class="app-full-content">
                                                <?php echo $blocco['testo']; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <?php endforeach; 
                            endif; ?>
                        </div>
                    </div>
                </div>
            </section>
            <?php endwhile; 
            endif; ?>
		<?php endwhile; ?>

		<?php endif; ?>

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
