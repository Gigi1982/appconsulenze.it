<?php /* Template Name: Homepage Template */ get_header(); ?>

<?php if(have_posts()): while(have_posts()): the_post(); ?>

<section class="app-home">
    <div class="container">
        <h1 class=""><?php the_title(); ?></h1>
    </div>
</section>


<?php endwhile; endif; ?>

<?php get_footer(); ?>

