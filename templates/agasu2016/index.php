<html prefix="og: https://ogp.me/ns#" xmlns="https://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
<?php
	/**
* @copyrightCopyright (C) 2011 Евгений Попов
* @licenseGPL
*/
defined('_JEXEC') or die;
$this->baseurl = JURI::base();

//add bootstrap script
JHtml::_('bootstrap.framework');

$app = JFactory::getApplication();

$user = & JFactory::getUser();
if ($user->get('guest') == 1) {
$headerstuff = $this->getHeadData();
$key1 = JURI::base(true). '/media/system/js/mootools.js';
$key2 = JURI::base(true). '/media/system/js/caption.js';
$key3 = JURI::base(true). '/media/jui/js/jquery-noconflict.js';
unset($headerstuff['scripts'][$key1], $headerstuff['scripts'][$key2], $headerstuff['scripts'][$key3]);
$this->setHeadData($headerstuff);
}
?>
<?php
if (isset($this->_script['text/javascript']))
    {
    $this->_script['text/javascript'] = preg_replace('%jQuery\(window\)\.on\(\'load\',\s*function\(\)\s*{\s*new\s*JCaption\(\'img.caption\'\);\s*}\);\s*%', '', $this->_script['text/javascript']); //ищем и заменяем наш скрипт на дырку от бублика
    if (empty($this->_script['text/javascript']))
        unset($this->_script['text/javascript']); //если кроме нашего скрипта ничего нет, то убираем тег script
    }
?>    
<!DOCTYPE html>
<head>
<?php 
    $doc =& JFactory::getDocument();
    $doc->addCustomTag('<meta property="og:image" content="https://asuace.ru/templates/agasu2016/images/logo.png"/>');
    
    ?>


<jdoc:include type="head" />
<?php
//params for display page
$Itemid = JRequest::getInt('Itemid');
?>
  
  
<!--fonts-->
<link href='https://fonts.googleapis.com/css?family=Roboto&subset=latin,cyrillic,cyrillic-ext' rel='stylesheet' type='text/css'>

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="<?php echo $this->baseurl ?>templates/<?php echo $this->template ?>/css/bootstrap.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>templates/<?php echo $this->template ?>/css/bootstrap-theme.css" type="text/css" />

<link rel="stylesheet" href="<?php echo $this->baseurl?>templates/system/css/system.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl?>templates/system/css/general.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>templates/<?php echo $this->template ?>/css/standart.css?ver=8" type="text/css" />
<!--<link rel="stylesheet" href="<?php echo $this->baseurl ?>templates/<?php echo $this->template ?>/css/new-year.css" type="text/css" />-->
    
<!-- Font Awesome -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        
<!-- custom-scroll.css -->
<link rel="stylesheet" type="text/css" href="<?php echo $this->baseurl ?>templates/<?php echo $this->template ?>/scripts/custom-scroll/jquery.custom-scroll.css" />

  
<!--Javascript-->

  
  <!-- Bootstrap JavaScript -->
<!--<script src="<?php echo $this->baseurl ?>templates/<?php echo $this->template ?>/js/bootstrap.js"></script>-->

<!-- custom-scroll.js -->
<script src="<?php echo $this->baseurl ?>templates/<?php echo $this->template ?>/scripts/custom-scroll/jquery.custom-scroll.js"></script>

<!-- script for sidebar's menu & videogallery-->
<script src="<?php echo $this->baseurl ?>templates/<?php echo $this->template ?>/js/all-page-scripts.js"></script>

<!-- supermenu script -->
<script src="<?php echo $this->baseurl ?>templates/<?php echo $this->template ?>/js/supermenu-script.js"></script>

<!--Для соц кнопок-->    

<!-- vk -->
<script type="text/javascript" src="https://vk.com/js/api/share.js?94" async charset="windows-1251"></script>
    
