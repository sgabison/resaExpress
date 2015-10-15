<?php 

/** Generated at 2015-09-23T22:02:05+02:00 */

/**
* Inheritance: no
* Variants   : no
* Changed by : didier (35)
* IP:          88.120.82.200
*/


namespace Pimcore\Model\Object;



/**
* @method static \Pimcore\Model\Object\Tags getByCode ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Tags getByLocalizedfields ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Tags getBySociete ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Tags getByIcon ($value, $limit = 0) 
*/

class Tags extends \Website\Object\Tags {

public $o_classId = 15;
public $o_className = "tags";
public $code;
public $localizedfields;
public $societe;
public $icon;


/**
* @param array $values
* @return \Pimcore\Model\Object\Tags
*/
public static function create($values = array()) {
	$object = new static();
	$object->setValues($values);
	return $object;
}

/**
* Get code - code
* @return string
*/
public function getCode () {
	$preValue = $this->preGetValue("code"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->code;
	return $data;
}

/**
* Set code - code
* @param string $code
* @return \Pimcore\Model\Object\Tags
*/
public function setCode ($code) {
	$this->code = $code;
	return $this;
}

/**
* Get localizedfields - tag
* @return array
*/
public function getLocalizedfields () {
	$preValue = $this->preGetValue("localizedfields"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->getClass()->getFieldDefinition("localizedfields")->preGetData($this);
	return $data;
}

/**
* Get tag - tag
* @return string
*/
public function getTag ($language = null) {
	$data = $this->getLocalizedfields()->getLocalizedValue("tag", $language);
	$preValue = $this->preGetValue("tag"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { return $preValue;}
	 return $data;
}

/**
* Set localizedfields - tag
* @param array $localizedfields
* @return \Pimcore\Model\Object\Tags
*/
public function setLocalizedfields ($localizedfields) {
	$this->localizedfields = $localizedfields;
	return $this;
}

/**
* Set tag - tag
* @param string $tag
* @return \Pimcore\Model\Object\Tags
*/
public function setTag ($tag, $language = null) {
	$this->getLocalizedfields()->setLocalizedValue("tag", $tag, $language);
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
* @return \Pimcore\Model\Object\Tags
*/
public function setSociete ($societe) {
	$this->societe = $this->getClass()->getFieldDefinition("societe")->preSetData($this, $societe);
	return $this;
}

/**
* Get icon - icon
* @return string
*/
public function getIcon () {
	$preValue = $this->preGetValue("icon"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->icon;
	return $data;
}

/**
* Set icon - icon
* @param string $icon
* @return \Pimcore\Model\Object\Tags
*/
public function setIcon ($icon) {
	$this->icon = $icon;
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

