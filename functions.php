<?php
// テーマの機能を有効にする関数
function mytheme_setup()
{
    // アイキャッチ画像（投稿サムネイル）をサポートする
    add_theme_support('post-thumbnails');
}
// WordPressの初期化時に呼び出す
add_action('after_setup_theme', 'mytheme_setup');


function register_staff_post_type()
{
    register_post_type('staff', [
        'labels' => [
            'name' => 'スタッフ',
            'singular_name' => 'スタッフ',
        ],
        'public' => true,
        'has_archive' => true, // ← 一覧表示に必須！
        'menu_position' => 5,
        'supports' => ['title', 'editor', 'thumbnail'],
        'rewrite' => ['slug' => 'staff'], // 表示URLを /staff/ に
        'show_in_rest' => true, // ブロックエディタ対応
    ]);
}
add_action('init', 'register_staff_post_type');
