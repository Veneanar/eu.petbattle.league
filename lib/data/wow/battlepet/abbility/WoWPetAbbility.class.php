<?php
namespace wcf\data\wow\battlepet\abbility;
use wcf\data\DatabaseObject;

/**
 * Represents a WoW battle pet ability
 * @author	Veneanar Falkenbann
 * @copyright	2016  Sylvanas Garde
 * @license	GNU General Public License <http://opensource.org/licenses/gpl-license.php> 
 * @package	eu.petbattle.league
 *
 * @property 		 $			 PRIMARY KEY 
 * @property integer		 $abbilityID			
 * @property string		 $name			
 * @property string		 $icon			
 * @property integer		 $cooldwon			
 * @property integer		 $rounds			
 * @property integer		 $famalyID			
 * @property integer		 $isPassive			
 * 
 */

class WoWPetAbbility extends DatabaseObject {
	/**
	 * @see \wcf\data\DatabaseObject::$databaseTableName
	 */
	protected static $databaseTableName = 'petbattle_pet_abbility';
	/**
	 * @see \wcf\data\DatabaseObject::$databaseTableIndexName
	 */
	protected static $databaseTableIndexName = '';

}