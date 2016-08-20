<?php
namespace wcf\system\cache\builder;
use wcf\data\wow\realm\WoWRealmList;

/**
 * Provides realm list
 *
 * @author	Veneanar Falkenbann
 * @copyright	2015 Sylvanas Garde
 * @package	com.sylvanasgarde.tools
 * @subpackage	system.BNET
 * @category	Guild Tools
 */

class RealmListCacheBuilder extends AbstractCacheBuilder {
	/**
     * @see		\wcf\system\cache\builder\AbstractCacheBuilder::$maxLifetime
     */
	protected $maxLifetime = 3600;

	/**
     * @see		\wcf\system\cache\builder\AbstractCacheBuilder::rebuild()
     */
	protected function rebuild(array $parameters) {
        $completeTornamentList = new WoWRealmList();
        $completeTornamentList->sqlLimit = 0;
        $completeTornamentList->readObjects();
        return $completeTornamentList->getObjects();
    }
}

