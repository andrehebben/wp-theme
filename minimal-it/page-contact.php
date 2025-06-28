<?php /* Template Name: Contact */ ?>
<?php get_header(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <h2 class="entry-title mb-4"><?php the_title(); ?></h2>
    <div class="entry-content">
        <p>You can reach me via the following form:</p>
        <form action="" method="post" class="row g-3">
            <div class="col-12">
                <label for="name" class="form-label">Name</label>
                <input type="text" id="name" name="name" class="form-control" required>
            </div>
            <div class="col-12">
                <label for="email" class="form-label">Email</label>
                <input type="email" id="email" name="email" class="form-control" required>
            </div>
            <div class="col-12">
                <label for="message" class="form-label">Message</label>
                <textarea id="message" name="message" rows="5" class="form-control" required></textarea>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Send</button>
            </div>
        </form>
    </div>
</article>

<?php get_footer(); ?>