<?php
#Версия сайта для слабовидящих
$v = JRequest::getInt( 'v', 55, 'get' );
//$vi = JFactory::getApplication()->input->getInt('vi', 5); // считываем параметр из url
$session = JFactory::getSession(); 
if($v != 55)
{
	$session->set('v', $v);
}
$is_v = $session->get('v', 0);
switch($is_v)
{
	case '1':
	    echo '<link rel="stylesheet" href="'.$this->baseurl.'templates/'.$this->template.'/css/vi_version.css" type="text/css" />';
	    $v_link = JUri::current().'?v=0';
	    $v_text = 'Основная версия';		
		break;
	default:
		$v_link = JUri::current().'?v=1';
		$v_text = 'Версия для слабовидящих';	
		break;
}
?>
<script>
    document.querySelector
</script>
</head>
<body>
		<!--video-container-->
        <div class="vc-wrapper"><div class="video-container clearfix custom-scroll_container"><span class="loading-icon"><i class="fa fa-circle-o-notch fa-spin fa-5x"></i></span></div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="header img-responsive col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="container-fluid">
                      <div class="row">
                          <div class="headline col-lg-6 col-md-6 col-sm-6 hidden-xs">
                                <h1><?php echo JText::_('TPL_AGASU_SHORT_NAME'); ?></h1>
                                <h3><?php echo JText::_('TPL_AGASU_FULL_NAME'); ?></h3>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 hidden-xs social-block">
                              <!--<div class="avsnos">
                                  <noindex>
                                      <a href="https://www.asv.mgsu.ru/" rel="nofollow" class="avs" title="Международная Ассоциация строительных высших учебных заведений" target="_blank"></a>
                                      <a href="https://www.nostroy.ru/" rel="nofollow" class="nos" title="Национальное объединение строителей" target="_blank"></a>
                                  </noindex>
                              </div>-->
                              <div class="social-wrapper">
								<div class="language-change">
									<jdoc:include type="modules" name="language_changer"/>
								</div>
                                  <div class="socialicons">
                                     <ul class="fa-ul">
                                        <li itemprop="copy"><jdoc:include type="modules" name="st"/></li>
                                        <style>
                                            .module_special_visually #special_visually label {
                                                border: none;
                                                font-size: 14px;
                                                padding-top: 4px;
                                            }
                                            .module_special_visually #special_visually .buttons .button_icon {
                                                width: 22px;
                                                height: 22px;
                                            }
                                        </style>
                                         <!-- <li><a href="<?php echo $v_link;?>" title="<?php echo $v_text;?>" class="vi-version ovz" id="ovz" itemprop="copy"><i class="fa fa-eye"></i></a></li> -->
                                         <li><a href="/instruktsii-k-mobilnomu-prilozheniyu/" title='Инструкции "Платежи АИСИ"' class="instr-link"><!--<i class="fa fa-book"></i>--></a></li>
                                         <li class="hidden"><a href="#" target="_blank" class="sb-link"></a></li>
                                    </ul>
                                    <ul class="fa-ul">
                                         <li><a href="https://www.facebook.com/%D0%90%D1%81%D1%82%D1%80%D0%B0%D1%85%D0%B0%D0%BD%D1%81%D0%BA%D0%B8%D0%B9-%D0%B3%D0%BE%D1%81%D1%83%D0%B4%D0%B0%D1%80%D1%81%D1%82%D0%B2%D0%B5%D0%BD%D0%BD%D1%8B%D0%B9-%D0%B0%D1%80%D1%85%D0%B8%D1%82%D0%B5%D0%BA%D1%82%D1%83%D1%80%D0%BD%D0%BE-%D1%81%D1%82%D1%80%D0%BE%D0%B8%D1%82%D0%B5%D0%BB%D1%8C%D0%BD%D1%8B%D0%B9-%D1%83%D0%BD%D0%B8%D0%B2%D0%B5%D1%80%D1%81%D0%B8%D1%82%D0%B5%D1%82-%D0%90%D0%93%D0%90%D0%A1%D0%A3-254233971352335/?ref=settings" target="_blank" class="vk-link"><i class="fa fa-facebook-official"></i></a></li>
                                         <li><a href="https://vk.com/asuace" target="_blank" class="vk-link"><i class="fa fa-vk"></i></a></li>
										 <li><a href="https://www.youtube.com/user/aucutv" target="_blank" class="youtube-link"><i class="fa fa-youtube"></i></a></li>
                                      </ul>
                                  </div>
                                  <div class="form-group">
                                    <jdoc:include type="modules" name="search"/>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                </div>
                <nav class="navbar navbar-default main-menu-margin">
                    <div class="container-fluid">
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<jdoc:include type="modules" name="header_menu"/>
                        </div>
                    </div>
                </nav>
                </div>
                <div class="sidebar col-xs-12">
                	<div class="custom-scroll_inner">
                        <div class="company" style="margin-bottom: 0;">
                            <a href="/" alt="<?php echo JText::_('TPL_AGASU_FULL_NAME'); ?>"><img width="180" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/logo.png"></a>
