<section class="section-hero">
    <div class="fixed-container">
        <div class="section-hero__content">
            <div class="section-hero__content__head-top">
                <?php
                if ($main_head = carbon_get_post_meta(get_the_ID(), 'crb_main_heading')) {
                ?>
                    <h2 class="site-title"><?php echo $main_head ?></h2>
                <?php
                } else {
                ?>
                    <h2 class="site-title"><?php bloginfo('name'); ?></h2>
                <?php
                }
                ?>
            </div>

            <div class="section-hero__content__head-bottom">
                <div class="section-hero__content__bottom__left">
                    <?php
                    if ($second_head = carbon_get_post_meta(get_the_ID(), 'crb_second_heading')) {
                    ?>
                        <h2 class="site-title _second-title">
                            <?php echo $second_head ?>
                        </h2>
                    <?php
                    } else {
                        echo '&nbsp;';
                    }
                    ?>
                </div>

                <div class="section-hero__content__bottom__right">
                    <?php
                    if ($hero_description = carbon_get_post_meta(get_the_ID(), 'crb_description_heading')) {
                        echo '<p>' . $hero_description . '</p>';
                    }
                    ?>
                </div>

            </div>

            <div class="section-hero__content__slider-block">
                <div class="section-hero__content__slider-block__button">
                    <a href="/" class="button">Связаться</a>
                </div>

                <?php if ($hero_slides = carbon_get_post_meta(get_the_ID(), 'crb_hero_slides')) {
                ?>
                    <div class="section-hero__content__slider-block__slider swiper">

                        <div class="swiper-wrapper hero-slider__wrapper">

                            <?php foreach ($hero_slides as $i => $hero_slide) {
                                $i++;
                                $hero_slide_img_url = wp_get_attachment_image_url($hero_slide['crb_slide_image'], 'full');
                            ?>
                                <div class="swiper-slide hero-slider__slide">
                                    <div class="slide-img">
                                        <img class="hero-slider__img" src="<?php echo $hero_slide_img_url; ?>" alt="">
                                        <span class="slide-img__side-num"><?php echo '00-' . $i ?></span>
                                        <?php
                                            if ($slide_logo = $hero_slide['crb_slide_logo'] ){
                                                $slide_logo_url = wp_get_attachment_image_url($slide_logo, 'full');
                                                echo '<img class="logo-img" src="'.$slide_logo_url.'" />';
                                            }
                                        ?>
                                    </div>

                                    <ul class="bottom-text">
                                        <?php
                                        for ($num = 1; $num <= 3; $num++) {
                                        ?>
                                            <?php
                                            $current_num = $num == $i;
                                            ?>

                                            <li class="bottom-text__item">
                                                <span
                                                    <?php if ($current_num) {
                                                        echo 'class="current"';
                                                    } ?>>
                                                    <?php echo $num ?>
                                                </span>
                                            </li>
                                        <?php
                                        }
                                        ?>
                                    </ul>

                                </div>

                            <?php
                            }

                            ?>

                        </div>

                    </div>
                <?php } ?>
            </div>

        </div>
    </div>
</section>