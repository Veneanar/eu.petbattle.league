<?php
namespace wcf\data\wow\battlepet;
use wcf\data\DatabaseObjectList;

/**
 * Represents a list of WoW battle pets.
 * @author	Veneanar Falkenbann
 * @copyright	2016  Sylvanas Garde
 * @license	GNU General Public License <http://opensource.org/licenses/gpl-license.php> 
 * @package	eu.petbattle.league
 * 
 */

class WoWPetList extends DatabaseObjectList {
	/**
	 * @see \wcf\data\DatabaseObjectList::$className
	 */
	public $className = 'wcf\data\wow\battlepet\WoWPet';

}