<p>buildinst@mail.ru</p>
                            <p class="phone">(8512) 49-42-15, 49-42-19</p>
                            <p class="line"></p>
                            <p class="adresses"><?php echo JText::_('TPL_AGASU_ADDRESS'); ?></p>
                        </div>
                        <!-- Гос услуги старт -->
                        <script src='https://pos.gosuslugi.ru/bin/script.min.js'></script> 
<style>
#js-show-iframe-wrapper{position:relative;display:flex;align-items:center;justify-content:center;width:100%;min-width:293px;max-width:100%;background:linear-gradient(138.4deg,#38bafe 26.49%,#2d73bc 79.45%);color:#fff;cursor:pointer}#js-show-iframe-wrapper .pos-banner-fluid *{box-sizing:border-box}#js-show-iframe-wrapper .pos-banner-fluid .pos-banner-btn_2{display:block;width:240px;min-height:56px;font-size:18px;line-height:24px;cursor:pointer;background:#0d4cd3;color:#fff;border:none;border-radius:8px;outline:0}#js-show-iframe-wrapper .pos-banner-fluid .pos-banner-btn_2:hover{background:#1d5deb}#js-show-iframe-wrapper .pos-banner-fluid .pos-banner-btn_2:focus{background:#2a63ad}#js-show-iframe-wrapper .pos-banner-fluid .pos-banner-btn_2:active{background:#2a63ad}@-webkit-keyframes fadeInFromNone{0%{display:none;opacity:0}1%{display:block;opacity:0}100%{display:block;opacity:1}}@keyframes fadeInFromNone{0%{display:none;opacity:0}1%{display:block;opacity:0}100%{display:block;opacity:1}}@font-face{font-family:LatoWebLight;src:url(https://pos.gosuslugi.ru/bin/fonts/Lato/fonts/Lato-Light.woff2) format("woff2"),url(https://pos.gosuslugi.ru/bin/fonts/Lato/fonts/Lato-Light.woff) format("woff"),url(https://pos.gosuslugi.ru/bin/fonts/Lato/fonts/Lato-Light.ttf) format("truetype");font-style:normal;font-weight:400}@font-face{font-family:LatoWeb;src:url(https://pos.gosuslugi.ru/bin/fonts/Lato/fonts/Lato-Regular.woff2) format("woff2"),url(https://pos.gosuslugi.ru/bin/fonts/Lato/fonts/Lato-Regular.woff) format("woff"),url(https://pos.gosuslugi.ru/bin/fonts/Lato/fonts/Lato-Regular.ttf) format("truetype");font-style:normal;font-weight:400}@font-face{font-family:LatoWebBold;src:url(https://pos.gosuslugi.ru/bin/fonts/Lato/fonts/Lato-Bold.woff2) format("woff2"),url(https://pos.gosuslugi.ru/bin/fonts/Lato/fonts/Lato-Bold.woff) format("woff"),url(https://pos.gosuslugi.ru/bin/fonts/Lato/fonts/Lato-Bold.ttf) format("truetype");font-style:normal;font-weight:400}
</style>

