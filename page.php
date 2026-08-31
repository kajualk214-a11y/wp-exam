<?php get_header(); ?>

<!-- メインコンテンツ -->
<main class="content-wrapper">
  <div class="container">

    <?php if (have_posts()): ?>
      <?php while (have_posts()): the_post(); ?>
        <article>
          <h1 class="page-title"><?php the_title(); ?></h1>

          <div class="entry-content">
            <?php the_content(); ?>
          </div>
        </article>
      <?php endwhile; ?>
    <?php endif; ?>

  </div>
</main>
<?php get_footer(); ?>