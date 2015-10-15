<?php 

/** Generated at 2015-09-25T12:53:57+02:00 */

/**
* Inheritance: no
* Variants   : no
* Changed by : didier (35)
* IP:          88.120.82.200
*/


namespace Pimcore\Model\Object;



/**
* @method static \Pimcore\Model\Object\Guest getByTitle ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Guest getByPreferredlanguage ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Guest getByCountrycode ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Guest getByLastname ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Guest getByTel ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Guest getByEmail ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Guest getByNewsletterActive ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Guest getByNewsletterConfirmed ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Guest getByDateregister ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Guest getByPassword ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Guest getBySociete ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Guest getByAvatar ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Guest getByFirstname ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Guest getByBookingnotes ($value, $limit = 0) 
*/

class Guest extends \Website\Object\Guest {

public $o_classId = 12;
public $o_className = "guest";
public $title;
public $preferredlanguage;
public $countrycode;
public $lastname;
public $tel;
public $email;
public $newsletterActive;
public $newsletterConfirmed;
public $dateregister;
public $password;
public $societe;
public $avatar;
public $firstname;
public $bookingnotes;


/**
* @param array $values
* @return \Pimcore\Model\Object\Guest
*/
public static function create($values = array()) {
	$object = new static();
	$object->setValues($values);
	return $object;
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
* @return \Pimcore\Model\Object\Guest
*/
public function setTitle ($title) {
	$this->title = $title;
	return $this;
}

/**
* Get preferredlanguage - preferredlanguage
* @return string
*/
public function getPreferredlanguage () {
	$preValue = $this->preGetValue("preferredlanguage"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->preferredlanguage;
	return $data;
}

/**
* Set preferredlanguage - preferredlanguage
* @param string $preferredlanguage
* @return \Pimcore\Model\Object\Guest
*/
public function setPreferredlanguage ($preferredlanguage) {
	$this->preferredlanguage = $preferredlanguage;
	return $this;
}

/**
* Get countrycode - countrycode
* @return string
*/
public function getCountrycode () {
	$preValue = $this->preGetValue("countrycode"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->countrycode;
	return $data;
}

/**
* Set countrycode - countrycode
* @param string $countrycode
* @return \Pimcore\Model\Object\Guest
*/
public function setCountrycode ($countrycode) {
	$this->countrycode = $countrycode;
	return $this;
}

/**
* Get lastname - lastname
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
* Set lastname - lastname
* @param string $lastname
* @return \Pimcore\Model\Object\Guest
*/
public function setLastname ($lastname) {
	$this->lastname = $lastname;
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
* @return \Pimcore\Model\Object\Guest
*/
public function setTel ($tel) {
	$this->tel = $tel;
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
* @return \Pimcore\Model\Object\Guest
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
* @return \Pimcore\Model\Object\Guest
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
* @return \Pimcore\Model\Object\Guest
*/
public function setNewsletterConfirmed ($newsletterConfirmed) {
	$this->newsletterConfirmed = $newsletterConfirmed;
	return $this;
}

/**
* Get dateregister - dateregister
* @return \Pimcore\Date
*/
public function getDateregister () {
	$preValue = $this->preGetValue("dateregister"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->dateregister;
	return $data;
}

/**
* Set dateregister - dateregister
* @param \Pimcore\Date $dateregister
* @return \Pimcore\Model\Object\Guest
*/
public function setDateregister ($dateregister) {
	$this->dateregister = $dateregister;
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
* @return \Pimcore\Model\Object\Guest
*/
public function setPassword ($password) {
	$this->password = $password;
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
* @return \Pimcore\Model\Object\Guest
*/
public function setSociete ($societe) {
	$this->societe = $this->getClass()->getFieldDefinition("societe")->preSetData($this, $societe);
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
* @return \Pimcore\Model\Object\Guest
*/
public function setAvatar ($avatar) {
	$this->avatar = $avatar;
	return $this;
}

/**
* Get firstname - firstname
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
* Set firstname - firstname
* @param string $firstname
* @return \Pimcore\Model\Object\Guest
*/
public function setFirstname ($firstname) {
	$this->firstname = $firstname;
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
* @return \Pimcore\Model\Object\Guest
*/
public function setBookingnotes ($bookingnotes) {
	$this->bookingnotes = $bookingnotes;
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

