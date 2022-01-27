<section class="priceSystemTop">
    <div class="headerWrapper">
        <div class="headerWrapperInner innerLeft">
            <div class="headerWrapper__logo">
                <a href="#"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/top_logo.png" alt="Engressロゴ"></a>
            </div>
            <nav class="headerWrapper__NavWrapper">
                <ul class="headerNav">
                    <li class="headerNav__item"><a href="<?php
                                                            echo home_url('/');
                                                            ?>">
                            ホーム</a>
                    </li>
                    <li class="headerNav__item"><a href="<?php
                                                            echo get_page_link(151);
                                                            ?>">
                            お知らせ</a>
                    </li>
                    <li class="headerNav__item"><a href="<?php
                                                            echo get_page_link(84);
                                                            ?>">
                            ブログ</a>
                    </li>
                    <li class="headerNav__item"><a href="<?php
                                                            echo get_page_link(62);
                                                            ?>">
                            コース・料金</a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="headerWrapperInner innerLeftSp">
            <div class="hamburger">
                <div class="hamuburgerNav nav__sp" id="nav_f">
                    <nav class="hamuburgerNav__text">
                        <ul>
                            <li class="hamuburgerNav__logo">
                                <a href="#"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/top_logo.png" alt="Engressロゴ"></a>
                            </li>
                            <li class="hamuburgerNav__item"><a href="<?php
                                                                        echo home_url('/');
                                                                        ?>">
                                    ホーム</a>
                            </li>
                            <li class="hamuburgerNav__item"><a href="<?php
                                                                        echo get_page_link(151);
                                                                        ?>">
                                    お知らせ</a>
                            </li>
                            <li class="hamuburgerNav__item"><a href="<?php
                                                                        echo get_page_link(84);
                                                                        ?>">
                                    ブログ</a>
                            </li>
                            <li class="hamuburgerNav__item"><a href="<?php
                                                                        echo get_page_link(62);
                                                                        ?>">
                                    コース・料金</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="target" id="target">
                    <div class="target__inner">
                        <span class="target__inner__line target__inner__1" id="line1"></span>
                        <span class="target__inner__line target__inner__2" id="line2"></span>
                        <span class="target__inner__line target__inner__3" id="line3"></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="headerWrapperInner innerRight">
            <div class="headerInfo">
                <p class="headerInfo__openingTime">平日08:00～20:00</p>
                <p class="headerInfo__tel"><span><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/tel_icon.png" alt="tel-icon" class="tel-icon"></span>0123-456-7890</p>
            </div>
            <div class="headerBtnWrapper">
                <a href="#" class="btn__square btn--yellow">資料請求</a>
                <a href="<?php
                            echo get_page_link(183);
                            ?>" class="btn__square btn--blue">お問い合わせ</a>
            </div>
        </div>
    </div>
    <figure class="priceSystemTop__img">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/pricesystemtop.png" alt="プライスシステムトップ画像:先生が生徒に教えている" class="priceSystemTop__img--s">
        <h2 class="subPage__title h2__title--white">コース・料金 </h2>
    </figure>
    <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
        <?php if (function_exists('bcn_display')) {
            bcn_display();
        } ?>
    </div>
</section>