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
$menu = $app->getMenu();
$params = $app->getTemplate(true)->params;


// Output as HTML5
$this->setHtml5(true);

// load lang
$lang = JFactory::getLanguage();
$lang->load('ru-RU');

// get item id for page
$jInput = $app->input;
$itemId = $jInput->get('Itemid', null, 'int');

//echo '<pre>';
//var_dump($itemID);
//echo '</pre>';


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
// load utility class
$templatePath = $app->getTemplate();
$utilClassPath = join(DIRECTORY_SEPARATOR, array(JPATH_THEMES, $templatePath, 'libs', 'util.php'));
require_once($utilClassPath);

// Add Stylesheets
JHtml::_('stylesheet', 'template.css', array('version' => 'auto', 'relative' => true));
?>

<!DOCTYPE html>
<html lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <script src="<?php echo $this->baseurl ?>templates/<?php echo $this->template ?>/js/main.js" defer></script>
    <script src="https://api-maps.yandex.ru/2.0/?load=package.standard,package.geoObjects&amp;lang=ru-RU&amp;apikey=50e1e38f-fa6c-48b8-ace0-a8795364ce1f"
            type="text/javascript" defer></script>

    <!--custom scroll-->
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>templates/<?php echo $this->template ?>/addons/custom-scroll/jquery.custom-scrollbar.css">
    <script src="<?php echo $this->baseurl ?>templates/<?php echo $this->template ?>/addons/custom-scroll/jquery.custom-scrollbar.min.js" defer></script>


    <jdoc:include type="head"/>
