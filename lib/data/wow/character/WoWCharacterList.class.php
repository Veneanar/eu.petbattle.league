<?php
namespace wcf\data\wow\character;
use wcf\data\DatabaseObjectList;

/**
 * Represents a list of WoW Characters.
 * @author	Veneanar Falkenbann
 * @copyright	2016  Sylvanas Garde
 * @license	GNU General Public License <http://opensource.org/licenses/gpl-license.php> 
 * @package	eu.petbattle.league
 * 
 */

class WoWCharacterList extends DatabaseObjectList {
	/**
	 * @see \wcf\data\DatabaseObjectList::$className
	 */
	public $className = 'wcf\data\wow\character\WoWCharacter';

}