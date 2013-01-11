<?php
defined('_JEXEC') or die;

// Include Joomla Bootstrap CSS & JS
JHtml::_('bootstrap.framework');
JHtmlBootstrap::loadCss();

// Include additional CSS
JFactory::getDocument()->addStyleSheet('media/jui/css/icomoon.css');
JFactory::getDocument()->addStyleSheet('templates/'.$this->template.'/css/template.css');
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<jdoc:include type="head" />
</head>

<body>
	<!-- Begin Content -->
	<div class="container">
		<div id="header" class="row-fluid">
			<jdoc:include type="modules" name="header" style="xhtml" />
		</div>
		<div id="specialisaties" class="row-fluid">
			<jdoc:include type="modules" name="abovecontent" style="xhtml" />
		</div>
		<div id="portfolio">
			<hr>
			<jdoc:include type="message" />
			<jdoc:include type="component" />
		</div>
		<div id="contact" class="row-fluid">
			<jdoc:include type="modules" name="bottom" style="xhtml" />
		</div>
		<div class="row-fluid">
			<p align="center">&copy; <?php echo(JFactory::getApplication()->getCfg('sitename'));?> <?php echo date('Y') ?></p>
		</div>
	</div>
	<!-- End Content -->
</body>

<jdoc:include type="modules" name="debug" style="none" />
</html>