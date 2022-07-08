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

    <script src="<?php echo $this->baseurl ?>templates/<?php echo $this->template ?>/js/main.js?v1.2" defer></script>
    <script src="https://api-maps.yandex.ru/2.0/?load=package.standard,package.geoObjects&amp;lang=ru-RU&amp;apikey=50e1e38f-fa6c-48b8-ace0-a8795364ce1f"
            type="text/javascript" defer></script>

    <link rel="stylesheet" href="<?php echo $this->baseurl ?>templates/<?php echo $this->template ?>/addons/awesome/css/font-awesome.min.css">

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
                        <a target="_blank" href="https://vk.com/asuace" class="menu-mobile-social-icon">
                            <i class="fa fa-vk"></i>
                        </a>
                        <a target="_blank" href="https://t.me/+TomhNYUXJdJiYzVi" class="menu-mobile-social-icon">
                            <i class="fa fa-telegram"></i>
                        </a>
                        <a target="_blank" href="https://www.youtube.com/channel/UCdg84ZdlVAtQyug4mWEwHGQ" class="menu-mobile-social-icon">
                            <i class="fa fa-youtube"></i>
                        </a>
                    </div>
                    <div>
                        &copy&nbsp;<?php echo JText::_('TPL_AGASU_SHORT_NAME'); ?>&nbsp;<?php echo date('Y'); ?>
                    </div>
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
                                <a class="socials-link" href="https://www.youtube.com/channel/UCdg84ZdlVAtQyug4mWEwHGQ" target="_blank">
                                    <img src="<?php echo $this->baseurl ?>templates/<?php echo $this->template ?>/images/icons/socials/yt-icon.svg" alt="youtube link"/>
                                </a>

                                <a class="socials-link" href="https://t.me/+TomhNYUXJdJiYzVi" target="_blank">
                                    <img src="<?php echo $this->baseurl ?>templates/<?php echo $this->template ?>/images/icons/socials/tg-icon.svg" alt="telegram link"/>
                                </a>

                                <a class="socials-link" href="https://vk.com/asuace" target="_blank">
                                    <img src="<?php echo $this->baseurl ?>templates/<?php echo $this->template ?>/images/icons/socials/vk-icon.svg" alt="vk link"/>
                                </a>
                            </section>
                            <div>
                                <script src='https://pos.gosuslugi.ru/bin/script.min.js'></script>
                                <style> #js-show-iframe-wrapper {
                                        position: relative;
                                        display: flex;
                                        align-items: center;
                                        justify-content: center;
                                        width: 100%;
                                        min-width: 293px;
                                        max-width: 100%;
                                        background: linear-gradient(138.4deg, #38bafe 26.49%, #2d73bc 79.45%);
                                        color: #fff;
                                        cursor: pointer
                                    }

                                    #js-show-iframe-wrapper .pos-banner-fluid * {
                                        box-sizing: border-box
                                    }

                                    #js-show-iframe-wrapper .pos-banner-fluid .pos-banner-btn_2 {
                                        display: block;
                                        width: 240px;
                                        min-height: 56px;
                                        font-size: 18px;
                                        line-height: 24px;
                                        cursor: pointer;
                                        background: #0d4cd3;
                                        color: #fff;
                                        border: none;
                                        border-radius: 8px;
                                        outline: 0
                                    }

                                    #js-show-iframe-wrapper .pos-banner-fluid .pos-banner-btn_2:hover {
                                        background: #1d5deb
                                    }

                                    #js-show-iframe-wrapper .pos-banner-fluid .pos-banner-btn_2:focus {
                                        background: #2a63ad
                                    }

                                    #js-show-iframe-wrapper .pos-banner-fluid .pos-banner-btn_2:active {
                                        background: #2a63ad
                                    }

                                    @-webkit-keyframes fadeInFromNone {
                                        0% {
                                            display: none;
                                            opacity: 0
                                        }
                                        1% {
                                            display: block;
                                            opacity: 0
                                        }
                                        100% {
                                            display: block;
                                            opacity: 1
                                        }
                                    }

                                    @keyframes fadeInFromNone {
                                        0% {
                                            display: none;
                                            opacity: 0
                                        }
                                        1% {
                                            display: block;
                                            opacity: 0
                                        }
                                        100% {
                                            display: block;
                                            opacity: 1
                                        }
                                    }

                                    @font-face {
                                        font-family: LatoWebLight;
                                        src: url(https://pos.gosuslugi.ru/bin/fonts/Lato/fonts/Lato-Light.woff2) format("woff2"), url(https://pos.gosuslugi.ru/bin/fonts/Lato/fonts/Lato-Light.woff) format("woff"), url(https://pos.gosuslugi.ru/bin/fonts/Lato/fonts/Lato-Light.ttf) format("truetype");
                                        font-style: normal;
                                        font-weight: 400
                                    }

                                    @font-face {
                                        font-family: LatoWeb;
                                        src: url(https://pos.gosuslugi.ru/bin/fonts/Lato/fonts/Lato-Regular.woff2) format("woff2"), url(https://pos.gosuslugi.ru/bin/fonts/Lato/fonts/Lato-Regular.woff) format("woff"), url(https://pos.gosuslugi.ru/bin/fonts/Lato/fonts/Lato-Regular.ttf) format("truetype");
                                        font-style: normal;
                                        font-weight: 400
                                    }

                                    @font-face {
                                        font-family: LatoWebBold;
                                        src: url(https://pos.gosuslugi.ru/bin/fonts/Lato/fonts/Lato-Bold.woff2) format("woff2"), url(https://pos.gosuslugi.ru/bin/fonts/Lato/fonts/Lato-Bold.woff) format("woff"), url(https://pos.gosuslugi.ru/bin/fonts/Lato/fonts/Lato-Bold.ttf) format("truetype");
                                        font-style: normal;
                                        font-weight: 400
                                    }

                                    @font-face {
                                        font-family: RobotoWebLight;
                                        src: url(https://pos.gosuslugi.ru/bin/fonts/Roboto/Roboto-Light.woff2) format("woff2"), url(https://pos.gosuslugi.ru/bin/fonts/Roboto/Roboto-Light.woff) format("woff"), url(https://pos.gosuslugi.ru/bin/fonts/Roboto/Roboto-Light.ttf) format("truetype");
                                        font-style: normal;
                                        font-weight: 400
                                    }

                                    @font-face {
                                        font-family: RobotoWebRegular;
                                        src: url(https://pos.gosuslugi.ru/bin/fonts/Roboto/Roboto-Regular.woff2) format("woff2"), url(https://pos.gosuslugi.ru/bin/fonts/Roboto/Roboto-Regular.woff) format("woff"), url(https://pos.gosuslugi.ru/bin/fonts/Roboto/Roboto-Regular.ttf) format("truetype");
                                        font-style: normal;
                                        font-weight: 400
                                    }

                                    @font-face {
                                        font-family: RobotoWebBold;
                                        src: url(https://pos.gosuslugi.ru/bin/fonts/Roboto/Roboto-Bold.woff2) format("woff2"), url(https://pos.gosuslugi.ru/bin/fonts/Roboto/Roboto-Bold.woff) format("woff"), url(https://pos.gosuslugi.ru/bin/fonts/Roboto/Roboto-Bold.ttf) format("truetype");
                                        font-style: normal;
                                        font-weight: 400
                                    }

                                    @font-face {
                                        font-family: ScadaWebRegular;
                                        src: url(https://pos.gosuslugi.ru/bin/fonts/Scada/Scada-Regular.woff2) format("woff2"), url(https://pos.gosuslugi.ru/bin/fonts/Scada/Scada-Regular.woff) format("woff"), url(https://pos.gosuslugi.ru/bin/fonts/Scada/Scada-Regular.ttf) format("truetype");
                                        font-style: normal;
                                        font-weight: 400
                                    }

                                    @font-face {
                                        font-family: ScadaWebBold;
                                        src: url(https://pos.gosuslugi.ru/bin/fonts/Scada/Scada-Bold.woff2) format("woff2"), url(https://pos.gosuslugi.ru/bin/fonts/Scada/Scada-Bold.woff) format("woff"), url(https://pos.gosuslugi.ru/bin/fonts/Scada/Scada-Bold.ttf) format("truetype");
                                        font-style: normal;
                                        font-weight: 400
                                    }

                                    @font-face {
                                        font-family: Geometria;
                                        src: url(https://pos.gosuslugi.ru/bin/fonts/Geometria/Geometria.eot);
                                        src: url(https://pos.gosuslugi.ru/bin/fonts/Geometria/Geometria.eot?#iefix) format("embedded-opentype"), url(https://pos.gosuslugi.ru/bin/fonts/Geometria/Geometria.woff) format("woff"), url(https://pos.gosuslugi.ru/bin/fonts/Geometria/Geometria.ttf) format("truetype");
                                        font-weight: 400;
                                        font-style: normal
                                    }

                                    @font-face {
                                        font-family: Geometria-ExtraBold;
                                        src: url(https://pos.gosuslugi.ru/bin/fonts/Geometria/Geometria-ExtraBold.eot);
                                        src: url(https://pos.gosuslugi.ru/bin/fonts/Geometria/Geometria-ExtraBold.eot?#iefix) format("embedded-opentype"), url(https://pos.gosuslugi.ru/bin/fonts/Geometria/Geometria-ExtraBold.woff) format("woff"), url(https://pos.gosuslugi.ru/bin/fonts/Geometria/Geometria-ExtraBold.ttf) format("truetype");
                                        font-weight: 800;
                                        font-style: normal
                                    } </style>
                                <style> #js-show-iframe-wrapper {
                                        background: var(--pos-banner-fluid-39__background)
                                    }

                                    #js-show-iframe-wrapper .pos-banner-fluid .pos-banner-btn_2 {
                                        width: 100%;
                                        min-height: 52px;
                                        background: #fff;
                                        color: #0b1f33;
                                        font-size: 16px;
                                        font-family: LatoWeb, sans-serif;
                                        font-weight: 400;
                                        padding: 0;
                                        line-height: 1.2
                                    }

                                    #js-show-iframe-wrapper .pos-banner-fluid .pos-banner-btn_2:active, #js-show-iframe-wrapper .pos-banner-fluid .pos-banner-btn_2:focus, #js-show-iframe-wrapper .pos-banner-fluid .pos-banner-btn_2:hover {
                                        background: #e4ecfd
                                    }

                                    #js-show-iframe-wrapper .bf-39 {
                                        position: relative;
                                        display: grid;
                                        grid-template-columns:var(--pos-banner-fluid-39__grid-template-columns);
                                        grid-template-rows:var(--pos-banner-fluid-39__grid-template-rows);
                                        width: 100%;
                                        max-width: var(--pos-banner-fluid-39__max-width);
                                        box-sizing: border-box;
                                        grid-auto-flow: row dense
                                    }

                                    #js-show-iframe-wrapper .bf-39__decor {
                                        background: var(--pos-banner-fluid-39__bg-url) var(--pos-banner-fluid-39__bg-url-position) no-repeat;
                                        background-size: cover;
                                        background-color: #f8efec;
                                        position: relative
                                    }

                                    #js-show-iframe-wrapper .bf-39__content {
                                        display: flex;
                                        flex-direction: column;
                                        padding: var(--pos-banner-fluid-39__content-padding);
                                        grid-row: var(--pos-banner-fluid-39__content-grid-row);
                                        justify-content: center
                                    }

                                    #js-show-iframe-wrapper .bf-39__description {
                                        display: flex;
                                        flex-direction: column;
                                        margin: var(--pos-banner-fluid-39__description-margin)
                                    }

                                    #js-show-iframe-wrapper .bf-39__text {
                                        margin: var(--pos-banner-fluid-39__text-margin);
                                        font-size: var(--pos-banner-fluid-39__text-font-size);
                                        line-height: 1.4;
                                        font-family: LatoWeb, sans-serif;
                                        font-weight: 700;
                                        color: #fff
                                    }

                                    #js-show-iframe-wrapper .bf-39__text_small {
                                        font-size: var(--pos-banner-fluid-39__text-small-font-size);
                                        font-weight: 400;
                                        margin: 0
                                    }

                                    #js-show-iframe-wrapper .bf-39__bottom-wrap {
                                        display: flex;
                                        flex-direction: row;
                                        align-items: center
                                    }

                                    #js-show-iframe-wrapper .bf-39__logo-wrap {
                                        position: absolute;
                                        top: var(--pos-banner-fluid-39__logo-wrap-top);
                                        left: 0;
                                        padding: var(--pos-banner-fluid-39__logo-wrap-padding);
                                        background: #fff;
                                        border-radius: 0 0 8px 0
                                    }

                                    #js-show-iframe-wrapper .bf-39__logo {
                                        width: var(--pos-banner-fluid-39__logo-width);
                                        margin-left: 1px
                                    }

                                    #js-show-iframe-wrapper .bf-39__slogan {
                                        font-family: LatoWeb, sans-serif;
                                        font-weight: 700;
                                        font-size: var(--pos-banner-fluid-39__slogan-font-size);
                                        line-height: 1.2;
                                        color: #005ca9
                                    }

                                    #js-show-iframe-wrapper .bf-39__btn-wrap {
                                        width: 100%;
                                        max-width: var(--pos-banner-fluid-39__button-wrap-max-width)
                                    } </style>
                                <div id='js-show-iframe-wrapper'>
                                    <div class='pos-banner-fluid bf-39'>
                                        <div class='bf-39__decor'>
                                            <div class='bf-39__logo-wrap'><img class='bf-39__logo' src='https://pos.gosuslugi.ru/bin/banner-fluid/gosuslugi-logo-blue.svg'
                                                                               alt='Госуслуги'/>
                                                <div class='bf-39__slogan'>Решаем вместе</div>
                                            </div>
                                        </div>
                                        <div class='bf-39__content'>
                                            <div class='bf-39__description'><span class='bf-39__text'> Подал заявление в вуз, но остались вопросы? Столкнулся с трудностями при подаче заявления в вуз? </span>
                                                <span class='bf-39__text bf-39__text_small'> </span></div>
                                            <div class='bf-39__bottom-wrap'>
                                                <div class='bf-39__btn-wrap'> <!-- pos-banner-btn_2 не удалять; другие классы не добавлять -->
                                                    <button class='pos-banner-btn_2' type='button'>Написать о проблеме</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <script> (function () {
                                        "use strict";

                                        function ownKeys(e, t) {
                                            var n = Object.keys(e);
                                            if (Object.getOwnPropertySymbols) {
                                                var o = Object.getOwnPropertySymbols(e);
                                                if (t) o = o.filter(function (t) {
                                                    return Object.getOwnPropertyDescriptor(e, t).enumerable
                                                });
                                                n.push.apply(n, o)
                                            }
                                            return n
                                        }

                                        function _objectSpread(e) {
                                            for (var t = 1; t < arguments.length; t++) {
                                                var n = null != arguments[t] ? arguments[t] : {};
                                                if (t % 2) ownKeys(Object(n), true).forEach(function (t) {
                                                    _defineProperty(e, t, n[t])
                                                }); else if (Object.getOwnPropertyDescriptors) Object.defineProperties(e, Object.getOwnPropertyDescriptors(n)); else ownKeys(Object(n)).forEach(function (t) {
                                                    Object.defineProperty(e, t, Object.getOwnPropertyDescriptor(n, t))
                                                })
                                            }
                                            return e
                                        }

                                        function _defineProperty(e, t, n) {
                                            if (t in e) Object.defineProperty(e, t, {value: n, enumerable: true, configurable: true, writable: true}); else e[t] = n;
                                            return e
                                        }

                                        var POS_PREFIX_39 = "--pos-banner-fluid-39__", posOptionsInitialBanner39 = {
                                            background: "linear-gradient(#2d73bc 26.49%,#38bafe 79.45%)",
                                            "grid-template-columns": "100%",
                                            "grid-template-rows": "264px auto",
                                            "max-width": "100%",
                                            "text-font-size": "20px",
                                            "text-small-font-size": "14px",
                                            "text-margin": "0 0 12px 0",
                                            "description-margin": "0 0 24px 0",
                                            "button-wrap-max-width": "100%",
                                            "bg-url": "url('https://pos.gosuslugi.ru/bin/banner-fluid/35/banner-fluid-bg-35.svg')",
                                            "bg-url-position": "right bottom",
                                            "content-padding": "26px 24px 20px",
                                            "content-grid-row": "0",
                                            "logo-wrap-padding": "16px 12px 12px",
                                            "logo-width": "65px",
                                            "logo-wrap-top": "0",
                                            "slogan-font-size": "12px"
                                        }, setStyles = function (e, t) {
                                            var n = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : POS_PREFIX_39;
                                            Object.keys(e).forEach(function (o) {
                                                t.style.setProperty(n + o, e[o])
                                            })
                                        }, removeStyles = function (e, t) {
                                            var n = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : POS_PREFIX_39;
                                            Object.keys(e).forEach(function (e) {
                                                t.style.removeProperty(n + e)
                                            })
                                        };

                                        function changePosBannerOnResize() {
                                            var e = document.documentElement, t = _objectSpread({}, posOptionsInitialBanner39),
                                                n = document.getElementById("js-show-iframe-wrapper"), o = n ? n.offsetWidth : document.body.offsetWidth;
                                            if (o > 340) t["button-wrap-max-width"] = "209px";
                                            if (o > 360) t["bg-url"] = "url('https://pos.gosuslugi.ru/bin/banner-fluid/35/banner-fluid-bg-35-2.svg')", t["bg-url-position"] = "calc(100% + 135px) bottom";
                                            if (o > 482) t["text-font-size"] = "23px", t["text-small-font-size"] = "18px", t["bg-url-position"] = "center bottom";
                                            if (o > 568) t["bg-url"] = "url('https://pos.gosuslugi.ru/bin/banner-fluid/35/banner-fluid-bg-35.svg')", t["bg-url-position"] = "calc(100% + 35px) bottom", t["text-font-size"] = "24px", t["text-small-font-size"] = "14px", t["grid-template-columns"] = "1fr 292px", t["grid-template-rows"] = "100%", t["content-grid-row"] = "1", t["content-padding"] = "48px 24px";
                                            if (o > 783) t["grid-template-columns"] = "1fr 390px", t["bg-url"] = "url('https://pos.gosuslugi.ru/bin/banner-fluid/35/banner-fluid-bg-35-2.svg')", t["bg-url-position"] = "calc(100% + 144px) bottom", t["text-small-font-size"] = "18px", t["content-padding"] = "30px 24px";
                                            if (o > 820) t["grid-template-columns"] = "1fr 420px";
                                            if (o > 918) t["bg-url-position"] = "calc(100% + 100px) bottom";
                                            if (o > 1098) t["bg-url-position"] = "center bottom", t["grid-template-columns"] = "1fr 557px", t["text-font-size"] = "32px", t["content-padding"] = "34px 50px", t["logo-width"] = "78px", t["slogan-font-size"] = "15px", t["logo-wrap-padding"] = "20px 16px 16px";
                                            if (o > 1422) t["max-width"] = "1422px", t["grid-template-columns"] = "1fr 720px", t.background = "linear-gradient(90deg, #2d73bc 5.49%,#38bafe 59.45%, #E0ECFE 60%)";
                                            setStyles(t, e)
                                        }

                                        changePosBannerOnResize(), window.addEventListener("resize", changePosBannerOnResize), window.onunload = function () {
                                            var e = document.documentElement, t = _objectSpread({}, posOptionsInitialBanner39);
                                            window.removeEventListener("resize", changePosBannerOnResize), removeStyles(t, e)
                                        };
                                    })() </script>
                                <script>Widget("https://pos.gosuslugi.ru/form", 239775)</script>
                            </div>
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
                        usefulLinkRender();
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
                                <a class="email" href="mailto:buildinst@mail.ru">buildinst@mail.ru</a>
                            </div>
                            <div class="phones_item">
                                <h5>+7 (8512) 49-42-19</h5>
                                <p>Приемная комиссия</p>
                                <a class="email" href="mailto:prkom@agasu.ru">prkom@agasu.ru</a>

                            </div>
                        </section>
                        <section class="footer-contacts__address">
                            <?php echo JText::_('TPL_AGASU_ADDRESS'); ?>
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
                        <a target="_blank" href="https://vk.com/asuace" class="socials_item">
                            <i class="fa fa-vk"></i>
                        </a>
                        <a target="_blank" href="https://t.me/+TomhNYUXJdJiYzVi" class="socials_item">
                            <i class="fa fa-telegram"></i>
                        </a>
                        <a target="_blank" href="https://www.youtube.com/channel/UCdg84ZdlVAtQyug4mWEwHGQ" class="socials_item">
                            <i class="fa fa-youtube"></i>
                        </a>
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


</body>