<?php
class Biodata{
	private $data = [];

	public function setName ($name){
		$this->data['name'] = $name;
	}

	public function setAddress ($address){
		$this->data['address'] = $address;
	}

	public function setHobbies ($hobbies = array()){
		$this->data['hobbies'] = $hobbies;
	}

	public function setIs_married ($is_married){
		$this->data['is_married'] = $is_married;
	}

	public function setSchool ($school = array()){
		$this->data['school'] = $school;
	}

	public function setSkill ($skill = array()){
		$this->data['skill'] = $skill;
	}

	public function getJSON(){
		return json_encode($this->data, JSON_PRETTY_PRINT);
	}

}

//input data example
$biodata 	= new Biodata();
$name	= "Irfan Rona";
$address	= "Jalan Sarimanah 2 blok X No.37 Sarijadi, Bandung";
$hobbies		= ['Airsoft','Gowes','Baca Novel'];
$school	= [	"highSchool" 	=> "SMAN 2 Majalengka",
			   	"university" 	=> "Universitas Pendidikan Indonesia"];
$skill	= [	"Softskill"		=> ['Organized','Communicated','Flexible'],
				"Techskill"		=> ['CodeIgniter','Node.js','Laravel']];
$is_married = false;

//set data
$biodata->SetName($name);
$biodata->SetAddress($address);
$biodata->SetHobbies($hobbies);
$biodata->SetIs_married($is_married);
$biodata->SetSchool($school);
$biodata->SetSkill($skill);

echo $biodata->getJSON();

?>