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

            <div id="func-testing" class="col-md-4 item search redirect" data-redirect="<?php echo $baseLink; ?>/competence#func" onclick="javascript: location = '<?php echo $baseLink; ?>/competence#func';">
                <div class="icon">
                    <img src="img/icon-search.png" class="main"/>
                    <img src="img/icon-search_c.png" class="color"/>
                </div>
                <div class="header-text">
                    Функциональное тестирование
                </div>
                <div class="body-text">
                    Это процесс или результат формирования требуемых свойств и характеристик продукции по мере её создания
                </div>
            </div>

            <div id="ui-testing" class="col-md-4 item write redirect" data-redirect="<?php echo $baseLink; ?>/competence#ui">
                <div class="icon">
                    <img src="img/icon-write.png" class="main"/>
                    <img src="img/icon-write_c.png" class="color"/>
                </div>
                <div class="header-text">
                    Юзабилити тестирование
                </div>
                <div class="body-text">
                    Это процесс или результат формирования требуемых свойств и характеристик 
                </div>
            </div>

            <div id="i18n-testing" class="col-md-4 item az redirect" data-redirect="<?php echo $baseLink; ?>/competence#i18n">
                <div class="icon">
                    <img src="img/icon-az.png" class="main"/>
                    <img src="img/icon-az_c.png" class="color" />
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

            <div id="mobile-app" class="col-md-4 item phone redirect" data-redirect="<?php echo $baseLink; ?>/competence#app">
                <div class="icon">
                    <img src="img/icon-phone.png" class="main"/>
                    <img src="img/icon-phone_c.png" class="color"/>
                </div>
                <div class="header-text">
                    Мобильные приложения
                </div>
                <div class="body-text">
                    Это процесс или результат формирования требуемых свойств и характеристик продукции по мере её создания
                </div>

            </div>

            <div id="web-sites" class="col-md-4 item desctop redirect" data-redirect="<?php echo $baseLink; ?>/competence#web">
                <div class="icon">
                    <img src="img/icon-desctop.png" class="main"/>
                    <img src="img/icon-desctop_c.png" class="color"/>
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

            <div id="social-app" class="col-md-4 item social redirect" data-redirect="<?php echo $baseLink; ?>/competence#social">
                <div class="icon">
                    <img src="img/icon-social.png" class="main"/>
                    <img src="img/icon-social_c.png" class="color"/>
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
                    <div class="swiper-slide" style="background-image:url(img/projects/mimi.jpg)"></div>
                    <div class="swiper-slide" style="background-image:url(img/projects/papers.jpg)"></div>
                    <div class="swiper-slide" style="background-image:url(img/projects/arkadiy.jpg)"></div>
                    <div class="swiper-slide" style="background-image:url(img/projects/words.jpg)"></div>
                    <div class="swiper-slide" style="background-image:url(img/projects/lantern.jpg)"></div>
                    <div class="swiper-slide" style="background-image:url(img/projects/village.jpg)"></div>
                    <div class="swiper-slide" style="background-image:url(img/projects/mult.jpg)"></div>
                    <div class="swiper-slide" style="background-image:url(img/projects/mult-site.png)"></div>
                    <div class="swiper-slide" style="background-image:url(img/projects/det.png)"></div>
                    <div class="swiper-slide" style="background-image:url(img/projects/patrol.png)"></div>
                    <div class="swiper-slide" style="background-image:url(img/projects/rt.png)"></div>

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
                        Неразлучные друзья ми-ми-мишки Кеша и Тучка. Непоседа бурый и умница белый. Они живут в сказочном лесу вместе с милой Лисичкой и верным Цыпой. Каждый день ми-ми-мишек наполнен приключениями, изобретениями, развлечениями и обязательным изучением мира. Ми-ми-мишки с радостью примут вашего ребенка в свою весёлую, увлекательную и, главное, развивающую игру!
                    </div>
                </div>
                <div id="project-desc-1" class="item">
                    <h1 class="header-text">
                        Бумажки
                    </h1>
                    <div class="body-text font-light">
                        Неразлучные друзья, лось Аристотель и дятел Тюк-Тюк, приглашают вас и ваших детей бумажно провести время в новом интерактивном мультфильме “Бумажки”. Ари и Тюк помогут вашему ребенку раскрыть его творческий потенциал, развить креативное мышление и научат не бояться экспериментировать.
                    </div>
                </div>
                <div id="project-desc-2" class="item">
                    <h1 class="header-text">
                        Аркадий паровозов
                    </h1>
                    <div class="body-text font-light">
                        Аркадий Паровозов - герой, которому вы можете доверить обучение вашего малыша. В новой игре для телефонов и планшетов приготовлены задания для детей на логику и внимание, упражнения для тренировки памяти и интерактивные задания, которые помогут ребенку познать мир.


                    </div>
                </div>
                <div id="project-desc-3" class="item">
                    <h1 class="header-text">
                        Мультизнайка: Слова
                    </h1>
                    <div class="body-text font-light">
                        «Слова» - это уникальный обучающий проект для детей с любимыми героями телеканала «Мульт». Озорные монстрики украли магическую шляпу и разобрали слова по частям. Вам необходимо помочь мишкам Кеше и Тучке вернуть все слоги на место. Играя в "Слова", ваш ребенок быстрее научится читать и расширит свой кругозор.

                    </div>
                </div>
                <div id="project-desc-4" class="item">
                    <h1 class="header-text">
                        Волшебный фонарь
                    </h1>
                    <div class="body-text font-light">
                        Погрузитесь в атмосферу известных произведений: спасайтесь от пиратов вместе с Маленьким капитаном, откройте тайну Человека-невидимки, стреляйте из лука с Робином Гудом!

                        «Волшебный фонарь» - это серия интерактивных развивающих историй, которые можно не только посмотреть, но и принять в них непосредственное участие.

                    </div>
                </div>
                <div id="project-desc-5" class="item">
                    <h1 class="header-text">
                        Станица
                    </h1>
                    <div class="body-text font-light">
                        Стань частью захватывающей истории любви красавицы-казачки Марыси в новой игре-приключении по мотивам известного сериала телеканала "Россия 1" «Пока станица спит» – лауреата премии ТЭФИ-2014.
                        Ищи предметы, играй в мини-игры, исследуй живописные уголки казачьей станицы и уездного Устюжина. Любовь, опасность и новые приключения увлекут тебя в интерактивном романе со знакомыми героями. Помоги влюбленным обрести свое счастье!
                    </div>
                </div>
                <div id="project-desc-6" class="item">
                    <h1 class="header-text">
                        Мульт
                    </h1>
                    <div class="body-text font-light">
                        В данный момент в приложении доступны следующие мультфильмы: «Сказочный патруль», «Лео и Тиг», «Лунтик и его друзья», «Барбоскины», «Ми-ми-мишки», «Аркадий Паровозов», «Котики, вперёд», «Защитники», «Куми-Куми», «Буба», «Три котёнка», «Бумажки», «Волшебный фонарь», «Тима и Тома», «Волшебники двора», «Грузовичок Лёва», «Овечки Холли и Долли», «Загадки шамана», «Доктор Машинкова», «Ангел Бэби», «Приключения Ам-Няма», «Врумиз», «Марин и его друзья. Подводные истории», «Дуда и дада», «Соник Бум», «Юху и его друзья», «Роботы Болт и Блип», «Овощная вечеринка», «Чичилэнд». 
                    </div>
                </div>
                <div id="project-desc-7" class="item">
                    <h1 class="header-text">
                        Интерактивный Мульт
                    </h1>
                    <div class="body-text font-light">
                        В данный момент в приложении доступны следующие мультфильмы: «Сказочный патруль», «Лео и Тиг», «Лунтик и его друзья», «Барбоскины», «Ми-ми-мишки», «Аркадий Паровозов», «Котики, вперёд», «Защитники», «Куми-Куми», «Буба», «Три котёнка», «Бумажки», «Волшебный фонарь», «Тима и Тома», «Волшебники двора», «Грузовичок Лёва», «Овечки Холли и Долли», «Загадки шамана», «Доктор Машинкова», «Ангел Бэби», «Приключения Ам-Няма», «Врумиз», «Марин и его друзья. Подводные истории», «Дуда и дада», «Соник Бум», «Юху и его друзья», «Роботы Болт и Блип», «Овощная вечеринка», «Чичилэнд». 
                    </div>
                </div>
                <div id="project-desc-8" class="item">
                    <h1 class="header-text">
                        Тайны следствия
                    </h1>
                    <div class="body-text font-light">
                        Головоломка по мотивам сериала “Тайны Следствия”. Помогай героям сериала распутывать самые загадочные дела: собери улики, проведи расследование, отправляйся в погоню!
                    </div>
                </div>
                <div id="project-desc-9" class="item">
                    <h1 class="header-text">
                        Сказочный патруль
                    </h1>
                    <div class="body-text font-light">
                        В мультике этого не было! Играй за любую из волшебниц, выполняй задания, фотографируй, коллекционируй магических животных и соревнуйся с друзьями в новой клевой игре для девчонок и парней. Создавай свой декор, коллекционируй редкие растения и фотографии сказочных животных, используй магические способности.
                    </div>
                </div>
                <div id="project-desc-10" class="item">
                    <h1 class="header-text">
                        Россия 1
                    </h1>
                    <div class="body-text font-light">
                        "Россия 1" - официальное приложение Всероссийской государственной телерадиокомпании для мобильных устройств, работающих под управлением Android. 
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
