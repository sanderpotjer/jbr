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
	<jdoc:include type="message" />
	<jdoc:include type="component" />
</body>

<jdoc:include type="modules" name="debug" style="none" />
</html>