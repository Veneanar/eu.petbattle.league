<?php
namespace wcf\data\wow\battlepet\family;
use wcf\data\DatabaseObjectEditor;

/**
 * Provides functions to edit WoW battle pet familys.
 * @author	Veneanar Falkenbann
 * @copyright	2016  Sylvanas Garde
 * @license	GNU General Public License <http://opensource.org/licenses/gpl-license.php> 
 * @package	eu.petbattle.league
 * 
 */

class WoWPetFamilyEditor extends DatabaseObjectEditor {
	/**
	 * @see \wcf\data\DatabaseObjectDecorator::$baseClass
	 */
	public static $baseClass = 'wcf\data\wow\battlepet\family\WoWPetFamily';

}