<?php
include 'customerdetails.php';
include 'sellerdetails.php';

trait pay_orders{

  public function paytm(){
    return 'l can Pay for products you wish!!';
  }

}
trait add{
public function add_cart(){
  return 'please add your product which want to buy!!';
}
}

class flipkart{
 use pay_orders;
public static $name ='Flipkart';

}

class amazon {
  use pay_orders,add;
  public static $name ='amazon';
  public function get_name(){
  return self::$name;
  }

}

class Minthra {
  use pay_orders;
  public function paypal(){
  return 'l can Pay for products you wish!!(paypal)';
   }

}

class cashify extends flipkart{
  public function get_parent_name(){
    return parent::$name;
  }
}

class ali_express{
  public static function get_ceo(){
    return 'Jac Ma';
  }
}

class alipay extends ali_express{
  public $eco_name;
  public function __construct(){
    $this->ceo_name = parent::get_ceo();
  }
}



$customer1 = new flipkart();
echo $customer1->paytm();
echo '<br>';
$customer2 =new amazon();
echo $customer2->paytm();
echo $customer2->add_cart();
echo '<br>';
echo flipkart::$name;
echo '<br>';
echo $customer2->get_name();
echo '<br>';
echo cashify::$name;
echo '<br>';
$customer3 =new cashify();
echo $customer3->get_parent_name();
$customer4 =new alipay;
echo '<br>';

echo $customer4->ceo_name;

$customer5 =new Minthra();
echo '<br>';
echo $customer5->paypal();

$customer1 =new customer\home('vishnu','vishnu.chengot@gmail',9072879546);
$customer1->profile();

$customer1 =new seller\home('mushraf','mushraf@gmail',8072879546);
$customer1->profile();












?>