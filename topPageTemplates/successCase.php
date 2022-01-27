<section class="successCase">
    <div class="successCase__inner">
        <h2 class="successCase__title h2__title--white">TOEFL成功事例</h2>
        <ul class="successCase__cards">
            <li class="card__item">
                <p class="item__title"><?php the_field('title', 18); ?></p>
                <div class="item__imgFrame">
                    <figure class="item__img">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/model01.png" alt="女性1" class="item__img--s">
                    </figure>
                </div>
                <dl class="item__text">
                    <dt class="text__job card__text"><?php the_field('job', 18); ?></dt>
                    <dt class="text__name card__text"><?php the_field('name', 18); ?></dt>
                    <dt class="text__case card__text"><?php the_field('text', 18); ?></dt>
                </dl>


            </li>
            <li class="card__item">
                <p class="item__title"><?php the_field('title', 23); ?></p>
                <div class="item__imgFrame">
                    <figure class="item__img">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/model02.png" alt="女性2" class="item__img--s">
                    </figure>
                </div>
                <dl class="item__text">
                    <dt class="text__job card__text"><?php the_field('job', 23); ?>
                    </dt>
                    <dt class="text__name card__text"><?php the_field('name', 23); ?></dt>
                    <dt class="text__case card__text"><?php the_field('text', 23); ?></dt>
                </dl>

            </li>
            <li class="card__item">
                <p class="item__title"><?php the_field('title', 25); ?></p>
                <div class="item__imgFrame">
                    <figure class="item__img">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/model03.png" alt="女性3" class="item__img--s">
                    </figure>
                </div>
                <dl class="item__text">
                    <dt class="text__job card__text"><?php the_field('job', 25); ?></dt>
                    <dt class="text__name card__text"><?php the_field('name', 25); ?></dt>
                    <dt class="text__case card__text"><?php the_field('text', 25); ?></dt>
                </dl>

            </li>
        </ul>
    </div>
</section>
<!-- ly__success-case -->