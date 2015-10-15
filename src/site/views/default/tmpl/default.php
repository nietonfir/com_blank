<?php
defined('_JEXEC') or die;

/**
 * Blank Component Default View Template
 *
 * @package     Joomla.Site
 * @subpackage  com_blank
 * @since       3.1
 * @copyright   Copyright (C) 2015 nietonfir. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE
 */

if ($this->showContent == 1) : ?>
<!-- main content for "<?php echo $this->title; ?>" -->
<?php elseif ($this->showContent == 2) : ?>
<div class="blank<?php echo $this->pageclass_sfx; ?>">
<?php if ($this->params->get('show_page_heading', 1)) : ?>
<h1><?php echo $this->escape($this->params->get('page_heading') ? $this->params->get('page_heading') : $this->params->get('page_title')); ?></h1>
<?php endif; ?>
</div>
<?php endif; ?>
