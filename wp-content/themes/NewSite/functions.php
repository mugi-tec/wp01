<?php
//<title>タグを出力する
add_theme_support('title-tag');

//タイトルの区切り文字を変更
add_filter('document_title_separator', 'my_document_title_separator');
function my_document_title_separator($separator) {
    $separator = '|';
    return $separator;
}