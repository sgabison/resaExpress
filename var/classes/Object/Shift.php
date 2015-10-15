<?php 

/** Generated at 2015-08-28T14:16:28+02:00 */

/**
* Inheritance: no
* Variants   : no
* Changed by : admin (30)
* IP:          90.44.60.119
*/


namespace Pimcore\Model\Object;



/**
* @method static \Pimcore\Model\Object\Shift getByTitle ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Shift getByUrl ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Shift getByStart ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Shift getByEnd ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Shift getByAllDay ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Shift getByPerson ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Shift getByLocation ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Shift getByCategory ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Shift getByCss ($value, $limit = 0) 
* @method static \Pimcore\Model\Object\Shift getByContent ($value, $limit = 0) 
*/

class Shift extends \Website\Object\Shift {

public $o_classId = 7;
public $o_className = "shift";
public $title;
public $url;
public $start;
public $end;
public $allDay;
public $person;
public $location;
public $category;
public $css;
public $content;


/**
* @param array $values
* @return \Pimcore\Model\Object\Shift
*/
public static function create($values = array()) {
	$object = new static();
	$object->setValues($values);
	return $object;
}

/**
* Get title - titre
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
* Set title - titre
* @param string $title
* @return \Pimcore\Model\Object\Shift
*/
public function setTitle ($title) {
	$this->title = $title;
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
* @return \Pimcore\Model\Object\Shift
*/
public function setUrl ($url) {
	$this->url = $url;
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
* @return \Pimcore\Model\Object\Shift
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
* @return \Pimcore\Model\Object\Shift
*/
public function setEnd ($end) {
	$this->end = $end;
	return $this;
}

/**
* Get allDay - allDay
* @return boolean
*/
public function getAllDay () {
	$preValue = $this->preGetValue("allDay"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->allDay;
	return $data;
}

/**
* Set allDay - allDay
* @param boolean $allDay
* @return \Pimcore\Model\Object\Shift
*/
public function setAllDay ($allDay) {
	$this->allDay = $allDay;
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
* @return \Pimcore\Model\Object\Shift
*/
public function setPerson ($person) {
	$this->person = $this->getClass()->getFieldDefinition("person")->preSetData($this, $person);
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
* @return \Pimcore\Model\Object\Shift
*/
public function setLocation ($location) {
	$this->location = $this->getClass()->getFieldDefinition("location")->preSetData($this, $location);
	return $this;
}

/**
* Get category - category
* @return string
*/
public function getCategory () {
	$preValue = $this->preGetValue("category"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->category;
	return $data;
}

/**
* Set category - category
* @param string $category
* @return \Pimcore\Model\Object\Shift
*/
public function setCategory ($category) {
	$this->category = $category;
	return $this;
}

/**
* Get css - css
* @return string
*/
public function getCss () {
	$preValue = $this->preGetValue("css"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->css;
	return $data;
}

/**
* Set css - css
* @param string $css
* @return \Pimcore\Model\Object\Shift
*/
public function setCss ($css) {
	$this->css = $css;
	return $this;
}

/**
* Get content - content
* @return string
*/
public function getContent () {
	$preValue = $this->preGetValue("content"); 
	if($preValue !== null && !\Pimcore::inAdmin()) { 
		return $preValue;
	}
	$data = $this->getClass()->getFieldDefinition("content")->preGetData($this);
	return $data;
}

/**
* Set content - content
* @param string $content
* @return \Pimcore\Model\Object\Shift
*/
public function setContent ($content) {
	$this->content = $content;
	return $this;
}

protected static $_relationFields = array (
  'person' => 
  array (
    'type' => 'href',
  ),
  'location' => 
  array (
    'type' => 'href',
  ),
);

public $lazyLoadedFields = NULL;

}

