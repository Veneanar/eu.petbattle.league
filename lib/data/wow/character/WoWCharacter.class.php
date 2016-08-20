<?php
namespace wcf\data\wow\character;
use wcf\data\DatabaseObject;
use wcf\system\cache\builder\RealmListCacheBuilder;
use wcf\system\WCF;

/**
 * Represents a WoW Character
 * @author	Veneanar Falkenbann
 * @copyright	2016  Sylvanas Garde
 * @license	GNU General Public License <http://opensource.org/licenses/gpl-license.php>
 * @package	eu.petbattle.league
 *
 * @property integer		 $charID			 PRIMARY KEY
 * @property string		 $charname
 * @property integer		 $realmID
 * @property integer		 $class
 * @property integer		 $race
 * @property integer		 $faction
 * @property integer		 $gender
 * @property integer		 $level
 * @property string		 $avatar
 * @property integer		 $userID
 * @property integer		 $isMain
 * @property integer		 $achievementPoints
 * @property integer		 $state
 *
 */

class WoWCharacter extends DatabaseObject {
	/**
	 * @see \wcf\data\DatabaseObject::$databaseTableName
	 */
	protected static $databaseTableName = 'petbattle_wowchar';
	/**
	 * @see \wcf\data\DatabaseObject::$databaseTableIndexName
	 */
	protected static $databaseTableIndexName = 'charID';

    /**
     * $realmname
     * Realm name
     * @var	string
     */
    public $realmname = '';

    /**
     * Creates a new instance of the WoWCharackter class.
     *
     * @param	mixed				$id
     * @param	array				$row
     * @param	\wcf\data\DatabaseObject		$object
     */
    public function __construct($id, array $row = null, DatabaseObject $object = null) {
        parent::__construct($id, $row, $object);
        $row = RealmListCacheBuilder::getInstance()->getData(array('realmID' => $this->realmID));
        $this->realmname  = $row['name'];
    }

    public static function exists($charname, $realmID) {
        $sql = "SELECT TOP 1 charID
                FROM ". WCF_N ."_petbattle_wowchar
                WHERE  charname = ? AND realm = ?";
        $statement = WCF::getDB()->prepareStatement($sql);
		$statement->execute(array($charname, $realmID));
        $row = $statement->fetchArray();
		return (!$row) ? null : $row['charID'];
    }

}