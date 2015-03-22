<?php if (have_posts()): while (have_posts()) : the_post(); ?>

  <!-- article -->
  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> itemscope="" itemtype="http://schema.org/BlogPosting" role="article">
    <div class="article-item">
      <header class="post-header">
        <!-- post title -->
        <h2 class="post-title" itemprop="name">
          <a href="<?php the_permalink(); ?>" itemprop="url" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
        </h2>
        <!-- /post title -->
      </header>
      <section class="post-excerpt" itemprop="description">
        <?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>
      </section>
      <div class="post-meta">
        <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_date(); ?></time>
      </div>
    </div>
  </article>
  <!-- /article -->
<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>
