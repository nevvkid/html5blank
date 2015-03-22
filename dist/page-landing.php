<?php
/**
 * Template Name: landing page
 * Description: zedfy.com
 *
 * @package
 */
?>
<?php include (TEMPLATEPATH . '/header.php'); ?>

<?php if (have_posts()): while (have_posts()) : the_post(); ?>
  <?php the_content(); ?>
<?php endwhile; ?>
<?php else: ?>
<?php endif; ?>

<?php include (TEMPLATEPATH . '/page-landing-footer.php'); ?>
