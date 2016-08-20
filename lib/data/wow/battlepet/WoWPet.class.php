<?php
namespace wcf\data\wow\battlepet;
use wcf\data\DatabaseObject;

/**
 * Represents a WoW battle pet
 * @author	Veneanar Falkenbann
 * @copyright	2016  Sylvanas Garde
 * @license	GNU General Public License <http://opensource.org/licenses/gpl-license.php> 
 * @package	eu.petbattle.league
 *
 * @property integer		 $petID			 PRIMARY KEY 
 * @property integer		 $type			pet type
 * @property string		 $name			name i18n
 * @property integer		 $familyID			family id
 * @property integer		 $speciesId			
 * @property integer		 $qualityId			
 * @property string		 $icon			icon_name
 * @property integer		 $allowed			is allowed 0: no 1:yes
 * 
 */

class WoWPet extends DatabaseObject {
	/**
	 * @see \wcf\data\DatabaseObject::$databaseTableName
	 */
	protected static $databaseTableName = 'petbattle_pet';
	/**
	 * @see \wcf\data\DatabaseObject::$databaseTableIndexName
	 */
	protected static $databaseTableIndexName = 'petID';

}