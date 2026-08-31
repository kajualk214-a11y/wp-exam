<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_enqueue_style('stylesheet', get_template_directory_uri() . '/assets/style.css');
    wp_head(); ?>
</head>

<body>

    <!-- ヘッダーエリア -->
    <header class="site-header">
        <div class="container">
            <div class="site-logo">
                <a href="<?php echo home_url(); ?>"><?php bloginfo('name') ?></a>
            </div>
            <nav class="global-nav">
                <?php
                $args = [
                    'menu' => '',
                    'menu_class' => '',
                    'container' => 'false',
                ];
                wp_nav_menu($args);
                ?>
            </nav>
        </div>
    </header>