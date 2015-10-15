<?php 

/** Generated at 2015-10-08T16:40:52+02:00 */

/**
* Inheritance: no
* Variants   : no
* Changed by : didier (35)
* IP:          88.120.82.200
*/


namespace Pimcore\Model\Object;



/**
* @method static \Pimcore\Model\Object\Location getByName ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Location getByAddress ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Location getByZip ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Location getByCity ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Location getByEmail ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Location getByUrl ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Location getByTel ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Location getByFax ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Location getByDescription ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Location getByGeolocalisation ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Location getBySociete ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Location getByMaxSeats ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Location getByMaxTables ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Location getByMaxResaPerUnit ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Location getByResaUnit ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Location getByClosingDateStart ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Location getByClosingDateEnd ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Location getByMealduration ($value, $limit = 0) 
*/

class Location extends \Website\Object\Location {

public $o_classId = 9;
public $o_className = "location";
public $name;
public $address;
public $zip;
public $city;
public $email;
public $url;
public $tel;
public $fax;
public $description;
public $geolocalisation;
public $societe;
public $maxSeats;
public $maxTables;
public $maxResaPerUnit;
public $resaUnit;
public $closingDateStart;
public $closingDateEnd;
public $mealduration;


/**
* @param array $values
* @return \Pimcore\Model\Object\Location
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
* @return \Pimcore\Model\Object\Location
*/
public function setName ($name) {
	$this->name = $name;
	return $this;
}

/**
* Get address - address
* @return string
*/
public function getAddress () {
	$preValue = $this->preGetValue("address"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->address;
	return $data;
}

/**
* Set address - address
* @param string $address
* @return \Pimcore\Model\Object\Location
*/
public function setAddress ($address) {
	$this->address = $address;
	return $this;
}

/**
* Get zip - zip
* @return string
*/
public function getZip () {
	$preValue = $this->preGetValue("zip"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->zip;
	return $data;
}

/**
* Set zip - zip
* @param string $zip
* @return \Pimcore\Model\Object\Location
*/
public function setZip ($zip) {
	$this->zip = $zip;
	return $this;
}

/**
* Get city - city
* @return string
*/
public function getCity () {
	$preValue = $this->preGetValue("city"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->city;
	return $data;
}

/**
* Set city - city
* @param string $city
* @return \Pimcore\Model\Object\Location
*/
public function setCity ($city) {
	$this->city = $city;
	return $this;
}

/**
* Get email - email
* @return string
*/
public function getEmail () {
	$preValue = $this->preGetValue("email"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->email;
	return $data;
}

/**
* Set email - email
* @param string $email
* @return \Pimcore\Model\Object\Location
*/
public function setEmail ($email) {
	$this->email = $email;
	return $this;
}

/**
* Get url - url
* @return string
*/
public function getUrl () {
	$preValue = $this->preGetValue("url"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->url;
	return $data;
}

/**
* Set url - url
* @param string $url
* @return \Pimcore\Model\Object\Location
*/
public function setUrl ($url) {
	$this->url = $url;
	return $this;
}

/**
* Get tel - tel
* @return string
*/
public function getTel () {
	$preValue = $this->preGetValue("tel"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->tel;
	return $data;
}

/**
* Set tel - tel
* @param string $tel
* @return \Pimcore\Model\Object\Location
*/
public function setTel ($tel) {
	$this->tel = $tel;
	return $this;
}

/**
* Get fax - fax
* @return string
*/
public function getFax () {
	$preValue = $this->preGetValue("fax"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->fax;
	return $data;
}

/**
* Set fax - fax
* @param string $fax
* @return \Pimcore\Model\Object\Location
*/
public function setFax ($fax) {
	$this->fax = $fax;
	return $this;
}

/**
* Get description - description
* @return string
*/
public function getDescription () {
	$preValue = $this->preGetValue("description"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->description;
	return $data;
}

/**
* Set description - description
* @param string $description
* @return \Pimcore\Model\Object\Location
*/
public function setDescription ($description) {
	$this->description = $description;
	return $this;
}

/**
* Get geolocalisation - geolocalisation
* @return \Pimcore\Model\Object\Data\Geopoint
*/
public function getGeolocalisation () {
	$preValue = $this->preGetValue("geolocalisation"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->geolocalisation;
	return $data;
}

/**
* Set geolocalisation - geolocalisation
* @param \Pimcore\Model\Object\Data\Geopoint $geolocalisation
* @return \Pimcore\Model\Object\Location
*/
public function setGeolocalisation ($geolocalisation) {
	$this->geolocalisation = $geolocalisation;
	return $this;
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
* @return \Pimcore\Model\Object\Location
*/
public function setSociete ($societe) {
	$this->societe = $this->getClass()->getFieldDefinition("societe")->preSetData($this, $societe);
	return $this;
}

/**
* Get maxSeats - maxSeats
* @return float
*/
public function getMaxSeats () {
	$preValue = $this->preGetValue("maxSeats"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->maxSeats;
	return $data;
}

/**
* Set maxSeats - maxSeats
* @param float $maxSeats
* @return \Pimcore\Model\Object\Location
*/
public function setMaxSeats ($maxSeats) {
	$this->maxSeats = $maxSeats;
	return $this;
}

/**
* Get maxTables - maxTables
* @return float
*/
public function getMaxTables () {
	$preValue = $this->preGetValue("maxTables"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->maxTables;
	return $data;
}

/**
* Set maxTables - maxTables
* @param float $maxTables
* @return \Pimcore\Model\Object\Location
*/
public function setMaxTables ($maxTables) {
	$this->maxTables = $maxTables;
	return $this;
}

/**
* Get maxResaPerUnit - maxResaPerUnit
* @return float
*/
public function getMaxResaPerUnit () {
	$preValue = $this->preGetValue("maxResaPerUnit"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->maxResaPerUnit;
	return $data;
}

/**
* Set maxResaPerUnit - maxResaPerUnit
* @param float $maxResaPerUnit
* @return \Pimcore\Model\Object\Location
*/
public function setMaxResaPerUnit ($maxResaPerUnit) {
	$this->maxResaPerUnit = $maxResaPerUnit;
	return $this;
}

/**
* Get resaUnit - resaUnit
* @return float
*/
public function getResaUnit () {
	$preValue = $this->preGetValue("resaUnit"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->resaUnit;
	return $data;
}

/**
* Set resaUnit - resaUnit
* @param float $resaUnit
* @return \Pimcore\Model\Object\Location
*/
public function setResaUnit ($resaUnit) {
	$this->resaUnit = $resaUnit;
	return $this;
}

/**
* Get closingDateStart - closingDateStart
* @return \Pimcore\Date
*/
public function getClosingDateStart () {
	$preValue = $this->preGetValue("closingDateStart"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->closingDateStart;
	return $data;
}

/**
* Set closingDateStart - closingDateStart
* @param \Pimcore\Date $closingDateStart
* @return \Pimcore\Model\Object\Location
*/
public function setClosingDateStart ($closingDateStart) {
	$this->closingDateStart = $closingDateStart;
	return $this;
}

/**
* Get closingDateEnd - closingDateEnd
* @return \Pimcore\Date
*/
public function getClosingDateEnd () {
	$preValue = $this->preGetValue("closingDateEnd"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->closingDateEnd;
	return $data;
}

/**
* Set closingDateEnd - closingDateEnd
* @param \Pimcore\Date $closingDateEnd
* @return \Pimcore\Model\Object\Location
*/
public function setClosingDateEnd ($closingDateEnd) {
	$this->closingDateEnd = $closingDateEnd;
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
* @return \Pimcore\Model\Object\Location
*/
public function setMealduration ($mealduration) {
	$this->mealduration = $mealduration;
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

