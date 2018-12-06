<?php if (is_even_post()): ?>
    <article class="md_listItem" data-aos="fade-up" data-aos-delay="100"><?php elseif (is_3th_post()): ?>
    <article class="md_listItem" data-aos="fade-down" data-aos-delay="300"><?php else: ?>
    <article class="md_listItem" data-aos="fade-up" data-aos-delay="600">
<?php endif;?>
    <a data-fancybox data-src="#item<?php echo get_the_ID(); ?>" href="javascript:;">
        <?php if (get_field('item_img1')) {
            $attachment_id = get_field('item_img1', $post->ID);
            echo wp_get_attachment_image($attachment_id, "original_16-10__midx", false, array('class' => 'md_listItem__img'));
        }?>
        <h3 class="gf_ptsans fz_15 md_listItem__ttl"><?php the_title();?></h3>
    </a>
    <div id="item<?php echo get_the_ID(); ?>" class="modal_wrapper">
        <div class="md_item">
            <div class="md_item__imgWrap">
                <div class="md_item__slider">
                    <div class="slide_img__main">
                        <?php if (get_field('item_img1')) {
                            $attachment_id = get_field('item_img1', $post->ID);
                            echo '<figure class="slide_img__parent item1 active">';
                            echo wp_get_attachment_image($attachment_id, "original_16-10__midx", false, array('class' => 'slide_img'));
                            echo '</figure>';
                        }?>
                        <?php for ($i = 2; $i <= 6; $i++): ?>
                            <?php if (get_field('item_img' . $i)) {
                                $attachment_id = get_field('item_img' . $i, $post->ID);
                                echo '<figure class="slide_img__parent item' . $i . '">';
                                echo wp_get_attachment_image($attachment_id, "original_16-10__midx", false, array('class' => 'slide_img'));
                                echo '</figure>';
                            }?>
                        <?php endfor;?>
                    </div>
                    <div class="slide_img__child">
                        <?php for ($i = 1; $i <= 6; $i++): ?>
                            <?php if (get_field('item_img' . $i)) {
                                $attachment_id = get_field('item_img' . $i, $post->ID);
                                echo '<figure class="thumb' . $i . '">';
                                echo wp_get_attachment_image($attachment_id, "original_thumbsq_lrg", false, array('class' => 'slide_imgThumb'));
                                echo '</figure>';
                            }?>
                        <?php endfor;?>
                    </div>
                </div>
            </div>
            <div class="md_item__contentsWrap">
                <div class="l_head">
                    <?php if (has_term('', 'itemcat')): ?>
                        <?php
                        $item_terms = wp_get_object_terms($post->ID, array('itemcat'));
                        if (!empty($item_terms)) {
                            if (!is_wp_error($item_terms)) {
                                foreach ($item_terms as $term) {
                                    echo '<h4 class="fz_20 fw700 gf_ptsans md_item__cat">' . $term->name . '</h4>';
                                }
                            }
                        }
                        ?>
                    <?php endif;?>
                    <h2 class="fz_30 md_item__ttl">
                        <?php the_title();?>
                        <?php if (get_field('item_name__en')): ?>
                            <em class="fz_14 gf_ptsans md_item__enttl"><?php the_field('item_name__en');?></em>
                        <?php endif;?>
                    </h2>
                    <?php if (get_field('item_price')): ?>
                        <?php
                        if (get_field('item_price')) {
                            $price = get_field('item_price');
                            $price = number_format($price);
                            echo '<div class="fz_18 gf_ptsans md_item__price"><span class="price">&yen;' . $price . '</span><span class="tax">(+tax)</span></div>';
                        }
                        ?>
                    <?php endif;?>
                    <?php if (get_field('item_url')): ?>
                        <div class="fz_16 gf_ptsans md_item__storeLink">
                            <a href="<?php esc_url(the_field('item_url'));?>"><span>store</span><i class="fas fa-caret-right icon"></i></a>
                        </div>
                    <?php endif;?>
                    <?php if (get_field('item_textarea')): ?>
                        <div class="fz_15 md_item__txtarea"><?php the_field('item_textarea');?></div>
                    <?php endif;?>
                </div>
                <div class="l_size">
                    <section class="md_item__sizeWrap">
                        <p class="fz_13 md_item__sizeUnit"><span class="cm active">cm</span> &#x21C4; <span class="inch">Feet inch</span></p>
                        <div class="md_item__sizeChartWrap">
                            <figure class="md_item__sizeImg">
                                <?php if (has_term('haori', 'itemcat')): ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/size_chart01.png" alt="haori size"><?php elseif (has_term('juban', 'itemcat')): ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/size_chart02.png" alt="haori size"><?php else: ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/size_chart03.png" alt="haori size">
                                <?php endif;?>
                            </figure>
                            <?php if (has_term(array('haori', 'juban'), 'itemcat')): ?>
                                <div class="fz_12 md_item__sizeChart">
                                    <ul class="sizeChart">
                                        <?php if (get_field('item_haori__mitake')): ?>
                                            <li>
                                                <span>a</span><span>身丈</span><span>mitake</span>
                                                <span class="unit cm"><?php the_field('item_haori__mitake');?>cm</span>
                                                <span class="unit inch">
                                                    <?php
                                                    $cm = get_field('item_haori__mitake');
                                                    $inch = $cm / 2.54;
                                                    echo number_format($inch, 1) . 'inch';
                                                    ?>
                                                </span>
                                            </li>
                                        <?php endif;?>
                                        <?php if (get_field('item_haori__maehaba')): ?>
                                            <li>
                                                <span>b</span><span>前巾</span><span>maehaba</span>
                                                <span class="unit cm"><?php the_field('item_haori__maehaba');?>cm</span>
                                                <span class="unit inch">
                                                    <?php
                                                    $cm = get_field('item_haori__maehaba');
                                                    $inch = $cm / 2.54;
                                                    echo number_format($inch, 1) . 'inch';
                                                    ?>
                                                </span>
                                            </li>
                                        <?php endif;?>
                                        <?php if (get_field('item_haori__ushirohaba')): ?>
                                            <li>
                                                <span>c</span><span>後巾</span><span>ushirohaba</span>
                                                <span class="unit cm"><?php the_field('item_haori__ushirohaba');?>cm</span>
                                                <span class="unit inch">
                                                    <?php
                                                    $cm = get_field('item_haori__ushirohaba');
                                                    $inch = $cm / 2.54;
                                                    echo number_format($inch, 1) . 'inch';
                                                    ?>
                                                </span>
                                            </li>
                                        <?php endif;?>
                                        <?php if (get_field('item_haori__sodetake')): ?>
                                            <li>
                                                <span>d</span><span>袖丈</span><span>sodetake</span>
                                                <span class="unit cm"><?php the_field('item_haori__sodetake');?>cm</span>
                                                <span class="unit inch">
                                                    <?php
                                                    $cm = get_field('item_haori__sodetake');
                                                    $inch = $cm / 2.54;
                                                    echo number_format($inch, 1) . 'inch';
                                                    ?>
                                                </span>
                                            </li>
                                        <?php endif;?>
                                        <?php if (get_field('item_haori__yuki')): ?>
                                            <li>
                                                <span>e</span><span>裄</span><span>yuki</span>
                                                <span class="unit cm"><?php the_field('item_haori__yuki');?>cm</span>
                                                <span class="unit inch">
                                                    <?php
                                                    $cm = get_field('item_haori__yuki');
                                                    $inch = $cm / 2.54;
                                                    echo number_format($inch, 1) . 'inch';
                                                    ?>
                                                </span>
                                            </li>
                                        <?php endif;?>
                                        <?php if (get_field('item_haori__belt')): ?>
                                            <li class="belt">
                                                <span>ベルト位置</span>
                                                <span class="unit cm"><?php the_field('item_haori__belt');?>cm</span>
                                                <span class="unit inch">
                                                    <?php
                                                    $cm = get_field('item_haori__belt');
                                                    $inch = $cm / 2.54;
                                                    echo number_format($inch, 1) . 'inch';
                                                    ?>
                                                </span>
                                            </li>
                                        <?php endif;?>
                                    </ul>
                                </div>
                                <?php elseif (has_term('obi', 'itemcat')): ?>
                                <div class="fz_12 md_item__sizeChart">
                                    <ul class="sizeChart">
                                        <?php if (get_field('item_haori__obihaba')): ?>
                                            <li>
                                                <span>a</span><span>帯巾</span><span>obihaba</span>
                                                <span class="unit cm"><?php the_field('item_haori__obihaba');?>cm</span>
                                                <span class="unit inch">
                                                    <?php
                                                    $cm = get_field('item_haori__obihaba');
                                                    $inch = $cm / 2.54;
                                                    echo number_format($inch, 1) . 'inch';
                                                    ?>
                                                </span>
                                            </li>
                                        <?php endif;?>
                                        <?php if (get_field('item_haori__obinagasa')): ?>
                                            <li>
                                                <span>b</span><span>長さ</span><span>length</span>
                                                <span class="unit cm"><?php the_field('item_haori__obinagasa');?>cm</span>
                                                <span class="unit inch">
                                                    <?php
                                                    $cm = get_field('item_haori__obinagasa');
                                                    $inch = $cm / 2.54;
                                                    echo number_format($inch, 1) . 'inch';
                                                    ?>
                                                </span>
                                            </li>
                                        <?php endif;?>
                                    </ul>
                                </div>
                            <?php endif;?>
                        </div>
                    </section>
                </div>
                <div class="l_note">
                    <div class="fz_12 md_item__notice">
                        <p class="washing">お洗濯について | <strong>ご自宅ではお洗濯できません。</strong>シルク専用のクリーニングをご利用ください。もしも、食べこぼしや目立つ汚れが付いた場合は、時間を置かずにシルク取り扱いクリーニング店へご相談ください。</p>
                        <p class="used">ご注意 | ユーズド製品を加工しているため、とても目立つようなものは無いよう気を付けておりますが、多少のシミや汚れについては何卒ご容赦ください。</p>
                        <?php if (get_field('item_note')): ?>
                            <p class="note"><?php the_field('item_note');?></p>
                        <?php endif;?>
                        <?php if (has_term(array('haori', 'juban'), 'itemcat')): ?>
                            <?php if (get_field('item_model')): ?>
                                <p class="model"><?php the_field('item_model');?></p>
                                <?php else: ?>
                                    <p class="model">モデル身長　女性：165cm 男性：183cm</p>
                                <?php endif;?>
                            <?php endif;?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </article>

