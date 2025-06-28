<?php get_header(); ?>

<?php if ( have_posts() ) : ?>
    <div class="row g-4">
    <?php while ( have_posts() ) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class( 'col-12 col-md-6 col-lg-4' ); ?>>
            <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <div class="entry-meta">
                <time datetime="<?php echo get_the_date( 'c' ); ?>"><?php echo get_the_date(); ?></time>
            </div>
            <div class="entry-summary">
                <?php the_excerpt(); ?>
            </div>
        </article>
    <?php endwhile; ?>
    </div>
    <?php the_posts_pagination(); ?>
<?php else : ?>
    <p><?php _e( 'No posts found.', 'minimal-it' ); ?></p>
<?php endif; ?>

<?php get_footer(); ?>
