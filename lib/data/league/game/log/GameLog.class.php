<?php
namespace wcf\data\league\game\log;
use wcf\data\DatabaseObject;

/**
 * Represents a game log
 * @author	Veneanar Falkenbann
 * @copyright	2016  Sylvanas Garde
 * @license	GNU General Public License <http://opensource.org/licenses/gpl-license.php> 
 * @package	eu.petbattle.league
 *
 * @property integer		 $gamelogID			 PRIMARY KEY 
 * @property integer		 $gameID			game ID
 * @property integer		 $player1			player 1
 * @property integer		 $player2			player 2
 * @property integer		 $action			action
 * @property integer		 $time			time UTC
 * 
 */

class GameLog extends DatabaseObject {
	/**
	 * @see \wcf\data\DatabaseObject::$databaseTableName
	 */
	protected static $databaseTableName = 'petbattle_league_game_log';
	/**
	 * @see \wcf\data\DatabaseObject::$databaseTableIndexName
	 */
	protected static $databaseTableIndexName = 'gamelogID';

}