</head>
<body class="site">
<div class="body">
    <!-- *** Header *** -->
    <header class="header">
        <div class="header-top">
            <div class="container header-container">
                <jdoc:include type="modules" name="top_shortcuts"/>
                <div class="header-options">
                    <div class="header-version-vi " itemprop="copy">
                        <jdoc:include type="modules" name="eye"/>
                        <style>
                            .module_special_visually #special_visually label {
                                border: none;
                                font-size: 14px;
                                color: #fff;
                            }

                            .module_special_visually #special_visually label:hover {
                                border: none;
                                background: inherit;
                            }

                            .module_special_visually #special_visually .buttons label {
                                display: flex;
                                align-items: center;
                            }

                            .module_special_visually.horizontal #special_visually .buttons {
                                margin-right: 0;
                            }
                        </style>
                    </div>
                    <div class="header-account options-icon">
                        <a href="#" class="bi bi-person-square">
                        </a>
                    </div>
                    <div class="header-language-select options-icon">
                        <jdoc:include type="modules" name="language_switcher"/>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom">
            <div class="container header-container">
                <a href="index.php?Itemid=101" class="header-logo">
                    <img class="logo-img" src="<?php echo $this->baseurl ?>templates/<?php echo $this->template ?>/images/logo-exp-gray-40.svg" alt="logo">
                    <img class="logo-img-mobile" src="<?php echo $this->baseurl ?>templates/<?php echo $this->template ?>/images/logo-exp-mobile-1.svg" alt="logo-mobile">
                </a>
                <jdoc:include type="modules" name="top_menu"/>

                <div class="header-nav-mobile">
                    <jdoc:include type="modules" name="top_shortcuts_mobile"/>
                </div>
                <span class="target"></span>
                <div class="header-right-box">
                    <div class="search-wrapper">
                        <jdoc:include type="modules" name="search"/>
                    </div>
                    <a href="#" class="btn-panel pushmenu" id="nav-icon3">
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
    <!--  Sidebar    -->
    <aside class="sidebar">
        <div class="sidebar_header">
            <img class="logo-img-mobile" src="<?php echo $this->baseurl ?>templates/<?php echo $this->template ?>/images/logo-exp-mobile-1.svg" alt="logo-mobile">
        </div>
        <hr>
        <div class="text d-flex">
            <div style="width: 250px">
                <a class="hot-line-link" href="/news/9224-sberbank-realizuet-programmu-po-obucheniyu-prepodavatelej-i-studentov">
                    <img style="" src="/images/banners/sber_startup_02_21_2.jpg">
                </a>
                <a class="hot-line-link" target="_blank" href="https://www.youtube.com/watch?v=UC8hU8x-k6c">
                    <img style="margin-top: 10px" src="/images/banners/assessment_02_21.jpg?ver=2">
                </a>
            </div>
            <jdoc:include type="modules" name="important_banners"/>
        </div>

        <script>
            jQuery(document).ready(function ($) {
                $(".sidebar").customScrollbar({});
            });
        </script>
    </aside>
    <div class="hidden-overley"></div>

    <script>
        jQuery(document).ready(function ($) {
            // Клик по кнопке-гамбургеру открывает меню, повторный клик закрывает
            $('.pushmenu').click(function (e) {
                e.preventDefault();
                $('.pushmenu').toggleClass("open");
                $('.sidebar').toggleClass("show");
                $('.hidden-overley').toggleClass("show");
                $('body').toggleClass("sidebar-opened")
            });
            // Когда панель открыта, клик по облсти вне панели закрывает ее
            $('.hidden-overley').click(function () {
                $(this).toggleClass("show");
                $('.sidebar').toggleClass("show");
                $('.pushmenu').toggleClass("open");
                $('body').toggleClass("sidebar-opened")
            });
            // меняем активность пункта меню по клику (НЕОБЯЗАТЕЛЬНО)
            $('.sidebar ul li').click(function () {
                $(this).addClass("current-menu-item").siblings().removeClass("current-menu-item");
            });
            // Для анимации поворота каретки
            $('.menu-parent-item a:first-child').click(function () {
                $(this).siblings().toggleClass("show");
                $(this).find("i").toggleClass("rotate");
            });
        });
    </script>

    <!-- *** -->

    <section class="main">
        <section class="main-slider">
            <!-- Slider main container -->
            <jdoc:include type="modules" name="slider"/>
        </section>


        <?php if ($itemId == 101) { ?>
            <?php // news list module ?>
            <section class="news-section">
                <div class="container">
                    <div class="row">
                        <section class="news col-xl-12">
                            <jdoc:include type="modules" name="latest_news" style="latestNews"/>
                        </section>
                    </div>
                </div>
            </section>
        <?php } else { ?>
            <!--  ***  -->
            <section class="breadcrumb">
                <div class="container">
                    <jdoc:include type="modules" name="breadcrumbs"/>
                </div>
            </section>
            <section class="content">
                <div class="container">
                    <jdoc:include type="component"/>
                </div>
            </section>
        <?php } ?>


        <!--Media block-->
        <?php if ($itemId == 101) { ?>
            <section class="media-socials">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 media">
                            <h3>Медиаресурсы</h3>
                            <section id="media-content" class="content row"></section>
                            <section class="media-footer">
                                <a target="_blank" href="https://www.youtube.com/channel/UCdg84ZdlVAtQyug4mWEwHGQ" class="btn btn-primary">Все видео
                                </a>
                            </section>
                        </div>
                        <div class="col-xl-4">
                            <section class="socials-wrapper">
                                <header class="block-header socials__header">
                                    <h3>МЫ В СОЦ. СЕТЯХ</h3>
                                </header>
                            </section>
                        </div>
                    </div>
                </div>
            </section>
            <script>
                document.addEventListener('DOMContentLoaded', () => videoGalleryRender());
            </script>
        <?php } ?>
        <!--Media block end-->

        <!--Useful links block-->
        <? if ($itemId == 101) { ?>
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
        <?php } ?>

        <?php if ($itemId == 101) { ?>
            <div class="map-block__wrapper">
                <div class="map-block__header">
                    <div class="container">
                        <h3> АДРЕСА КОРПУСОВ </h3>
                    </div>
                </div>
                <div class="container">
                    <div class="map-block__content row">
                        <div class="map-block__content-items col-xl-6" id="styled-scroll">
                        </div>
                        <div class="map-block__content-ma col-xl-6 col-md-12" id="map">
                        </div>
                    </div>
                </div>
            </div>
            <script>
                // load map only when it need
                document.addEventListener('DOMContentLoaded', () => mapRendering());
            </script>
        <?php } ?>
        <!--***-->
    </section>
    <footer class="footer">
        <div class="container">
            <div class="row">
                <section class="footer-info col-xl-4">
                    <a href="index.php?Itemid=101" class="footer-logo">
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
                            buildinst@mail.ru
                        </section>
                    </div>
                </section>
                <jdoc:include type="modules" name="footer_menu"/>
                <!--                <section class="footer-nav col-xl-5">-->
                <!--                    <div class="row">-->
                <!--                        <div class="col-xl-6">-->
                <!--                            <ul class="footer-nav__col">-->
                <!--                                <li class="heading"><a href="#">Университет</a></li>-->
                <!--                                <li><a href="#">О нас</a></li>-->
                <!--                                <li><a href="#">Контакты</a></li>-->
                <!--                                <li><a href="#">Структура</a></li>-->
                <!--                            </ul>-->
                <!--                        </div>-->
                <!--                        <div class="col-xl-6">-->
                <!--                            <ul class="footer-nav__col">-->
                <!--                                <li class="heading"><a href="#">Наука</a></li>-->
                <!--                                <li><a href="#">Научные издания</a></li>-->
                <!--                                <li><a href="#">Инновационная деятельность</a></li>-->
                <!--                                <li><a href="#">Конкурсы и гранты</a></li>-->
                <!--                            </ul>-->
                <!--                        </div>-->
                <!--                        <div class="col-xl-6">-->
                <!--                            <ul class="footer-nav__col">-->
                <!--                                <li class="heading"><a href="#">Образование</a></li>-->
                <!--                                <li><a href="#">Факультеты</a></li>-->
                <!--                                <li><a href="#">Колледжи и училища</a></li>-->
                <!--                                <li><a href="#">Филиалы</a></li>-->
                <!--                            </ul>-->
                <!--                        </div>-->
                <!--                        <div class="col-xl-6">-->
                <!--                            <ul class="footer-nav__col">-->
                <!--                                <li class="heading"><a href="#">Абитуриенту</a></li>-->
                <!--                                <li><a href="#">Поступление</a></li>-->
                <!--                                <li><a href="#">Личный кабинет</a></li>-->
                <!--                                <li><a href="#">Документы</a></li>-->
                <!--                            </ul>-->
                <!--                        </div>-->
                <!--                    </div>-->
                <!--                </section>-->
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
                        <a target="_blank" href="https://vk.com/asuace" class="socials_item"><i class="ic-vk"></i></a>
                        <a target="_blank" href="https://www.facebook.com/asuaceastr" class="socials_item"><i class="ic-facebook"></i></a>
                        <a target="_blank" href="https://www.instagram.com/agasu_aucu/" class="socials_item"><i class="ic-instagram"></i></a>
                    </section>
                    <section class="footer-extra__copyright">
                        &copy&nbsp;<?php echo JText::_('TPL_AGASU_SHORT_NAME'); ?>&nbsp;<?php echo date('Y'); ?>
                    </section>
                </section>
            </div>
        </div>

    </footer>
