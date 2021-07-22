<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_articles_news
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

$item_heading = $params->get('item_heading', 'h4');

$output = preg_match_all('/<img[^>]+src=([\'"])?((?(1).+?|[^\s>]+))(?(1)\1)/', $item->introtext, $imgs);
//$output = preg_match_all('/<img[^>]+alt=([\'"])?((?(1).+?|[^\s>]+))(?(1)\1)/', $item->introtext, $alts);
if ($imgs[2][0] == '/files/images/44-redaktor/logo/agasu_logo1.jpg')
    $imgs[2][0] = str_replace('jpg', 'png', $imgs[2][0]);
elseif (!$imgs[2][0])
    $imgs[2][0] = '/files/images/44-redaktor/logo/agasu_logo1.png';

//var_dump($imgs);

//echo'<pre>';
//var_dump(json_decode($item->images));
//echo'</pre>';
//$images = json_decode($item->images);
//$image = imagecreatefromjpeg($images->image_intro);
//$image = $images->image_intro;


//$size = min(imagesx($image), imagesy($image));
//$im2 = imagecrop($image, ['x' => 0, 'y' => 0, 'width' => 200, 'height' => 300]);
//imagejpeg($im2, $images->image_intro);

//echo'<pre>';
//var_dump($im2);
//echo'</pre>';

// creating date stamp for marking news
$day = date('d', strtoupper($item->created));
$arr = ['января', 'февраля', 'марта', 'апреля', 'мая', 'июня', 'июля', 'августа', 'сентября', 'октября', 'ноября', 'декабря'];
$month = $arr[date('n') - 1];
?>


<div class="news-item col-lg-4 col-md-4 col-sm-6 col-xs-12">
    <a href="<?php echo $item->link; ?>">

        <section class="news-item__img">
            <div class="o-mask">
                <div class="shadow"></div>
                <div class="date-mark">
                    <span class="day"><? echo $day ?></span>
                    <span class="month"><? echo $month ?></span>
                </div>

                <?php $images = json_decode($item->images); ?>
                <?php if (isset($images->image_intro) && !empty($images->image_intro)) : ?>
                    <img src="<?php echo htmlspecialchars($images->image_intro); ?>" alt="<?php echo htmlspecialchars($images->image_intro_alt); ?>"/>
                <?php endif; ?>

            </div>
        </section>
        <div class="news-item__title">
            <span class=""><?php echo $item->title; ?></span>
        </div>
    </a>
</div>