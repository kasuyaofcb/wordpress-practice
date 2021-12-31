<section class="blogNews">
    <div class="blogNewsInner">
        <div class="blog blogNewsInner__item">
            <h4 class="h4-title">ブログ</h4>
            <ul class="blog__wrapper">

                <?php
                global $post;
                $paged = get_query_var('paged') ?: 1; //ページネーションを使いたいなら指定
                $args = array(
                    'paged' => $paged, //ページネーションを使いたいなら指定
                    'posts_per_page' => 3, //３記事のみ出力
                    'post_status' => 'publish', //公開の記事だけ
                    'post_type' => 'blog', //カスタム投稿slag
                    'orderby' => 'date', //日付を出力する基準
                    'order' => 'DESC' //表示する順番（逆はASC）

                );
                $myposts = get_posts($args);
                if ($myposts) : foreach ($myposts  as $post) : setup_postdata($post);

                        //--------ここから繰り返し---------- 
                ?>


                        <li class="blogItem">
                            <figure class="blogItem__img">
                                <div class="img__badge"><?php
                                                        $category = get_the_category();
                                                        $cat_name = $category[0]->cat_name;
                                                        echo $cat_name;
                                                        ?></div>
                                <?php the_post_thumbnail(array(150, 110)); ?>
                            </figure>
                            <div class="blogItem__text">
                                <a href="<?php the_permalink(); ?>" class="text__title"><?php echo text_restriction(get_the_title(), 60, '...'); ?></a>
                                <p class="text__date"><?php the_time(get_option('date_format')); ?></p>
                            </div>
                        </li>
                    <?php endforeach; //------------繰り返しここまで---------- 
                    ?>

                <?php else : //記事が無い場合 
                ?>
                    <div class="text__result">
                        <p>記事がまだありません</p>
                    </div>

                <?php //-----------get_posts終了----------
                    wp_reset_postdata();
                endif; ?>
            </ul>
        </div>
        <div class="news blogNewsInner__item">
            <h4 class="h4-title">お知らせ</h4>
            <ul class="news__wrapper">

                <?php
                global $post;
                $paged = get_query_var('paged') ?: 1; //ページネーションを使いたいなら指定
                $args = array(
                    'paged' => $paged, //ページネーションを使いたいなら指定
                    'posts_per_page' => 3, //３記事のみ出力
                    'post_status' => 'publish', //公開の記事だけ
                    'post_type' => 'news', //カスタム投稿slag
                    'orderby' => 'date', //日付を出力する基準
                    'order' => 'DESC' //表示する順番（逆はASC）

                );
                $myposts = get_posts($args);
                if ($myposts) : foreach ($myposts  as $post) : setup_postdata($post);

                        //--------ここから繰り返し---------- 
                ?>


                        <li class="newsItem">
                            <p class="newsItem__date"><?php the_time(get_option('date_format')); ?></p>
                            <a href="<?php the_permalink(); ?>" class="newsItem__title"><?php echo text_restriction(get_the_title(), 25, '...'); ?></p>
                        </li>
                    <?php endforeach; //------------繰り返しここまで---------- 
                    ?>

                <?php else : //記事が無い場合 
                ?>
                    <div class="newsItem__result">
                        <p>記事がまだありません</p>
                    </div>

                <?php //-----------get_posts終了----------
                    wp_reset_postdata();
                endif; ?>

            </ul>
        </div>
    </div>
</section>
<!-- ly__blog-news -->