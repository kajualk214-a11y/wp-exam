<?php get_header(); ?>

<!-- メインコンテンツ -->
<main class="content-wrapper">
  <div class="container">

    <?php if (have_posts()): ?>
      <?php while (have_posts()): the_post(); ?>
        <article>
          <h1 class="page-title"><?php echo get_the_title($post); ?></h1>

          <div class="entry-meta">
            <time class="entry-date" datetime="<?php the_time('Y-m-d'); ?>">投稿日: <?php the_time('Y年m月d日'); ?></time>
            <span class="entry-category">カテゴリー:
              <?php
              $categories = get_the_category();
              if ($categories):
              ?>
                <?php foreach ($categories as $category): ?>

                  <a href="<?php echo get_category_link($category); ?>">
                    <?php echo $category->name; ?> </a>
                <?php endforeach; ?>
              <?php endif; ?>
            </span>
          </div>

          <div class="entry-content">
            <p><?php the_content(); ?></p>

            <h2>最小限のテーマ構成</h2>
            <p>WordPressテーマとして認識されるために最低限必要なファイルは以下の2つだけです：</p>
            <ul>
              <li><strong>index.php</strong>：すべてのページのベースとなるメインテンプレート</li>
              <li><strong>style.css</strong>：テーマのスタイルを定義するスタイルシート（テーマ情報を記述するコメントヘッダーが必要）</li>
            </ul>

            <h2>テーマ情報を記述する style.css のヘッダーコメント</h2>
            <p>style.cssの最上部には、WordPressがそのテーマを認識できるようにするために特別なコメント（テーマヘッダー）を記述します。例えば以下のように記述します：</p>
            <pre><code>/*
Theme Name: WP Practice Theme
Description: WordPressテーマ化練習用のオリジナルテーマです。
Author: あなたの名前
Version: 1.0
*/</code></pre>

            <h2>まとめ</h2>
            <p>この基本ルールを守ることで、管理画面からテーマを有効化することができるようになります。次は共通パーツの分割へと進んでみましょう！</p>
          </div>

          <!-- 前後の投稿へのリンク -->
          <nav class="post-navigation">
            <div class="nav-link nav-previous">
              <span class="nav-label">&larr;前の投稿
                <?php
                $previous_post = get_previous_post();
                if ($previous_post):
                ?>
              </span>
              <a href="<?php the_permalink($previous_post); ?>" class="nav-title"><?php echo get_the_title($previous_post); ?></a>
            <?php endif; ?>
            </div>
            <div class="nav-link nav-next">
              <span class="nav-label">次の投稿 &rarr;
                <?php
                $next_post = get_next_post();
                if ($next_post):
                ?>

              </span>
              <a href="<?php the_permalink($next_post) ?>" class="nav-title"><?php echo get_the_title($next_post); ?></a>
            <?php endif; ?>
            </div>
          </nav>
        </article>
      <?php endwhile; ?>
    <?php endif; ?>
  </div>
</main>
<?php get_footer(); ?>