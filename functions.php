<?php

/* ===============================================
  スクリプトとスタイルシートの読み込み
=============================================== */
function my_theme_scripts() {
  // Google Icons
  wp_enqueue_style('googleIcons', "https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200");

  // Google Fonts - EB Garamond
  wp_enqueue_style('font-eb-garamond', "https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@0,400..800;1,400..800&display=swap");

  // Google Fonts - Noto Sans JP
  wp_enqueue_style('font-noto-sans-jp', "https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap");

  // Google Fonts - Noto Serif JP
  wp_enqueue_style('font-noto-serif-jp', "https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@200..900&display=swap");

  // GSAP
  wp_enqueue_script('gsap', "https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/gsap.min.js");
  wp_enqueue_script('gsap-ScrollTrigger', "https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/ScrollTrigger.min.js");

  // assets
  wp_enqueue_style("mainStyle", get_theme_file_uri('style.css'));
  wp_enqueue_script("mainJs", get_theme_file_uri('/assets/js/main.js'));
  wp_enqueue_script("gsapJs", get_theme_file_uri('/assets/js/gsap.js'));
}

add_action('wp_enqueue_scripts', 'my_theme_scripts');

/* ===============================================
  サムネイルを有効化
=============================================== */
add_theme_support('post-thumbnails');


/* ===============================================
 *  bodyに固定ページのクラスを追加
 =============================================== */
function add_slug_to_body_class($classes) {
  if (is_page()) {
    global $post;
    if (isset($post->post_name)) {
      $classes[] = 'page-' . $post->post_name;
    }
  }
  return $classes;
}
add_filter('body_class', 'add_slug_to_body_class');


/* ===============================================
  抜粋の区切り文字を変更
=============================================== */
function custom_excerpt_more($more) {
  return '...';
}
add_filter('excerpt_more', 'custom_excerpt_more');
