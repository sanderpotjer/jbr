<?php
defined('_JEXEC') or die;

function modChrome_bootstrap($module, &$params, &$attribs)
{
	if ($module->content) 
	{
		echo "<div class=\"span" .htmlspecialchars($params->get('bootstrap_size')." ".$params->get('moduleclass_sfx'))."\">";
		if ($module->showtitle)
		{
			echo "<h3><span class=\"".htmlspecialchars($params->get('header_class'))."\"></span> " . $module->title . "</h3>";
		}
		echo $module->content;
		echo "</div>";
	}
}
?>