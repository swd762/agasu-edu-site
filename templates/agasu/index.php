<?php
/**
 * @package     Joomla.Site
 * @subpackage  Templates.agasu
 *
 * @copyright   Copyright (C) 2021 AGASU by Ilya Kazalin. All rights reserved.
 * @license
 */

defined('_JEXEC') or die;

$app = JFactory::getApplication();
$user = JFactory::getUser();
$doc = JFactory::getDocument();

// Output as HTML5
$this->setHtml5(true);

// Getting params from template
$params = $app->getTemplate(true)->params;

//add bootstrap script
//JHtml::_('bootstrap.framework');
$scr = '/media/jui/js/jquery.min.js';
$repl_scr = '//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js';
$key = array_keys($doc->_scripts);
$value = array_values($doc->_scripts);
$key = str_replace($scr, $repl_scr, $key);
$doc->_scripts = array_combine($key, $value);

//unset($doc->_scripts[JURI::root(true) . 'media/jui/js/jquery.min.js']);

// add jquery
//JHtml::_('jquery.framework');

// Add Stylesheets
JHtml::_('stylesheet', 'template.css', array('version' => 'auto', 'relative' => true));
?>

<!DOCTYPE html>
<html lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">


    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css"/>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>

    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>


    <jdoc:include type="head"/>
