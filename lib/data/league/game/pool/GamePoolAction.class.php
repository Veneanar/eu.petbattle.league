<?php
namespace wcf\data\league\game\pool;
use wcf\data\AbstractDatabaseObjectAction;

/**
 * Executes pool data-related actions.
 * @author	Veneanar Falkenbann
 * @copyright	2016  Sylvanas Garde
 * @license	GNU General Public License <http://opensource.org/licenses/gpl-license.php>
 * @package	eu.petbattle.league
 *
 */

class GamePoolAction extends AbstractDatabaseObjectAction {
	/**
	 * @see \wcf\data\AbstractDatabaseObjectAction::$className
	 */
	protected $className = 'wcf\data\league\game\pool\GamePoolEditor';
	/**
	 * @see \wcf\data\AbstractDatabaseObjectAction::$permissionsUpdate
	 */
	protected $permissionsUpdate = array();
	/**
	 * @see \wcf\data\AbstractDatabaseObjectAction::$permissionsCreate
	 */
	protected $permissionsCreate = array();
	/**
	 * @see \wcf\data\AbstractDatabaseObjectAction::$permissionsDelete
	 */
	protected $permissionsDelete = array();
	/**
	 * @see \wcf\data\AbstractDatabaseObjectAction::$requireACP
	 */
	protected $requireACP = array();
	/**
	 * @see \wcf\data\AbstractDatabaseObjectAction::$allowGuestAccess
	 */
	protected $allowGuestAccess = array();

}