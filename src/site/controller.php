<?php
defined('_JEXEC') or die;

/**
 * Blank Component Controller
 *
 * @package     Joomla.Site
 * @subpackage  com_blank
 * @since       3.1
 * @copyright   Copyright (C) 2015 nietonfir. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE
 */

jimport('joomla.application.component.controller');

class BlankController extends JControllerLegacy
{
    public function display($cachable = false, $urlparams = false)
    {
        JRequest::setVar('view','default'); // force it to be the search view

        return parent::display($cachable, $urlparams);
    }
}
