<?php
namespace wcf\data\league\participation;
use wcf\data\DatabaseObject;

/**
 * Represents a participation data
 * @author	Veneanar Falkenbann
 * @copyright	2016  Sylvanas Garde
 * @license	GNU General Public License <http://opensource.org/licenses/gpl-license.php> 
 * @package	eu.petbattle.league
 *
 * @property integer		 $participationID			 PRIMARY KEY 
 * @property integer		 $userID			user
 * @property integer		 $charID			character
 * @property integer		 $countryID			country
 * @property integer		 $played			count played
 * @property integer		 $lost			count lost
 * @property integer		 $won			count won
 * @property integer		 $score			ELO Score
 * @property integer		 $lastplayed			UTC timestamp
 * @property integer		 $state			state 0:registerd 1: active, 2: inactive 3: banned
 * @property integer		 $leagueID			
 * 
 */

class Participation extends DatabaseObject {
	/**
	 * @see \wcf\data\DatabaseObject::$databaseTableName
	 */
	protected static $databaseTableName = 'petbattle_league_participation';
	/**
	 * @see \wcf\data\DatabaseObject::$databaseTableIndexName
	 */
	protected static $databaseTableIndexName = 'participationID';

}