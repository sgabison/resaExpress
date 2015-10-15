<?php 

/** Generated at 2015-10-07T19:08:39+02:00 */

/**
* Inheritance: no
* Variants   : no
* Changed by : didier (35)
* IP:          88.120.82.200
*/


namespace Pimcore\Model\Object;



/**
* @method static \Pimcore\Model\Object\Stats getByName ($value, $limit = 0) 
*/

class Stats extends \Website\Object\Stats {

public $o_classId = 19;
public $o_className = "stats";
public $name;


/**
* @param array $values
* @return \Pimcore\Model\Object\Stats
*/
public static function create($values = array()) {
	$object = new static();
	$object->setValues($values);
	return $object;
}

/**
* Get name - name
* @return string
*/
public function getName () {
	$preValue = $this->preGetValue("name"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->name;
	return $data;
}

/**
* Set name - name
* @param string $name
* @return \Pimcore\Model\Object\Stats
*/
public function setName ($name) {
	$this->name = $name;
	return $this;
}

protected static $_relationFields = array (
);

public $lazyLoadedFields = NULL;

}

