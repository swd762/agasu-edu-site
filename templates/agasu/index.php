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

// load lang
$lang = JFactory::getLanguage();
$lang->load('ru-RU');

// get item id for page
$jInput = $app->input;
$itemID = $jInput->get('Itemid', null, int);

//echo '<pre>';
//var_dump($itemID);
//echo '</pre>';
// Getting params from template
$params = $app->getTemplate(true)->params;

//add bootstrap script
//JHtml::_('bootstrap.framework');
//$scr = '/media/jui/js/jquery.min.js';
//$repl_scr = '//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js';
//$key = array_keys($doc->_scripts);
//$value = array_values($doc->_scripts);
//$key = str_replace($scr, $repl_scr, $key);
//$doc->_scripts = array_combine($key, $value);
//
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
    <script src="<?php echo $this->baseurl ?>templates/<?php echo $this->template ?>/js/main.js" defer></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://api-maps.yandex.ru/2.1/?apikey=ваш API-ключ&lang=ru_RU"
            type="text/javascript">
    </script>
    <jdoc:include type="head"/>
</head>
<body class="site">
<div class="body">
    <!-- *** Header *** -->
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
                    <img class="logo-img" src="<?php echo $this->baseurl ?>templates/<?php echo $this->template ?>/images/logo-exp-gray-40.svg" alt="logo">
                    <img class="logo-img-mobile" src="<?php echo $this->baseurl ?>templates/<?php echo $this->template ?>/images/logo-exp-mobile-1.svg" alt="logo-mobile">
                </a>
                <ul class="header-nav">
                    <li class="header-nav__item">
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
                                            <li class="nav-heading"><a href="#">Филиалы</a></li>
                                            <li><a href="#">Енотаевский филиал</a></li>
                                            <li><a href="#">Харабалинский филиал</a></li>
                                            <!--                                            <li><a href="#">Образовательные стандарты</a></li>-->
                                            <!--                                            <li><a href="#">Руководство</a></li>-->
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
                                            <li class="nav-heading"><a href="#">Факультеты</a></li>
                                            <li><a href="#">Архитектурный факультет</a></li>
                                            <li><a href="#">Экономический факультет</a></li>
                                            <li><a href="#">Строительный факультет</a></li>
                                            <li><a href="#">Факультет ИС и ПБ</a></li>
                                        </ul>
                                    </div>
                                    <div class="nav-column"></div>
                                    <div class="nav-column">
                                        <ul>
                                            <li class="nav-heading"><a href="#">Сотрудникам</a></li>
                                            <li class="nav-heading"><a href="#">Международная деятельность</a></li>
                                            <li class="nav-heading"><a href="#">Работодателям</a></li>
                                            <!--                                            <li><a href="#">Профессиональное училище</a></li>-->
                                        </ul>
                                    </div>
                                    <div class="nav-column">
                                        <ul>
                                            <li class="nav-heading"><a href="#">Прием обращений</a></li>
                                            <!--                                            <li><a href="#">Колледж строительства и экномики</a></li>-->
                                            <!--                                            <li><a href="#">Колледж ЖКХ</a></li>-->
                                            <!--                                            <li><a href="#">Профессиональное училище</a></li>-->
                                        </ul>
                                    </div>
                                    <div class="nav-column"></div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="header-nav__item">
                        <a href="#">Абитуриенту</a>
                        <div class="nav-drop">
                            <div class="container header-container">
                                <div class="nav-box">
                                    <div class="nav-column">
                                        <h4 class="nav-title">Абитуриенту</h4>
                                    </div>
                                    <div class="nav-column">
                                        <ul>
                                            <li class="nav-heading"><a href="#">Приемная комиссия 2021</a></li>
                                            <li class="nav-heading"><a href="#">Приемная кампания</a></li>
                                            <li><a href="#">Прием на программы бакалавриата и специалитета</a></li>
                                            <li><a href="#">Прием на программы магистратуры</a></li>
                                            <li><a href="#">Прием на программы аспирантуры</a></li>
                                            <li><a href="#">Прием на программы среднего профессионального образования</a></li>
                                            <li><a href="#">Стоимость обучения</a></li>
                                            <li><a href="#">Целевой прием</a></li>
                                        </ul>
                                    </div>
                                    <div class="nav-column">
                                        <ul>
                                            <li class="nav-heading"><a href="#">Специальности и направления подготовки</a></li>
                                            <li class="nav-heading"><a href="#">Общая информация</a></li>
                                            <li class="nav-heading"><a href="#">Личный кабинет абитуриента</a></li>
                                            <li class="nav-heading"><a href="#">Конкурс абитуриентов</a></li>
                                        </ul>
                                    </div>
                                    <div class="nav-column">
                                        <ul>
                                            <li class="nav-heading"><a href="#">Доп образование</a></li>
                                            <li><a href="#">Малая академия АиД</a></li>
                                            <li><a href="#">Арт-студия «Белый квадрат»</a></li>
                                            <!--                                            <li><a href="#">Профессиональное училище</a></li>-->
                                        </ul>
                                    </div>
                                    <div class="nav-column"></div>
                                    <div class="nav-column">
                                        <ul>
                                            <li class="nav-heading"><a href="#">Школьникам</a></li>
                                            <li><a href="#">Довузовская подготовка</a></li>
                                            <!--                                            <li><a href="#">Колледж ЖКХ</a></li>-->
                                            <!--                                            <li><a href="#">Профессиональное училище</a></li>-->
                                        </ul>
                                    </div>
                                    <!--                                    <div class="nav-column">-->
                                    <!--                                        <ul>-->
                                    <!--                                            <li class="nav-heading"><a href="#">Колледжи и училища</a></li>-->
                                    <!--                                            <li><a href="#">Колледж строительства и экномики</a></li>-->
                                    <!--                                            <li><a href="#">Колледж ЖКХ</a></li>-->
                                    <!--                                            <li><a href="#">Профессиональное училище</a></li>-->
                                    <!--                                        </ul>-->
                                    <!--                                    </div>-->
                                    <!--                                    <div class="nav-column">-->
                                    <!--                                        <ul>-->
                                    <!--                                            <li class="nav-heading"><a href="#">Колледжи и училища</a></li>-->
                                    <!--                                            <li><a href="#">Колледж строительства и экномики</a></li>-->
                                    <!--                                            <li><a href="#">Колледж ЖКХ</a></li>-->
                                    <!--                                            <li><a href="#">Профессиональное училище</a></li>-->
                                    <!--                                        </ul>-->
                                    <!--                                    </div>-->

                                    <div class="nav-column"></div>
                                    <!--                                    <div class="nav-column">-->
                                    <!--                                        <ul>-->
                                    <!--                                            <li class="nav-heading"><a href="#">Колледжи и училища</a></li>-->
                                    <!--                                            <li><a href="#">Колледж строительства и экномики</a></li>-->
                                    <!--                                            <li><a href="#">Колледж ЖКХ</a></li>-->
                                    <!--                                            <li><a href="#">Профессиональное училище</a></li>-->
                                    <!--                                        </ul>-->
                                    <!--                                    </div>-->
                                    <!--                                    <div class="nav-column">-->
                                    <!--                                        <ul>-->
                                    <!--                                            <li class="nav-heading"><a href="#">Колледжи и училища</a></li>-->
                                    <!--                                            <li><a href="#">Колледж строительства и экномики</a></li>-->
                                    <!--                                            <li><a href="#">Колледж ЖКХ</a></li>-->
                                    <!--                                            <li><a href="#">Профессиональное училище</a></li>-->
                                    <!--                                        </ul>-->
                                    <!--                                    </div>-->
                                    <div class="nav-column"></div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="header-nav__item">
                        <a href="#">Студенту</a>
                        <div class="nav-drop">
                            <div class="container header-container">
                                <div class="nav-box">
                                    <div class="nav-column">
                                        <h4 class="nav-title">Студенту</h4>
                                    </div>
                                    <div class="nav-column">
                                        <ul>
                                            <li class="nav-heading"><a href="#">Личный кабинет студента</a></li>
                                            <li><a href="#">ЭОС</a></li>
                                            <li><a href="#">Электронная информационно-образовательная среда</a></li>
                                            <li><a href="#">Студенческое научное общество</a></li>
                                            <li><a href="#">Социальная поддержка</a></li>
                                            <li><a href="#">Прием на программы среднего профессионального образования</a></li>
                                            <li><a href="#">Стоимость обучения</a></li>
                                            <li><a href="#">Целевой прием</a></li>
                                        </ul>
                                    </div>
                                    <div class="nav-column">
                                        <ul>
                                            <li class="nav-heading"><a href="#">Портфолио студентов</a></li>
                                            <li class="nav-heading"><a href="#">Социокультурная среда</a></li>
                                            <!--                                            <li class="nav-heading"><a href="#">Личный кабинет абитуриента</a></li>-->
                                            <!--                                            <li class="nav-heading"><a href="#">Конкурс абитуриентов</a></li>-->
                                        </ul>
                                    </div>
                                    <div class="nav-column">
                                    </div>

                                    <div class="nav-column"></div>
                                    <div class="nav-column"></div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="header-nav__item">
                        <a href="#">Образование</a>
                        <div class="nav-drop">
                            <div class="container header-container">
                                <div class="nav-box">
                                    <div class="nav-column">
                                        <h4 class="nav-title">Образование</h4>
                                    </div>
                                    <div class="nav-column">
                                        <ul>
                                            <li><a href="#">Библиотечный фонд</a></li>
                                            <li><a href="#">Магистратура</a></li>
                                        </ul>
                                    </div>
                                    <div class="nav-column">
                                        <ul>
                                            <li class="nav-heading"><a href="#">Дополнительное образование</a></li>
                                            <li><a href="#">(МФЦПК ЖКХ)</a></li>
                                            <li><a href="#">Учебно-методический центр по ГО и ЧС</a></li>
                                            <li><a href="#">Автошкола</a></li>
                                            <li class="nav-heading"><a href="#">Дополнительное образование АГАСУ</a></li>
                                            <li><a href="#">Арт-студия «Белый квадрат»</a></li>
                                        </ul>
                                    </div>
                                    <div class="nav-column">
                                    </div>

                                    <div class="nav-column"></div>
                                    <div class="nav-column"></div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="header-nav__item">
                        <a href="#">Наука</a>
                        <div class="nav-drop">
                            <div class="container header-container">
                                <div class="nav-box">
                                    <div class="nav-column">
                                        <h4 class="nav-title">Наука</h4>
                                    </div>
                                    <div class="nav-column">
                                        <ul>
                                            <li><a href="#">Отдел научно-исследовательской работы</a></li>
                                            <li><a href="#">План научных мероприятий 2020-2021 гг.</a></li>
                                            <li><a href="#">Научно-исследовательская деятельность</a></li>
                                            <li><a href="#">Научные издания</a></li>
                                            <li><a href="#">Научно-исследовательская работа студентов</a></li>
                                        </ul>
                                    </div>
                                    <div class="nav-column">
                                        <ul>
                                            <li><a href="#">Инновационная деятельность</a></li>
                                            <li><a href="#">Конкурсы и гранты</a></li>
                                            <li><a href="#">Документы, регламентирующие научно-исследовательскую деятельность АГАСУ</a></li>
                                            <li><a href="#">Конференции</a></li>
                                        </ul>
                                    </div>
                                    <div class="nav-column">
                                    </div>
                                    <!---->
                                    <!--                                    <div class="nav-column"></div>-->
                                    <!--                                    <div class="nav-column"></div>-->
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <ul class="header-nav-mobile">
                    <li>
                        <a href="#">
                            <i class="bi bi-calendar4-week"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="bi bi-geo-alt"></i>
                        </a>
                    </li>
                    <li><a href="#">
                            <i class="bi bi-person-square"></i>
                        </a>
                    </li>
                </ul>
                <span class="target"></span>
                <div class="header-right-box">
                    <div class="search-wrapper">
                        <a href="#" class="header-search-btn ic-search">
                            <!--                            <i class="ic-search"></i>-->
                        </a>
                        <form class="search header-search" method="GET" action="#">
                            <button class="search-submit-btn ic-search"></button>
                            <input type="text" name="header-search" autocomplete="off">
                            <span class="search-close-btn bi bi-x-lg"></span>
                        </form>
                    </div>
                    <a href="#" class="btn-burger">
                        <span></span>
                        <span></span>
                        <span></span>
                    </a>
                </div>
            </div>
            <div class="menu-sitemap">
                <div class="container">
                    <div class="menu-sitemap-head">
                        <a href="#" class="sitemap-logo">
                            <img src="<?php echo $this->baseurl ?>templates/<?php echo $this->template ?>/images/logo-sitemap.svg" alt="logo">
                        </a>
                        <form action="#" class="search"><i class="bi bi-search"></i></form>
                        <span class="sitemap-close" style="font-size: 25px"><i class="bi bi-x-lg"></i></span>
                    </div>
                    <div class="sitemap-main">
                        <div class="sitemap-col">
                            <ul>
                                <li class="nav-heading"><a href="#">Сведения об учереждении</a></li>
                                <li><a href="#">Основные сведения</a></li>
                                <li><a href="#">Документы</a></li>
                                <li><a href="#">Образование</a></li>
                                <li><a href="#">Образовательные стандарты</a></li>
                                <li><a href="#">Руководство</a></li>
                            </ul>
                        </div>
                        <div class="sitemap-col">
                            <ul>
                                <li class="nav-heading"><a href="#">Колледжи и училища</a></li>
                                <li><a href="#">Колледж строительства и экономики</a></li>
                                <li><a href="#">Колледж ЖКХ</a></li>
                                <li><a href="#">Профессиональое училище</a></li>
                            </ul>
                        </div>
                        <div class="sitemap-col">
                            <ul>
                                <li class="nav-heading"><a href="#">Студентам</a></li>
                                <li><a href="#">Личный кабинет студента</a></li>
                                <li><a href="#">ЭОС</a></li>
                                <li><a href="#">Студенческое научное общество</a></li>
                                <li><a href="#">Социальная поддержка</a></li>
                                <li><a href="#">Портфолио студентов</a></li>
                            </ul>
                        </div>
                        <div class="sitemap-col">
                            <ul>
                                <li class="nav-heading"><a href="#">Образование</a></li>
                                <li><a href="#">Библиотечный фонд</a></li>
                                <li><a href="#">Магистратура</a></li>
                                <li><a href="#">Дополнительное образование</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="sitemap-footer">
                        <div>
                            <a href="#" class="sitemap-social-icon"><i class="ic-vk"></i></a>
                            <a href="#" class="sitemap-social-icon"><i class="ic-facebook"></i></a>
                            <a href="#" class="sitemap-social-icon"><i class="ic-instagram"></i></a>
                            <a href="#" class="sitemap-social-icon"><i class="ic-odnoklassniki"></i></a>
                        </div>
                        <div>© АГАСУ 2021</div>
                        <div>
                            <a href="#" class="sitemap-social-icon" style="margin-right: 5px">RU</a>
                            <a href="#" class="sitemap-social-icon"><i class="ic-eye"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </header>
    <!-- *** -->
    <section class="main">
        <section class="main-slider">
            <!-- Slider main container -->
            <div class="swiper-container">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide"
                         style="background: url('<?php echo $this->baseurl ?>templates/<?php echo $this->template ?>/images/tmp/slider-back-2.jpg')">
                        <div class="container">
                            <div class="slide-info-block">
                                <h3>
                                    <a href="#">Онлайн обучение для иностранных студентов</a>
                                </h3>
                                <p>Учиться и получать высшее образование можно из любой точки мира</p>
                            </div>

                        </div>
                    </div>
                    <div class="swiper-slide"
                         style="background: url('<?php echo $this->baseurl ?>templates/<?php echo $this->template ?>/images/tmp/slider-back-1.jpg')"
                    >
                        <div class="container">
                            <div class="slide-info-block">
                                <h3>
                                    <a href="#">Конструктор успеха</a>
                                </h3>
                                <p>Как найти свое место в жизни, заняться тем, что получается и приносит счастье</p>
                            </div>

                        </div>
                    </div>

                    <div class="swiper-slide"
                         style="background: url('<?php echo $this->baseurl ?>templates/<?php echo $this->template ?>/images/tmp/slider-back-3.jpg')"
                    >
                        <div class="container">
                            <div class="slide-info-block">
                                <h3>
                                    <a href="#">Открытый конкурс проектов «Зеркальные лаборатории»</a>
                                </h3>
                                <p>Прием заявок с 20 мая по 20 июня 2021 года</p>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>

                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>

                <!-- If we need scrollbar -->
                <!--                            <div class="swiper-scrollbar"></div>-->
            </div>
        </section>
        <script>
            const swiper = new Swiper('.swiper-container', {
                // // Optional parameters
                // direction: 'horizontal',
                loop: true,

                // If we need pagination
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true
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
        </script>


        <!-- news block -->
        <section class="news-section">
            <div class="container">
                <div class="row">
                    <section class="news col-xl-9">
                        <? if ($itemID != 103) { ?>
                            <jdoc:include type="modules" name="latest_news" style= "latestNews"/>
                        <? } ?>
                    </section>
                    <section class="events col-xl-3">
                        <p>хуй</p>

                    </section>
                </div>

            </div>
        </section>
        <!--  ***  -->


        <section class="news">
            <div class="container">
                <header class="block-header news__header">
                    <h3>Новости</h3>
                </header>
                <!--                <section class="news__content row">-->
                <section>
                    <? if ($itemID != 103) { ?>
                        <jdoc:include type="modules" name="latest_news"/>
                    <? } ?>
                    <!--                    <div class="news-item col-xl-4 col-lg-4 col-md-6 col-sm-6">-->
                    <!--                        <a href="#" class="news-item__link">-->
                    <!--                            <div class="news-img">-->
                    <!--                                <img src="--><?php //echo $this->baseurl ?><!--templates/--><?php //echo $this->template ?><!--/images/tmp/news/news-1.jpg"-->
                    <!--                                     alt="" loading="lazy">-->
                    <!--                            </div>-->
                    <!--                            <div class="news-description">-->
                    <!--                                <h4>Студентка достойно представила АГАСУ на всероссийских конкурсах</h4>-->
                    <!--                            </div>-->
                    <!--                            <div class="news-date">-->
                    <!--                                <span>19 марта 2021 года</span>-->
                    <!--                            </div>-->
                    <!--                        </a>-->
                    <!--                        <div class="date-mark">-->
                    <!--                            <span class="date">19</span>-->
                    <!--                            <span class="month">МАР</span>-->
                    <!--                        </div>-->
                    <!--                    </div>-->
                    <!--                    <div class="news-item col-xl-4 col-lg-4 col-md-6 col-sm-6">-->
                    <!--                        <a href="#" class="news-item__link">-->
                    <!--                            <div class="news-img">-->
                    <!--                                <img src="--><?php //echo $this->baseurl ?><!--templates/--><?php //echo $this->template ?><!--/images/tmp/news/news-2.jpg"-->
                    <!--                                     alt="" loading="lazy">-->
                    <!--                            </div>-->
                    <!--                            <div class="news-description">-->
                    <!--                                <h4>Дизайнеры АГАСУ побывали на презентации новой палитры красок английского бренда</h4>-->
                    <!--                            </div>-->
                    <!--                            <div class="news-date">-->
                    <!--                                <span>21 марта 2021 года</span>-->
                    <!--                            </div>-->
                    <!--                        </a>-->
                    <!--                        <div class="date-mark">-->
                    <!--                            <span class="date">21</span>-->
                    <!--                            <span class="month">МАР</span>-->
                    <!--                        </div>-->
                    <!--                    </div>-->
                    <!--                    <div class="news-item col-xl-4 col-lg-4 col-md-6 col-sm-6">-->
                    <!--                        <a href="#" class="news-item__link">-->
                    <!--                            <div class="news-img">-->
                    <!--                                <img src="--><?php //echo $this->baseurl ?><!--templates/--><?php //echo $this->template ?><!--/images/tmp/news/news-3.jpg"-->
                    <!--                                     alt="" loading="lazy">-->
                    <!--                            </div>-->
                    <!--                            <div class="news-description">-->
                    <!--                                <h4>Студенты АГАСУ посетили ПАО «Геотэк Сейсморазведка»</h4>-->
                    <!--                            </div>-->
                    <!--                            <div class="news-date">-->
                    <!--                                <span>21 мая 2021 года</span>-->
                    <!--                            </div>-->
                    <!--                        </a>-->
                    <!--                        <div class="date-mark">-->
                    <!--                            <span class="date">21</span>-->
                    <!--                            <span class="month">МАЯ</span>-->
                    <!--                        </div>-->
                    <!--                    </div>-->
                    <!--                    <div class="news-item col-xl-4 col-lg-4 col-md-6 col-sm-6">-->
                    <!--                        <a href="#" class="news-item__link">-->
                    <!--                            <div class="news-img">-->
                    <!--                                <img src="--><?php //echo $this->baseurl ?><!--templates/--><?php //echo $this->template ?><!--/images/tmp/news/news-2.jpg"-->
                    <!--                                     alt="" loading="lazy">-->
                    <!--                            </div>-->
                    <!--                            <div class="news-description">-->
                    <!--                                <h4>Дизайнеры АГАСУ побывали на презентации новой палитры красок английского бренда</h4>-->
                    <!--                            </div>-->
                    <!--                            <div class="news-date">-->
                    <!--                                <span>21 марта 2021 года</span>-->
                    <!--                            </div>-->
                    <!--                        </a>-->
                    <!--                        <div class="date-mark">-->
                    <!--                            <span class="date">21</span>-->
                    <!--                            <span class="month">МАР</span>-->
                    <!--                        </div>-->
                    <!--                    </div>-->
                    <!--                    <div class="news-item col-xl-4 col-lg-4 col-md-6 col-sm-6">-->
                    <!--                        <a href="#" class="news-item__link">-->
                    <!--                            <div class="news-img">-->
                    <!--                                <img src="--><?php //echo $this->baseurl ?><!--templates/--><?php //echo $this->template ?><!--/images/tmp/news/news-1.jpg"-->
                    <!--                                     alt="">-->
                    <!--                            </div>-->
                    <!--                            <div class="news-description">-->
                    <!--                                <h4>Студентка достойно представила АГАСУ на всероссийских конкурсах</h4>-->
                    <!--                            </div>-->
                    <!--                            <div class="news-date">-->
                    <!--                                <span>19 марта 2021 года</span>-->
                    <!--                            </div>-->
                    <!--                        </a>-->
                    <!--                        <div class="date-mark">-->
                    <!--                            <span class="date">19</span>-->
                    <!--                            <span class="month">МАР</span>-->
                    <!--                        </div>-->
                    <!--                    </div>-->
                    <?php if ($itemID == 103) {
                        ?>
                        <!--important news Убран по требованию 26.04.2018-->
                        <!--div class="important-news-block row hidden-xs" data-parallax="scroll" data-image-src="<?php echo $this->baseurl ?>templates/<?php echo $this->template ?>/images/maincentralback.jpg" -->
                        <jdoc:include type="modules" name="breadcrumbs"/>
                        <jdoc:include type="component"/>

                    <?php } ?>
                </section>
            </div>
        </section>
        <section class="media">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8">
                        <section class="media-wrapper">
                            <header class="block-header media__header">
                                <h3>Медиаресурсы</h3>
                            </header>
                            <section class="media__content row">
                                <div class="video-item col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                    <a target="_blank" href="https://www.youtube.com/watch?v=vlC351HJmYM" class="video-link"
                                       title="АГАСУ: факультет инженерных систем и пожарной безопасности"><img src="https://i.ytimg.com/vi/vlC351HJmYM/mqdefault.jpg"
                                                                                                               alt="АГАСУ: факультет инженерных систем и пожарной безопасности">
                                        <span class="video-title">АГАСУ: факультет инженерных систем и пожарной безопасности</span>
                                    </a>
                                </div>
                                <div class="video-item col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                    <a target="_blank" href="https://www.youtube.com/watch?v=cYWwkUUDXg0" class="video-link"
                                       title="Система СПО">
                                        <img src="https://i.ytimg.com/vi/cYWwkUUDXg0/mqdefault.jpg" alt="Система СПО">
                                        <span class="video-title">Система СПО</span>
                                    </a>
                                </div>
                                <div class="video-item col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                    <a target="_blank" href="https://www.youtube.com/watch?v=EjmxVn7LtzU" class="video-link"
                                       title="АГАСУ: строительный факультет"><img src="https://i.ytimg.com/vi/EjmxVn7LtzU/mqdefault.jpg"
                                                                                  alt="АГАСУ: строительный факультет">
                                        <span class="video-title">АГАСУ: строительный факультет</span>
                                    </a>
                                </div>
                                <div class="video-item col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                    <a target="_blank" href="https://www.youtube.com/watch?v=VdOcMZgdwj8" class="video-link"
                                       title="Поздравление ректора АГАСУ с Днем российской науки"><img src="https://i.ytimg.com/vi/VdOcMZgdwj8/mqdefault.jpg"
                                                                                                       alt="Поздравление ректора АГАСУ с Днем российской науки">
                                        <span class="video-title">Поздравление ректора АГАСУ с Днем российской науки</span>
                                    </a>
                                </div>
                                <div class="video-item col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                    <a target="_blank" href="https://www.youtube.com/watch?v=73clBxmCkuo" class="video-link"
                                       title="Баскетбол"><img src="https://i.ytimg.com/vi/73clBxmCkuo/mqdefault.jpg"
                                                              alt="Баскетбол">
                                        <span class="video-title">Баскетбол</span>
                                    </a>
                                </div>
                                <div class="video-item col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                    <a target="_blank" href="https://www.youtube.com/watch?v=wfXwI08AvLY" class="video-link"
                                       title="День открытых дверей"><img src="https://i.ytimg.com/vi/wfXwI08AvLY/mqdefault.jpg"
                                                                         alt="День открытых дверей">
                                        <span class="video-title">День открытых дверей</span>
                                    </a>
                                </div>
                            </section>
                        </section>
                    </div>
                    <div class="col-xl-4">
                        <section class="socials-wrapper">
                            <header class="block-header socials__header">
                                <h3>МЫ В СОЦ. СЕТЯХ</h3>
                            </header>
                            <section class="socials__content">
                                <img src="<?php echo $this->baseurl ?>templates/<?php echo $this->template ?>/images/tmp/socials_object.jpg"
                                     alt="" style="">
                            </section>
                        </section>
                    </div>
                </div>
            </div>
        </section>
        <section class="useful-links">
            <div class="container">
                <header class="block-header useful-links__header">
                    <h3>Полезные ссылки</h3>
                </header>
                <div class="useful-links-slider">
                    <a href="#">
                        <img src="<?php echo $this->baseurl ?>templates/<?php echo $this->template ?>/images/ulinks/gspi.jpg" alt="полезная ссылка">
                    </a>
                    <a href="#">
                        <img src="<?php echo $this->baseurl ?>templates/<?php echo $this->template ?>/images/ulinks/gosuslugii.jpg" alt="полезная ссылка">
                    </a>
                    <a href="#">
                        <img src="<?php echo $this->baseurl ?>templates/<?php echo $this->template ?>/images/ulinks/godnauki.jpg" alt="полезная ссылка">
                    </a>
                    <a href="#">
                        <img src="<?php echo $this->baseurl ?>templates/<?php echo $this->template ?>/images/ulinks/ncpi.jpg" alt="полезная ссылка">
                    </a>
                    <a href="#">
                        <img src="<?php echo $this->baseurl ?>templates/<?php echo $this->template ?>/images/ulinks/ofsite.jpg" alt="полезная ссылка">
                    </a>
                    <a href="#">
                        <img src="<?php echo $this->baseurl ?>templates/<?php echo $this->template ?>/images/ulinks/abitur.jpg" alt="полезная ссылка">
                    </a>
                    <a href="#">
                        <img src="<?php echo $this->baseurl ?>templates/<?php echo $this->template ?>/images/ulinks/edcol.jpg" alt="полезная ссылка">
                    </a>
                    <a href="#">
                        <img src="<?php echo $this->baseurl ?>templates/<?php echo $this->template ?>/images/ulinks/beznarkotikov.jpg" alt="полезная ссылка">
                    </a>
                </div>


                <script>
                    jQuery(function ($) {
                        $('.useful-links-slider').slick({
                            dots: true,
                            infinite: true,
                            speed: 500,
                            // fade: true,
                            cssEase: 'linear',
                            slidesToShow: 5,
                            slidesToScroll: 1,
                            autoplay: true,
                            // lazyLoad: 'ondemand',
                            // centerMode:true,
                            // centerPadding: '10px',
                            // variableWidth: true,
                            responsive: [{

                                breakpoint: 1399.98,
                                settings: {
                                    slidesToShow: 4,
                                    infinite: true
                                }
                            },
                                {

                                    breakpoint: 1199.98,
                                    settings: {
                                        slidesToShow: 3,
                                        infinite: true
                                    }
                                },
                                {

                                    breakpoint: 767.98,
                                    settings: {
                                        slidesToShow: 2,
                                        infinite: true
                                    }
                                }

                                , {

                                    breakpoint: 600,
                                    settings: {
                                        arrows: false,
                                        slidesToShow: 2,
                                        dots: true
                                    }
                                },
                                {
                                    breakpoint: 490,
                                    settings: {
                                        arrows: false,
                                        slidesToShow: 1,
                                        dots: true
                                    }
                                }

                                , {

                                    breakpoint: 300,
                                    settings: "unslick" // destroys slick

                                }]
                        });
                    });
                </script>
            </div>
        </section>
        <!--Map block-->
        <div class="map-block__wrapper">
            <div class="map-block__header">
                <!--                --><?php //if ($itemID == 101) {
                //                    ?>
                <div class="container">
                    <h3> АДРЕСА КОРПУСОВ </h3>
                </div>

                <!--                --><?php //} ?>
            </div>
            <div class="container">
                <div class="map-block__content row">
                    <div class="map-block__content-co col-xl-6" id="styled-scroll">
                        <section class="stores-card">
                            <h4>
                                <img src="<?php echo $this->baseurl ?>templates/<?php echo $this->template ?>/images/icons/location.svg" alt="location icon">
                                Главный учебный корпус
                            </h4>
                            <p class="">414056, г. Астрахань, ул. Татищева 18</p>
                            <p>Телефоны: +7(8512) 49-12-15 многоканальный</p>
                            <p>email: astbuild@mail.ru </p>
                        </section>
                        <section class="stores-card">
                            <h4>
                                <img src="<?php echo $this->baseurl ?>templates/<?php echo $this->template ?>/images/icons/location.svg" alt="location icon">
                                Учебный корпус №6
                            </h4>
                            <p class="">414056, г. Астрахань, ул. Татищева 18</p>
                            <p>Телефоны: +7(8512) 49-12-15 многоканальный</p>
                            <p>email: astbuild@mail.ru </p>
                        </section>
                        <section class="stores-card">
                            <h4>
                                <img src="<?php echo $this->baseurl ?>templates/<?php echo $this->template ?>/images/icons/location.svg" alt="location icon">
                                Учебный корпус №9
                            </h4>
                            <p class="">414056, г. Астрахань, ул. Татищева 18</p>
                            <p>Телефоны: +7(8512) 49-12-15 многоканальный</p>
                            <p>email: astbuild@mail.ru </p>
                        </section>
                        <section class="stores-card">
                            <h4>
                                <img src="<?php echo $this->baseurl ?>templates/<?php echo $this->template ?>/images/icons/location.svg" alt="location icon">
                                Учебный корпус №10
                            </h4>
                            <p class="">414056, г. Астрахань, ул. Татищева 18</p>
                            <p>Телефоны: +7(8512) 49-12-15 многоканальный</p>
                            <p>email: astbuild@mail.ru </p>
                        </section>
                        <section class="stores-card">
                            <h4>
                                <img src="<?php echo $this->baseurl ?>templates/<?php echo $this->template ?>/images/icons/location.svg" alt="location icon">
                                Енотаевский филиал
                            </h4>
                            <p class="">414056, г. Астрахань, ул. Татищева 18</p>
                            <p>Телефоны: +7(8512) 49-12-15 многоканальный</p>
                            <p>email: astbuild@mail.ru </p>
                        </section>
                        <section class="stores-card">
                            <h4>
                                <img src="<?php echo $this->baseurl ?>templates/<?php echo $this->template ?>/images/icons/location.svg" alt="location icon">
                                Харабалинский филиал
                            </h4>
                            <p class="">414056, г. Астрахань, ул. Татищева 18</p>
                            <p>Телефоны: +7(8512) 49-12-15 многоканальный</p>
                            <p>email: astbuild@mail.ru </p>
                        </section>
                    </div>
                    <div class="map-block__content-ma col-xl-6 col-md-12" id="map">
                    </div>
                </div>

                <script>
                    // ***
                    let myMap;

                    // Дождёмся загрузки API и готовности DOM.
                    ymaps.ready(init);

                    function init() {
                        // Создание экземпляра карты и его привязка к контейнеру с
                        // заданным id ("map").
                        myMap = new ymaps.Map('map', {
                            // При инициализации карты обязательно нужно указать
                            // её центр и коэффициент масштабирования.
                            center: [46.34, 48.02], // Москва
                            zoom: 10
                        }, {
                            searchControlProvider: 'yandex#search'
                        });
                        myMap.behaviors.disable('scrollZoom');
                    }
                </script>
            </div>
        </div>
        <!--***-->
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
                            <?php echo JText::_('TPL_AGASU_ADDRESS'); ?>
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
                        &copy&nbsp;<?php echo JText::_('TPL_AGASU_SHORT_NAME'); ?>&nbsp;<?php echo date('Y'); ?>
                    </section>
                </section>
            </div>
        </div>
        <jdoc:include type="modules" name="footer"/>
    </footer>
</div>
<script type="text/javascript" src="<?php echo $this->baseurl ?>templates/<?php echo $this->template ?>/addons/slick/slick.min.js"></script>
</body>