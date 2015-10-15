<?php 

/** Generated at 2015-08-23T18:41:21+02:00 */

/**
* Inheritance: no
* Variants   : no
* Changed by : didier (35)
* IP:          88.120.82.200
*/


namespace Pimcore\Model\Object;



/**
* @method static \Pimcore\Model\Object\Bankholidays getBySociete ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Bankholidays getByShortname ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Bankholidays getByLongname ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Bankholidays getByStart ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Bankholidays getByEnd ($value, $limit = 0) 
*/

class Bankholidays extends Concrete {

public $o_classId = 14;
public $o_className = "bankholidays";
public $societe;
public $shortname;
public $longname;
public $start;
public $end;


/**
* @param array $values
* @return \Pimcore\Model\Object\Bankholidays
*/
public static function create($values = array()) {
	$object = new static();
	$object->setValues($values);
	return $object;
}

/**
* Get societe - societe
* @return \Pimcore\Model\Document\Page | \Pimcore\Model\Document\Snippet | \Pimcore\Model\Document | \Pimcore\Model\Asset | \Pimcore\Model\Object\AbstractObject
*/
public function getSociete () {
	$preValue = $this->preGetValue("societe"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->getClass()->getFieldDefinition("societe")->preGetData($this);
	return $data;
}

/**
* Set societe - societe
* @param \Pimcore\Model\Document\Page | \Pimcore\Model\Document\Snippet | \Pimcore\Model\Document | \Pimcore\Model\Asset | \Pimcore\Model\Object\AbstractObject $societe
* @return \Pimcore\Model\Object\Bankholidays
*/
public function setSociete ($societe) {
	$this->societe = $this->getClass()->getFieldDefinition("societe")->preSetData($this, $societe);
	return $this;
}

/**
* Get shortname - shortname
* @return string
*/
public function getShortname () {
	$preValue = $this->preGetValue("shortname"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->shortname;
	return $data;
}

/**
* Set shortname - shortname
* @param string $shortname
* @return \Pimcore\Model\Object\Bankholidays
*/
public function setShortname ($shortname) {
	$this->shortname = $shortname;
	return $this;
}

/**
* Get longname - longname
* @return string
*/
public function getLongname () {
	$preValue = $this->preGetValue("longname"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->longname;
	return $data;
}

/**
* Set longname - longname
* @param string $longname
* @return \Pimcore\Model\Object\Bankholidays
*/
public function setLongname ($longname) {
	$this->longname = $longname;
	return $this;
}

/**
* Get start - start
* @return \Pimcore\Date
*/
public function getStart () {
	$preValue = $this->preGetValue("start"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->start;
	return $data;
}

/**
* Set start - start
* @param \Pimcore\Date $start
* @return \Pimcore\Model\Object\Bankholidays
*/
public function setStart ($start) {
	$this->start = $start;
	return $this;
}

/**
* Get end - end
* @return \Pimcore\Date
*/
public function getEnd () {
	$preValue = $this->preGetValue("end"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->end;
	return $data;
}

/**
* Set end - end
* @param \Pimcore\Date $end
* @return \Pimcore\Model\Object\Bankholidays
*/
public function setEnd ($end) {
	$this->end = $end;
	return $this;
}

protected static $_relationFields = array (
  'societe' => 
  array (
    'type' => 'href',
  ),
);

public $lazyLoadedFields = NULL;

}

