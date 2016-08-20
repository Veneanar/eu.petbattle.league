<?php
namespace wcf\data\wow\realm;
use wcf\data\DatabaseObjectDecorator;

/**
 * Provides methods for WoW Realm.
 * @author	Veneanar Falkenbann
 * @copyright	2016  Sylvanas Garde
 * @license	GNU General Public License <http://opensource.org/licenses/gpl-license.php>
 * @package	eu.petbattle.league
 *
 */

class WoWRealmDecorated extends DatabaseObjectDecorator {
	/**
	 * @see \wcf\data\DatabaseObjectDecorator::$baseClass
	 */
	public static $baseClass = 'wcf\data\wow\realm\WoWRealm';

}