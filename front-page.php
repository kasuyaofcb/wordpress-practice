<?php get_header(); ?>

<body>
    <header>
        <div class="header-wrapper-l">
            <div class="top-logo">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/top_logo.png" alt="Engressロゴ">
            </div>
            <nav class="header-nav-wrapper">
                <ul class="header-nav">
                    <li class="header-nav-item">
                        ホーム
                    </li>
                    <li class="header-nav-item">
                        お知らせ
                    </li>
                    <li class="header-nav-item">
                        ブログ
                    </li>
                    <li class="header-nav-item">
                        コース・料金
                    </li>
                </ul>
            </nav>
        </div>
        <div class="header-wrapper-r">
            <div class="header-wrapper-r-text">
                <p class="header-wrapper-r-text opening-time">平日08:00～20:00</p>
                <p class="header-wrapper-r-text tel"><span class="tel-icon"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/tel_icon.png" alt="tel-icon"></span>0123-456-7890</p>
            </div>
            <button class="header-wrapper-r__btn-wrapper">
                <a href="#" class="header-wrapper-r__btn-wrapper square-btn blue-btn">資料請求</a>
                <a href="#" class="header-wrapper-r__btn-wrapper square-btn yellow-btn">お問い合わせ</a>
            </button>
        </div>
    </header>


    <?php get_footer(); ?>