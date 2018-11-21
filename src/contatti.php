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
    </section>
</main>


<?php endwhile; endif; ?>

<?php get_footer(); ?>

