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
if($imgs[2][0] == null)
	$imgs[2][0] = '/files/images/agasu_logo1.png';
?>

<div class="news-item col-lg-4 col-md-4 col-sm-6 col-xs-12">
	<a href="<?php echo $item->link; ?>">
	<div class="news-img-container centr-wrapper"><img src="<?php echo $imgs[2][0]; ?>"></div>
    <div class="news-content">
        <span class="news-title centr-wrapper"><?php echo $item->title; ?></span>
        <span class="news-date centr-wrapper"><?php echo date('d.m.Y', strtotime($item->created)); ?></span>
    </div>	
	</a>
</div>