<style>
#js-show-iframe-wrapper .bf-2{position:relative;display:grid;grid-template-columns:var(--pos-banner-fluid-2__grid-template-columns);grid-template-rows:var(--pos-banner-fluid-2__grid-template-rows);width:100%;max-width:1060px;font-family:LatoWeb,sans-serif;box-sizing:border-box}#js-show-iframe-wrapper .bf-2__decor{grid-column:var(--pos-banner-fluid-2__decor-grid-column);grid-row:var(--pos-banner-fluid-2__decor-grid-row);padding:var(--pos-banner-fluid-2__decor-padding);background:var(--pos-banner-fluid-2__bg-url) var(--pos-banner-fluid-2__bg-position) no-repeat;background-size:var(--pos-banner-fluid-2__bg-size)}#js-show-iframe-wrapper .bf-2__logo-wrap{position:absolute;top:var(--pos-banner-fluid-2__logo-wrap-top);bottom:var(--pos-banner-fluid-2__logo-wrap-bottom);right:0;display:flex;flex-direction:column;align-items:flex-end;padding:var(--pos-banner-fluid-2__logo-wrap-padding);background:#2d73bc;border-radius:var(--pos-banner-fluid-2__logo-wrap-border-radius)}#js-show-iframe-wrapper .bf-2__logo{width:128px}#js-show-iframe-wrapper .bf-2__slogan{font-family:LatoWebBold,sans-serif;font-size:var(--pos-banner-fluid-2__slogan-font-size);line-height:var(--pos-banner-fluid-2__slogan-line-height);color:#fff}#js-show-iframe-wrapper .bf-2__content{padding:var(--pos-banner-fluid-2__content-padding)}#js-show-iframe-wrapper .bf-2__description{display:flex;flex-direction:column;margin-bottom:24px}#js-show-iframe-wrapper .bf-2__text{margin-bottom:12px;font-size:24px;line-height:32px;font-family:LatoWebBold,sans-serif;color:#fff}#js-show-iframe-wrapper .bf-2__text_small{margin-bottom:0;font-size:16px;line-height:24px;font-family:LatoWeb,sans-serif}#js-show-iframe-wrapper .bf-2__btn-wrap{display:flex;align-items:center;justify-content:center}
</style >
<div id='js-show-iframe-wrapper' style="min-width:250px">
  <div class='pos-banner-fluid bf-2'>

    <div class='bf-2__decor'>
      <div class='bf-2__logo-wrap'>
        <img
          class='bf-2__logo'
          src='https://pos.gosuslugi.ru/bin/banner-fluid/gosuslugi-logo.svg'
          alt='Госуслуги'
        />
        <div class='bf-2__slogan'>Решаем вместе</div >
      </div >
    </div >
    <div class='bf-2__content'>

      <div class='bf-2__description'>
          <span class='bf-2__text'>
            Не убран мусор, яма на дороге, не горит фонарь?
          </span >
        <span class='bf-2__text bf-2__text_small'>
            Столкнулись с проблемой&nbsp;— сообщите о ней!
          </span >
      </div >

      <div class='bf-2__btn-wrap'>
        <!-- pos-banner-btn_2 не удалять; другие классы не добавлять -->
        <button
          class='pos-banner-btn_2'
          type='button'
        >Сообщить о проблеме
        </button >
      </div >

    </div >

  </div >
</div >
<script>

