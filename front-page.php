<?php get_header(); ?>


<!-- ヒーローエリア -->
<section class="hero">
  <div class="container">
    <h1>WordPressテーマ化の練習サイト</h1>
    <p>この静的HTML/CSSをWordPressのテーマに変換する練習を行いましょう。</p>
  </div>
</section>

<!-- 私たちについてセクション -->
<section class="about-section">
  <div class="container">
    <h2>私たちについて</h2>
    <p>このサイトは、静的HTML/CSSからWordPressテーマを作成するプロセスを体系的に学ぶためのデモ練習用サイトです。コーディング初心者の方に向けて、WordPress固有の記述方法や仕組みを優しく解説します。</p>
    <div class="about-btn-wrapper">
      <a href="<?php the_permalink(2009); ?>" class="btn-primary">詳しく見る</a>
    </div>
  </div>
</section>

<!-- メインコンテンツ -->

<main class="content-wrapper">
  <div class="container">

    <?php if (have_posts()): ?>

      <section class="posts">
        <h2>最新の投稿（3件）</h2>
        <div class="posts-grid">
          <!-- 投稿1 -->

          <?php while (have_posts()): the_post(); ?>

            <?php get_template_part('template-parts/loop', 'blog'); ?>

          <?php endwhile; ?>

      </section>
    <?php endif; ?>


  </div>

  </div>
</main>


<?php get_footer(); ?>