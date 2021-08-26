<?php if (isset($_POST) && !empty($_POST)) {
               $error = 1;
               $message = '';
               $sucmsg = '';
               if ($_POST['name'] = '') {
                   $error = 0;
               }
               $mail = $_POST['email'];
               if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
               }
               if ($_POST['subject'] == ' ') {
                   $error = 0;
               }
               if ($_POST['message'] == ' ') {
                   $error = 0;
               }
               if ($error == 1) {
                   $name = $_POST['name'];
                   $headers = "From:$name <$mail>" . "\r\n";
                   $sbj = $_POST['subject'];
                   $msg = $_POST['message'];
                   if (mail("ridenterestauri@gmail.com", "$sbj", $msg, $headers)) {
                       $sucmsg = "Thank you for Contact Us !!!";
                   }
               }
              } ?>


<?php if(isset($message) && $message!=''){?>
                          <?=$message; ?>
                      <?php } ?>
                      <?php 
                       if(isset($sucmsg) && !empty($sucmsg)){
                           echo $sucmsg;
                       } ?> 