(function(){
"use strict";function ownKeys(e,t){var o=Object.keys(e);if(Object.getOwnPropertySymbols){var n=Object.getOwnPropertySymbols(e);if(t)n=n.filter(function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable});o.push.apply(o,n)}return o}function _objectSpread(e){for(var t=1;t<arguments.length;t++){var o=null!=arguments[t]?arguments[t]:{};if(t%2)ownKeys(Object(o),true).forEach(function(t){_defineProperty(e,t,o[t])});else if(Object.getOwnPropertyDescriptors)Object.defineProperties(e,Object.getOwnPropertyDescriptors(o));else ownKeys(Object(o)).forEach(function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(o,t))})}return e}function _defineProperty(e,t,o){if(t in e)Object.defineProperty(e,t,{value:o,enumerable:true,configurable:true,writable:true});else e[t]=o;return e}var POS_PREFIX_2="--pos-banner-fluid-2__",posOptionsInitial={"grid-template-columns":"100%","grid-template-rows":"310px auto","decor-grid-column":"initial","decor-grid-row":"initial","decor-padding":"30px 30px 0 30px","bg-url":"url('https://pos.gosuslugi.ru/bin/banner-fluid/2/banner-fluid-bg-2-small.svg')","bg-position":"calc(10% + 64px) calc(100% - 20px)","bg-size":"cover","content-padding":"0 30px 30px 30px","slogan-font-size":"20px","slogan-line-height":"32px","logo-wrap-padding":"20px 30px 30px 40px","logo-wrap-top":"0","logo-wrap-bottom":"initial","logo-wrap-border-radius":"0 0 0 80px"},setStyles=function(e,t){Object.keys(e).forEach(function(o){t.style.setProperty(POS_PREFIX_2+o,e[o])})},removeStyles=function(e,t){Object.keys(e).forEach(function(e){t.style.removeProperty(POS_PREFIX_2+e)})};function changePosBannerOnResize(){var e=document.documentElement,t=_objectSpread({},posOptionsInitial),o=document.getElementById("js-show-iframe-wrapper"),n=o?o.offsetWidth:document.body.offsetWidth;if(n>405)t["slogan-font-size"]="24px",t["logo-wrap-padding"]="30px 50px 30px 70px";if(n>500)t["grid-template-columns"]="min-content 1fr",t["grid-template-rows"]="100%",t["decor-grid-column"]="2",t["decor-grid-row"]="1",t["decor-padding"]="30px 30px 30px 0",t["content-padding"]="30px",t["bg-position"]="0% calc(100% - 70px)",t["logo-wrap-padding"]="30px 30px 24px 40px",t["logo-wrap-top"]="initial",t["logo-wrap-bottom"]="0",t["logo-wrap-border-radius"]="80px 0 0 0";if(n>585)t["bg-position"]="0% calc(100% - 6px)";if(n>800)t["bg-url"]="url('https://pos.gosuslugi.ru/bin/banner-fluid/2/banner-fluid-bg-2.svg')",t["bg-position"]="0% center";if(n>1020)t["slogan-font-size"]="32px",t["line-height"]="40px",t["logo-wrap-padding"]="30px 30px 24px 50px";setStyles(t,e)}changePosBannerOnResize(),window.addEventListener("resize",changePosBannerOnResize),window.onunload=function(){var e=document.documentElement;window.removeEventListener("resize",changePosBannerOnResize),removeStyles(posOptionsInitial,e)};
})()
</script>
 <script>Widget("https://pos.gosuslugi.ru/form", 239775)</script>
                        <!-- Гос услуги конец -->
                        <div style="width: 250px;margin: 10px auto 10px;">
                            <!-- <a href="/lichnyj-kabinet-abiturienta.html" target="_blank">
                                <img style="max-width: 100%" src="/images/banners/lk_small.jpg">
                            </a> -->
                            <a class="hot-line-link" href="/news/9224-sberbank-realizuet-programmu-po-obucheniyu-prepodavatelej-i-studentov.html">
                                <img style="margin-top: 20px" src="/images/banners/sber_startup_02_21_2.jpg">
                            </a>
                            <a class="hot-line-link" target="_blank" href="https://www.youtube.com/watch?v=UC8hU8x-k6c">
                                <img style="margin-top: 20px" src="/images/banners/assessment_02_21.jpg?ver=2">
                            </a>
                        </div>
                        <div class="second-menu">
							<jdoc:include type="modules" name="sidebar_menu"/>
                        </div>
						<jdoc:include type="modules" name="anti_terror"/>
                        <div class="vdpt">
                            <a href="#">
                                <div class="video mrg-b-30">
                                    <p class="textvdpt"><?php echo JText::_('TPL_AGASU_VIDEOGALLERY_TITLE'); ?></p>
                                </div>
                            </a>
                            <jdoc:include type="modules" name="important_banners"/>
                            <!--<a href="/">
                               <div class="photo mrg-b-30">
                                    <p class="textvdpt"><?php //echo JText::_('TPL_AGASU_PHOTOGALLERY_TITLE'); ?></p>
                               </div>
                           </a>-->
                        </div>
						<div id="counts-container">
							<noindex>
								<!--LiveInternet counter-->
								<script type="text/javascript"><!--
									document.write("<a href='//www.liveinternet.ru/click' "+
									"target=_blank><img src='//counter.yadro.ru/hit?t18.6;r"+
									escape(document.referrer)+((typeof(screen)=="undefined")?"":
									";s"+screen.width+"*"+screen.height+"*"+(screen.colorDepth?
									screen.colorDepth:screen.pixelDepth))+";u"+escape(document.URL)+
									";"+Math.random()+
									"' alt='' title='LiveInternet: показано число просмотров за 24"+
									" часа, посетителей за 24 часа и за сегодня' "+
									"border='0' width='88' height='31'><\/a>")
							//--</script>
								<!--/LiveInternet-->
							<!-- Yandex.Metrika counter -->
							<script type="text/javascript">
								(function (d, w, c) {
									(w[c] = w[c] || []).push(function() {
										try {
											w.yaCounter37861220 = new Ya.Metrika({
												id:37861220,
												clickmap:true,
												trackLinks:true,
												accurateTrackBounce:true,
												webvisor:true
											});
										} catch(e) { }
									});

									var n = d.getElementsByTagName("script")[0],
										s = d.createElement("script"),
										f = function () { n.parentNode.insertBefore(s, n); };
									s.type = "text/javascript";
									s.async = true;
									s.src = "https://mc.yandex.ru/metrika/watch.js";

									if (w.opera == "[object Opera]") {
										d.addEventListener("DOMContentLoaded", f, false);
									} else { f(); }
								})(document, window, "yandex_metrika_callbacks");
							</script>
							<noscript><div><img src="https://mc.yandex.ru/watch/37861220" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
							<!-- /Yandex.Metrika counter -->
						</div>
                    </div>
                </div>
                <div class="content col-lg-12 col-md-12 col-sm-12 hidden-xs">
					<!--slider start-->
					<?php if ($Itemid == 101 || $Itemid == 102 || $Itemid == 103)
					{?>
						<div class="slider-container">
							<jdoc:include type="modules" name="slider_main"/>
						</div>
<!--                        <div style="width: 60%;margin: 10px auto;background-color: #ffffff">-->
<!--                            <p style="text-align: center;font-weight: 600">Уважаемые студенты и сотрудники университета!</p>-->
<!--                            <p style="text-indent: 40px">В соответствии с требованием регионального министерства образования и науки и распоряжением губернатора Астраханской области с 6 апреля 2020 г. АГАСУ выходит с вынужденных каникул и возобновляет электронное обучение. Лекции, семинарские занятия, консультации по-прежнему проводятся с помощью образовательного портала вуза (ссылки для входа: <a href="http://moodle.aucu.ru">http://moodle.aucu.ru</a> для 1-2 курсов; <a href="http://edu.aucu.ru/moodle">http://edu.aucu.ru/moodle</a> для 3-5 курсов).</p>-->
<!--                            <p style="text-indent: 40px">На сегодняшний день в АГАСУ не выявлено ни одного случая заболевания. Тем не менее с учетом эпидемиологической обстановки в мире усиливаются меры по охране здоровья студентов и сотрудников университета. </p>-->
<!--                            <p style="text-indent: 40px">В отношении граждан, проживающих в общежитиях, с 28.03.2020 г. введен пропускной режим с 8:00 до 22:00; для посетителей – вход запрещен. Кроме того, не разрешается отсутствовать более суток; контактировать с лицами, имеющими симптомы заболевания или побывавшими в предшествующие 14 дней в местах с повышенной эпидемиологической опасностью.</p>-->
<!--                            <p style="text-indent: 40px">Обращаемся к вам с просьбой соблюдать меры личной безопасности. Будьте ответственными, берегите себя и своих близких! </p>-->
<!--                            <p style="text-indent: 40px">Вся актуальная информация будет оперативно появляться на сайте вуза, в разделе <a href="//xn--80aai1dk.xn--p1ai/news/8829-agasu-v-usloviyakh-ugrozy-rasprostraneniya-koronavirusnoj-infektsii.html">«АГАСУ в условиях угрозы распространения коронавирусной инфекции»</a>, и в социальных сетях.</p>-->
<!--                            <p style="margin-top: 10px;text-indent: 40px">Телефон для консультаций по техническим вопросам функционирования образовательной среды: 89170901237; по общим вопросам: 89275840532, 89276649213.</p>-->
<!--                        </div>-->
					<?php }
					?>
                    
<!--                    <div style="text-align: center">-->
<!--                        <img src="/images/slider_rus/el_ed_24_03_20_v3.png">-->
<!--                    </div>-->

                    <!--slider end-->
                	<!-- supermenu start-->
					<jdoc:include type="modules" name="supermenu"/>
                	<!-- supermenu end-->
					<!-- отображение компонентов на главной не требуется-->
					<?php $menu = & JSite::getMenu();

					if ($Itemid != 101 && $Itemid != 102 && $Itemid != 103) { ?>
						 <jdoc:include type="component" />
					<?php } ?>
					<?php if ($Itemid == 101 || $Itemid == 102 || $Itemid == 103)
					{?>
						<!--important news Убран по требованию 26.04.2018-->
						<!--div class="important-news-block row hidden-xs" data-parallax="scroll" data-image-src="<?php echo $this->baseurl ?>templates/<?php echo $this->template ?>/images/maincentralback.jpg" -->
								<jdoc:include type="modules" name="important_news"/>
						</div>
						<!-- news block -->
						<div class="news-block row">
							<div class="centr-wrapper clearfix">
								<jdoc:include type="modules" name="latest_news"/>
							</div>
						</div>
					<?php }
					?>
                </div>
            </div>
        </div>

<div class="footer col-lg-12 col-md-12 col-sm-12 hidden-xs">
	<div class="footer-logo-cont"><img alt="<?php echo JText::_('TPL_AGASU_FULL_NAME'); ?> (<?php echo JText::_('TPL_AGASU_SHORT_NAME'); ?>)" style="width:130px;height:auto" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/logo.png"></div>
	<div class="footer-name-cont"><span><?php echo JText::_('TPL_AGASU_FULL_NAME'); ?> © 2008-<?php echo date("Y")?></span>
        <span>(8512) 49-42-15 - Приемная ректора</span>
        <span>(8512) 49-42-19 - Приемная комиссия</span>
        <span><?php echo JText::_('TPL_AGASU_ADDRESS'); ?></span><span class="foot12plus"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/foot12plus.png"></span></div>
</div>		
		
<script>
/*$('a[itemprop="EduPr"]').on('click', function(e) {
e.preventDefault();
 var password = prompt('Введите пароль для доступа', '');
if(password == '123qwe456' || password == 'Pass123$') {
window.location.replace($(this).attr('href'));
}
});*/
function sh(obj){if(typeof obj==='object')if(obj.style.display=='none')obj.style.display='block';else obj.style.display='none';}
</script>

<?php if (!in_array($Itemid, [101, 102, 103])) {
    ?>
    <script>

    document.querySelectorAll("a[data-tooltip]").forEach((el) => {
        if(!el.dataset.tooltip) {
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

        
    })</script>
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
<?php }?>

</body>


