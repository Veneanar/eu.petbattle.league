<?php
namespace wcf\data\league\game\pool;
use wcf\data\DatabaseObjectEditor;

/**
 * Provides functions to edit pool datas.
 * @author	Veneanar Falkenbann
 * @copyright	2016  Sylvanas Garde
 * @license	GNU General Public License <http://opensource.org/licenses/gpl-license.php>
 * @package	eu.petbattle.league
 *
 */

class GamePoolEditor extends DatabaseObjectEditor {
	/**
	 * @see \wcf\data\DatabaseObjectDecorator::$baseClass
	 */
	public static $baseClass = 'wcf\data\league\game\pool\GamePool';

}