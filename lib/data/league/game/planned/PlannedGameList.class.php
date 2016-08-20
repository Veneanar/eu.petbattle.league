<?php
namespace wcf\data\league\game\planned;
use wcf\data\DatabaseObjectList;

/**
 * Represents a list of planned game datas.
 * @author	Veneanar Falkenbann
 * @copyright	2016  Sylvanas Garde
 * @license	GNU General Public License <http://opensource.org/licenses/gpl-license.php> 
 * @package	eu.petbattle.league
 * 
 */

class PlannedGameList extends DatabaseObjectList {
	/**
	 * @see \wcf\data\DatabaseObjectList::$className
	 */
	public $className = 'wcf\data\league\game\planned\PlannedGame';

}