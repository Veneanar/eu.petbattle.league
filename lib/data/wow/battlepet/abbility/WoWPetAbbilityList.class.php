<?php
namespace wcf\data\wow\battlepet\abbility;
use wcf\data\DatabaseObjectList;

/**
 * Represents a list of WoW battle pet abilitys.
 * @author	Veneanar Falkenbann
 * @copyright	2016  Sylvanas Garde
 * @license	GNU General Public License <http://opensource.org/licenses/gpl-license.php> 
 * @package	eu.petbattle.league
 * 
 */

class WoWPetAbbilityList extends DatabaseObjectList {
	/**
	 * @see \wcf\data\DatabaseObjectList::$className
	 */
	public $className = 'wcf\data\wow\battlepet\abbility\WoWPetAbbility';

}