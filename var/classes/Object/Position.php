<?php 

/** Generated at 2015-06-08T13:37:19+02:00 */

/**
* Inheritance: no
* Variants   : no
* Changed by : admin (30)
* IP:          82.226.0.233
*/


namespace Pimcore\Model\Object;



/**
* @method static \Pimcore\Model\Object\Position getByName ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Position getByDepartment ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Position getByLocation ($value, $limit = 0) 
*/

class Position extends Concrete {

public $o_classId = 10;
public $o_className = "position";
public $name;
public $department;
public $location;


/**
* @param array $values
* @return \Pimcore\Model\Object\Position
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
* @return \Pimcore\Model\Object\Position
*/
public function setName ($name) {
	$this->name = $name;
	return $this;
}

/**
* Get department - department
* @return string
*/
public function getDepartment () {
	$preValue = $this->preGetValue("department"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->department;
	return $data;
}

/**
* Set department - department
* @param string $department
* @return \Pimcore\Model\Object\Position
*/
public function setDepartment ($department) {
	$this->department = $department;
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
* @return \Pimcore\Model\Object\Position
*/
public function setLocation ($location) {
	$this->location = $this->getClass()->getFieldDefinition("location")->preSetData($this, $location);
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

