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
?>
<!-- Blank Component 3.0.0 starts here -->
<div class="blank<?php echo $this->pageclass_sfx; ?>">
<?php if ($this->params->get('show_page_heading', 1)) : ?>
<h1>
	<?php if ($this->escape($this->params->get('page_heading'))) :?>
		<?php echo $this->escape($this->params->get('page_heading')); ?>
	<?php else : ?>
		<?php echo $this->escape($this->params->get('page_title')); ?>
	<?php endif; ?>
</h1>
<?php endif; ?>
</div>
<!-- Blank Component 3.0.0 ends here -->
