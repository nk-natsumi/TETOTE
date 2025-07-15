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
            'name' => 'STAFF',
            'singular_name' => 'STAFF',
        ],
        'public' => true,
        'has_archive' => true,
        'menu_position' => 5,
        'supports' => ['title', 'editor', 'thumbnail'],
        'rewrite' => [
            'slug' => 'staff',           // 表示URLを /staff/ に
            'with_front' => false        // ← /blog/ などの親スラッグを防ぐ！
        ],
        'show_in_rest' => true,
    ]);
}
add_action('init', 'register_staff_post_type');


function my_theme_widgets_init()
{
    register_sidebar(array(
        'name'          => 'サイドバー',
        'id'            => 'sidebar-1',
        'description'   => '投稿や固定ページで表示されるサイドバー',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));
}
add_action('widgets_init', 'my_theme_widgets_init');
function add_id_to_h2($content)
{
    if (is_singular('staff')) { // スタッフ詳細ページだけに限定
        $pattern = '/<h2>(.*?)<\/h2>/i';
        $content = preg_replace_callback($pattern, function ($matches) {
            $slug = sanitize_title($matches[1]);
            return '<h2 id="' . $slug . '">' . $matches[1] . '</h2>';
        }, $content);
    }
    return $content;
}
add_filter('the_content', 'add_id_to_h2');
