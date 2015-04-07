<main class="cd-main-content">

    <div class="cd-fixed-bg cd-bg-1">
      <div class="cd-intro">
            <?php

            $image = get_field('zedcon');

            if( !empty($image) ): ?>

            <h1><img src="<?php echo $image['url']; ?>" alt="zedcon-logo" />
            <?php endif; ?>
            <?php the_field('intro_text'); ?></h1>
      </div>
      <div class="cd-indiegogo"><a href="http://bit.ly/1H2jxGj"><img src="<?php echo get_template_directory_uri(); ?>/img/indiegogo-big-button.png" alt="indiegogo button" class="indiegogo-button"></a></div>
      <div class="cd-referral">
      <h3><?php the_field('newsletter_-__call_to_action'); ?></h3>
