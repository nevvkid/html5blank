<?php
/**
 * Template Name: blog
 * Description: zedfy.com
 *
 * @package
 */
?>
<?php include (TEMPLATEPATH . '/header.php'); ?>

<main class="cd-main-content">
    <div class="cd-scrolling-bg cd-color-4">
      <div class="cd-container">

        <!-- section -->
        <section>

          <h1><?php _e( 'Latest Posts', 'html5blank' ); ?></h1>

          <?php get_template_part('loop'); ?>

          <?php get_template_part('pagination'); ?>

        </section>
        <!-- /section -->

      </div>
    </div>
  </main>

<?php include (TEMPLATEPATH . '/page-landing-footer.php'); ?>
