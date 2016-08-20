<?php
namespace wcf\system\bnet;
use wcf\util\HTTPRequest;
use wcf\data\wow\character\WoWCharacter;
use wcf\data\wow\character\WoWCharacterEditor;
use wcf\system\cache\builder\RealmListCacheBuilder;
use wcf\system\exception\SystemException;
use wcf\system\WCF;
use wcf\util\StringUtil;
use wcf\util\JSON;

/**
 * The BnetAPI class handles all needed API bnet operations.
 *
 * @author	    Veneanar
 * @copyright	2015 Sylvanas Garde
 * @package	    com.sylvanasgarde.guildtool
 * @category    Dataparser
 */
class BattleNet {

    /**
     * returns the detail of an item
     * return array: (status: boolean, realmname: string)
     *
     * @param	int		$itemID ID of an item
     * @return	array
     */

    public function getCharakter($character, $realm, $realmID) {
        $wowChar = null;
        $tempID = WoWCharacter::exists($character, $realmID);
        if (is_null($tempID)) {
            $result = JSON::decode($armory['body'], true);



        }
    }

    /**
     * returns the detail of an item
     * return array: (status: boolean, realmname: string)
     *
     * @param	\wcf\data\wow\character\WoWCharacter		$character wow character
     * @return	array
     */
    public function updateCharacter($character) {

    }


    private function fetchCharacter($character, $realm, $options = array()) {
        $realm = mb_strtolower(str_replace(" ", "-", 	$realm));
        $querystring = (empty($options)) ? '' : '&fields=';
        foreach($options as $option) {
            $querystring .= $option .',';
        }
        $request = new HTTPRequest('https://'.BNETTOOL_BNET_API_HOST .'/wow/character/'.rawurlencode($realm).'/'.rawurlencode($character).'?locale='. BNETTOOL_BNET_API_LANGUAGE .$querystring.'&apikey='. BNETTOOL_BNET_API_KEY);
        $request->execute();
        $armory = $request->getReply();
        if ($armory['statusCode'] != 200) throw new SystemException("Can not fetch data from battle.net", 99001, "Eroor while reading battle.net headers: " . $armory['httpHeaders']);
        return JSON::decode($armory['body'], true);

    }

    public function getRealm($realmslug) {
        $row = RealmListCacheBuilder::getInstance()->getData(array('slug' => $realmslug));
        return $row['realmID'];
    }
    public static function getItemInfo($itemID) {
        $armoryresult = self::open('https://'. BNETTOOL_BNET_API_HOST .'/wow/item/'.rawurlencode($itemID).'?locale='. BNETTOOL_BNET_API_LANGUAGE. '&apikey='. BNETTOOL_BNET_API_KEY);
        return ($armoryresult['status'] == 200) ? array('status'=>true, 'data'=>$armoryresult) : array('status'=>false, 'data'=>array());
    }

    public static function getCompletePetList($langcode) {
        $armoryresult = self::open('https://'. BNETTOOL_BNET_API_HOST .'/wow/pet/?locale='. $langcode. '&apikey='. BNETTOOL_BNET_API_KEY);
        return ($armoryresult['status'] == 200) ? array('status'=>true, 'data'=>JSON::decode($armoryresult["content"], true)) : array('status'=>false, 'data'=>array());
    }


    /**
     * get details of a Char
     *
     * return array: (successfull: boolean, array: Chardetails)
     * see GUILD PROFILE API https://dev.battle.net/io-docs
     * GET CHARACTER PROFILE /WOW/CHARACTER/:REALM/:CHARACTERNAME
     * for options you can use every method from CHARACTER PROFILE
     *
     * @param	string		$character
     * @param	string		$realm
     * @param	array		$options
     * @return	array
     */
    public static function getCharacterDetails($character, $realm, $options = array()) {
        $realm = str_replace(" ", "-", 	$realm);
        $querystring = (empty($options)) ? '' : '&fields=';
        foreach($options as $option) {
            $querystring .= $option .',';
        }
        $armoryresult = self::open('https://'.BNETTOOL_BNET_API_HOST .'/wow/character/'.rawurlencode($realm).'/'.rawurlencode($character).'?locale='. BNETTOOL_BNET_API_LANGUAGE .$querystring.'&apikey='. BNETTOOL_BNET_API_KEY);
        return ($armoryresult['status']==200) ? array('status'=>true, 'data'=>json_decode($armoryresult['content'],true)) : array('status'=>false, 'data'=>'');
    }

    public static function GetPetList($character, $realm) {
	    $return = array();
	    $forbidden = array(
		    11327, // Zergling
		    14756, // Winziger roter Drache
		    14755, // Winziger grüner Drache
		    46896, // Todesschwingchen
		    51122, // Todesflosse
		    16445, // Terky
		    74413, // Schatzgoblin
		    23198, // Rudi
		    16456, // Poley
		    11325, // Pandababy
		    35468, // Onyxpanther
		    18381, // Netherwelpe
		    15186, // Murky
		    33578, // Murkimus der Gladiator
		    15361, // Murki
		    74405, // Murkalot
		    54438, // Murkablo
		    29089, // Mini-Tyrael
		    42078, // Mini-Thor
		    11326, // Mini-Diablo
		    15358, // Lurky
		    27217, // Kampfgeist
		    27346, // Kampfesprit
		    16069, // Gurky
		    34694, // Gurgli
		    63832, // Glückbringendes Qilenchen
		    28883, // Frosti
		    56266, // Fetischschamane
		    32841, // Blizzardbärenbaby
		    66984, // Berstling
		    88805, // Grommloc
		    91226, // Grago
		    84915, // Geschmolzenes Kernhündchen
            103159, //Baby Winston
            71655, // Zeradar
            95841, // Knurps
            85009, // Murkidan
    );
	    $realm = str_replace(" ", "-", 	$realm);
        $armoryresult = self::open('https://'.BNETTOOL_BNET_API_HOST .'/wow/character/'.rawurlencode($realm).'/'.rawurlencode($character).'?fields=pets&apikey='. BNETTOOL_BNET_API_KEY);
        if ($armoryresult['status']==200) {
            $temp = JSON::decode($armoryresult["content"], true);
            foreach ($temp["pets"]["collected"] as $pet) {
                if (($pet["canBattle"]==true) && ($pet["stats"]["level"]==25) && !(in_array($pet["creatureId"], $forbidden))) {
                    $return[] = $pet["creatureId"];
                }
		    }
            return array('status'=>true, 'data'=>$return);
        }
        return array('status'=>false, 'data'=>'');
	}
}