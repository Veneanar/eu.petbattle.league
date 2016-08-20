<?php
namespace wcf\data\wow\battlepet\abbility;
use wcf\data\DatabaseObjectDecorator;

/**
 * Provides methods for WoW battle pet ability.
 * @author	Veneanar Falkenbann
 * @copyright	2016  Sylvanas Garde
 * @license	GNU General Public License <http://opensource.org/licenses/gpl-license.php> 
 * @package	eu.petbattle.league
 * 
 */

class WoWPetAbbilityDecorated extends DatabaseObjectDecorator {
	/**
	 * @see \wcf\data\DatabaseObjectDecorator::$baseClass
	 */
	public static $baseClass = 'wcf\data\wow\battlepet\abbility\WoWPetAbbility';

}