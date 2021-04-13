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
    <section class="header">
        <div class="container">
            <section class="top-nav">
                <div class="top-nav_hamburger-btn">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <ul class="top-nav_shortcuts" style="margin-bottom: 0">
                    <li class="top-nav_shortcuts-item"><a href="#">RU<i class="ic-arrow-bottom" style="font-size: 8px;vertical-align: middle;padding-left: 3px"></i></a>
                    </li>
                    <li class="top-nav_shortcuts-item"><a href="#"><i class="ic-eye" style="font-size: 20px"></i></a></li>
                    <li class="top-nav_shortcuts-item"><a href="#"><i class="ic-search"></i></a></li>
                </ul>
            </section>
            <section class="header-main">
                <div class="header-main_logo">
                    <img src="<?php echo $this->baseurl ?>templates/<?php echo $this->template ?>/images/logo.png"
                         alt="">
                    <p>АСТРАХАНСКИЙ ГОСУДАРСТВЕННЫЙ<br>АРХИТЕКТУРНО-СТРОИТЕЛЬНЫЙ<br>УНИВЕРСИТЕТ</p>
                </div>
                <div class="header-menu">
                    <div class="header-menu_shortcuts">
                        <a href="#" class="header-menu_shortcuts-item">
                            <img src="<?php echo $this->baseurl ?>templates/<?php echo $this->template ?>/images/icons/world.svg"
                                 alt="">
                            Образовательные ресурсы
                        </a>
                        <a href="#" class="header-menu_shortcuts-item">
                            <img src="<?php echo $this->baseurl ?>templates/<?php echo $this->template ?>/images/icons/calendar.svg"
                                 alt="">
                            Расписание
                        </a>
                        <a href="#" class="header-menu_shortcuts-item">
                            <img src="<?php echo $this->baseurl ?>templates/<?php echo $this->template ?>/images/icons/user.svg"
                                 alt="">
                            Личный кабинет
                        </a>
                        <a href="#" class="header-menu_shortcuts-item">
                            <img src="<?php echo $this->baseurl ?>templates/<?php echo $this->template ?>/images/icons/place.svg"
                                 alt="">
                            Контакты
                        </a>
                    </div>
                    <div class="header-menu_menu">
                        <a href="#" class="header-menu_menu-item">
                            Университет
                        </a>
                        <a href="#" class="header-menu_menu-item">
                            Абитуриенту
                        </a>
                        <a href="#" class="header-menu_menu-item">
                            Студенту
                        </a>
                        <a href="#" class="header-menu_menu-item">
                            Образование
                        </a>
                        <a href="#" class="header-menu_menu-item">
                            Наука
                        </a>
                    </div>


                </div>
            </section>
        </div>
    </section>
    <section class="main">
        <section class="main-slider">
            <div class="container">
                <div class="main-slider_wrapper">
                    <img src="<?php echo $this->baseurl ?>templates/<?php echo $this->template ?>/images/tmp/slider.png"
                         alt="">
                </div>
            </div>
        </section>
        <section class="news">
            <div class="container">
                <section class="news-wrapper">
                    <header>
                        <h2>Новости</h2>
                        <ul class="news-nav">
                            <li><a href="#">События</a></li>
                            <li><span> / </span></li>
                            <li><a href="#">Календарь событий</a></li>
                        </ul>
                    </header>
                    <main>
                        <div class="news-item">
                            <img src="<?php echo $this->baseurl ?>templates/<?php echo $this->template ?>/images/tmp/news.png"
                                 alt="">
                        </div>
                        <div class="news-item">
                            <img src="<?php echo $this->baseurl ?>templates/<?php echo $this->template ?>/images/tmp/news.png"
                                 alt="">
                        </div>
                        <div class="news-item">
                            <img src="<?php echo $this->baseurl ?>templates/<?php echo $this->template ?>/images/tmp/news.png"
                                 alt="">
                        </div>
                        <div class="news-item">
                            <img src="<?php echo $this->baseurl ?>templates/<?php echo $this->template ?>/images/tmp/news.png"
                                 alt="">
                        </div>
                        <div class="news-item">
                            <img src="<?php echo $this->baseurl ?>templates/<?php echo $this->template ?>/images/tmp/news.png"
                                 alt="">
                        </div>
                        <div class="news-item">
                            <img src="<?php echo $this->baseurl ?>templates/<?php echo $this->template ?>/images/tmp/news.png"
                                 alt="">
                        </div>
                    </main>
                </section>


            </div>

        </section>
        <section class="media">
            <div class="container">
                <section class="media-wrapper">
                    <header>
                        <h2>Медиаресурсы</h2>
                        <ul class="news-nav">
                            <li><a href="#">Видео</a></li>
                            <li><span> / </span></li>
                            <li><a href="#">Фото</a></li>
                        </ul>
                    </header>
                    <main>
                        <div class="media-item">
                            <img src="<?php echo $this->baseurl ?>templates/<?php echo $this->template ?>/images/tmp/video.png"
                                 alt="">
                        </div>
                        <div class="media-item">
                            <img src="<?php echo $this->baseurl ?>templates/<?php echo $this->template ?>/images/tmp/video.png"
                                 alt="">
                        </div>
                        <div class="media-item">
                            <img src="<?php echo $this->baseurl ?>templates/<?php echo $this->template ?>/images/tmp/video.png"
                                 alt="">
                        </div>
                        <div class="media-item">
                            <img src="<?php echo $this->baseurl ?>templates/<?php echo $this->template ?>/images/tmp/video.png"
                                 alt="">
                        </div>
                        <div class="media-item">
                            <img src="<?php echo $this->baseurl ?>templates/<?php echo $this->template ?>/images/tmp/video.png"
                                 alt="">
                        </div>
                        <div class="media-item">
                            <img src="<?php echo $this->baseurl ?>templates/<?php echo $this->template ?>/images/tmp/video.png"
                                 alt="">
                        </div>
                    </main>
                </section>
            </div>
        </section>

    </section>


</div>
</body>