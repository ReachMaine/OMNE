<?php
/**
 * @copyright	Copyright (C) 2008 - 2009  All rights reserved.
 * @license		
 */

// no direct access
defined('_JEXEC') or die('Restricted access');

/*
 * Module chrome for rendering the module in a slider
 */
function modChrome_slider($module, &$params, &$attribs)
{
	jimport('joomla.html.pane');
	// Initialize variables
	$sliders = & JPane::getInstance('sliders');
	$sliders->startPanel( JText::_( $module->title ), 'module' . $module->id );
	echo $module->content;
	$sliders->endPanel();
}
?>

<?php
function modChrome_leftmod($module, &$params, &$attribs)
{
	if (!empty ($module->content)) : ?>
		<table cellpadding="0" cellspacing="0" class="moduletable<?php echo $params->get('moduleclass_sfx'); ?>">
			<tr><th><?php echo $module->title; ?></th></tr>
			<tr><td><?php echo $module->content; ?></td></tr>
		</table>
		<table cellpadding="0" cellspacing="0" class="leftmodbott">
            <tr><td></td></tr>
		</table><div class="leftmodbott-space"></div>
	<?php endif;
}
?>