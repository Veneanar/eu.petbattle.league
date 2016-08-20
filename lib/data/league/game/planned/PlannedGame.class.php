<?php
namespace wcf\data\league\game\planned;
use wcf\data\DatabaseObject;

/**
 * Represents a planned game data
 * @author	Veneanar Falkenbann
 * @copyright	2016  Sylvanas Garde
 * @license	GNU General Public License <http://opensource.org/licenses/gpl-license.php> 
 * @package	eu.petbattle.league
 *
 * @property integer		 $plannedID			 PRIMARY KEY 
 * @property integer		 $leagueID			league ID
 * @property integer		 $matchdayID			matchday
 * @property integer		 $player1ID			player 1
 * @property integer		 $player2ID			player 2
 * @property integer		 $starttime			starttime
 * 
 */

class PlannedGame extends DatabaseObject {
	/**
	 * @see \wcf\data\DatabaseObject::$databaseTableName
	 */
	protected static $databaseTableName = 'petbattle_league_game_planned';
	/**
	 * @see \wcf\data\DatabaseObject::$databaseTableIndexName
	 */
	protected static $databaseTableIndexName = 'plannedID';

}