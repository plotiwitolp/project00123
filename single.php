<?php get_header(); ?>

<div class="page">
    <?php echo wpcourses_breadcrumb(' / '); ?>


    <h1><?php the_title(); ?></h1>
    <?php the_content(); ?>
</div>
<?php get_footer(); ?>