<?php
/**
 * @package     Joomla.Site
 * @subpackage  Layout
 *
 * @copyright   Copyright (C) 2005 - 2016 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('JPATH_BASE') or die;

/**
 * Note that this layout opens a div with the page class suffix. If you do not use the category children
 * layout you need to close this div either by overriding this file or in your main layout.
 */
$params    = $displayData->params;
$extension = $displayData->get('category')->extension;
$canEdit   = $params->get('access-edit');
$className = substr($extension, 4);

/**
 * This will work for the core components but not necessarily for other components
 * that may have different pluralisation rules.
 */
if (substr($className, -1) == 's')
{
	$className = rtrim($className, 's');
}
$tagsData = $displayData->get('category')->tags->itemTags;
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
                <?php if ($params->get('show_category_title', 1)) : ?>
                    <h3 class="facultet-header">
                        <?php echo JHtml::_('content.prepare', $displayData->get('category')->title, '', $extension . '.category.title'); ?>
                    </h3>
                <?php endif; ?>
                <?php if ($params->get('show_description', 1) || $params->def('show_description_image', 1)) : ?>
                    <div class="category-desc">
                        <?php if ($params->get('show_description_image') && $displayData->get('category')->getParams()->get('image')) : ?>
                            <img src="<?php echo $displayData->get('category')->getParams()->get('image'); ?>" alt="<?php echo htmlspecialchars($displayData->get('category')->getParams()->get('image_alt')); ?>"/>
                        <?php endif; ?>
                        <?php if ($params->get('show_description') && $displayData->get('category')->description) : ?>
                            <?php echo JHtml::_('content.prepare', $displayData->get('category')->description, '', $extension . '.category.description'); ?>
                        <?php endif; ?>
                        <div class="clr"></div>
                    </div>
                <?php endif; ?>
            </div>
        </div>



<!--		--><?php //if ($params->get('show_cat_tags', 1)) : ?>
<!--			--><?php //echo JLayoutHelper::render('joomla.content.tags', $tagsData); ?>
<!--		--><?php //endif; ?>
        
<!--		--><?php //if ($displayData->get('children') && $displayData->maxLevel != 0) : ?>
<!--			<div class="cat-children">-->
<!--				--><?php //if ($params->get('show_category_heading_title_text', 1) == 1) : ?>
<!--					<h3>-->
<!--						--><?php //echo JText::_('JGLOBAL_SUBCATEGORIES'); ?>
<!--					</h3>-->
<!--				--><?php //endif; ?>
<!--				--><?php //echo $displayData->loadTemplate('children'); ?>
<!--			</div>-->
<!--		--><?php //endif; ?><!--        -->
        
<!--		--><?php //echo $displayData->loadTemplate($displayData->subtemplatename); ?>

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

