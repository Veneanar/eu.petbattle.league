<?php
namespace wcf\data\wow\realm;
use wcf\data\DatabaseObject;

/**
 * Represents a WoW Realm
 * @author	Veneanar Falkenbann
 * @copyright	2016  Sylvanas Garde
 * @license	GNU General Public License <http://opensource.org/licenses/gpl-license.php> 
 * @package	eu.petbattle.league
 *
 * @property integer		 $realmID			 PRIMARY KEY 
 * @property string		 $name			englisch name
 * @property integer		 $type			type. 1:pve 2pvp 3:rp 4rp-pvp
 * @property string		 $lang			i18n language
 * @property integer		 $state			state 0.offline 1.online. 2:waiting
 * @property string		 $slug			internal name
 * 
 */

class WoWRealm extends DatabaseObject {
	/**
	 * @see \wcf\data\DatabaseObject::$databaseTableName
	 */
	protected static $databaseTableName = 'petbattle_wowrealm';
	/**
	 * @see \wcf\data\DatabaseObject::$databaseTableIndexName
	 */
	protected static $databaseTableIndexName = 'realmID';

}