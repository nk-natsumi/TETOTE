<?php
// テーマの機能を有効にする関数
function mytheme_setup() {
    // アイキャッチ画像（投稿サムネイル）をサポートする
    add_theme_support('post-thumbnails');
}
// WordPressの初期化時に呼び出す
add_action('after_setup_theme', 'mytheme_setup');