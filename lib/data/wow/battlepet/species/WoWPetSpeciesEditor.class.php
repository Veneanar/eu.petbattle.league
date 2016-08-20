<?php
namespace wcf\data\wow\battlepet\species;
use wcf\data\DatabaseObjectEditor;

/**
 * Provides functions to edit WoW battle pet speciess.
 * @author	Veneanar Falkenbann
 * @copyright	2016  Sylvanas Garde
 * @license	GNU General Public License <http://opensource.org/licenses/gpl-license.php> 
 * @package	eu.petbattle.league
 * 
 */

class WoWPetSpeciesEditor extends DatabaseObjectEditor {
	/**
	 * @see \wcf\data\DatabaseObjectDecorator::$baseClass
	 */
	public static $baseClass = 'wcf\data\wow\battlepet\species\WoWPetSpecies';

}