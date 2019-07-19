<?php

class Cat {

//!__________________________
//! Properties:
//!__________________________
    private $_name;
    private $_age;
    private $_color;
    private $_sex;

//!__________________________
//! Methods:
//!__________________________
//*__________________________
//*GET
//*__________________________
    public function getName() {
        return $this->_name;
    }

    public function getAge() {
        return $this->_age;
    }

    public function getColor() {
        return $this->_color;
    }

    public function getSex() {
        return $this->_sex;
    }

	public function getInfo() {
		return var_dump(get_object_vars($this));
    }
//*__________________________
//*SET
//*__________________________
    public function setName($name){

        $this->_name = $name;
    }

    public function setAge($age){

        $this->_age = $age;
    }

    public function setColor($color){

        $this->_color = $color;
    }

    public function setSex($sex){

        $this->_sex = $sex;
    }

//?__________________________
//? Construct
//?__________________________
    public function __construct($name, $age, $color, $sex){

        $this->setName($name);
        $this->setAge($age);
        $this->setColor($color);
        $this->setSex($sex);
    }
}
?>