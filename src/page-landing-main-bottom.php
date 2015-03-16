      </div> <!-- cd-referral -->
      <div class="see-more">
        <div class="icon">
        nach unten
        </div>
      </div>
    </div> <!-- cd-fixed-bg -->

    <div class="cd-scrolling-bg cd-color-1">
      <div class="cd-container">
        <div class="grid-items-lines">
        <?php if( have_rows('grid_item') ): ?>
          <?php while( have_rows('grid_item') ): the_row();

          // vars
          $image = get_sub_field('icon');
          $headline = get_sub_field('headline');
          $copytext = get_sub_field('copy_text');

          ?>

          <?php if( $image ): ?>
          <a href="javascript:void(0)" class="grid-item">
            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
            <h1><?php echo $headline; ?></h1>
            <p><?php echo $copytext; ?></p>
          </a>
          <?php endif; ?>
          <?php endwhile; ?>
          <?php endif; ?>

          <a href="javascript:void(0)" class="grid-item">
            <img src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/placeholder_logo_1_dark.png" alt="">
            <h1>Grid Item</h1>
            <p>Lorem ipsum dolor sit amet, elit. Rem, illum.</p>
          </a>
          <a href="javascript:void(0)" class="grid-item">
            <img src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/placeholder_logo_3_dark.png" alt="">
            <h1>Another Item</h1>
            <p>Lorem ipsum consectetur dolor sit amet, consectetur adipisicing elit.</p>
          </a>
          <a href="javascript:void(0)" class="grid-item">
            <img src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/placeholder_logo_2_dark.png" alt="">
            <h1>Another Grid Item</h1>
            <p>Lorem ipsum dolor sit amet, elit.</p>
          </a>
          <a href="javascript:void(0)" class="grid-item">
            <img src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/placeholder_logo_2_dark.png" alt="">
            <h1>Grid Item</h1>
            <p>Lorem ipsum dolor sit amet, elit. Rem, illum.</p>
          </a>
          <div class="right-cover"></div>
          <div class="bottom-cover"></div>
        </div>
      </div> <!-- cd-container -->

      <?php include (TEMPLATEPATH . '/minimal-footer.php'); ?>
    </div> <!-- cd-scrolling-bg -->

  </main> <!-- cd-main-content -->
