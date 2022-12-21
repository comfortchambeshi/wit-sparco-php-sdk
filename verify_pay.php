<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:300,400,500">
     <title>Sparco payment form</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway+Dots">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Footer-Clean.css">
    <link rel="stylesheet" href="assets/css/Highlight-Blue.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Navigation-Clean.css">
    <link rel="stylesheet" href="assets/css/News-article-for-homepage-by-Ikbendiederiknl.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
 <title>Donation confirmation</title>
    <section class="highlight-blue" style="background: rgb(58,70,86);">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">Payment confirmation</h2>
            </div>
        </div>
    </section>
    <div class="news-block" style="padding-top: 0px;">
        <section class="login-clean">
             <form action="inc/donate.inc.php" method="post" style="max-width: 100%;">
            <?php
  include_once 'classes/Sparcopay.php';


  $sparco = new Sparcopay();

  $ref = $_GET['ref'];

  

  $verify = $sparco->verifyTransaction($ref);
   


  if($verify->status == "TXN_AUTH_SUCCESSFUL")
  {

    echo '<h1 class="text-success text-center">Your payment was successful!</h1>';


  }else
  {
     echo '<h1 class="text-danger text-center">Sorry, your payment could not be successful!</h1>';

  }

?>


            </form>
        </section>
    </div>
