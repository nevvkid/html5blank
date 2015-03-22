<main class="cd-main-content">
    <div class="cd-scrolling-bg cd-color-1">
      <div class="cd-container thankyou">

      <?php

      $image = get_field('referral_-_thank_you_-_image');

      if( !empty($image) ): ?>

      <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

      <?php endif; ?>
