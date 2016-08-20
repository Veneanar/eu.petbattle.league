<?php
namespace wcf\data\wow\gameevent;
use wcf\data\DatabaseObject;

/**
 * Represents a WoW game event
 * @author	Veneanar Falkenbann
 * @copyright	2016  Sylvanas Garde
 * @license	GNU General Public License <http://opensource.org/licenses/gpl-license.php> 
 * @package	eu.petbattle.league
 *
 * @property integer		 $eventID			 PRIMARY KEY 
 * @property string		 $name			i18n name
 * @property string		 $text			i18n description
 * @property string		 $link			link to wowhead
 * 
 */

class WoWGameEvent extends DatabaseObject {
	/**
	 * @see \wcf\data\DatabaseObject::$databaseTableName
	 */
	protected static $databaseTableName = 'petbattle_wowgameevent';
	/**
	 * @see \wcf\data\DatabaseObject::$databaseTableIndexName
	 */
	protected static $databaseTableIndexName = 'eventID';

}