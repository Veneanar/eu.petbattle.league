<?php
namespace wcf\data\wow\battlepet\species;
use wcf\data\DatabaseObjectDecorator;

/**
 * Provides methods for WoW battle pet species.
 * @author	Veneanar Falkenbann
 * @copyright	2016  Sylvanas Garde
 * @license	GNU General Public License <http://opensource.org/licenses/gpl-license.php> 
 * @package	eu.petbattle.league
 * 
 */

class WoWPetSpeciesDecorated extends DatabaseObjectDecorator {
	/**
	 * @see \wcf\data\DatabaseObjectDecorator::$baseClass
	 */
	public static $baseClass = 'wcf\data\wow\battlepet\species\WoWPetSpecies';

}