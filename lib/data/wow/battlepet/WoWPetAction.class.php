<?php
namespace wcf\data\wow\battlepet;
use wcf\data\AbstractDatabaseObjectAction;

/**
 * Executes WoW battle pet-related actions.
 * @author	Veneanar Falkenbann
 * @copyright	2016  Sylvanas Garde
 * @license	GNU General Public License <http://opensource.org/licenses/gpl-license.php> 
 * @package	eu.petbattle.league
 * 
 */

class WoWPetAction extends AbstractDatabaseObjectAction {
	/**
	 * @see \wcf\data\AbstractDatabaseObjectAction::$className
	 */
	protected $className = 'wcf\data\wow\battlepet\WoWPetEditor';
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