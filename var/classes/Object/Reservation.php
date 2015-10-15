<?php 

/** Generated at 2015-09-29T21:55:40+02:00 */

/**
* Inheritance: no
* Variants   : no
* Changed by : didier (35)
* IP:          88.120.82.200
*/


namespace Pimcore\Model\Object;



/**
* @method static \Pimcore\Model\Object\Reservation getByDatereservation ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Reservation getByLocation ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Reservation getByServing ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Reservation getByGuest ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Reservation getByPerson ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Reservation getByStart ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Reservation getByEnd ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Reservation getByStatus ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Reservation getByArrived ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Reservation getByBookingref ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Reservation getByActualpartysize ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Reservation getByPartysize ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Reservation getByBookingnotes ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Reservation getByActualstart ($value, $limit = 0) 
*/

class Reservation extends \Website\Object\Reservation {

public $o_classId = 11;
public $o_className = "reservation";
public $datereservation;
public $location;
public $serving;
public $guest;
public $person;
public $start;
public $end;
public $status;
public $arrived;
public $bookingref;
public $actualpartysize;
public $partysize;
public $bookingnotes;
public $actualstart;


/**
* @param array $values
* @return \Pimcore\Model\Object\Reservation
*/
public static function create($values = array()) {
	$object = new static();
	$object->setValues($values);
	return $object;
}

/**
* Get datereservation - datereservation
* @return \Pimcore\Date
*/
public function getDatereservation () {
	$preValue = $this->preGetValue("datereservation"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->datereservation;
	return $data;
}

/**
* Set datereservation - datereservation
* @param \Pimcore\Date $datereservation
* @return \Pimcore\Model\Object\Reservation
*/
public function setDatereservation ($datereservation) {
	$this->datereservation = $datereservation;
	return $this;
}

/**
* Get location - location
* @return \Pimcore\Model\Document\Page | \Pimcore\Model\Document\Snippet | \Pimcore\Model\Document | \Pimcore\Model\Asset | \Pimcore\Model\Object\AbstractObject
*/
public function getLocation () {
	$preValue = $this->preGetValue("location"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->getClass()->getFieldDefinition("location")->preGetData($this);
	return $data;
}

/**
* Set location - location
* @param \Pimcore\Model\Document\Page | \Pimcore\Model\Document\Snippet | \Pimcore\Model\Document | \Pimcore\Model\Asset | \Pimcore\Model\Object\AbstractObject $location
* @return \Pimcore\Model\Object\Reservation
*/
public function setLocation ($location) {
	$this->location = $this->getClass()->getFieldDefinition("location")->preSetData($this, $location);
	return $this;
}

/**
* Get serving - serving
* @return \Pimcore\Model\Document\Page | \Pimcore\Model\Document\Snippet | \Pimcore\Model\Document | \Pimcore\Model\Asset | \Pimcore\Model\Object\AbstractObject
*/
public function getServing () {
	$preValue = $this->preGetValue("serving"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->getClass()->getFieldDefinition("serving")->preGetData($this);
	return $data;
}

/**
* Set serving - serving
* @param \Pimcore\Model\Document\Page | \Pimcore\Model\Document\Snippet | \Pimcore\Model\Document | \Pimcore\Model\Asset | \Pimcore\Model\Object\AbstractObject $serving
* @return \Pimcore\Model\Object\Reservation
*/
public function setServing ($serving) {
	$this->serving = $this->getClass()->getFieldDefinition("serving")->preSetData($this, $serving);
	return $this;
}

/**
* Get guest - guest
* @return \Pimcore\Model\Document\Page | \Pimcore\Model\Document\Snippet | \Pimcore\Model\Document | \Pimcore\Model\Asset | \Pimcore\Model\Object\AbstractObject
*/
public function getGuest () {
	$preValue = $this->preGetValue("guest"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->getClass()->getFieldDefinition("guest")->preGetData($this);
	return $data;
}

/**
* Set guest - guest
* @param \Pimcore\Model\Document\Page | \Pimcore\Model\Document\Snippet | \Pimcore\Model\Document | \Pimcore\Model\Asset | \Pimcore\Model\Object\AbstractObject $guest
* @return \Pimcore\Model\Object\Reservation
*/
public function setGuest ($guest) {
	$this->guest = $this->getClass()->getFieldDefinition("guest")->preSetData($this, $guest);
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
* @return \Pimcore\Model\Object\Reservation
*/
public function setPerson ($person) {
	$this->person = $this->getClass()->getFieldDefinition("person")->preSetData($this, $person);
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
* @return \Pimcore\Model\Object\Reservation
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
* @return \Pimcore\Model\Object\Reservation
*/
public function setEnd ($end) {
	$this->end = $end;
	return $this;
}

/**
* Get status - status
* @return string
*/
public function getStatus () {
	$preValue = $this->preGetValue("status"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->status;
	return $data;
}

/**
* Set status - status
* @param string $status
* @return \Pimcore\Model\Object\Reservation
*/
public function setStatus ($status) {
	$this->status = $status;
	return $this;
}

/**
* Get arrived - arrived
* @return float
*/
public function getArrived () {
	$preValue = $this->preGetValue("arrived"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->arrived;
	return $data;
}

/**
* Set arrived - arrived
* @param float $arrived
* @return \Pimcore\Model\Object\Reservation
*/
public function setArrived ($arrived) {
	$this->arrived = $arrived;
	return $this;
}

/**
* Get bookingref - bookingref
* @return string
*/
public function getBookingref () {
	$preValue = $this->preGetValue("bookingref"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->bookingref;
	return $data;
}

/**
* Set bookingref - bookingref
* @param string $bookingref
* @return \Pimcore\Model\Object\Reservation
*/
public function setBookingref ($bookingref) {
	$this->bookingref = $bookingref;
	return $this;
}

/**
* Get actualpartysize - actualpartysize
* @return float
*/
public function getActualpartysize () {
	$preValue = $this->preGetValue("actualpartysize"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->actualpartysize;
	return $data;
}

/**
* Set actualpartysize - actualpartysize
* @param float $actualpartysize
* @return \Pimcore\Model\Object\Reservation
*/
public function setActualpartysize ($actualpartysize) {
	$this->actualpartysize = $actualpartysize;
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
* @return \Pimcore\Model\Object\Reservation
*/
public function setPartysize ($partysize) {
	$this->partysize = $partysize;
	return $this;
}

/**
* Get bookingnotes - bookingnotes
* @return string
*/
public function getBookingnotes () {
	$preValue = $this->preGetValue("bookingnotes"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->bookingnotes;
	return $data;
}

/**
* Set bookingnotes - bookingnotes
* @param string $bookingnotes
* @return \Pimcore\Model\Object\Reservation
*/
public function setBookingnotes ($bookingnotes) {
	$this->bookingnotes = $bookingnotes;
	return $this;
}

/**
* Get actualstart - actualstart
* @return \Pimcore\Date
*/
public function getActualstart () {
	$preValue = $this->preGetValue("actualstart"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->actualstart;
	return $data;
}

/**
* Set actualstart - actualstart
* @param \Pimcore\Date $actualstart
* @return \Pimcore\Model\Object\Reservation
*/
public function setActualstart ($actualstart) {
	$this->actualstart = $actualstart;
	return $this;
}

protected static $_relationFields = array (
  'location' => 
  array (
    'type' => 'href',
  ),
  'serving' => 
  array (
    'type' => 'href',
  ),
  'guest' => 
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

