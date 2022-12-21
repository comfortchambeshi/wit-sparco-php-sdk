<?php 

include 'inc/auto-loader.php';
include 'inc/mains.php';




 ?>
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
  $main = new main();

  $ref = $_GET['ref'];

  

  $verify = $sparco->verifyTransaction($ref);
   


  if($verify->status == "TXN_AUTH_SUCCESSFUL")
  {
    $update = $main->update_custom('donations', 'status', 'success', 'merchant_ref', $ref);

    echo '<h1 class="text-success text-center">Your giving was successful. God bless you!</h1>';


  }else
  {
     $update = $main->update_custom('donations', 'status', 'failed', 'merchant_ref', $ref);
     echo '<h1 class="text-danger text-center">Sorry, your payment could not be successful.We appreciate your effort, God bless you!</h1>';

  }

?>


            </form>
        </section>
    </div>
   <?php 

include 'inc/footer.php';
?>