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

// Output as HTML5
$this->setHtml5(true);

// Getting params from template
$params = $app->getTemplate(true)->params;

//add bootstrap script
JHtml::_('bootstrap.framework');

// Add Stylesheets
JHtml::_('stylesheet', 'template.css', array('version' => 'auto', 'relative' => true));
?>

<!DOCTYPE html>
<html lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <jdoc:include type="head"/>
</head>
<body class="site">
<div class="body">
<!--    <section class="header">-->
<!--        <div class="container">-->
<!--            <section class="desktop-header" style="">-->
<!--                <section class="top-nav">-->
<!--                    <div class="top-nav_hamburger-btn">-->
<!--                        <span></span>-->
<!--                        <span></span>-->
<!--                        <span></span>-->
<!--                    </div>-->
<!--                    <ul class="top-nav_shortcuts" style="margin-bottom: 0">-->
<!--                        <li class="top-nav_shortcuts-item"><a href="#">RU<i class="ic-arrow-bottom" style="font-size: 8px;vertical-align: middle;padding-left: 3px"></i></a>-->
<!--                        </li>-->
<!--                        <li class="top-nav_shortcuts-item"><a href="#"><i class="ic-eye" style="font-size: 20px"></i></a></li>-->
<!--                        <li class="top-nav_shortcuts-item"><a href="#"><i class="ic-search"></i></a></li>-->
<!--                    </ul>-->
<!--                </section>-->
<!--                <section class="shortcuts-nav">-->
<!--                    <ul>-->
<!--                        <li><a href="#" class="header-menu_shortcuts-item">-->
<!--                                <i class="ic-world"></i>-->
<!--                                Образовательные ресурсы-->
<!--                            </a>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <a href="#" class="header-menu_shortcuts-item">-->
<!--                                <i class="ic-calendar"></i>-->
<!--                                Расписание-->
<!--                            </a>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <a href="#" class="header-menu_shortcuts-item">-->
<!--                                <i class="ic-user"></i>-->
<!--                                Личный кабинет-->
<!--                            </a>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <a href="#" class="header-menu_shortcuts-item">-->
<!--                                <i class="ic-location-outline"></i>-->
<!--                                Контакты-->
<!--                            </a>-->
<!--                        </li>-->
<!--                    </ul>-->
<!--                </section>-->
<!--                <section class="header-main">-->
<!--                    <div class="header-main_logo">-->
<!--                        <img src="--><?php //echo $this->baseurl ?><!--templates/--><?php //echo $this->template ?><!--/images/logo.png"-->
<!--                             alt="">-->
<!--                        <div style="width: 251px; margin-left: 10px">-->
<!--                            <p style="margin-top: 20px">АСТРАХАНСКИЙ ГОСУДАРСТВЕННЫЙ АРХИТЕКТУРНО-СТРОИТЕЛЬНЫЙ УНИВЕРСИТЕТ</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="header-main_nav">-->
<!--                        <ul>-->
<!--                            <li>-->
<!--                                <a href="#" class="header-menu_menu-item">-->
<!--                                    Университет-->
<!--                                </a>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <a href="#" class="header-menu_menu-item">-->
<!--                                    Абитуриенту-->
<!--                                </a>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <a href="#" class="header-menu_menu-item">-->
<!--                                    Студенту-->
<!--                                </a>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <a href="#" class="header-menu_menu-item">-->
<!--                                    Образование-->
<!--                                </a>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <a href="#" class="header-menu_menu-item">-->
<!--                                    Наука-->
<!--                                </a>-->
<!--                            </li>-->
<!--                        </ul>-->
<!--                    </div>-->
<!--                    <div class="header-main__menu">-->
<!---->
<!--                    </div>-->
<!--                </section>-->
<!--            </section>-->
<!--            <section class="mobile-header">-->
<!--                <div class="mobile-header-wrapper">-->
<!--                    <section class="mobile-header-bar">-->
<!--                        <a href="#" class="mobile-header__logo">-->
<!--                            <div class="logo__image">-->
<!--                                <img src="--><?php //echo $this->baseurl ?><!--templates/--><?php //echo $this->template ?><!--/images/logo.svg"-->
<!--                                     alt="">-->
<!--                            </div>-->
<!--                            <div class="logo__title">-->
<!--                                агасу-->
<!--                            </div>-->
<!--                        </a>-->
<!--                        <div class="mobile-header__shortcuts">-->
<!--                            <ul>-->
<!--                                <li><a href="#"><i class="ic-calendar"></i></a></li>-->
<!--                                <li><a href="#"><i class="ic-place"></i></a></li>-->
<!--                                <li><a href="#"><i class="ic-search"></i></a></li>-->
<!--                                <li><a href="#" class="mobile-header__hamburger-btn">-->
<!--                                        <span></span>-->
<!--                                        <span></span>-->
<!--                                        <span></span>-->
<!--                                    </a>-->
<!--                                </li>-->
<!--                            </ul>-->
<!--                        </div>-->
<!--                    </section>-->
<!--                    <section class="mobile-header-search">-->
<!--                        <input type="search">-->
<!--                    </section>-->
<!--                </div>-->
<!--            </section>-->
<!--        </div>-->
<!--    </section>-->
    <header class="header">
        <div class="header-top">
            <div class="container">
                <div class="header-shortcuts">
                    <a href="#">
                        <i class="ic-world"></i>
                        сведения об образовательной организации
                    </a>
                    <a href="#">
                        <i class="ic-calendar"></i>
                        расписание
                    </a>
                    <a href="#">
                        <i class="ic-place"></i>
                        контакты
                    </a>
                </div>
                <div class="header-options">
                    <div class="header-version-vi">
                        <a href="#">
                            <i class="ic-eye"></i>
                        </a>
                    </div>
                    <div class="header-account">
                        <a href="#">
                            <i class="ic-user"></i>
                        </a>
                    </div>
                    <ul class="header-language-select">
                        <li><a href="#">RU</a></li>
                    </ul>
                </div>
            </div>
        </div>

    </header>

    <section class="main">
        <section class="main-slider">
            <div class="container">
                <div class="row">
                    <div class="main-slider_wrapper col-xl-12">
                        <img src="<?php echo $this->baseurl ?>templates/<?php echo $this->template ?>/images/tmp/slider.png"
                             alt="">
                    </div>
                </div>
            </div>
        </section>
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
</body>