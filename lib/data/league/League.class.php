<?php
namespace wcf\data\league;
use wcf\data\DatabaseObject;

/**
 * Represents a Leauge data
 * @author	Veneanar Falkenbann
 * @copyright	2016  Sylvanas Garde
 * @license	GNU General Public License <http://opensource.org/licenses/gpl-license.php> 
 * @package	eu.petbattle.league
 *
 * @property integer		 $leagueID			 PRIMARY KEY 
 * @property string		 $name			i18n name
 * @property string		 $description			i18n description
 * @property string		 $logo			pathtologo
 * @property integer		 $start			int startime UTC
 * @property integer		 $end			int endtime UTC
 * @property integer		 $groupID			admingroup
 * @property integer		 $active			is active
 * 
 */

class League extends DatabaseObject {
	/**
	 * @see \wcf\data\DatabaseObject::$databaseTableName
	 */
	protected static $databaseTableName = 'petbattle_league';
	/**
	 * @see \wcf\data\DatabaseObject::$databaseTableIndexName
	 */
	protected static $databaseTableIndexName = 'leagueID';

}