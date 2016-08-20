<?php
namespace wcf\data\league\game\pool;
use wcf\data\DatabaseObject;

/**
 * Represents a pool data
 * @author	Veneanar Falkenbann
 * @copyright	2016  Sylvanas Garde
 * @license	GNU General Public License <http://opensource.org/licenses/gpl-license.php>
 * @package	eu.petbattle.league
 *
 * @property integer		 $poolID			 PRIMARY KEY
 * @property integer		 $leagueID			league
 * @property integer		 $dayID			day
 * @property integer		 $playerID			player
 * @property integer		 $playerELO			ELo of the player
 * @property integer		 $avaibleUntil			player online until timestamp UTC
 * @property integer		 $state			stae. 0:offline, 1:avaible, 2:in game, 3 AFK, 4 game started
 *
 */

class GamePool extends DatabaseObject {
	/**
	 * @see \wcf\data\DatabaseObject::$databaseTableName
	 */
	protected static $databaseTableName = 'petbattle_league_game_pool';
	/**
	 * @see \wcf\data\DatabaseObject::$databaseTableIndexName
	 */
	protected static $databaseTableIndexName = 'poolID';

}