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
//jQuery.noConflict();
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
//unset($this->_scripts[$this->baseurl.'/media/system/js/mootools-core.js'],
//    $this->_scripts[$this->baseurl.'/media/system/js/mootools-more.js'],
////    $this->_scripts[$this->baseurl.'/media/system/js/core.js'],
////    $this->_scripts[$this->baseurl.'/media/system/js/caption.js']
//);


$templatePath = $app->getTemplate();

//mobile detect lib
require_once(join(DIRECTORY_SEPARATOR, array(JPATH_THEMES, $templatePath, 'libs', 'Mobile_Detect.php')));
// my utility class
$utilClassPath = join(DIRECTORY_SEPARATOR, array(JPATH_THEMES, $templatePath, 'libs', 'util.php'));
require_once($utilClassPath);

// Add Stylesheets
JHtml::_('stylesheet', 'template.css', array('version' => 'auto', 'relative' => true));

$detect = new Mobile_Detect();
?>

<!DOCTYPE html>
<html lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <script type="text/javascript">

    </script>
    <!--script for regin carousel-->
    <!--            <script src="https://xn--80apaohbc3aw9e.xn--p1ai/region-widget.js"></script>-->
    <!--***-->

    <script src="<?php echo $this->baseurl ?>templates/<?php echo $this->template ?>/js/main.js?v1.2" defer></script>
    <script src="https://api-maps.yandex.ru/2.0/?load=package.standard,package.geoObjects&amp;lang=ru-RU&amp;apikey=50e1e38f-fa6c-48b8-ace0-a8795364ce1f"
            type="text/javascript" defer></script>


    <!--custom scroll-->
