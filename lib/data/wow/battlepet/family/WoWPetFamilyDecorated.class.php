<?php
namespace wcf\data\wow\battlepet\family;
use wcf\data\DatabaseObjectDecorator;

/**
 * Provides methods for WoW battle pet family.
 * @author	Veneanar Falkenbann
 * @copyright	2016  Sylvanas Garde
 * @license	GNU General Public License <http://opensource.org/licenses/gpl-license.php> 
 * @package	eu.petbattle.league
 * 
 */

class WoWPetFamilyDecorated extends DatabaseObjectDecorator {
	/**
	 * @see \wcf\data\DatabaseObjectDecorator::$baseClass
	 */
	public static $baseClass = 'wcf\data\wow\battlepet\family\WoWPetFamily';

}