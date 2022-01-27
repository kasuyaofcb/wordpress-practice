<section class="singleBlogDetail">
    <div class="detailInner">
        <div class="blog detailInner__item">

            <ul class="blog__wrapper">
                <li class="blogItem">
                    <div class="img__badge">
                        <?php
                        $category = get_the_category();
                        $cat_name = $category[0]->cat_name;
                        echo $cat_name;
                        ?>
                    </div>
                    <h1 class="text__title"><?php echo text_restriction(get_the_title(), 60, '...'); ?></h1>
                    <div class="snsDate__box">
                        <div class="sns__icon">
                            <div class="icon__like icon__item"><span><i class="fas fa-thumbs-up"></i></span>Like! 0</div>
                            <div class="icon__share icon__item">Share</div>
                            <div class="icon__twitter icon__item"><span><i class="fab fa-twitter"></i></i></span>ツイート</div>
                        </div>
                        <p class="text__date"><?php the_time(get_option('date_format')); ?></p>
                    </div>
                    <figure class="blogItem__img">
                        <?php the_post_thumbnail(array(590, 393)); ?>
                    </figure>

                    <div class="blogItem__text">


                        <div class="text__content"><?php the_content(); ?></div>
                        <a href="#" class="text__link">テキストリンクテキストリンク</a>
                    </div>
                </li>


            </ul>

        </div>
        <div class="sidebar">
            <div class="related">
                <div class="related__title">関連記事</div>
                <ul class="sidebarBlog__wrapper">



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



                            <li class="sidebarBlogItem ">
                                <figure class="sidebarBlogItem__img">

                                    <?php the_post_thumbnail(array(100, 70)); ?>
                                </figure>
                                <div class="sidebarBlogItem__text">
                                    <p class="text__date"><?php the_time(get_option('date_format')); ?></p>
                                    <a href="<?php the_permalink(); ?>" class="text__title"><?php echo text_restriction(get_the_title(), 60, '...'); ?></a>

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
            <div class="category">
                <div class="category__title">カテゴリー</div>
                <?php wp_list_categories('orderby=ID&title_li='); ?>
            </div>
        </div>
    </div>

</section>