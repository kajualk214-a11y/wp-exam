<?php get_header(); ?>

<!-- メインコンテンツ -->
<main class="content-wrapper">
  <div class="container">
    <h1 class="page-title">カテゴリー：<?php wp_title(''); ?></h1>


    <?php if (have_posts()): ?>
      <div class="posts-grid">
        <?php while (have_posts()): the_post(); ?>
          <?php get_template_part('template-parts/loop', 'blog'); ?>
        <?php endwhile; ?>
      </div>
    <?php endif; ?>

    <!-- ページネーション -->
    <nav class="pagination" aria-label="ページナビゲーション">
      <?php
      $args = [
        'type' => 'list',
      ];
      echo paginate_links($args);
      ?>
    </nav>

  </div>
</main>
<?php get_footer(); ?>