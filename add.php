<?php
header('Content-type: text/javascript');

$json=array(
  'success' = false,
  'result'  = 0
);

if(isset($POST['first'], $POST['second'])) {
  $first = (int)$_POST['first'];
  $second = (int)$_POST['second'];

  $json['success']  = true;
  $json['result']  = $first+$second;
}

echo json_encode($json)
 ?>
