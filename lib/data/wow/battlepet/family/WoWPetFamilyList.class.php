<?php
namespace wcf\data\wow\battlepet\family;
use wcf\data\DatabaseObjectList;

/**
 * Represents a list of WoW battle pet familys.
 * @author	Veneanar Falkenbann
 * @copyright	2016  Sylvanas Garde
 * @license	GNU General Public License <http://opensource.org/licenses/gpl-license.php> 
 * @package	eu.petbattle.league
 * 
 */

class WoWPetFamilyList extends DatabaseObjectList {
	/**
	 * @see \wcf\data\DatabaseObjectList::$className
	 */
	public $className = 'wcf\data\wow\battlepet\family\WoWPetFamily';

}