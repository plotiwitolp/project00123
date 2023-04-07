<?php get_header(); ?>

<div class="page-block-wrap">
    <?php the_content(); ?>
    <div class="page-block">
        <div class="page-block__item">
            <?php the_field('left_side'); ?>
        </div>
        <div class="page-block__item">
            <?php the_field('right_side'); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>