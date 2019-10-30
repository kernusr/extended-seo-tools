<?php
/**
 * @package    extended-seo-tools
 *
 * @author     Артём <your@email.com>
 * @copyright  A copyright
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 * @link       http://your.url.com
 */

use Joomla\CMS\Language\Text;
use Joomla\CMS\HTML\HTMLHelper;

defined('_JEXEC') or die;

/**
 * Exseotool helper.
 *
 * @package   extended-seo-tools
 * @since     1.0.0
 */
class ExseotoolHelper
{
	/**
	 * Render submenu.
	 *
	 * @param   string  $vName  The name of the current view.
	 *
	 * @return  void
	 *
	 * @since   1.0.0
	 */
	public function addSubmenu($vName)
	{
		HTMLHelper::_('sidebar.addEntry', Text::_('COM_EXSEOTOOL'), 'index.php?option=com_exseotool&view=extended-seo-tools', $vName === 'extended-seo-tools');
	}
}
