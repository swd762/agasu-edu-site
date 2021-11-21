<?php
	//for module @latest news on main page
	function modChrome_latestNews($module, &$params, &$attribs)
	{
		if(!empty($module->content))
		{
			$catLink = JRoute::_(ContentHelperRoute::getCategoryRoute($params->get('catid')[0]));
			if($module->showtitle)
			{?>
				<div class="news-header block-header"><h3><?php echo $module->title; ?></h3></div>
			<?php 
			}
			echo $module->content; 
			?>
			<div class="news-footer">
<!--				<a href="--><?php //echo $catLink; ?><!--" class="all-news-link pull-left">Все новости<i class="bi bi-arrow-right"></i></a>-->
                <a href="<?php echo $catLink; ?>" class="btn btn-primary">
                    Все новости
<!--                    <i class="bi bi-arrow-right"></i>-->
                </a>
			</div>
   <?php }
	}
?>