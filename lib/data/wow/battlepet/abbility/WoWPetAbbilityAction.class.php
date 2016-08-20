<?php
namespace wcf\data\wow\battlepet\abbility;
use wcf\data\AbstractDatabaseObjectAction;

/**
 * Executes WoW battle pet ability-related actions.
 * @author	Veneanar Falkenbann
 * @copyright	2016  Sylvanas Garde
 * @license	GNU General Public License <http://opensource.org/licenses/gpl-license.php> 
 * @package	eu.petbattle.league
 * 
 */

class WoWPetAbbilityAction extends AbstractDatabaseObjectAction {
	/**
	 * @see \wcf\data\AbstractDatabaseObjectAction::$className
	 */
	protected $className = 'wcf\data\wow\battlepet\abbility\WoWPetAbbilityEditor';
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