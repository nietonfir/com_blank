<?php
defined('_JEXEC') or die;

/**
 * Blank Component Default View
 *
 * @package     Joomla.Site
 * @subpackage  com_blank
 * @since       3.1
 * @copyright   Copyright (C) 2015 nietonfir. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE
 */

jimport('joomla.application.component.view');

class BlankViewDefault extends JViewLegacy
{
    protected $params;

    public function display($tpl = null)
    {
        $app    = JFactory::getApplication();
        $params = $app->getParams();
        $menus  = $app->getMenu();
        $menu   = $menus->getActive();

        if ($menu)
        {
            $params->set('page_heading', $params->get('page_title', $menu->title));
        }
        else
        {
            $params->set('page_title',  JText::_('Blank Component'));
        }

        $title = $params->get('page_title');
        if ($app->getCfg('sitename_pagetitles', 0)) {
            $title = JText::sprintf('JPAGETITLE', $app->getCfg('sitename'), $title);
        }
        $this->document->setTitle($title);

        if ($params->get('menu-meta_description'))
        {
            $this->document->setDescription($params->get('menu-meta_description'));
        }

        if ($params->get('menu-meta_keywords'))
        {
            $this->document->setMetadata('keywords', $params->get('menu-meta_keywords'));
        }

        if ($params->get('robots'))
        {
            $this->document->setMetadata('robots', $params->get('robots'));
        }

        $this->assignRef('params',      $params);

        parent::display($tpl);
    }
}
