<section class="blogNew">
    <div class="blogNewInner">
        <div class="blog blogNewsInner__item">
            <h2 class="priceSystem__title h2__title--blue">
                新着一覧
            </h2>
            <ul class="blog__wrapper">

                <?php
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $the_query = new WP_Query(array(
                    'post_status' => 'publish',
                    'post_type' => 'blog', // ページの種類（例、page、post、カスタム投稿タイプ名）
                    'paged' => $paged,
                    'posts_per_page' => 10, // 表示件数
                    'orderby'     => 'date',
                    'order' => 'DESC'
                ));
                if ($the_query->have_posts()) :
                    while ($the_query->have_posts()) : $the_query->the_post();
                ?>

                        <!-- //--------ここから繰り返し---------- -->



                        <li class="blogItem">
                            <figure class="blogItem__img">
                                <div class="img__badge"><?php
                                                        $category = get_the_category();
                                                        $cat_name = $category[0]->cat_name;
                                                        echo $cat_name;
                                                        ?></div>
                                <?php the_post_thumbnail(array(240, 150)); ?>
                            </figure>
                            <div class="blogItem__text">
                                <p class="text__date"><?php the_time(get_option('date_format')); ?></p>
                                <a href="<?php the_permalink(); ?>" class="text__title"><?php echo text_restriction(get_the_title(), 60, '...'); ?></a>
                                <p class="text__content"><?php echo text_restriction(get_the_content(), 80, '...'); ?></p>

                            </div>
                        </li>


                <?php
                    endwhile;
                else :
                    echo '<div><p>ありません。</p></div>';
                endif;
                ?>
            </ul>


            <div class="pnavi">
                <?php //ページリスト表示処理
                global $wp_rewrite;
                $paginate_base = get_pagenum_link(1);
                if (strpos($paginate_base, '?') || !$wp_rewrite->using_permalinks()) {
                    $paginate_format = '';
                    $paginate_base = add_query_arg('paged', '%#%');
                } else {
                    $paginate_format = (substr($paginate_base, -1, 1) == '/' ? '' : '/') .
                        user_trailingslashit('page/%#%/', 'paged');
                    $paginate_base .= '%_%';
                }
                echo paginate_links(array(
                    'base' => $paginate_base,
                    'format' => $paginate_format,
                    'total' => $the_query->max_num_pages,
                    'mid_size' => 1,
                    'current' => ($paged ? $paged : 1),
                    'prev_text' => '< 前へ',
                    'next_text' => '次へ >',
                ));
                ?>
            </div>
        </div>
    </div>

</section>