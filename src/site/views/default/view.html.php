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

class BlankViewDefault extends JViewLegacy
{
    public function display($tpl = null)
    {
        $app    = JFactory::getApplication();
        $params = $app->getParams();
        $menu   = $app->getMenu()->getActive();

        // Check for errors.
        if (count($errors = $this->get('Errors'))) {
            JError::raiseWarning(500, implode("\n", $errors));

            return false;
        }

        if ($menu) {
            $params->set('page_heading', $params->get('page_title', $menu->title));
        } else {
            $params->set('page_title',  JText::_('Blank Component'));
        }

        $title = $params->get('page_title', '');
        if (empty($title)) {
            $title = $app->get('sitename');
        } else if ($app->get('sitename_pagetitles', 0) == 1) {
            $title = JText::sprintf('JPAGETITLE', $app->get('sitename'), $title);
        } else if ($app->get('sitename_pagetitles', 0) == 2) {
            $title = JText::sprintf('JPAGETITLE', $title, $app->get('sitename'));
        }
        $this->document->setTitle($title);

        if ($params->get('menu-meta_description')) {
            $this->document->setDescription($params->get('menu-meta_description'));
        }

        if ($params->get('menu-meta_keywords')) {
            $this->document->setMetadata('keywords', $params->get('menu-meta_keywords'));
        }

        if ($params->get('robots')) {
            $this->document->setMetadata('robots', $params->get('robots'));
        }

        // assign view variables
        $this->showContent   = $params->get('content', 0);
        $this->title         = $title;
        $this->pageclass_sfx = htmlspecialchars($params->get('pageclass_sfx'));
        $this->params        = $params;

        parent::display($tpl);
    }
}
