<?php


/**
 * @package     Joomla.Administrator
 * @subpackage  com_plcatalog
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
 
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
 
/**
 * HTML View class for the PlCatalog Component
 *
 * @since  0.0.1
 */
class PLCatalogViewPLCatalog extends JViewLegacy
{
	/**
	 * Display the PlCatalog view
	 *
	 * @param   string  $tpl  The name of the template file to parse; automatically searches through the template paths.
	 *
	 * @return  void
	 */
	function display($tpl = null)
	{
        $this->title = $this->get("Title");
        $renderer = $this->get("Renderer");
        $document = JFactory::getDocument();
        $document->addStyleSheet($renderer->cssUri());
        $this->products_renderer = $renderer;
 
		// Display the view
		parent::display($tpl);
	}
}
