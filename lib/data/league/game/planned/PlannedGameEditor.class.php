<?php
namespace wcf\data\league\game\planned;
use wcf\data\DatabaseObjectEditor;

/**
 * Provides functions to edit planned game datas.
 * @author	Veneanar Falkenbann
 * @copyright	2016  Sylvanas Garde
 * @license	GNU General Public License <http://opensource.org/licenses/gpl-license.php> 
 * @package	eu.petbattle.league
 * 
 */

class PlannedGameEditor extends DatabaseObjectEditor {
	/**
	 * @see \wcf\data\DatabaseObjectDecorator::$baseClass
	 */
	public static $baseClass = 'wcf\data\league\game\planned\PlannedGame';

}