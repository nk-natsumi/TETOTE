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

/* パンクズのタイトル部分をカスタムフィールドに変更*/
add_filter('bcn_breadcrumb_title', 'custom_breadcrumb_title_meta', 10, 3);
function custom_breadcrumb_title_meta($title, $type, $id)
{
    // 投稿や固定ページ、カスタム投稿タイプ（staff）などに限定
    if (get_post_type($id)) {
        $custom_title = get_post_meta($id, 'fv_title_en', true);
        if (!empty($custom_title)) {
            return esc_html($custom_title); // カスタムフィールドに置き換え
        }
    }
    return $title;
}

function my_enqueue_scripts()
{
    // jQueryが必要ならWordPressから読み込み
    wp_enqueue_script('jquery');

    // あなたのテーマの form-validation.js を読み込む
    wp_enqueue_script(
        'form-validation',
        get_template_directory_uri() . '/js/index.js', // jsディレクトリ内に配置した場合
        ['jquery'],
        null,
        true
    );
}
add_action('wp_enqueue_scripts', 'my_enqueue_scripts');


// Contact Form 7で自動挿入されるPタグ、brタグを削除
add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
function wpcf7_autop_return_false() {
  return false;
} 