<?php


function custom_theme_setup()
{
    add_theme_support("automatic-feed-links");
    add_theme_support("title-tag");
    add_theme_support("responsive-embeds");
}
add_action("after_setup_theme", "custom_theme_setup");

//CSS読み込み
function my_scripts()
{
    // サイト共通のCSSの読み込み
    wp_enqueue_style('style-name', get_template_directory_uri() . './css/style.css', array(), '');
}
add_action('wp_enqueue_scripts', 'my_scripts');

//JS読み込み
function js_scripts()
{
    wp_enqueue_script(
        'script',
        get_template_directory_uri() . '/main.js',
        array(),
        "1.0",
        true
    );
}
add_action('wp_enqueue_scripts', 'js_scripts');


// カスタム投稿タイプの追加
function add_custom_post_type()
{
    // 成功事例
    register_post_type(
        'saccess-case', // 1.投稿タイプ名 
        array(   // 2.オプション 
            'label' => '成功事例', // 投稿タイプの名前
            'public'        => true, // 利用する場合はtrueにする 
            'has_archive'   => true, // この投稿タイプのアーカイブを有効にする
            'menu_position' => 5, // この投稿タイプが表示されるメニューの位置
            'menu_icon'     => 'dashicons-edit', // メニューで使用するアイコン
            'supports' => array( // サポートする機能
                'title',
                'editor',
            )
        )
    );

    // 料金
    register_post_type(
        'price', // 1.投稿タイプ名 
        array(   // 2.オプション 
            'label' => '料金', // 投稿タイプの名前
            'public'        => true, // 利用する場合はtrueにする 
            'has_archive'   => true, // この投稿タイプのアーカイブを有効にする
            'menu_position' => 5, // この投稿タイプが表示されるメニューの位置
            'menu_icon'     => 'dashicons-edit', // メニューで使用するアイコン
            'supports' => array( // サポートする機能
                'title',
                'editor',
            )
        )
    );
}
add_action('init', 'add_custom_post_type');

//カスタム投稿タイプ アイキャッチ画像設定可能にする
add_theme_support('post-thumbnails');
set_post_thumbnail_size(150, 110);


//カスタム投稿タイプ アイキャッチにハイパーリンク設定
add_filter('post_thumbnail_html', 'my_post_image_html', 10, 3);

function my_post_image_html($html, $post_id, $post_image_id)
{
    $html = '<a href="' . get_permalink($post_id) . '" title="' . esc_attr(get_the_title($post_id)) . '">' . $html . '</a>';
    return $html;
}

/*-----------------------------------
 文字数制限用
-----------------------------------*/
function text_restriction($text, $count, $change)
{
    //取得したテキストのショートコードやhtmlを削除
    $get_txt = strip_tags(strip_shortcodes($text));
    //文字が指定数を超えているか判別
    if (mb_strlen($get_txt, 'UTF-8') > $count) {
        $rtxt = mb_substr($get_txt, 0, $count, 'UTF-8') . $change;
        return $rtxt;
    } else {
        return $get_txt;
    }
}
/*-----------------------------------
ページネーション
-----------------------------------*/
// ページネーションのHTMLカスタマイズ
function custom_pagination_html($template)
{
    $template = '
    <nav class="pagination" role="navigation">
        <h2 class="screen-reader-text">%2$s</h2>
        %3$s
    </nav>';
    return $template;
}
add_filter('navigation_markup_template', 'custom_pagination_html');
