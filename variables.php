<?php
class orang {
  public $name;
  public $age;
  public $sex;
  public $gpa;
  public $isStudent;


  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }

  function set_age($age) {
    $this->age = $age; 
  }
  
  function get_age() {
    $current_date = new DateTime(); 
    $birth_date = new DateTime($this->age); 
    $age = $current_date->diff($birth_date); 
    return $age->y; 
  }

  function set_sex($sex) {
    $this->sex = $sex;
  }
  function get_sex() {
    return $this->sex;
  }

  function set_gpa($gpa) {
    $this->gpa = $gpa;
  }
  function get_gpa() {
    return $this->gpa;
  }

  function set_isStudent($isStudent) {
    $this->isStudent = $isStudent; 
  }
  
  function get_isStudent() {
    return $this->isStudent ? "Yes" : "No"; 
  }
}
$ryan = new orang();
$ryan->set_name('Ryan');
$ryan->set_age('2005-03-29');
$ryan->set_sex('Male');
$ryan->set_gpa('3.9');
$ryan->set_isStudent('True');
echo "Name: " . $ryan->get_name();
echo "<br>";
echo "Age: " . $ryan->get_age();
echo "<br>";
echo "Sex: " . $ryan->get_sex();
echo "<br>";
echo "gpa: " . $ryan->get_gpa();
echo "<br>";
echo "Student: " . $ryan->get_isStudent();
?>