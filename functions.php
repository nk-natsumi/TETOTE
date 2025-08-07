<?php
// テーマの機能を有効にする関数
function mytheme_setup()
{
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'mytheme_setup');


//カスタム投稿タイプ「staff」を設定

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
            'slug' => 'staff',          
            'with_front' => false       
        ],
        'show_in_rest' => true,
    ]);
}
add_action('init', 'register_staff_post_type');

//サイバー（ウィジェットエリア）の登録
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


//h２タグに自動でidをつける処理
function add_id_to_h2($content)
{
    if (is_singular('staff')) { 
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

    if (get_post_type($id)) {
        $custom_title = get_post_meta($id, 'fv_title_en', true);
        if (!empty($custom_title)) {
            return esc_html($custom_title); // カスタムフィールドに置き換え
        }
    }
    return $title;
}

// Contact Form 7で自動挿入されるPタグ、brタグを削除
add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
function wpcf7_autop_return_false()
{
    return false;
}

//jqueryの読み込み
function my_enqueue_scripts()
{
    // jQuery（WordPressに元々入ってるバージョンを使用）
    wp_enqueue_script('jquery');

    // 共通JS（index.js）
    wp_enqueue_script(
        'my-index-js',
        get_stylesheet_directory_uri() . '/js/index.js',
        ['jquery'], // jQueryに依存
        null,
        true // フッターで読み込む
    );

    // トップページのみ読み込むJS
    if (is_front_page()) {
        wp_enqueue_script(
            'lightbox',
            'https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/js/lightbox.min.js',
            [],
            null,
            true
        );
        wp_enqueue_script(
            'swiper',
            'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js',
            [],
            null,
            true
        );
        wp_enqueue_script(
            'inview',
            'https://cdnjs.cloudflare.com/ajax/libs/protonet-jquery.inview/1.1.2/jquery.inview.min.js',
            ['jquery'],
            null,
            true
        );
    }
}
add_action('wp_enqueue_scripts', 'my_enqueue_scripts');

//wp管理ページの表示名前を変える処理
function change_post_menu_label() {
    global $menu;
    global $submenu;

    // 管理メニュー左側の「投稿」 → 「Blog」に変更
    $menu[5][0] = 'Blog';

    // サブメニュー項目の変更（投稿一覧、新規追加など）
    $submenu['edit.php'][5][0] = 'Blog一覧';
    $submenu['edit.php'][10][0] = '新規Blog追加';
    $submenu['edit.php'][16][0] = 'タグ';

    // 画面上部の「新規追加」メニューの表示変更
    add_action('admin_bar_menu', function($wp_admin_bar) {
        $node = $wp_admin_bar->get_node('new-post');
        $node->title = '新規Blog投稿';
        $wp_admin_bar->add_node($node);
    }, 999);
}
add_action('admin_menu', 'change_post_menu_label');
