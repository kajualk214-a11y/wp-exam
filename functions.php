<?php

add_theme_support('title-tag');

add_theme_support('post-thumbnails');

/*
*メインクエリを変更する 
*/
add_action('pre_get_posts', 'my_pre_get_posts');
function my_pre_get_posts($query)
{
    if (is_admin() || !$query->is_main_query()) {
        return;
    }
    if ($query->is_home()) {
        $query->set('posts_per_page', 3);
        return;
    }
}

/*
*メニュー機能の有効化 
*/
add_theme_support('menus');
