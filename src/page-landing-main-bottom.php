      </div> <!-- cd-referral -->
    </div> <!-- cd-fixed-bg -->

    <div class="cd-scrolling-bg cd-color-1">
      <div class="cd-container">
        <div class="grid-items-lines">
          <a class="grid-item grid-item-big grid-item-image">
            <img src="<?php echo get_template_directory_uri(); ?>/img/zedcon-logo.svg" alt="Logo" class="logo-img">
            <p><?php the_field('secondary_copytext'); ?></p>
          </a>

        <?php if( have_rows('grid_item') ): ?>
          <?php while( have_rows('grid_item') ): the_row();

          // vars
          $image = get_sub_field('icon');
          $headline = get_sub_field('headline');
          $copytext = get_sub_field('copy_text');

          ?>

          <?php if( $image ): ?>
          <a class="grid-item">
            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
            <h1><?php echo $headline; ?></h1>
            <p><?php echo $copytext; ?></p>
          </a>
          <?php endif; ?>
          <?php endwhile; ?>
          <?php endif; ?>
          <div class="right-cover"></div>
          <div class="bottom-cover"></div>
        </div>
      </div> <!-- cd-container -->
    </div> <!-- cd-scrolling-bg -->
    <div class="cd-footer">
      <?php include (TEMPLATEPATH . '/minimal-footer.php'); ?>
    </div>
  </main> <!-- cd-main-content -->
