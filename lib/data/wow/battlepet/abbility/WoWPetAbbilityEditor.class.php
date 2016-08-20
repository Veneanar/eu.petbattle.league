<?php
namespace wcf\data\wow\battlepet\abbility;
use wcf\data\DatabaseObjectEditor;

/**
 * Provides functions to edit WoW battle pet abilitys.
 * @author	Veneanar Falkenbann
 * @copyright	2016  Sylvanas Garde
 * @license	GNU General Public License <http://opensource.org/licenses/gpl-license.php> 
 * @package	eu.petbattle.league
 * 
 */

class WoWPetAbbilityEditor extends DatabaseObjectEditor {
	/**
	 * @see \wcf\data\DatabaseObjectDecorator::$baseClass
	 */
	public static $baseClass = 'wcf\data\wow\battlepet\abbility\WoWPetAbbility';

}