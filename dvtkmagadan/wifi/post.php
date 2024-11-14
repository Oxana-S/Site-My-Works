<?php
if (!empty($_POST["login"])) {
    $login = trim($_POST['login']);
    //echo $_POST['login'];
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'http://91.204.234.60:8080/bgbilling/executer/json/hotspot/WifiServiceAuth');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, '{
     "method": "createContract",
     "user": {
     "user": "wifi-auth",
     "pswd": "89148544920"
      },
      "params": {
      "contractPatternId": "52",
      "phone": ' . $login . '
      }
      } ');
      curl_setopt($ch, CURLOPT_HTTPHEADER, array('application/x-www-form-urlencoded'));
      $out = curl_exec($ch);
      $contractId = json_decode($out);
      curl_close($ch);
      //var_dump($contractId);
      echo "Create contractId: " . $contractId->data->return . " redirecting....";
      header('Refresh: 4; url=http://wifi.dvtk.lan');
      exit;
}
?>
