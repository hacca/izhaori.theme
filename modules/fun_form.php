<?php

// Contact Form 7 が導入されていて wpcf7_add_form_tag が有効な場合のみ
if( function_exists('wpcf7_add_form_tag') ) {
// ※タグを出力するfunctionを先に記述していないと上手く動作しない
    function make_talent_select_tag($tag) {
// 基本的な設定は参考にするタグの出力の仕方を参考に
        $t = new WPCF7_FormTag($tag);
        $atts = [];
        $class = wpcf7_form_controls_class( $tag->type );
        $atts['class'] = $tag->get_class_option( $class );
        $atts['id'] = $tag->get_id_option();
        $atts['name'] = $tag->name;
        $name = sanitize_html_class( $atts['name'] );

        if ( $tag->is_required() ) {
            $atts['aria-required'] = 'true';
        }

//$atts['aria-invalid'] = $validation_error ? 'true' : 'false';

// デフォルト選択 selected:値 というオプションがあれば該当するoptionタグを selected にする
        $default = $tag->get_option( 'selected', '', true );

// first_as_label オプションで先頭を未選択状態の文字を表示できるようにする
        $first_as_label = $tag->has_option( 'first_as_label' );
        $values = $tag->values;

        $options = '';
        if( $first_as_label && count($values)) {
            $options = '<option value>' . esc_html($values[0]) . '</option>';
        }

// タレント名一覧を取得してセレクトタグのオプションにする
        $talents = get_talent_name_list();
        foreach($talents as $val) {
            $value = esc_attr($val);
            $selected = "";
// デフォルト選択に該当している場合 selected 属性を出力する
            if( $default == $value) {
                $selected = ' selected="selected"';
            }
            $options .= '<option value="' . $value . '"' . $selected . '>' . esc_html($val) . '</option>';
        }

        $atts = wpcf7_format_atts( $atts );
        $html = sprintf(
            '<span class="wpcf7-form-control-wrap %1$s"><select %2$s>%3$s</select></span>',
            $name, $atts, $options
        );

// 出力するタグのHTMLを返す
        return $html;
    }

    function make_tournum_select_tag($tag) {
        $t = new WPCF7_FormTag($tag);
        $atts = [];
        $class = wpcf7_form_controls_class( $tag->type );
        $atts['class'] = $tag->get_class_option( $class );
        $atts['id'] = $tag->get_id_option();
        $atts['name'] = $tag->name;
        $name = sanitize_html_class( $atts['name'] );
        if ( $tag->is_required() ) {
            $atts['aria-required'] = 'true';
        }
        $default = $tag->get_option( 'selected', '', true );
        $first_as_label = $tag->has_option( 'first_as_label' );
        $values = $tag->values;
        $options = '';
        if( $first_as_label && count($values)) {
            $options = '<option value>' . esc_html($values[0]) . '</option>';
        }
        $tournums = get_tournum_name_list();
        foreach($tournums as $val) {
            $value = esc_attr($val);
            $selected = "";
            if( $default == $value) {
                $selected = ' selected="selected"';
            }
            $options .= '<option value="' . $value . '"' . $selected . '>' . esc_html($val) . '</option>';
        }
        $atts = wpcf7_format_atts( $atts );
        $html = sprintf(
            '<span class="wpcf7-form-control-wrap %1$s"><select %2$s>%3$s</select></span>',
            $name, $atts, $options
        );
        return $html;
    }

    function make_tourdate_select_tag($tag) {
        $t = new WPCF7_FormTag($tag);
        $atts = [];
        $class = wpcf7_form_controls_class( $tag->type );
        $atts['class'] = $tag->get_class_option( $class );
        $atts['id'] = $tag->get_id_option();
        $atts['name'] = $tag->name;
        $name = sanitize_html_class( $atts['name'] );
        if ( $tag->is_required() ) {
            $atts['aria-required'] = 'true';
        }
        $default = $tag->get_option( 'selected', '', true );
        $first_as_label = $tag->has_option( 'first_as_label' );
        $values = $tag->values;
        $options = '';
        if( $first_as_label && count($values)) {
            $options = '<option value>' . esc_html($values[0]) . '</option>';
        }
        $tourdates = get_tourdate_name_list();
        foreach($tourdates as $val) {
            $value = esc_attr($val);
            $selected = "";
            if( $default == $value) {
                $selected = ' selected="selected"';
            }
            $options .= '<option value="' . $value . '"' . $selected . '>' . esc_html($val) . '</option>';
        }
        $atts = wpcf7_format_atts( $atts );
        $html = sprintf(
            '<span class="wpcf7-form-control-wrap %1$s"><select %2$s>%3$s</select></span>',
            $name, $atts, $options
        );
        return $html;
    }

// ショートコードなどを登録
    wpcf7_add_form_tag(['select_talent_list', 'select_talent_list*'],
        'make_talent_select_tag',
        [
            'name-attr' => true,
            'selectable-values' => true,
        ]
    );
    wpcf7_add_form_tag(['select_tournum_list', 'select_tournum_list*'],
        'make_tournum_select_tag',
        [
            'name-attr' => true,
            'selectable-values' => true,
        ]
    );
    wpcf7_add_form_tag(['select_tourdate_list', 'select_tourdate_list*'],
        'make_tourdate_select_tag',
        [
            'name-attr' => true,
            'selectable-values' => true,
        ]
    );

// バリデーションは 元の select のものを利用
    add_filter( 'wpcf7_validate_select_talent_list', 'wpcf7_select_validation_filter', 10, 2 );
    add_filter( 'wpcf7_validate_select_talent_list*', 'wpcf7_select_validation_filter', 10, 2 );

    add_filter( 'wpcf7_validate_select_tournum_list', 'wpcf7_select_validation_filter', 10, 2 );
    add_filter( 'wpcf7_validate_select_tournum_list*', 'wpcf7_select_validation_filter', 10, 2 );

    add_filter( 'wpcf7_validate_select_tourdate_list', 'wpcf7_select_validation_filter', 10, 2 );
    add_filter( 'wpcf7_validate_select_tourdate_list*', 'wpcf7_select_validation_filter', 10, 2 );
}

