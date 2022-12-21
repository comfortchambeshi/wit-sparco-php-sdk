<?php 


if (isset($_POST['donate_btn'])) {
  include_once '../classes/Sparcopay.php';


  $sparco = new Sparcopay();




  //Form data
  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $email = $_POST['email'];
  $phone_number = $_POST['phone_number'];
  $address = $_POST['address'];
  $city_town = $_POST['city_town'];
  $amount = $_POST['amount'];
  //Call payment function

  $pay = $sparco->RequestPay("Payment name", $amount, "ZMW", $first_name, $last_name, $email, $phone_number);



  if($pay[0]->isError)
  {
    print_r($pay[0]);
    exit();
  }
  else
  {

    //Redirect to payment link:
    $merchantReference = $pay[1];
    $reference = $pay[0]->reference;



    //Redirect to payment link
 
    header("Location: ".$pay[0]->paymentUrl."");

}
}


