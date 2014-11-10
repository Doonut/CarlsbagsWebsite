<?php
  $to = 'sales@carlsbags.com';
  $subject = 'Carlsbags Order';
  $content = $_POST;
  $body = '';
  for($i=1; $i < $content['itemCount'] + 1; $i++) {
  $name = 'item_name_'.$i;
  $quantity =  'item_quantity_'.$i;
  $price = 'item_price_'.$i;
  $body .= 'item #'.$i.': ';
  $body .= $content[$name].' Quantity: '.$content[$quantity].' Price: '.$content[$price];
  $body .= '                                                    \n <br />';
  }
  $headers = 'From: cbagswebserver@gmail.com' . "\r\n" .
             'Reply-To: cbagswebserver@gmail.com' . "\r\n" .
             'X-Mailer: PHP/' . phpversion();
  mail($to, $subject, $body, $headers);
  Header('Location: thankyou.html');
?>
