<?php include (TEMPLATEPATH . '/header.php'); ?>

<?php if (have_posts()): while (have_posts()) : the_post(); ?>

<main class="cd-main-content" role="main">
  <div class="cd-scrolling-bg cd-color-4">
    <div class="cd-container blog-post type-system-serif">

      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="post-meta">
          <h1 class="post-title">
            <?php the_title(); ?>
          </h1>
        </div>
        <section class="post-content">
          <?php the_content(); // Dynamic Content ?>
        </section>
      </article>

      <?php endwhile; ?>
      <?php else: ?>

      <!-- article -->
      <article>
        <h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>
      </article>
      <!-- /article -->

      <?php endif; ?>
    </div> <!-- cd-container -->
  </div> <!-- cd-scrolling-bg -->
  <div class="cd-footer">
    <?php include (TEMPLATEPATH . '/minimal-footer.php'); ?>
  </div>
</main> <!-- cd-main-content -->
<?php include (TEMPLATEPATH . '/page-landing-footer.php'); ?>
