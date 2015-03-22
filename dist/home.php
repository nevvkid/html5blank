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
      <div class="cd-container blog type-system-serif">

        <!-- section -->
        <section>
        <p class="type">Blog</p>

          <?php get_template_part('loop'); ?>

          <?php get_template_part('pagination'); ?>

        </section>
        <!-- /section -->

    </div> <!-- cd-container -->
  </div> <!-- cd-scrolling-bg -->
  <div class="cd-footer">
    <?php include (TEMPLATEPATH . '/minimal-footer.php'); ?>
  </div>
</main> <!-- cd-main-content -->

<?php include (TEMPLATEPATH . '/page-landing-footer.php'); ?>
