<section class="singleBlogPickup">
    <div class="singleBlogPickupInner">
        <div class="blog singleBlogPickupInner__item">

            <ul class="pickUp__wrapper">
                <h2 class="pickUp__title h2__title--blue">
                    おすすめ記事
                </h2>
                <?php
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $the_query = new WP_Query(array(
                    'post_status' => 'publish',
                    'post_type' => 'blog', // ページの種類（例、page、post、カスタム投稿タイプ名）
                    'tag'    => 'pickup', // タグをスラッグで指定する場合
                    'paged' => $paged,
                    'posts_per_page' => 3, // 表示件数
                    'orderby'     => 'date',
                    'order' => 'DESC'
                ));
                if ($the_query->have_posts()) :
                    while ($the_query->have_posts()) : $the_query->the_post();
                ?>

                        <!-- //--------ここから繰り返し---------- -->



                        <li class="pickUpItem">
                            <figure class="pickUpItem__img">
                                <div class="img__badge"><?php
                                                        $category = get_the_category();
                                                        $cat_name = $category[0]->cat_name;
                                                        echo $cat_name;
                                                        ?></div>
                                <?php the_post_thumbnail(array(240, 150)); ?>
                            </figure>
                            <div class="pickUpItem__text">
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

        </div>
    </div>
</section>