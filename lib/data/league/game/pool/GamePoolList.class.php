<?php
namespace wcf\data\league\game\pool;
use wcf\data\DatabaseObjectList;

/**
 * Represents a list of pool datas.
 * @author	Veneanar Falkenbann
 * @copyright	2016  Sylvanas Garde
 * @license	GNU General Public License <http://opensource.org/licenses/gpl-license.php>
 * @package	eu.petbattle.league
 *
 */

class GamePoolList extends DatabaseObjectList {
	/**
	 * @see \wcf\data\DatabaseObjectList::$className
	 */
	public $className = 'wcf\data\league\game\pool\GamePool';

}