</div>

<script>
    function sh(obj) {
        if (typeof obj === 'object') if (obj.style.display === 'none') obj.style.display = 'block'; else obj.style.display = 'none';
    }
</script>
<?php if (!in_array($Itemid, [101, 102, 103])) { ?>
    <script>
        document.querySelectorAll("a[data-tooltip]").forEach((el) => {
            if (!el.dataset.tooltip) {
                return;
            }
            let tooltip = document.createElement('div');

            let signLink = document.createElement('a');
            signLink.setAttribute('href', el.dataset.signKeyLink);
            signLink.classList.add('sign-key');

            let signImage = document.createElement('img');
            signImage.setAttribute('src', '/images/banners/signature.png');

            signLink.appendChild(signImage);

            tooltip.classList.add('tooltip-msg');
            tooltip.innerHTML = el.dataset.tooltip;

            signLink.appendChild(tooltip);

            el.before(signLink);
        })
    </script>
    <style>
        a.sign-key {
            position: relative;
        }

        a.sign-key div.tooltip-msg {
            display: none;
            position: absolute;
            bottom: 100%;
            left: -50%;
            padding: 10px;
            background: #000000;
            color: #ffffff;
            font-size: 12px;
            z-index: 9999;
            width: max-content;
            text-align: center;
        }

        a.sign-key div.tooltip-msg p {
            margin: 0;
            padding: 0;
            line-height: 15px
        }

        a.sign-key:hover div.tooltip-msg {
            display: block
        }
    </style>
<?php } ?>

<script type="text/javascript" src="<?php echo $this->baseurl ?>templates/<?php echo $this->template ?>/addons/slick/slick.min.js"></script>

</body>