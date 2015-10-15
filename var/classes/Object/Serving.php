<?php 

/** Generated at 2015-09-27T15:19:49+02:00 */

/**
* Inheritance: no
* Variants   : no
* Changed by : didier (35)
* IP:          88.120.82.200
*/


namespace Pimcore\Model\Object;



/**
* @method static \Pimcore\Model\Object\Serving getByLocation ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Serving getByStatus ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Serving getByTitle ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Serving getByDay ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Serving getByServingstart ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Serving getByServingend ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Serving getByMaxseats ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Serving getByMaxtables ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Serving getByMealduration ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Serving getByClosedmonday ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Serving getByTimestartmonday ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Serving getByTimeendmonday ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Serving getByClosedtuesday ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Serving getByTimestarttuesday ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Serving getByTimeendtuesday ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Serving getByClosedwednesday ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Serving getByTimestartwednesday ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Serving getByTimeendwednesday ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Serving getByClosedthursday ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Serving getByTimestartthursday ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Serving getByTimeendthursday ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Serving getByClosedfriday ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Serving getByTimestartfriday ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Serving getByTimeendfriday ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Serving getByClosedsaturday ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Serving getByTimestartsaturday ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Serving getByTimeendsaturday ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Serving getByClosedsunday ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Serving getByTimestartsunday ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Serving getByTimeendsunday ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Serving getByMaxseatsmonday ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Serving getByMaxseatstuesday ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Serving getByMaxseatswednesday ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Serving getByMaxseatsthursday ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Serving getByMaxseatsfriday ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Serving getByMaxseatssaturday ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Serving getByMaxseatssunday ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Serving getByMaxtablesmonday ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Serving getByMaxtablestuesday ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Serving getByMaxtableswednesday ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Serving getByMaxtablesthursday ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Serving getByMaxtablesfriday ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Serving getByMaxtablessaturday ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Serving getByMaxtablessunday ($value, $limit = 0) 
*/

