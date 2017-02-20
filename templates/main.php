<?php
include 'header.php';
?>

<div class="main-promoFirst v-al-middle promo">
    <div class="outer-holder">
        <div class="middle">
            <div class="inner">
                <h1>
                    Тестирование мобильных<br/>и социальных приложений
                </h1>
                <div class="font-regular text">
                    Ориентация на качество тестирования<br/>и доступные цены
                </div>
            </div>
        </div>

    </div>
</div>

<div class="main-promoCompetence promo">
    <div class="container-fluid">
        <h1 class="">
            Наши компетенции
        </h1>
        <div class="row promo-features">

            <div id="func-testing" class="col-md-4 item search" data-redirect="<?php echo $baseLink; ?>/competence#func">
                <div class="icon">
                    <!--<img src="img/icon-search.png" />-->
                </div>
                <div class="header-text">
                    Функциональное тестирование
                </div>
                <div class="body-text">
                    Это процесс или результат формирования требуемых свойств и характеристик продукции по мере её создания
                </div>
            </div>

            <div id="ui-testing" class="col-md-4 item write" data-redirect="<?php echo $baseLink; ?>/competence#ui">
                <div class="icon">
                    <!--<img src="img/icon-write.png" />-->
                </div>
                <div class="header-text">
                    Юзабилити тестирование
                </div>
                <div class="body-text">
                    Это процесс или результат формирования требуемых свойств и характеристик 
                </div>
            </div>

            <div id="i18n-testing" class="col-md-4 item az" data-redirect="<?php echo $baseLink; ?>/competence#i18n">
                <div class="icon">
                    <!--<img src="img/icon-az.png" />-->
                </div>
                <div class="header-text">
                    Тестирование локализации
                </div>
                <div class="body-text">
                    Это процесс или результат формирования требуемых свойств и характеристик 
                </div>

            </div>
        </div>
        <div class="row promo-features-links">
            <div class="col-md-4 item">
                <a href="<?php echo $baseLink; ?>/competence#func" class="btn btn-success styled  " data-hoverable="#func-testing">
                    Подробнее
                </a>
            </div>
            <div class="col-md-4 item">
                <a href="<?php echo $baseLink; ?>/competence#ui" class="btn btn-success styled  " data-hoverable="#ui-testing">
                    Подробнее
                </a>
            </div>
            <div class="col-md-4 item">
                <a href="<?php echo $baseLink; ?>/competence#i18n" class="btn btn-success styled  " data-hoverable="#i18n-testing">
                    Подробнее
                </a>
            </div>
        </div>
    </div>
</div>

<div class="main-promoWeTest promo">
    <div class="container-fluid">
        <h1>
            Мы тестируем
        </h1>
        <div class="row promo-features">

            <div id="mobile-app" class="col-md-4 item phone" data-redirect="<?php echo $baseLink; ?>/competence#app">
                <div class="icon">
                    <!--<img src="img/icon-phone.png" />-->
                </div>
                <div class="header-text">
                    Мобильные приложения
                </div>
                <div class="body-text">
                    Это процесс или результат формирования требуемых свойств и характеристик продукции по мере её создания
                </div>

            </div>

            <div id="web-sites" class="col-md-4 item desctop" data-redirect="<?php echo $baseLink; ?>/competence#web">
                <div class="icon">
                    <!--<img src="img/icon-desctop.png" />-->
                </div>
                <div class="header-text">
                    Web-сайты
                </div>
                <div class="spaces">
                    <br/><br/>
                </div>
                <div class="body-text">
                    Это процесс или результат формирования требуемых свойств и характеристик 
                </div>

            </div>

            <div id="social-app" class="col-md-4 item social" data-redirect="<?php echo $baseLink; ?>/competence#social">
                <div class="icon">
                    <!--<img src="img/icon-social.png" />-->
                </div>
                <div class="header-text">
                    Приложения<br/>для соц. сетей
                </div>
                <div class="body-text">
                    Это процесс или результат формирования требуемых свойств и характеристик 
                </div>

            </div>
        </div>

        <div class="row promo-features-links">
            <div class="col-md-4 item">
                <a href="<?php echo $baseLink; ?>/services#app" class="btn btn-success styled  " data-hoverable="#mobile-app">
                    Подробнее
                </a>
            </div>
            <div class="col-md-4 item">
                <a href="<?php echo $baseLink; ?>/services#web" class="btn btn-success styled  " data-hoverable="#web-sites">
                    Подробнее
                </a>
            </div>
            <div class="col-md-4 item">
                <a href="<?php echo $baseLink; ?>/services#social" class="btn btn-success styled  " data-hoverable="#social-app">
                    Подробнее
                </a>
            </div>
        </div>
    </div>
