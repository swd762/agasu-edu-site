<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_content
 *
 * @copyright   Copyright (C) 2005 - 2016 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

JHtml::addIncludePath(JPATH_COMPONENT . '/helpers');

// Create shortcuts to some parameters.
$params  = $this->item->params;
$images  = json_decode($this->item->images);
$urls    = json_decode($this->item->urls);
$canEdit = $params->get('access-edit');
$user    = JFactory::getUser();
$info    = $params->get('info_block_position', 0);
JHtml::_('behavior.caption');
?>

<div class="facultets">
    <div class="<?php echo $className .'-category' . $displayData->pageclass_sfx;?>">
        <!--		--><?php //if ($params->get('show_page_heading')) : ?>
        <!--			<h1>-->
        <!--				--><?php //echo $displayData->escape($params->get('page_heading')); ?>
        <!--			</h1>-->
        <!--		--><?php //endif; ?>

        <!--        --><?php //if ($params->get('show_category_title', 1)) : ?>
        <!--            <h2>-->
        <!--                --><?php //echo JHtml::_('content.prepare', $displayData->get('category')->title, '', $extension . '.category.title'); ?>
        <!--            </h2>-->
        <!--        --><?php //endif; ?>
        <div class="row">
            <div class="col-md-2">
                <?php $document = &JFactory::getDocument();
                $renderer   = $document->loadRenderer('modules');
                $position   = 'strfaculty_menu';
                $options   = array('style' => 'raw');
                echo $renderer->render($position, $options, null);
                ?>
                <!--                <jdoc:include type="modules" name="faculty_menu"/>-->
                <!--                <ul class="nav nav-pills nav-stacked nav-skate nav-fac" style="top: 0px;">-->
                <!--                    <li><a href="#">Информация о факультете</a></li>-->
                <!--                    <li><a href="#">Сотрудники деканата</a></li>-->
                <!--                    <li><a href="#">Направления подготовки</a></li>-->
                <!--                    <li><a href="#">Структура факультета</a></li>-->
                <!--                    <li><a href="#">Информация для студентов/школьников/учителей</a></li>-->
                <!--                    <li><a href="#">Достижения факультета</a></li>-->
                <!--                    <li><a href="#">Учебная и научная работа</a></li>-->
                <!--                </ul>-->
            </div>
            <div class="col-md-10">
                <?php if ($params->get('show_title')) : ?>
                    <h3 class="facultet-header">
                        <?php echo $this->escape($this->item->title); ?>
                    </h3>
                <?php endif; ?>
                <div class="category-desc">
                    <?php echo $this->item->text; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    .facultets {
        padding: 20px 0 30px;
    }
    .nav-fac li {
        background-color: #dfe2ef;
    }
    .nav-fac li a {
        color: #339 !important;
        font-weight: normal;
        line-height: 25px;
        white-space: normal;
    }
    .nav-fac li a:hover {
        background-color: #eee;
        color: #930 !important;
    }
    .nav-fac li.current>a, .nav-fac li.current>a:hover {
        background-color: #556090;
        color: #fff !important;
        text-decoration: none;
    }

    .facultet-header {
        font-size: 30px;
        margin: 0 0 10px;
        color: #6b6b6b;
    }
    h4 {
        color: #474980;
        font-size: 19px;
    }
    .nav-fac>li>a {
        display: none;
    }
    .nav-fac>li>.dropdown-menu {
        position: relative;
        top: auto;
        left: auto;
        background-color: transparent;
        float: none;
        min-width: auto;
        border: none;
        border-radius: 0;
        display: block;
        padding: 0;
        box-shadow: none;
    }
    .nav-fac>li>.dropdown-menu>li>a {
        padding: 10px 15px;
    }
</style>
