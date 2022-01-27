<section class="singleNews__content">
    <div class="content__inner">
        <div class="content__item">

            <ul class="news__wrapper">
                <li class="news__item">

                    <h1 class="text__title"><?php echo text_restriction(get_the_title(), 60, '...'); ?></h1>
                    <div class="snsDate__box">
                        <p class="text__date"><?php the_time(get_option('date_format')); ?></p>
                    </div>

                    <div class="item__text">
                        <div class="text__content"><?php the_content(); ?></div>
                    </div>

                    <a href="#" class="text__link">テキストリンクテキストリンク</a>
                </li>


            </ul>

        </div>

    </div>

</section>