</head>
<body class="site">
<div class="body">
    <header class="header">
        <div class="header-top">
            <div class="container header-container">
                <div class="header-shortcuts">
                    <a href="#">
                        <i class="bi bi-building"></i>
                        Сведения об образовательной организации
                    </a>
                    <a href="#">
                        <i class="bi bi-calendar4-week"></i>
                        Расписание
                    </a>
                    <a href="#">
                        <i class="bi bi-geo-alt"></i>
                        Контакты
                    </a>
                </div>
                <div class="header-options">
                    <div class="header-version-vi">
                        <a href="#">
                            <i class="bi bi-eye"></i>
                        </a>
                    </div>
                    <div class="header-account">
                        <a href="#">
                            <i class="bi bi-person-square"></i>
                        </a>
                    </div>
                    <ul class="header-language-select">
                        <li><a href="#">RU</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="header-bottom">
            <div class="container header-container">
                <a href="#" class="header-logo">
                    <div class="logo-img">
                        <img src="<?php echo $this->baseurl ?>templates/<?php echo $this->template ?>/images/tmp/logo_last.png" alt="logo-desktop">
                    </div>
                    <div class="logo-title">
                        АСТРАХАНСКИЙ ГОСУДАРСТВЕННЫЙ<br>
                        АРХИТЕКТУРНО-СТРОИТЕЛЬНЫЙ<br>
                        УНИВЕРСИТЕТ
                    </div>
                </a>
                <ul class="header-nav">
                    <li>
                        <a href="#">Университет</a>
                        <div class="nav-drop">
                            <div class="container header-container">
                                <div class="nav-box">
                                    <div class="nav-column">
                                        <h4 class="nav-title">Университет</h4>
                                    </div>
                                    <div class="nav-column">
                                        <ul>
                                            <li class="nav-heading"><a href="#">Сведения об учереждении</a></li>
                                            <li><a href="#">Основные сведения</a></li>
                                            <li><a href="#">Документы</a></li>
                                            <li><a href="#">Образование</a></li>
                                            <li><a href="#">Образовательные стандарты</a></li>
                                            <li><a href="#">Руководство</a></li>
                                        </ul>
                                    </div>
                                    <div class="nav-column">
                                        <ul>
                                            <li class="nav-heading"><a href="#">Колледжи и училища</a></li>
                                            <li><a href="#">Колледж строительства и экномики</a></li>
                                            <li><a href="#">Колледж ЖКХ</a></li>
                                            <li><a href="#">Профессиональное училище</a></li>
                                        </ul>
                                    </div>
                                    <div class="nav-column">
                                        <ul>
                                            <li class="nav-heading"><a href="#">Колледжи и училища</a></li>
                                            <li><a href="#">Колледж строительства и экномики</a></li>
                                            <li><a href="#">Колледж ЖКХ</a></li>
                                            <li><a href="#">Профессиональное училище</a></li>
                                        </ul>
                                    </div>
                                    <div class="nav-column"></div>
                                    <div class="nav-column">
                                        <ul>
                                            <li class="nav-heading"><a href="#">Колледжи и училища</a></li>
                                            <li><a href="#">Колледж строительства и экномики</a></li>
                                            <li><a href="#">Колледж ЖКХ</a></li>
                                            <li><a href="#">Профессиональное училище</a></li>
                                        </ul>
                                    </div>
                                    <div class="nav-column">
                                        <ul>
                                            <li class="nav-heading"><a href="#">Колледжи и училища</a></li>
                                            <li><a href="#">Колледж строительства и экномики</a></li>
                                            <li><a href="#">Колледж ЖКХ</a></li>
                                            <li><a href="#">Профессиональное училище</a></li>
                                        </ul>
                                    </div>
                                    <div class="nav-column"></div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="#">Абитуриенту</a>
                        <div class="nav-drop">
                            <div class="container header-container">
                                <div class="nav-box">
                                    <div class="nav-column">
                                        <h4 class="nav-title">Абитуриенту</h4>
                                    </div>
                                    <div class="nav-column">
                                        <ul>
                                            <li class="nav-heading"><a href="#">Сведения об учереждении</a></li>
                                            <li><a href="#">Основные сведения</a></li>
                                            <li><a href="#">Документы</a></li>
                                            <li><a href="#">Образование</a></li>
                                            <li><a href="#">Образовательные стандарты</a></li>
                                            <li><a href="#">Руководство</a></li>
                                        </ul>
                                    </div>
                                    <div class="nav-column">
                                        <ul>
                                            <li class="nav-heading"><a href="#">Колледжи и училища</a></li>
                                            <li><a href="#">Колледж строительства и экномики</a></li>
                                            <li><a href="#">Колледж ЖКХ</a></li>
                                            <li><a href="#">Профессиональное училище</a></li>
                                        </ul>
                                    </div>
                                    <div class="nav-column">
                                        <ul>
                                            <li class="nav-heading"><a href="#">Колледжи и училища</a></li>
                                            <li><a href="#">Колледж строительства и экномики</a></li>
                                            <li><a href="#">Колледж ЖКХ</a></li>
                                            <li><a href="#">Профессиональное училище</a></li>
                                        </ul>
                                    </div>
                                    <div class="nav-column"></div>
                                    <div class="nav-column">
                                        <ul>
                                            <li class="nav-heading"><a href="#">Колледжи и училища</a></li>
                                            <li><a href="#">Колледж строительства и экномики</a></li>
                                            <li><a href="#">Колледж ЖКХ</a></li>
                                            <li><a href="#">Профессиональное училище</a></li>
                                        </ul>
                                    </div>
                                    <div class="nav-column">
                                        <ul>
                                            <li class="nav-heading"><a href="#">Колледжи и училища</a></li>
                                            <li><a href="#">Колледж строительства и экномики</a></li>
                                            <li><a href="#">Колледж ЖКХ</a></li>
                                            <li><a href="#">Профессиональное училище</a></li>
                                        </ul>
                                    </div>
                                    <div class="nav-column">
                                        <ul>
                                            <li class="nav-heading"><a href="#">Колледжи и училища</a></li>
                                            <li><a href="#">Колледж строительства и экномики</a></li>
                                            <li><a href="#">Колледж ЖКХ</a></li>
                                            <li><a href="#">Профессиональное училище</a></li>
                                        </ul>
                                    </div>

                                    <div class="nav-column"></div>
                                    <div class="nav-column">
                                        <ul>
                                            <li class="nav-heading"><a href="#">Колледжи и училища</a></li>
                                            <li><a href="#">Колледж строительства и экномики</a></li>
                                            <li><a href="#">Колледж ЖКХ</a></li>
                                            <li><a href="#">Профессиональное училище</a></li>
                                        </ul>
                                    </div>
                                    <div class="nav-column">
                                        <ul>
                                            <li class="nav-heading"><a href="#">Колледжи и училища</a></li>
                                            <li><a href="#">Колледж строительства и экномики</a></li>
                                            <li><a href="#">Колледж ЖКХ</a></li>
                                            <li><a href="#">Профессиональное училище</a></li>
                                        </ul>
                                    </div>
                                    <div class="nav-column"></div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="#">Студенту</a>
                    </li>
                    <li>
                        <a href="#">Образование</a>
                    </li>
                    <li>
                        <a href="#">Наука</a>
                    </li>
                </ul>
                <div class="header-right-box">
                    <div class="search-wrapper">
                        <a href="#" class="header-search-btn">
                            <i class="ic-search"></i>
                        </a>
                    </div>
                    <a href="#" class="btn-burger">
                        <span></span>
                        <span></span>
                        <span></span>
                    </a>
                </div>
            </div>
        </div>

    </header>

    <section class="main">
        <section class="main-slider">
            <div class="contaier">


                <!-- Slider main container -->
                <div class="swiper-container">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide"
                             style="background: url('<?php echo $this->baseurl ?>templates/<?php echo $this->template ?>/images/tmp/slider-back-1.jpg')"
                        >
                            <img src="<?php echo $this->baseurl ?>templates/<?php echo $this->template ?>/images/tmp/wide-slide-1.jpg" alt="" style="display: none">
                        </div>
