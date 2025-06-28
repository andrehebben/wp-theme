<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class( 'mx-auto' ); ?>>
        <h2 class="entry-title mb-3 text-center"><?php the_title(); ?></h2>
        <div class="entry-meta text-muted mb-3">
            <time datetime="<?php echo get_the_date( 'c' ); ?>"><?php echo get_the_date(); ?></time>
        </div>
        <div class="entry-content">
            <?php the_content(); ?>
        </div>
    </article>
    <?php endwhile; endif; ?>

<?php get_footer(); ?>
