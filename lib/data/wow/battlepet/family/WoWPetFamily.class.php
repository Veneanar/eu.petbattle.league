<?php
namespace wcf\data\wow\battlepet\family;
use wcf\data\DatabaseObject;

/**
 * Represents a WoW battle pet family
 * @author	Veneanar Falkenbann
 * @copyright	2016  Sylvanas Garde
 * @license	GNU General Public License <http://opensource.org/licenses/gpl-license.php> 
 * @package	eu.petbattle.league
 *
 * @property integer		 $familyID			 PRIMARY KEY 
 * @property string		 $name			name i18n
 * @property string		 $description			description i18n
 * @property string		 $icon			icon 
 * @property string		 $wowicon			wow icon name
 * @property integer		 $weak			weak against
 * @property integer		 $strong			string against
 * 
 */

class WoWPetFamily extends DatabaseObject {
	/**
	 * @see \wcf\data\DatabaseObject::$databaseTableName
	 */
	protected static $databaseTableName = 'petbattle_pet_family';
	/**
	 * @see \wcf\data\DatabaseObject::$databaseTableIndexName
	 */
	protected static $databaseTableIndexName = 'familyID';

}