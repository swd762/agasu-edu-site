<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_menu
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

// Note. It is important to remove spaces between elements.
$class = $item->anchor_css ? $item->anchor_css : '';
$title = $item->anchor_title ? 'title="' . $item->anchor_title . '" ' : '';
$link = $item->flink;

 //if deeper - add bootstrap data and class for link
if($item->deeper) 
{
	$data = 'data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"';
	$class .= 'dropdown-toggle';
	$link = '#';
	
	//carret near deeper link
	$caret = '<span class="caret"></span>';
}
else{
	$data = '';
	$caret = '';
}

if ($item->menu_image)
{
	$item->params->get('menu_text', 1) ?
	$linktype = '<img src="' . $item->menu_image . '" alt="' . $item->title . '" /><span class="image-title">' . $item->title . '</span> ' :
	$linktype = '<img src="' . $item->menu_image . '" alt="' . $item->title . '" />';
}
else
{
	$linktype = $item->title;
}

switch ($item->browserNav)
{
	default:
	case 0:
?><a <?php echo $data; ?> class="<?php echo $class; ?>" href="<?php echo $link; ?>" <?php echo $title; ?>><?php echo $linktype; echo $caret;?></a><?php   //add caret in deeper link tag
		break;
	case 1:
		// _blank
?><a <?php echo $data; ?> class="<?php echo $class; ?>" href="<?php echo $link; ?>" target="_blank" <?php echo $title; ?>><?php echo $linktype; echo $caret;?></a><?php  //add caret after deeper link tag
		break;
	case 2:
	// Use JavaScript "window.open"
?><a <?php echo $data; ?> class="<?php echo $class; ?>" href="<?php echo $link; ?>" onclick="window.open(this.href,'targetWindow','toolbar=no,location=no,status=no,menubar=no,scrollbars=yes,resizable=yes');return false;" <?php echo $title; ?>><?php echo $linktype; echo $caret;?></a>
<?php //add caret after deeper link tag
		break;
}
