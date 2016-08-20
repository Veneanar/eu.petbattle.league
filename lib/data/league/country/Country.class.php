<?php
namespace wcf\data\league\country;
use wcf\data\DatabaseObject;

/**
 * Represents a Country data
 * @author	Veneanar Falkenbann
 * @copyright	2016  Sylvanas Garde
 * @license	GNU General Public License <http://opensource.org/licenses/gpl-license.php> 
 * @package	eu.petbattle.league
 *
 * @property integer		 $countryID			 PRIMARY KEY 
 * @property string		 $name			i18n name
 * @property string		 $flag			path to flag
 * @property string		 $link			lnk to country
 * @property integer		 $active			is active
 * 
 */

class Country extends DatabaseObject {
	/**
	 * @see \wcf\data\DatabaseObject::$databaseTableName
	 */
	protected static $databaseTableName = 'petbattle_league_country';
	/**
	 * @see \wcf\data\DatabaseObject::$databaseTableIndexName
	 */
	protected static $databaseTableIndexName = 'countryID';

}