<!--                        <div class="swiper-slide"><img src="--><?php //echo $this->baseurl ?><!--templates/--><?php //echo $this->template ?><!--/images/tmp/wide-slide-1.jpg" alt="logo-desktop""-->
<!--                            alt="">-->
<!--                        </div>-->
<!--                        <div class="swiper-slide"><img src="--><?php //echo $this->baseurl ?><!--templates/--><?php //echo $this->template ?><!--/images/tmp/wide-slide-1.jpg" alt="logo-desktop""-->
<!--                            alt="">-->
<!--                        </div>-->
                    </div>
                    <!-- If we need pagination -->
                    <div class="swiper-pagination"></div>

                    <!-- If we need navigation buttons -->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>

                    <!-- If we need scrollbar -->
                    <!--                            <div class="swiper-scrollbar"></div>-->
                </div>


            </div>
        </section>
        <script>
            const swiper = new Swiper('.swiper-container', {
                // Optional parameters
                direction: 'horizontal',
                loop: true,

                // If we need pagination
                pagination: {
                    el: '.swiper-pagination',
                },

                // Navigation arrows
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },

                // And if we need scrollbar
                scrollbar: {
                    el: '.swiper-scrollbar',
                },
            });


            // let slider = document.querySelectorAll('.slide');
            // console.log(slider);


            // jQuery(function($){
            //     $('.main-slider').slick({
            //         dots: true,
            //         infinite: true,
            //         speed: 500,
            //         // fade: true,
            //         cssEase: 'linear',
            //         autoplay: true,
            //         // centerMode:true,
            //         // centerPadding: '10px',
            //         // variableWidth: true
            //     });
            // });

            // $('.test-slider').height('100');
        </script>


        <section class="news">
            <div class="container">
                <div class="news-wrapper">
                    <header class="news__header">
                        <h3>Новости</h3>
                        <!--                        <nav class="news__nav">-->
                        <!--                            <ul>-->
                        <!--                                <li><a href="#">События</a></li>-->
                        <!--                                <li><span> / </span></li>-->
                        <!--                                <li><a href="#"><i class="ic-calendar"></i>Календарь событий</a></li>-->
                        <!--                            </ul>-->
                        <!--                            <a href="#" class="all-orange-btn">все новости</a>-->
                        <!--                        </nav>-->
                    </header>
                    <section class="news__content row">
                        <?php
                        $i = 8;
                        while ($i != 0) { ?>
                            <div class="news-item col-xl-4 col-lg-4 col-md-6 col-sm-12">
                                <img src="<?php echo $this->baseurl ?>templates/<?php echo $this->template ?>/images/tmp/news.png"
                                     alt="" style="width: 100%">
                            </div>
                            <?php $i--;
                        } ?>
                    </section>
                </div>
            </div>
        </section>
        <section class="media">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8">
                        <section class="media-wrapper">
                            <header class="media__header">
                                <h3>Медиаресурсы</h3>
                                <!--                                <nav class="media__nav">-->
                                <!--                                    <ul>-->
                                <!--                                        <li><a href="#">Видео</a></li>-->
                                <!--                                        <li><span> / </span></li>-->
                                <!--                                        <li><a href="#"></i>Фото</a></li>-->
                                <!--                                    </ul>-->
                                <!--                                    <a href="#" class="all-orange-btn">все медиа</a>-->
                                <!--                                </nav>-->
                            </header>
                            <section class="media__content row">
                                <?php
                                $i = 8;
                                while ($i != 0) { ?>
                                    <div class="news-item col-xl-4 col-lg-4 col-md-6 col-sm-12">
                                        <img src="<?php echo $this->baseurl ?>templates/<?php echo $this->template ?>/images/tmp/video.png"
                                             alt="" style="width: 100%">
                                    </div>
                                    <?php $i--;
                                } ?>
                            </section>
                        </section>
                    </div>
                    <div class="col-xl-4">
                        <section class="socials-wrapper">
                            <header class="socials__header">
                                <h3>МЫ В СОЦ. СЕТЯХ</h3>
                                <nav class="socials__nav">
                                </nav>
                            </header>
                            <section class="socials__content">
                                <img src="<?php echo $this->baseurl ?>templates/<?php echo $this->template ?>/images/tmp/socials_object.jpg"
                                     alt="" style="width: 100%">
                            </section>
                        </section>
                    </div>
                </div>
            </div>
        </section>
        <section class="useful-links">
            <div class="container">
                <section class="useful-links-wrapper">
                    <header class="useful-links__header">
                        <h3>Полезные ссылки</h3>
                    </header>
                    <section class="useful-links__content row">
                        <div class="col-xl-12">
                            <section class="useful-links__slider-wrapper">
                                <img src="<?php echo $this->baseurl ?>templates/<?php echo $this->template ?>/images/tmp/good-links.png"
                                     alt="">
                            </section>
                        </div>
                    </section>
                </section>
            </div>
        </section>
        <section class="contacts">
            <div class="container">
                <div class="contacts-wrapper">
                    <header class="contacts__header">
                        <h3>АДРЕСА КОРПУСОВ</h3>
                    </header>
                    <section class="contacts__main row">
                        <section class="contacts__branches-list col-xl-6">
                            <img src="<?php echo $this->baseurl ?>templates/<?php echo $this->template ?>/images/tmp/accordeon.jpg" alt="">
                        </section>
                        <section class="contacts__map col-xl-6">
                            <img src="<?php echo $this->baseurl ?>templates/<?php echo $this->template ?>/images/tmp/map_img.jpg" alt="#">
                        </section>
                    </section>
                </div>
            </div>
        </section>
    </section>
    <footer class="footer">
        <div class="container">
            <div class="row">
                <section class="footer-info col-xl-4">
                    <a href="#" class="footer-logo">
                        <div class="footer-logo__image">
                            <img src="<?php echo $this->baseurl ?>templates/<?php echo $this->template ?>/images/tmp/logo_footer.png"
                                 alt="">
                        </div>
                        <p class="footer-logo__title">астраханский государственный<br>архитектурно-строительный<br>университет</p>
                    </a>
                    <div class="footer-contacts">
                        <section class="footer-contacts__phones">
                            <div class="phones_item">
                                <h5>+7 (8512) 49-42-15</h5>
                                <p>Приемная ректора</p>
                            </div>
                            <div class="phones_item">
                                <h5>+7 (8512) 49-42-19</h5>
                                <p>Приемная комиссия</p>
                            </div>
                        </section>
                        <section class="footer-contacts__address">
                            Россия, г. Астрахань, ул. Татищева, 18
                        </section>
                        <section class="footer-contacts__email">
                            rector@agasu.ru
                        </section>
                    </div>
                </section>
                <section class="footer-nav col-xl-5">
                    <div class="row">
                        <div class="row">
                            <div class="col">
                                <ul class="footer-nav__col">
                                    <li class="heading"><a href="#">Университет</a></li>
                                    <li><a href="#">О нас</a></li>
                                    <li><a href="#">Контакты</a></li>
                                    <li><a href="#">Структура</a></li>
                                </ul>
                            </div>
                            <div class="col">
                                <ul class="footer-nav__col">
                                    <li class="heading"><a href="#">Наука</a></li>
                                    <li><a href="#">Научные издания</a></li>
                                    <li><a href="#">Инновационная деятельность</a></li>
                                    <li><a href="#">Конкурсы и гранты</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <ul class="footer-nav__col">
                                    <li class="heading"><a href="#">Образование</a></li>
                                    <li><a href="#">Факультеты</a></li>
                                    <li><a href="#">Колледжи и училища</a></li>
                                    <li><a href="#">Филиалы</a></li>
                                </ul>
                            </div>
                            <div class="col">
                                <ul class="footer-nav__col">
                                    <li class="heading"><a href="#">Абитуриенту</a></li>
                                    <li><a href="#">Поступление</a></li>
                                    <li><a href="#">Личный кабинет</a></li>
                                    <li><a href="#">Документы</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="footer-extra col-xl-3">
                    <a href="#" class="footer-extra__button footer-extra__button_eye">
                        <i class="ic-eye"></i>
                        Версия<br> для слабовидящих
                    </a>
                    <a href="#" class="footer-extra__button footer-extra__button_reception">
                        <i class="ic-appeal"></i>
                        Обращения граждан
                    </a>
                    <section class="footer-extra__socials">
                        <a href="#" class="socials_item"><i class="ic-vk"></i></a>
                        <a href="#" class="socials_item"><i class="ic-facebook"></i></a>
                        <a href="#" class="socials_item"><i class="ic-instagram"></i></a>
                        <a href="#" class="socials_item"><i class="ic-odnoklassniki"></i></a>
                    </section>
                    <section class="footer-extra__copyright">
                        © агасу 2021
                    </section>
                </section>
            </div>
        </div>
    </footer>
</div>
<script type="text/javascript" src="<?php echo $this->baseurl ?>templates/<?php echo $this->template ?>/addons/slick/slick.min.js"></script>

</body>