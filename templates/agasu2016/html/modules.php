<?php
	//for module @latest news on main page
	function modChrome_latestNews($module, &$params, &$attribs)
	{
		if(!empty($module->content))
		{
			$catLink = JRoute::_(ContentHelperRoute::getCategoryRoute($params->get('catid')[0]));
			if($module->showtitle)
			{?>
				<div class="news-block-header"><h3><?php echo $module->title; ?></h3></div>
			<?php 
			}
			echo $module->content; 
			?>
			<div class="center clearfix table">
				<a href="<?php echo $catLink; ?>" class="all-news-link pull-left">все новости</a>
			</div>
   <?php }
	}
?>