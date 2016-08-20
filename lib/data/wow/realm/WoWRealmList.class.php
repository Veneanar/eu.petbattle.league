<?php
namespace wcf\data\wow\realm;
use wcf\data\DatabaseObjectList;

/**
 * Represents a list of WoW Realms.
 * @author	Veneanar Falkenbann
 * @copyright	2016  Sylvanas Garde
 * @license	GNU General Public License <http://opensource.org/licenses/gpl-license.php>
 * @package	eu.petbattle.league
 *
 */

class WoWRealmList extends DatabaseObjectList {
	/**
	 * @see \wcf\data\DatabaseObjectList::$className
	 */
	public $className = 'wcf\data\wow\realm\WoWRealm';

}