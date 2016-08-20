<?php
namespace wcf\data\wow\battlepet\species;
use wcf\data\DatabaseObject;

/**
 * Represents a WoW battle pet species
 * @author	Veneanar Falkenbann
 * @copyright	2016  Sylvanas Garde
 * @license	GNU General Public License <http://opensource.org/licenses/gpl-license.php> 
 * @package	eu.petbattle.league
 *
 * @property 		 $			 PRIMARY KEY 
 * @property integer		 $speciesID			
 * @property integer		 $name			
 * @property integer		 $description			
 * @property integer		 $slot1a			
 * @property integer		 $slot1b			
 * @property integer		 $slot2a			
 * @property integer		 $slot2b			
 * @property integer		 $slot3a			
 * @property integer		 $slot3b			
 * @property integer		 $source			
 * 
 */

class WoWPetSpecies extends DatabaseObject {
	/**
	 * @see \wcf\data\DatabaseObject::$databaseTableName
	 */
	protected static $databaseTableName = 'petbattle_pet_species';
	/**
	 * @see \wcf\data\DatabaseObject::$databaseTableIndexName
	 */
	protected static $databaseTableIndexName = '';

}