<!--    <link rel="stylesheet" href="--><?php //echo $this->baseurl ?><!--templates/--><?php //echo $this->template ?><!--/addons/custom-scroll/jquery.custom-scrollbar.css">-->
<!--    <script src="--><?php //echo $this->baseurl ?><!--templates/--><?php //echo $this->template ?><!--/addons/custom-scroll/jquery.custom-scrollbar.min.js" defer></script>-->

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
                    <div class="header-version-vi options-icon" itemprop="copy">
                        <jdoc:include type="modules" name="eye"/>
                        <a href="#" id="top-eye" class="bi bi-eye "></a>
                    </div>
                    <div class="header-account options-icon btn-group">
                        <a href="#" class="bi bi-person-square btn dropdown-toggle">
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="/postupayushchim/lichnyj-kabinet-abiturienta">Личный кабинет абитуриента</a></li>
                            <li><a href="/studentam/elektronnaya-informatsionno-obrazovatelnaya-sreda">ЭОС</a></li>
                        </ul>
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

                <!--  Main menu rendering  -->
                <jdoc:include type="modules" name="top_menu"/>

                <!--  Mobile shortcuts  -->
                <div class="header-nav-mobile">
                    <jdoc:include type="modules" name="top_shortcuts_mobile"/>
                </div>

                <!-- Main menu underline -->
                <span class="target"></span>

                <div class="header-right-box">
                    <div class="search-wrapper">
                        <jdoc:include type="modules" name="search"/>
                    </div>
                    <!--  Garbage panel link for desktop  -->
                    <a href="#" class="btn-panel pushmenu" id="nav-icon3" style="display: none">
                        <span></span>
                        <span></span>
                        <span></span>
                    </a>
                    <a href="#" class="burger-mobile" id="mobile-menu-trigger">
                        <span></span>
                        <span></span>
                        <span></span>
                    </a>
                </div>
            </div>
        </div>
        <div class="menu-mobile-popup">
            <div class="container">
                <div class="menu-mobile-head">
                    <a href="#" class="menu-mobile-logo">
                        <img src="<?php echo $this->baseurl ?>templates/<?php echo $this->template ?>/images/logo-sitemap.svg" alt="logo">
                    </a>
                    <span class="menu-mobile-close" style="font-size: 25px"><i class="bi bi-x-lg"></i></span>
                </div>
                <div class="menu-mobile-main">
                    <jdoc:include type="modules" name="mobile-top"/>
                </div>
                <div class="menu-mobile-footer">
                    <div>
                        <a href="#" class="menu-mobile-social-icon"><i class="ic-vk"></i></a>
                        <a href="#" class="menu-mobile-social-icon"><i class="ic-facebook"></i></a>
                        <a href="#" class="menu-mobile-social-icon"><i class="ic-instagram"></i></a>
                        <a href="#" class="menu-mobile-social-icon"><i class="ic-odnoklassniki"></i></a>
                    </div>
                    <div>© АГАСУ 2021</div>
                </div>
            </div>
        </div>
    </header>
    <!-- *** -->
    <div class="hidden-overlay"></div>

    <section class="main">

        <?php if (!$detect->isMobile()) { ?>
            <section class="main-slider">
                <!-- Slider main container -->
                <jdoc:include type="modules" name="slider"/>
            </section>
        <?php } ?>


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
                            <h3 class="block-heading">Медиаресурсы</h3>
                            <section id="media-content" class="media-content row"></section>
                            <section class="media-footer">
                                <a target="_blank" href="https://www.youtube.com/channel/UCdg84ZdlVAtQyug4mWEwHGQ" class="btn btn-primary">Все видео
                                </a>
                            </section>
                        </div>
                        <div class="col-xl-4 socials">
                            <h3 class="block-heading">мы в соц. сетях</h3>
                            <section class="socials-content">
                                <a class="socials-link" href="https://www.instagram.com/agasu_aucu/" target="_blank">
                                    <img src="<?php echo $this->baseurl ?>templates/<?php echo $this->template ?>/images/icons/socials/in-icon.svg" alt="insta link"/>
                                </a>
                                <a class="socials-link" href="https://www.facebook.com/asuaceastr" target="_blank">
                                    <img src="<?php echo $this->baseurl ?>templates/<?php echo $this->template ?>/images/icons/socials/fa-icon.svg" alt="fa link"/>
                                </a>
                                <a class="socials-link" href="https://vk.com/asuace" target="_blank">
                                    <img src="<?php echo $this->baseurl ?>templates/<?php echo $this->template ?>/images/icons/socials/vk-icon.svg" alt="vk link"/>
                                </a>
                            </section>
                        </div>
                    </div>
                </div>
            </section>
            <script>
                document.addEventListener('DOMContentLoaded', () => videoGalleryRender());
            </script>
            <!--Media block end-->

            <!--Useful links block-->
            <section class="useful-links">
                <jdoc:include type="modules" name="useful_links"/>
                <script type="text/javascript" src="<?php echo $this->baseurl ?>templates/<?php echo $this->template ?>/addons/slick/slick.min.js"></script>
                <script>
                    document.addEventListener('DOMContentLoaded', () => {
                        jQuery(function ($) {
                            $('.useful-links-slider').slick({
                                dots: true,
                                infinite: true,
                                speed: 500,
                                cssEase: 'linear',
                                slidesToShow: 5,
                                slidesToScroll: 1,
                                autoplay: true,
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
                    });

                </script>
            </section>

            <!-- map -->
            <div class="map-block__wrapper">
                <div class="map-block__header">
                    <div class="container">
                        <h3>АДРЕСА КОРПУСОВ</h3>
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
            <div class="region-widget-wrap"></div>
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
                    <section class="footer-info__copyright">
                        &copy&nbsp;<?php echo JText::_('TPL_AGASU_SHORT_NAME'); ?>&nbsp;<?php echo date('Y'); ?>
                    </section>
                </section>
                <section class="footer-info col-xl-5">
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
                <section class="footer-extra col-xl-3">
                    <a href="#" class="footer-extra__button footer-extra__button_eye" itemprop="copy">
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


</body>