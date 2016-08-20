<?php
namespace wcf\data\league\game;
use wcf\data\DatabaseObject;

/**
 * Represents a game data
 * @author	Veneanar Falkenbann
 * @copyright	2016  Sylvanas Garde
 * @license	GNU General Public License <http://opensource.org/licenses/gpl-license.php> 
 * @package	eu.petbattle.league
 *
 * @property integer		 $gameID			 PRIMARY KEY 
 * @property integer		 $leagueID			league ID
 * @property integer		 $matchday			match day
 * @property integer		 $player1			player 1
 * @property integer		 $player2			player 2
 * @property integer		 $player1oldELO			player 1 old ELO
 * @property integer		 $player2oldELO			player 2 old ELO
 * @property integer		 $player1state			player 1 stauts -1 disc, 0:lost,1:won
 * @property integer		 $pleyer2state			player 2 status -1 disc, 0:lost,1:won
 * @property integer		 $player1newELO			player 1 new ELO
 * @property integer		 $player2newELO			player 2 new ELO
 * @property integer		 $plannedID			planned game ID
 * @property integer		 $start			startime UTC
 * @property integer		 $end			endtime UTC
 * 
 */

class Game extends DatabaseObject {
	/**
	 * @see \wcf\data\DatabaseObject::$databaseTableName
	 */
	protected static $databaseTableName = 'petbattle_league_game';
	/**
	 * @see \wcf\data\DatabaseObject::$databaseTableIndexName
	 */
	protected static $databaseTableIndexName = 'gameID';

}