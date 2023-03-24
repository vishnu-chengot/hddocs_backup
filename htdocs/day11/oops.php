<?php
class Employee {
  public string $name;
  protected  int $work_days;
  public string $position;
  public  bool $status;
  public int $per_day_wage;

  function __construct( string $name, int $work_days, int $per_day_wage, string $position,bool $status){
    $this->name =$name;
    $this->work_days =$work_days;
    $this->position =$position;
    $this->status =$status;
    $this->per_day_wage =$per_day_wage;
  }
public function set_name($name){
    $this->name =$name;
  }
 public function get_name(){
    return $this->name;
  }
  private function set_salary($salary){
    $this->salary = $salary;
  }
  public function get_salary(){
    return $this->salary_calculate();
  }
  public function set_position($position){
    $this->position = $position;
  }
  public function get_position(){
    return $this->position;
  }
   public function get_status(){
    $x = $this->status ? 'Current employee' :'Currently Not a employee';
    return $x ;
  }
   public function set_status($x){
    $this->status =$x;
  }
  
  public function salary_calculate(){
    
    $total =$this->work_days *$this->per_day_wage;
    return $total;
  }


}
//  echo "Employee name: ".$emp1->get_name().$emp1->get_status()."of our organisation with a monthly salary of".$emp1->get_salary()."with designation as ".$emp1->get_position();

// object1
$emp1 = new Employee('vishnu',24,1000,'developer',true);
echo 'intial value object 1';
echo "<h2>Employee name: ".$emp1->get_name()."  , Monthly salary: " .$emp1->get_salary()." ,Position: ".$emp1->get_position()."  ,status: ".$emp1->get_status()."</h2>";
$emp1->set_name('Revathi');
//  $emp1->set_salary(20000); 
echo ' value after set method';
echo "<h2>Employee name: ".$emp1->get_name()."  , Monthly salary: " .$emp1->get_salary()." ,Position: ".$emp1->get_position()."  ,status: ".$emp1->get_status()."</h2>";



// // object2
// $emp2 = new Employee('kanan',18000,'medical coder',false);
// echo 'intial value object 2';
// echo "<h2>Employee name: ".$emp2->get_name()."  , Monthly salary: " .$emp2->get_salary()." ,Position: ".$emp2->get_position()."  ,status: ".$emp2->get_status()."</h2>";
// $emp2->set_position('content creater');
// $emp2->set_status(true);
// echo ' value after set method';
// echo "<h2>Employee name: ".$emp2->get_name()."  , Monthly salary: " .$emp2->get_salary()." ,Position: ".$emp2->get_position()."  ,status: ".$emp2->get_status()."</h2>";


// // object3
// $emp3 = new Employee('mushraf',5000,'angular devloper',true);
// echo 'intial value object 3';
// echo "<h2>Employee name: ".$emp3->get_name()."  , Monthly salary: " .$emp3->get_salary()." ,Position: ".$emp3->get_position()."  ,status: ".$emp3->get_status()."</h2>";
// $emp3->set_name('jaleesha');
// $emp3->set_position('software trainee');
// echo ' value after set method';
// echo "<h2>Employee name: ".$emp3->get_name()."  , Monthly salary: " .$emp3->get_salary()." ,Position: ".$emp3->get_position()."  ,status: ".$emp3->get_status()."</h2>";

// // object4
// $emp4 =new Employee('aparna',8000,'php developer',false);
// echo 'intial value object 4';
// echo "<h2>Employee name: ".$emp4->get_name()."  , Monthly salary: " .$emp4->get_salary()." ,Position: ".$emp4->get_position()."  ,status: ".$emp4->get_status()."</h2>";
// $emp4->set_position('python');
// $emp4->set_status(true);
// echo ' value after set method';
// echo "<h2>Employee name: ".$emp4->get_name()."  , Monthly salary: " .$emp4->get_salary()." ,Position: ".$emp4->get_position()."  ,status: ".$emp4->get_status()."</h2>";


// // object5
// $emp5 =new Employee('ajmalth',10000,'laravel devloper',true);
// echo 'intial value object 5';
// echo "<h2>Employee name: ".$emp5->get_name()."  , Monthly salary: " .$emp5->get_salary()." ,Position: ".$emp5->get_position()."  ,status: ".$emp5->get_status()."</h2>";
// $emp5->set_position('MERN stack');
// $emp5->set_status(false);
// echo ' value after set method';
// echo "<h2>Employee name: ".$emp5->get_name()."  , Monthly salary: " .$emp5->get_salary()." ,Position: ".$emp5->get_position()."  ,status: ".$emp5->get_status()."</h2>";












?>

