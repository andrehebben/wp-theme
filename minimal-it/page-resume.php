<?php /* Template Name: Resume */ ?>
<?php get_header(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'mx-auto' ); ?>>
    <h2 class="entry-title mb-4 text-center"><?php the_title(); ?></h2>
    <div class="entry-content">
        <?php the_content(); ?>
    </div>
</article>

<?php get_footer(); ?>