// カスタム投稿タイプ `talent` のタイトル(名前)を返す
function get_talent_name_list() {
    $data = [];
    $args = array(
        'post_type'      => 'tour',
        'post_status'    => 'publish',
        'posts_per_page' => -1,
        'orderby'        => 'meta_value',
        'order'        => 'asc',
        'meta_key'        => 'tour_d_date',
    );
    $the_query = new WP_Query($args);
    if ( $the_query->have_posts() ) {
        while ( $the_query->have_posts() ) {
            $the_query->the_post();
            $talentName = get_the_title();
            $data[] = $talentName;
        }
    }
// reset query
    wp_reset_postdata();
    return $data;
}

function get_tournum_name_list() {
    $data = [];
    $args = array(
        'post_type'      => 'tour',
        'post_status'    => 'publish',
        'posts_per_page' => -1,
        'orderby'        => 'meta_value',
        'order'        => 'asc',
        'meta_key'        => 'tour_d_date',
    );
    $the_query = new WP_Query($args);
    if ( $the_query->have_posts() ) {
        while ( $the_query->have_posts() ) {
            $the_query->the_post();
            $tourNum = get_field('tour_number');
            $data[] = $tourNum;
        }
    }
// reset query
    wp_reset_postdata();
    return $data;
}

function get_tourdate_name_list() {
    $data = [];
    $args = array(
        'post_type'      => 'tour',
        'post_status'    => 'publish',
        'posts_per_page' => -1,
        'orderby'        => 'meta_value',
        'order'        => 'asc',
        'meta_key'        => 'tour_d_date',
    );
    $the_query = new WP_Query($args);
    if ( $the_query->have_posts() ) {
        while ( $the_query->have_posts() ) {
            $the_query->the_post();
            $d_date_value = get_field('tour_d_date');
            $week = array("日", "月", "火", "水", "木", "金", "土");
            $tourDate =  date('Y年n月j日',strtotime($d_date_value));
            $data[] = $tourDate;
        }
    }
// reset query
    wp_reset_postdata();
    return $data;
}

?>