class Serving extends \Website\Object\Serving {

public $o_classId = 13;
public $o_className = "serving";
public $location;
public $status;
public $title;
public $day;
public $servingstart;
public $servingend;
public $maxseats;
public $maxtables;
public $mealduration;
public $closedmonday;
public $timestartmonday;
public $timeendmonday;
public $closedtuesday;
public $timestarttuesday;
public $timeendtuesday;
public $closedwednesday;
public $timestartwednesday;
public $timeendwednesday;
public $closedthursday;
public $timestartthursday;
public $timeendthursday;
public $closedfriday;
public $timestartfriday;
public $timeendfriday;
public $closedsaturday;
public $timestartsaturday;
public $timeendsaturday;
public $closedsunday;
public $timestartsunday;
public $timeendsunday;
public $maxseatsmonday;
public $maxseatstuesday;
public $maxseatswednesday;
public $maxseatsthursday;
public $maxseatsfriday;
public $maxseatssaturday;
public $maxseatssunday;
public $maxtablesmonday;
public $maxtablestuesday;
public $maxtableswednesday;
public $maxtablesthursday;
public $maxtablesfriday;
public $maxtablessaturday;
public $maxtablessunday;


/**
* @param array $values
* @return \Pimcore\Model\Object\Serving
*/
public static function create($values = array()) {
	$object = new static();
	$object->setValues($values);
	return $object;
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
* @return \Pimcore\Model\Object\Serving
*/
public function setLocation ($location) {
	$this->location = $this->getClass()->getFieldDefinition("location")->preSetData($this, $location);
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
* @return \Pimcore\Model\Object\Serving
*/
public function setStatus ($status) {
	$this->status = $status;
	return $this;
}

/**
* Get title - title
* @return string
*/
public function getTitle () {
	$preValue = $this->preGetValue("title"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->title;
	return $data;
}

/**
* Set title - title
* @param string $title
* @return \Pimcore\Model\Object\Serving
*/
public function setTitle ($title) {
	$this->title = $title;
	return $this;
}

/**
* Get day - day
* @return string
*/
public function getDay () {
	$preValue = $this->preGetValue("day"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->day;
	return $data;
}

/**
* Set day - day
* @param string $day
* @return \Pimcore\Model\Object\Serving
*/
public function setDay ($day) {
	$this->day = $day;
	return $this;
}

/**
* Get servingstart - servingstart
* @return string
*/
public function getServingstart () {
	$preValue = $this->preGetValue("servingstart"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->servingstart;
	return $data;
}

/**
* Set servingstart - servingstart
* @param string $servingstart
* @return \Pimcore\Model\Object\Serving
*/
public function setServingstart ($servingstart) {
	$this->servingstart = $servingstart;
	return $this;
}

/**
* Get servingend - servingend
* @return string
*/
public function getServingend () {
	$preValue = $this->preGetValue("servingend"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->servingend;
	return $data;
}

/**
* Set servingend - servingend
* @param string $servingend
* @return \Pimcore\Model\Object\Serving
*/
public function setServingend ($servingend) {
	$this->servingend = $servingend;
	return $this;
}

/**
* Get maxseats - maxseats
* @return float
*/
public function getMaxseats () {
	$preValue = $this->preGetValue("maxseats"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->maxseats;
	return $data;
}

/**
* Set maxseats - maxseats
* @param float $maxseats
* @return \Pimcore\Model\Object\Serving
*/
public function setMaxseats ($maxseats) {
	$this->maxseats = $maxseats;
	return $this;
}

/**
* Get maxtables - maxtables
* @return float
*/
public function getMaxtables () {
	$preValue = $this->preGetValue("maxtables"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->maxtables;
	return $data;
}

/**
* Set maxtables - maxtables
* @param float $maxtables
* @return \Pimcore\Model\Object\Serving
*/
public function setMaxtables ($maxtables) {
	$this->maxtables = $maxtables;
	return $this;
}

/**
* Get mealduration - mealduration
* @return float
*/
public function getMealduration () {
	$preValue = $this->preGetValue("mealduration"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->mealduration;
	return $data;
}

/**
* Set mealduration - mealduration
* @param float $mealduration
* @return \Pimcore\Model\Object\Serving
*/
public function setMealduration ($mealduration) {
	$this->mealduration = $mealduration;
	return $this;
}

/**
* Get closedmonday - closedmonday
* @return float
*/
public function getClosedmonday () {
	$preValue = $this->preGetValue("closedmonday"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->closedmonday;
	return $data;
}

/**
* Set closedmonday - closedmonday
* @param float $closedmonday
* @return \Pimcore\Model\Object\Serving
*/
public function setClosedmonday ($closedmonday) {
	$this->closedmonday = $closedmonday;
	return $this;
}

/**
* Get timestartmonday - timestartmonday
* @return string
*/
public function getTimestartmonday () {
	$preValue = $this->preGetValue("timestartmonday"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->timestartmonday;
	return $data;
}

/**
* Set timestartmonday - timestartmonday
* @param string $timestartmonday
* @return \Pimcore\Model\Object\Serving
*/
public function setTimestartmonday ($timestartmonday) {
	$this->timestartmonday = $timestartmonday;
	return $this;
}

/**
* Get timeendmonday - timeendmonday
* @return string
*/
public function getTimeendmonday () {
	$preValue = $this->preGetValue("timeendmonday"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->timeendmonday;
	return $data;
}

/**
* Set timeendmonday - timeendmonday
* @param string $timeendmonday
* @return \Pimcore\Model\Object\Serving
*/
public function setTimeendmonday ($timeendmonday) {
	$this->timeendmonday = $timeendmonday;
	return $this;
}

/**
* Get closedtuesday - closedtuesday
* @return float
*/
public function getClosedtuesday () {
	$preValue = $this->preGetValue("closedtuesday"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->closedtuesday;
	return $data;
}

/**
* Set closedtuesday - closedtuesday
* @param float $closedtuesday
* @return \Pimcore\Model\Object\Serving
*/
public function setClosedtuesday ($closedtuesday) {
	$this->closedtuesday = $closedtuesday;
	return $this;
}

/**
* Get timestarttuesday - timestarttuesday
* @return string
*/
public function getTimestarttuesday () {
	$preValue = $this->preGetValue("timestarttuesday"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->timestarttuesday;
	return $data;
}

/**
* Set timestarttuesday - timestarttuesday
* @param string $timestarttuesday
* @return \Pimcore\Model\Object\Serving
*/
public function setTimestarttuesday ($timestarttuesday) {
	$this->timestarttuesday = $timestarttuesday;
	return $this;
}

/**
* Get timeendtuesday - timeendtuesday
* @return string
*/
public function getTimeendtuesday () {
	$preValue = $this->preGetValue("timeendtuesday"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->timeendtuesday;
	return $data;
}

/**
* Set timeendtuesday - timeendtuesday
* @param string $timeendtuesday
* @return \Pimcore\Model\Object\Serving
*/
public function setTimeendtuesday ($timeendtuesday) {
	$this->timeendtuesday = $timeendtuesday;
	return $this;
}

/**
* Get closedwednesday - closedwednesday
* @return float
*/
public function getClosedwednesday () {
	$preValue = $this->preGetValue("closedwednesday"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->closedwednesday;
	return $data;
}

/**
* Set closedwednesday - closedwednesday
* @param float $closedwednesday
* @return \Pimcore\Model\Object\Serving
*/
public function setClosedwednesday ($closedwednesday) {
	$this->closedwednesday = $closedwednesday;
	return $this;
}

/**
* Get timestartwednesday - timestartwednesday
* @return string
*/
public function getTimestartwednesday () {
	$preValue = $this->preGetValue("timestartwednesday"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->timestartwednesday;
	return $data;
}

/**
* Set timestartwednesday - timestartwednesday
* @param string $timestartwednesday
* @return \Pimcore\Model\Object\Serving
*/
public function setTimestartwednesday ($timestartwednesday) {
	$this->timestartwednesday = $timestartwednesday;
	return $this;
}

/**
* Get timeendwednesday - timeendwednesday
* @return string
*/
public function getTimeendwednesday () {
	$preValue = $this->preGetValue("timeendwednesday"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->timeendwednesday;
	return $data;
}

/**
* Set timeendwednesday - timeendwednesday
* @param string $timeendwednesday
* @return \Pimcore\Model\Object\Serving
*/
public function setTimeendwednesday ($timeendwednesday) {
	$this->timeendwednesday = $timeendwednesday;
	return $this;
}

/**
* Get closedthursday - closedthursday
* @return float
*/
public function getClosedthursday () {
	$preValue = $this->preGetValue("closedthursday"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->closedthursday;
	return $data;
}

/**
* Set closedthursday - closedthursday
* @param float $closedthursday
* @return \Pimcore\Model\Object\Serving
*/
public function setClosedthursday ($closedthursday) {
	$this->closedthursday = $closedthursday;
	return $this;
}

/**
* Get timestartthursday - timestartthursday
* @return string
*/
public function getTimestartthursday () {
	$preValue = $this->preGetValue("timestartthursday"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->timestartthursday;
	return $data;
}

/**
* Set timestartthursday - timestartthursday
* @param string $timestartthursday
* @return \Pimcore\Model\Object\Serving
*/
public function setTimestartthursday ($timestartthursday) {
	$this->timestartthursday = $timestartthursday;
	return $this;
}

/**
* Get timeendthursday - timeendthursday
* @return string
*/
public function getTimeendthursday () {
	$preValue = $this->preGetValue("timeendthursday"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->timeendthursday;
	return $data;
}

/**
* Set timeendthursday - timeendthursday
* @param string $timeendthursday
* @return \Pimcore\Model\Object\Serving
*/
public function setTimeendthursday ($timeendthursday) {
	$this->timeendthursday = $timeendthursday;
	return $this;
}

/**
* Get closedfriday - closedfriday
* @return float
*/
public function getClosedfriday () {
	$preValue = $this->preGetValue("closedfriday"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->closedfriday;
	return $data;
}

/**
* Set closedfriday - closedfriday
* @param float $closedfriday
* @return \Pimcore\Model\Object\Serving
*/
public function setClosedfriday ($closedfriday) {
	$this->closedfriday = $closedfriday;
	return $this;
}

/**
* Get timestartfriday - timestartfriday
* @return string
*/
public function getTimestartfriday () {
	$preValue = $this->preGetValue("timestartfriday"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->timestartfriday;
	return $data;
}

/**
* Set timestartfriday - timestartfriday
* @param string $timestartfriday
* @return \Pimcore\Model\Object\Serving
*/
public function setTimestartfriday ($timestartfriday) {
	$this->timestartfriday = $timestartfriday;
	return $this;
}

/**
* Get timeendfriday - timeendfriday
* @return string
*/
public function getTimeendfriday () {
	$preValue = $this->preGetValue("timeendfriday"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->timeendfriday;
	return $data;
}

/**
* Set timeendfriday - timeendfriday
* @param string $timeendfriday
* @return \Pimcore\Model\Object\Serving
*/
public function setTimeendfriday ($timeendfriday) {
	$this->timeendfriday = $timeendfriday;
	return $this;
}

/**
* Get closedsaturday - closedsaturday
* @return float
*/
public function getClosedsaturday () {
	$preValue = $this->preGetValue("closedsaturday"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->closedsaturday;
	return $data;
}

/**
* Set closedsaturday - closedsaturday
* @param float $closedsaturday
* @return \Pimcore\Model\Object\Serving
*/
public function setClosedsaturday ($closedsaturday) {
	$this->closedsaturday = $closedsaturday;
	return $this;
}

/**
* Get timestartsaturday - timestartsaturday
* @return string
*/
public function getTimestartsaturday () {
	$preValue = $this->preGetValue("timestartsaturday"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->timestartsaturday;
	return $data;
}

/**
* Set timestartsaturday - timestartsaturday
* @param string $timestartsaturday
* @return \Pimcore\Model\Object\Serving
*/
public function setTimestartsaturday ($timestartsaturday) {
	$this->timestartsaturday = $timestartsaturday;
	return $this;
}

/**
* Get timeendsaturday - timeendsaturday
* @return string
*/
public function getTimeendsaturday () {
	$preValue = $this->preGetValue("timeendsaturday"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->timeendsaturday;
	return $data;
}

/**
* Set timeendsaturday - timeendsaturday
* @param string $timeendsaturday
* @return \Pimcore\Model\Object\Serving
*/
public function setTimeendsaturday ($timeendsaturday) {
	$this->timeendsaturday = $timeendsaturday;
	return $this;
}

/**
* Get closedsunday - closedsunday
* @return float
*/
public function getClosedsunday () {
	$preValue = $this->preGetValue("closedsunday"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->closedsunday;
	return $data;
}

/**
* Set closedsunday - closedsunday
* @param float $closedsunday
* @return \Pimcore\Model\Object\Serving
*/
public function setClosedsunday ($closedsunday) {
	$this->closedsunday = $closedsunday;
	return $this;
}

/**
* Get timestartsunday - timestartsunday
* @return string
*/
public function getTimestartsunday () {
	$preValue = $this->preGetValue("timestartsunday"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->timestartsunday;
	return $data;
}

/**
* Set timestartsunday - timestartsunday
* @param string $timestartsunday
* @return \Pimcore\Model\Object\Serving
*/
public function setTimestartsunday ($timestartsunday) {
	$this->timestartsunday = $timestartsunday;
	return $this;
}

/**
* Get timeendsunday - timeendsunday
* @return string
*/
public function getTimeendsunday () {
	$preValue = $this->preGetValue("timeendsunday"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->timeendsunday;
	return $data;
}

/**
* Set timeendsunday - timeendsunday
* @param string $timeendsunday
* @return \Pimcore\Model\Object\Serving
*/
public function setTimeendsunday ($timeendsunday) {
	$this->timeendsunday = $timeendsunday;
	return $this;
}

/**
* Get maxseatsmonday - maxseatsmonday
* @return float
*/
public function getMaxseatsmonday () {
	$preValue = $this->preGetValue("maxseatsmonday"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->maxseatsmonday;
	return $data;
}

/**
* Set maxseatsmonday - maxseatsmonday
* @param float $maxseatsmonday
* @return \Pimcore\Model\Object\Serving
*/
public function setMaxseatsmonday ($maxseatsmonday) {
	$this->maxseatsmonday = $maxseatsmonday;
	return $this;
}

/**
* Get maxseatstuesday - maxseatstuesday
* @return float
*/
public function getMaxseatstuesday () {
	$preValue = $this->preGetValue("maxseatstuesday"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->maxseatstuesday;
	return $data;
}

/**
* Set maxseatstuesday - maxseatstuesday
* @param float $maxseatstuesday
* @return \Pimcore\Model\Object\Serving
*/
public function setMaxseatstuesday ($maxseatstuesday) {
	$this->maxseatstuesday = $maxseatstuesday;
	return $this;
}

/**
* Get maxseatswednesday - maxseatswednesday
* @return float
*/
public function getMaxseatswednesday () {
	$preValue = $this->preGetValue("maxseatswednesday"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->maxseatswednesday;
	return $data;
}

/**
* Set maxseatswednesday - maxseatswednesday
* @param float $maxseatswednesday
* @return \Pimcore\Model\Object\Serving
*/
public function setMaxseatswednesday ($maxseatswednesday) {
	$this->maxseatswednesday = $maxseatswednesday;
	return $this;
}

/**
* Get maxseatsthursday - maxseatsthursday
* @return float
*/
public function getMaxseatsthursday () {
	$preValue = $this->preGetValue("maxseatsthursday"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->maxseatsthursday;
	return $data;
}

/**
* Set maxseatsthursday - maxseatsthursday
* @param float $maxseatsthursday
* @return \Pimcore\Model\Object\Serving
*/
public function setMaxseatsthursday ($maxseatsthursday) {
	$this->maxseatsthursday = $maxseatsthursday;
	return $this;
}

/**
* Get maxseatsfriday - maxseatsfriday
* @return float
*/
public function getMaxseatsfriday () {
	$preValue = $this->preGetValue("maxseatsfriday"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->maxseatsfriday;
	return $data;
}

/**
* Set maxseatsfriday - maxseatsfriday
* @param float $maxseatsfriday
* @return \Pimcore\Model\Object\Serving
*/
public function setMaxseatsfriday ($maxseatsfriday) {
	$this->maxseatsfriday = $maxseatsfriday;
	return $this;
}

/**
* Get maxseatssaturday - maxseatssaturday
* @return float
*/
public function getMaxseatssaturday () {
	$preValue = $this->preGetValue("maxseatssaturday"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->maxseatssaturday;
	return $data;
}

/**
* Set maxseatssaturday - maxseatssaturday
* @param float $maxseatssaturday
* @return \Pimcore\Model\Object\Serving
*/
public function setMaxseatssaturday ($maxseatssaturday) {
	$this->maxseatssaturday = $maxseatssaturday;
	return $this;
}

/**
* Get maxseatssunday - maxseatssunday
* @return float
*/
public function getMaxseatssunday () {
	$preValue = $this->preGetValue("maxseatssunday"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->maxseatssunday;
	return $data;
}

/**
* Set maxseatssunday - maxseatssunday
* @param float $maxseatssunday
* @return \Pimcore\Model\Object\Serving
*/
public function setMaxseatssunday ($maxseatssunday) {
	$this->maxseatssunday = $maxseatssunday;
	return $this;
}

/**
* Get maxtablesmonday - maxtablesmonday
* @return float
*/
public function getMaxtablesmonday () {
	$preValue = $this->preGetValue("maxtablesmonday"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->maxtablesmonday;
	return $data;
}

/**
* Set maxtablesmonday - maxtablesmonday
* @param float $maxtablesmonday
* @return \Pimcore\Model\Object\Serving
*/
public function setMaxtablesmonday ($maxtablesmonday) {
	$this->maxtablesmonday = $maxtablesmonday;
	return $this;
}

/**
* Get maxtablestuesday - maxtablestuesday
* @return float
*/
public function getMaxtablestuesday () {
	$preValue = $this->preGetValue("maxtablestuesday"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->maxtablestuesday;
	return $data;
}

/**
* Set maxtablestuesday - maxtablestuesday
* @param float $maxtablestuesday
* @return \Pimcore\Model\Object\Serving
*/
public function setMaxtablestuesday ($maxtablestuesday) {
	$this->maxtablestuesday = $maxtablestuesday;
	return $this;
}

/**
* Get maxtableswednesday - maxtableswednesday
* @return float
*/
public function getMaxtableswednesday () {
	$preValue = $this->preGetValue("maxtableswednesday"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->maxtableswednesday;
	return $data;
}

/**
* Set maxtableswednesday - maxtableswednesday
* @param float $maxtableswednesday
* @return \Pimcore\Model\Object\Serving
*/
public function setMaxtableswednesday ($maxtableswednesday) {
	$this->maxtableswednesday = $maxtableswednesday;
	return $this;
}

/**
* Get maxtablesthursday - maxtablesthursday
* @return float
*/
public function getMaxtablesthursday () {
	$preValue = $this->preGetValue("maxtablesthursday"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->maxtablesthursday;
	return $data;
}

/**
* Set maxtablesthursday - maxtablesthursday
* @param float $maxtablesthursday
* @return \Pimcore\Model\Object\Serving
*/
public function setMaxtablesthursday ($maxtablesthursday) {
	$this->maxtablesthursday = $maxtablesthursday;
	return $this;
}

/**
* Get maxtablesfriday - maxtablesfriday
* @return float
*/
public function getMaxtablesfriday () {
	$preValue = $this->preGetValue("maxtablesfriday"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->maxtablesfriday;
	return $data;
}

/**
* Set maxtablesfriday - maxtablesfriday
* @param float $maxtablesfriday
* @return \Pimcore\Model\Object\Serving
*/
public function setMaxtablesfriday ($maxtablesfriday) {
	$this->maxtablesfriday = $maxtablesfriday;
	return $this;
}

/**
* Get maxtablessaturday - maxtablessaturday
* @return float
*/
public function getMaxtablessaturday () {
	$preValue = $this->preGetValue("maxtablessaturday"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->maxtablessaturday;
	return $data;
}

/**
* Set maxtablessaturday - maxtablessaturday
* @param float $maxtablessaturday
* @return \Pimcore\Model\Object\Serving
*/
public function setMaxtablessaturday ($maxtablessaturday) {
	$this->maxtablessaturday = $maxtablessaturday;
	return $this;
}

/**
* Get maxtablessunday - maxtablessunday
* @return float
*/
public function getMaxtablessunday () {
	$preValue = $this->preGetValue("maxtablessunday"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->maxtablessunday;
	return $data;
}

/**
* Set maxtablessunday - maxtablessunday
* @param float $maxtablessunday
* @return \Pimcore\Model\Object\Serving
*/
public function setMaxtablessunday ($maxtablessunday) {
	$this->maxtablessunday = $maxtablessunday;
	return $this;
}

protected static $_relationFields = array (
  'location' => 
  array (
    'type' => 'href',
  ),
);

public $lazyLoadedFields = NULL;

}

