<?php /* Template Name: Team Template */ get_header(); ?>

	<main role="main">
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
        <?php
        $menuitems = wp_get_nav_menu_items('Main menu');

        ?>

        <section class="intcanvas team">
            <!--<img src="<?php //echo get_template_directory_uri(); ?>/img/_backoffice/team-bg.jpg" class="intcanvas-image">-->
            <div class="pallozzo pallozzo1 js-parallax" data-parallax="-400"></div>
            <div class="pallozzo pallozzo2 js-parallax" data-parallax="-200"></div>
            <div class="intcanvas-inner transitioned-fade">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="intcanvas-heading d-flex justify-content-between align-items-end">
                                <div class="intcanvas-heading-sx">
                                    <span href="#" class="badge badge-light"><?php echo $menuitems[1]->title; ?></span>
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
            <div class="intpages-negative-content">
                <div class="container" id="fixedBarBlock">
                    <div class="row">
                        <div class="col-md-3">
                            <nav id="fixedBar" class="d-none d-md-block">
                                <ul class="intpages-sidebar transitioned-fade">
                                    <li><a href="#partner">Partner</a></li>
                                    <li><a href="#professionisti" >Professionisti</a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="col-md-8 offset-md-1">
                            <?php 
                                $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

                                $partnerTeamArgs = array(
                                    'posts_per_page'	=> -1,
                                    'post_type'			=> 'team',
                                    'order'				=> 'ASC',
                                    'tax_query' => array(
                                        array(
                                            'taxonomy' => 'team_category',
                                            'field'    => 'slug',
                                            'terms'    =>  'founders',
                                        ),
                                    ),
                                );
                                $partnerTeamQuery = new WP_Query($partnerTeamArgs);       
                                if ($partnerTeamQuery->have_posts()):
                            ?>
                            <div class="team-listing highlights content-block" id="partner">
                                <h3 class="mb-5 transitioned-fade">Partner</h3>
                                <?php 
                                    $indexFounders = 1;
                                    //$oddClass = '';
                                    while ($partnerTeamQuery->have_posts()) : $partnerTeamQuery->the_post();
                                    if ($indexFounders % 2) {
                                        echo '<div class="row team-row js-block-reveal">';
                                    }
                                ?>
                                <div class="col-12 col-sm-6">
                                    <a href="<?php the_permalink(); ?>" class="team-item d-block">
                                        <?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
                                        <header class="team-item-header">
                                            <img src="<?php echo get_the_post_thumbnail_url($_post->ID,'extra-large'); ?>">
                                        </header>
                                        <?php endif; ?>
                                        <div class="team-description pt-5">
                                            <span class="h4 d-block"><?php the_title(); ?></span>
                                            <?php if(get_field('ruolo')): ?>
                                                <span class="label text-primary d-block"><?php echo get_field('ruolo'); ?></span>
                                            <?php endif; ?>
                                        </div>
                                    </a>
                                </div>
                                <?php 
                                    $indexFounders++;
                                    if ($indexFounders % 2) {
                                        echo '</div>';
                                    }
                                    endwhile;
                                    wp_reset_postdata();
                                ?>
                            </div>
                            <?php endif; ?>
                            <?php 
                                $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

                                $professionistiTeamArgs = array(
                                    'posts_per_page'	=> -1,
                                    'post_type'			=> 'team',
                                    'order'				=> 'ASC',
                                    'tax_query' => array(
                                        array(
                                            'taxonomy' => 'team_category',
                                            'field'    => 'slug',
                                            'terms'    =>  'professionisti',
                                        ),
                                    ),
                                );
                                $professionistiTeamQuery = new WP_Query($professionistiTeamArgs);       
                                if ($professionistiTeamQuery->have_posts()):
                            ?>
                            <div class="team-listing secondary content-block" id="professionisti">
                                <h3 class="mb-5 transitioned-bottom">Professionisti</h3>
                                <?php 
                                    $indexProfessional = 0;
                                    while ($professionistiTeamQuery->have_posts()) : $professionistiTeamQuery->the_post();
                                    if ($indexProfessional  % 3 == 0) {
                                        echo '<div class="row team-row js-block-reveal">';
                                    }
                                ?>
                                <div class="col-12 col-sm-4">
                                    <a href="<?php the_permalink(); ?>" class="team-item d-block">
                                        <?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
                                        <header class="team-item-header">
                                            <img src="<?php echo get_the_post_thumbnail_url($_post->ID,'extra-large'); ?>">
                                        </header>
                                        <?php endif; ?>
                                        <div class="team-description pt-4">
                                            <span class="h5 d-block"><?php the_title(); ?></span>
                                        </div>
                                    </a>
                                </div>
                                <?php
                                    $indexProfessional++;
                                    if ($indexProfessional % 3 == 0) {
                                        echo '</div>';
                                    }
                                    endwhile;
                                    wp_reset_postdata();
                                ?>
                            </div>
                            <?php endif; ?>
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
