<?php get_header(); ?>

<div class="archive">
    <section id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

            <?php if (have_posts()) : ?>

                <?php while (have_posts()) : the_post(); ?>

                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <header class="entry-header">
                            <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        </header>
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="entry-content">
                                <div class="post-thumbnail">
                                    <?php the_post_thumbnail();
                                    ?>
                                </div>
                            </div>
                        <?php endif; ?>
                    </article>

                <?php endwhile; ?>

                <?php the_posts_navigation(); ?>

            <?php else : ?>

                Здесь пока ещё ничего нет.

            <?php endif; ?>

        </main><!-- #main -->
    </section><!-- #primary -->

</div>

<?php get_footer(); ?>