<?php get_header(); ?>

<?php the_content(); ?>
<div class="page-block">
    <div class="page-block__item">
        <?php the_field('left_side'); ?>
    </div>
    <div class="page-block__item">
        <?php the_field('right_side'); ?>
    </div>
</div>

<?php get_footer(); ?>