<?php 

/** Generated at 2015-10-08T16:00:05+02:00 */

/**
* Inheritance: no
* Variants   : no
* Changed by : didier (35)
* IP:          88.120.82.200
*/


namespace Pimcore\Model\Object;



/**
* @method static \Pimcore\Model\Object\Societe getByName ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Societe getByAddress ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Societe getByZip ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Societe getByCity ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Societe getByEmail ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Societe getByUrl ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Societe getByTel ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Societe getByFax ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Societe getByReference ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Societe getByDescription ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Societe getByMaxSeats ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Societe getByMaxTables ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Societe getByResaUnit ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Societe getByMaxResaPerUnit ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Societe getByMaxResaSeats ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Societe getByMealduration ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Societe getByClosingDateStart ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Societe getByClosingDateEnd ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Societe getByLatlngresult ($value, $limit = 0) 
*/

class Societe extends \Website\Object\Societe {

public $o_classId = 8;
public $o_className = "societe";
public $name;
public $address;
public $zip;
public $city;
public $email;
public $url;
public $tel;
public $fax;
public $reference;
public $description;
public $maxSeats;
public $maxTables;
public $resaUnit;
public $maxResaPerUnit;
public $maxResaSeats;
public $mealduration;
public $closingDateStart;
public $closingDateEnd;
public $latlngresult;


/**
* @param array $values
* @return \Pimcore\Model\Object\Societe
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
* @return \Pimcore\Model\Object\Societe
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
* @return \Pimcore\Model\Object\Societe
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
* @return \Pimcore\Model\Object\Societe
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
* @return \Pimcore\Model\Object\Societe
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
* @return \Pimcore\Model\Object\Societe
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
* @return \Pimcore\Model\Object\Societe
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
* @return \Pimcore\Model\Object\Societe
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
* @return \Pimcore\Model\Object\Societe
*/
public function setFax ($fax) {
	$this->fax = $fax;
	return $this;
}

/**
* Get reference - reference
* @return string
*/
public function getReference () {
	$preValue = $this->preGetValue("reference"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->reference;
	return $data;
}

/**
* Set reference - reference
* @param string $reference
* @return \Pimcore\Model\Object\Societe
*/
public function setReference ($reference) {
	$this->reference = $reference;
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
* @return \Pimcore\Model\Object\Societe
*/
public function setDescription ($description) {
	$this->description = $description;
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
* @return \Pimcore\Model\Object\Societe
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
* @return \Pimcore\Model\Object\Societe
*/
public function setMaxTables ($maxTables) {
	$this->maxTables = $maxTables;
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
* @return \Pimcore\Model\Object\Societe
*/
public function setResaUnit ($resaUnit) {
	$this->resaUnit = $resaUnit;
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
* @return \Pimcore\Model\Object\Societe
*/
public function setMaxResaPerUnit ($maxResaPerUnit) {
	$this->maxResaPerUnit = $maxResaPerUnit;
	return $this;
}

/**
* Get maxResaSeats - maxResaSeats
* @return float
*/
public function getMaxResaSeats () {
	$preValue = $this->preGetValue("maxResaSeats"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->maxResaSeats;
	return $data;
}

/**
* Set maxResaSeats - maxResaSeats
* @param float $maxResaSeats
* @return \Pimcore\Model\Object\Societe
*/
public function setMaxResaSeats ($maxResaSeats) {
	$this->maxResaSeats = $maxResaSeats;
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
* @return \Pimcore\Model\Object\Societe
*/
public function setMealduration ($mealduration) {
	$this->mealduration = $mealduration;
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
* @return \Pimcore\Model\Object\Societe
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
* @return \Pimcore\Model\Object\Societe
*/
public function setClosingDateEnd ($closingDateEnd) {
	$this->closingDateEnd = $closingDateEnd;
	return $this;
}

/**
* Get latlngresult - latlngresult
* @return \Pimcore\Model\Object\Data\Geopoint
*/
public function getLatlngresult () {
	$preValue = $this->preGetValue("latlngresult"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->latlngresult;
	return $data;
}

/**
* Set latlngresult - latlngresult
* @param \Pimcore\Model\Object\Data\Geopoint $latlngresult
* @return \Pimcore\Model\Object\Societe
*/
public function setLatlngresult ($latlngresult) {
	$this->latlngresult = $latlngresult;
	return $this;
}

protected static $_relationFields = array (
);

public $lazyLoadedFields = NULL;

}

