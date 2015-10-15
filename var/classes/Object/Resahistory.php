<?php 

/** Generated at 2015-09-27T14:53:37+02:00 */

/**
* Inheritance: no
* Variants   : no
* Changed by : didier (35)
* IP:          88.120.82.200
*/


namespace Pimcore\Model\Object;



/**
* @method static \Pimcore\Model\Object\Resahistory getByReservation ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Resahistory getByPerson ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Resahistory getByAction ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Resahistory getByCommunication ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Resahistory getByPartysize ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Resahistory getByStart ($value, $limit = 0) 
*/

class Resahistory extends \Website\Object\Resahistory {

public $o_classId = 17;
public $o_className = "resahistory";
public $reservation;
public $person;
public $action;
public $communication;
public $partysize;
public $start;


/**
* @param array $values
* @return \Pimcore\Model\Object\Resahistory
*/
public static function create($values = array()) {
	$object = new static();
	$object->setValues($values);
	return $object;
}

/**
* Get reservation - reservation
* @return \Pimcore\Model\Document\Page | \Pimcore\Model\Document\Snippet | \Pimcore\Model\Document | \Pimcore\Model\Asset | \Pimcore\Model\Object\AbstractObject
*/
public function getReservation () {
	$preValue = $this->preGetValue("reservation"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->getClass()->getFieldDefinition("reservation")->preGetData($this);
	return $data;
}

/**
* Set reservation - reservation
* @param \Pimcore\Model\Document\Page | \Pimcore\Model\Document\Snippet | \Pimcore\Model\Document | \Pimcore\Model\Asset | \Pimcore\Model\Object\AbstractObject $reservation
* @return \Pimcore\Model\Object\Resahistory
*/
public function setReservation ($reservation) {
	$this->reservation = $this->getClass()->getFieldDefinition("reservation")->preSetData($this, $reservation);
	return $this;
}

/**
* Get person - person
* @return \Pimcore\Model\Document\Page | \Pimcore\Model\Document\Snippet | \Pimcore\Model\Document | \Pimcore\Model\Asset | \Pimcore\Model\Object\AbstractObject
*/
public function getPerson () {
	$preValue = $this->preGetValue("person"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->getClass()->getFieldDefinition("person")->preGetData($this);
	return $data;
}

/**
* Set person - person
* @param \Pimcore\Model\Document\Page | \Pimcore\Model\Document\Snippet | \Pimcore\Model\Document | \Pimcore\Model\Asset | \Pimcore\Model\Object\AbstractObject $person
* @return \Pimcore\Model\Object\Resahistory
*/
public function setPerson ($person) {
	$this->person = $this->getClass()->getFieldDefinition("person")->preSetData($this, $person);
	return $this;
}

/**
* Get action - action
* @return string
*/
public function getAction () {
	$preValue = $this->preGetValue("action"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->action;
	return $data;
}

/**
* Set action - action
* @param string $action
* @return \Pimcore\Model\Object\Resahistory
*/
public function setAction ($action) {
	$this->action = $action;
	return $this;
}

/**
* Get communication - communication
* @return string
*/
public function getCommunication () {
	$preValue = $this->preGetValue("communication"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->communication;
	return $data;
}

/**
* Set communication - communication
* @param string $communication
* @return \Pimcore\Model\Object\Resahistory
*/
public function setCommunication ($communication) {
	$this->communication = $communication;
	return $this;
}

/**
* Get partysize - partysize
* @return float
*/
public function getPartysize () {
	$preValue = $this->preGetValue("partysize"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->partysize;
	return $data;
}

/**
* Set partysize - partysize
* @param float $partysize
* @return \Pimcore\Model\Object\Resahistory
*/
public function setPartysize ($partysize) {
	$this->partysize = $partysize;
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
* @return \Pimcore\Model\Object\Resahistory
*/
public function setStart ($start) {
	$this->start = $start;
	return $this;
}

protected static $_relationFields = array (
  'reservation' => 
  array (
    'type' => 'href',
  ),
  'person' => 
  array (
    'type' => 'href',
  ),
);

public $lazyLoadedFields = NULL;

}

