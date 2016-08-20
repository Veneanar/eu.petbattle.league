<?php
namespace wcf\data\league\game\matchday;
use wcf\data\DatabaseObject;

/**
 * Represents a game data
 * @author	Veneanar Falkenbann
 * @copyright	2016  Sylvanas Garde
 * @license	GNU General Public License <http://opensource.org/licenses/gpl-license.php> 
 * @package	eu.petbattle.league
 *
 * @property integer		 $matchday			 PRIMARY KEY 
 * @property integer		 $leagueID			league ID
 * @property integer		 $start			start time UTC
 * @property integer		 $end			end time UTC
 * @property integer		 $active			is active 0: over 1: yes 2: too early
 * 
 */

class Matchday extends DatabaseObject {
	/**
	 * @see \wcf\data\DatabaseObject::$databaseTableName
	 */
	protected static $databaseTableName = 'petbattle_league_game_matchday';
	/**
	 * @see \wcf\data\DatabaseObject::$databaseTableIndexName
	 */
	protected static $databaseTableIndexName = 'matchday';

}