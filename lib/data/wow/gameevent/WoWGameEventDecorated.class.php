<?php
namespace wcf\data\wow\gameevent;
use wcf\data\DatabaseObjectDecorator;

/**
 * Provides methods for WoW game event.
 * @author	Veneanar Falkenbann
 * @copyright	2016  Sylvanas Garde
 * @license	GNU General Public License <http://opensource.org/licenses/gpl-license.php> 
 * @package	eu.petbattle.league
 * 
 */

class WoWGameEventDecorated extends DatabaseObjectDecorator {
	/**
	 * @see \wcf\data\DatabaseObjectDecorator::$baseClass
	 */
	public static $baseClass = 'wcf\data\wow\gameevent\WoWGameEvent';

}