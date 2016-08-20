<?php
namespace wcf\data\wow\gameevent;
use wcf\data\DatabaseObjectList;

/**
 * Represents a list of WoW game events.
 * @author	Veneanar Falkenbann
 * @copyright	2016  Sylvanas Garde
 * @license	GNU General Public License <http://opensource.org/licenses/gpl-license.php> 
 * @package	eu.petbattle.league
 * 
 */

class WoWGameEventList extends DatabaseObjectList {
	/**
	 * @see \wcf\data\DatabaseObjectList::$className
	 */
	public $className = 'wcf\data\wow\gameevent\WoWGameEvent';

}