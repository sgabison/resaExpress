<?php 

/** Generated at 2015-10-01T11:14:35+02:00 */

/**
* Inheritance: no
* Variants   : no
* Changed by : didier (35)
* IP:          88.120.82.200
*/


namespace Pimcore\Model\Object;



/**
* @method static \Pimcore\Model\Object\Person getByGender ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Person getByFirstname ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Person getByLastname ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Person getByEmail ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Person getByNewsletterActive ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Person getByNewsletterConfirmed ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Person getByDateRegister ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Person getByPositions ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Person getByPassword ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Person getByRating ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Person getBySociete ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Person getByPhone ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Person getByAddress ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Person getByCity ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Person getByAvatar ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Person getByPermits ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Person getByLocation ($value, $limit = 0) 
*/

class Person extends \Website\Object\Person {

public $o_classId = 4;
public $o_className = "person";
public $gender;
public $firstname;
public $lastname;
public $email;
public $newsletterActive;
public $newsletterConfirmed;
public $dateRegister;
public $positions;
public $password;
public $rating;
public $societe;
public $phone;
public $address;
public $city;
public $avatar;
public $permits;
public $location;


/**
* @param array $values
* @return \Pimcore\Model\Object\Person
*/
public static function create($values = array()) {
	$object = new static();
	$object->setValues($values);
	return $object;
}

/**
* Get gender - Gender
* @return string
*/
public function getGender () {
	$preValue = $this->preGetValue("gender"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->gender;
	return $data;
}

/**
* Set gender - Gender
* @param string $gender
* @return \Pimcore\Model\Object\Person
*/
public function setGender ($gender) {
	$this->gender = $gender;
	return $this;
}

/**
* Get firstname - Firstname
* @return string
*/
public function getFirstname () {
	$preValue = $this->preGetValue("firstname"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->firstname;
	return $data;
}

/**
* Set firstname - Firstname
* @param string $firstname
* @return \Pimcore\Model\Object\Person
*/
public function setFirstname ($firstname) {
	$this->firstname = $firstname;
	return $this;
}

/**
* Get lastname - Lastname
* @return string
*/
public function getLastname () {
	$preValue = $this->preGetValue("lastname"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->lastname;
	return $data;
}

/**
* Set lastname - Lastname
* @param string $lastname
* @return \Pimcore\Model\Object\Person
*/
public function setLastname ($lastname) {
	$this->lastname = $lastname;
	return $this;
}

/**
* Get email - Email
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
* Set email - Email
* @param string $email
* @return \Pimcore\Model\Object\Person
*/
public function setEmail ($email) {
	$this->email = $email;
	return $this;
}

/**
* Get newsletterActive - Newsletter Active
* @return boolean
*/
public function getNewsletterActive () {
	$preValue = $this->preGetValue("newsletterActive"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->newsletterActive;
	return $data;
}

/**
* Set newsletterActive - Newsletter Active
* @param boolean $newsletterActive
* @return \Pimcore\Model\Object\Person
*/
public function setNewsletterActive ($newsletterActive) {
	$this->newsletterActive = $newsletterActive;
	return $this;
}

/**
* Get newsletterConfirmed - Newsletter Confirmed
* @return boolean
*/
public function getNewsletterConfirmed () {
	$preValue = $this->preGetValue("newsletterConfirmed"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->newsletterConfirmed;
	return $data;
}

/**
* Set newsletterConfirmed - Newsletter Confirmed
* @param boolean $newsletterConfirmed
* @return \Pimcore\Model\Object\Person
*/
public function setNewsletterConfirmed ($newsletterConfirmed) {
	$this->newsletterConfirmed = $newsletterConfirmed;
	return $this;
}

/**
* Get dateRegister - dateRegister
* @return \Pimcore\Date
*/
public function getDateRegister () {
	$preValue = $this->preGetValue("dateRegister"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->dateRegister;
	return $data;
}

/**
* Set dateRegister - dateRegister
* @param \Pimcore\Date $dateRegister
* @return \Pimcore\Model\Object\Person
*/
public function setDateRegister ($dateRegister) {
	$this->dateRegister = $dateRegister;
	return $this;
}

/**
* Get positions - positions
* @return array
*/
public function getPositions () {
	$preValue = $this->preGetValue("positions"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->getClass()->getFieldDefinition("positions")->preGetData($this);
	return $data;
}

/**
* Set positions - positions
* @param array $positions
* @return \Pimcore\Model\Object\Person
*/
public function setPositions ($positions) {
	$this->positions = $this->getClass()->getFieldDefinition("positions")->preSetData($this, $positions);
	return $this;
}

/**
* Get password - password
* @return string
*/
public function getPassword () {
	$preValue = $this->preGetValue("password"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->password;
	return $data;
}

/**
* Set password - password
* @param string $password
* @return \Pimcore\Model\Object\Person
*/
public function setPassword ($password) {
	$this->password = $password;
	return $this;
}

/**
* Get rating - rating
* @return float
*/
public function getRating () {
	$preValue = $this->preGetValue("rating"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->rating;
	return $data;
}

/**
* Set rating - rating
* @param float $rating
* @return \Pimcore\Model\Object\Person
*/
public function setRating ($rating) {
	$this->rating = $rating;
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
* @return \Pimcore\Model\Object\Person
*/
public function setSociete ($societe) {
	$this->societe = $this->getClass()->getFieldDefinition("societe")->preSetData($this, $societe);
	return $this;
}

/**
* Get phone - phone
* @return string
*/
public function getPhone () {
	$preValue = $this->preGetValue("phone"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->phone;
	return $data;
}

/**
* Set phone - phone
* @param string $phone
* @return \Pimcore\Model\Object\Person
*/
public function setPhone ($phone) {
	$this->phone = $phone;
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
* @return \Pimcore\Model\Object\Person
*/
public function setAddress ($address) {
	$this->address = $address;
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
* @return \Pimcore\Model\Object\Person
*/
public function setCity ($city) {
	$this->city = $city;
	return $this;
}

/**
* Get avatar - avatar
* @return \Pimcore\Model\Asset\Image
*/
public function getAvatar () {
	$preValue = $this->preGetValue("avatar"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->avatar;
	return $data;
}

/**
* Set avatar - avatar
* @param \Pimcore\Model\Asset\Image $avatar
* @return \Pimcore\Model\Object\Person
*/
public function setAvatar ($avatar) {
	$this->avatar = $avatar;
	return $this;
}

/**
* Get permits - permits
* @return string
*/
public function getPermits () {
	$preValue = $this->preGetValue("permits"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->permits;
	return $data;
}

/**
* Set permits - permits
* @param string $permits
* @return \Pimcore\Model\Object\Person
*/
public function setPermits ($permits) {
	$this->permits = $permits;
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
* @return \Pimcore\Model\Object\Person
*/
public function setLocation ($location) {
	$this->location = $this->getClass()->getFieldDefinition("location")->preSetData($this, $location);
	return $this;
}

protected static $_relationFields = array (
  'positions' => 
  array (
    'type' => 'multihref',
  ),
  'societe' => 
  array (
    'type' => 'href',
  ),
  'location' => 
  array (
    'type' => 'href',
  ),
);

public $lazyLoadedFields = array (
  0 => 'positions',
);

}