</div>

<div class="main-promoOurProjects">
    <div class="container-fluid">
        <div class="row gallery-holder">
            <!-- Swiper -->
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide" style="background-image:url(img/slider-1.png)"></div>
                    <div class="swiper-slide" style="background-image:url(img/slider-1.png)"></div>
                    <div class="swiper-slide" style="background-image:url(img/slider-1.png)"></div>
                    <div class="swiper-slide" style="background-image:url(img/slider-1.png)"></div>
                    <div class="swiper-slide" style="background-image:url(img/slider-1.png)"></div>
                    <div class="swiper-slide" style="background-image:url(img/slider-1.png)"></div>
                </div>
                <!-- Add Pagination -->
                <!--<div class="swiper-pagination"></div>-->

                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>

            <div class="projects-desc">
                <div id="project-desc-0" class="item active">
                    <h1 class="header-text">
                        Ми-ми-мишки
                    </h1>
                    <div class="body-text font-light">
                        Детская развивающая игра "Ми-ми-мишки" от "Интерактивного Мульта" 
                        собрала миллион установок на iOs и Android всего за четыре месяца 
                        и продолжает занимать верхние строчки мазазинов AppStore и Google Play.
                    </div>
                </div>
                <div id="project-desc-1" class="item">
                    <h1 class="header-text">
                        Ми-ми-мишки2
                    </h1>
                    <div class="body-text font-light">
                        Детская развивающая игра "Ми-ми-мишки" от "Интерактивного Мульта" 
                        собрала миллион установок на iOs и Android всего за четыре месяца 
                        и продолжает занимать верхние строчки мазазинов AppStore и Google Play.
                    </div>
                </div>
                <div id="project-desc-2" class="item">
                    <h1 class="header-text">
                        Ми-ми-мишки3
                    </h1>
                    <div class="body-text font-light">
                        Детская развивающая игра "Ми-ми-мишки" от "Интерактивного Мульта" 
                        собрала миллион установок на iOs и Android всего за четыре месяца 
                        и продолжает занимать верхние строчки мазазинов AppStore и Google Play.
                    </div>
                </div>
                <div id="project-desc-3" class="item">
                    <h1 class="header-text">
                        Ми-ми-мишки4
                    </h1>
                    <div class="body-text font-light">
                        Детская развивающая игра "Ми-ми-мишки" от "Интерактивного Мульта" 
                        собрала миллион установок на iOs и Android всего за четыре месяца 
                        и продолжает занимать верхние строчки мазазинов AppStore и Google Play.
                    </div>
                </div>
                <div id="project-desc-4" class="item">
                    <h1 class="header-text">
                        Ми-ми-мишки5
                    </h1>
                    <div class="body-text font-light">
                        Детская развивающая игра "Ми-ми-мишки" от "Интерактивного Мульта" 
                        собрала миллион установок на iOs и Android всего за четыре месяца 
                        и продолжает занимать верхние строчки мазазинов AppStore и Google Play.
                    </div>
                </div>
                <div id="project-desc-5" class="item">
                    <h1 class="header-text">
                        Ми-ми-мишки6
                    </h1>
                    <div class="body-text font-light">
                        Детская развивающая игра "Ми-ми-мишки" от "Интерактивного Мульта" 
                        собрала миллион установок на iOs и Android всего за четыре месяца 
                        и продолжает занимать верхние строчки мазазинов AppStore и Google Play.
                    </div>
                </div>
            </div>
            <!-- Initialize Swiper -->

        </div>
        <div class="row text-center action-row">
            <a href="<?php echo $baseLink; ?>/projects" class="btn btn-success styled  ">
                Смотреть все проекты
            </a>
        </div>
    </div>
</div>

<?php
include 'footer.php';
