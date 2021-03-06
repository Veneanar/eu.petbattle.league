<?php
namespace wcf\data\wow\realm;
use wcf\data\DatabaseObjectEditor;

/**
 * Provides functions to edit WoW Realms.
 * @author	Veneanar Falkenbann
 * @copyright	2016  Sylvanas Garde
 * @license	GNU General Public License <http://opensource.org/licenses/gpl-license.php>
 * @package	eu.petbattle.league
 *
 */

class WoWRealmEditor extends DatabaseObjectEditor {
	/**
	 * @see \wcf\data\DatabaseObjectDecorator::$baseClass
	 */
	public static $baseClass = 'wcf\data\wow\realm\WoWRealm';

}