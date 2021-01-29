<?php
  require_once("Free20requests.php");

  $phone    = "@PHONENUMBER"; //เบอร์วอลเลต
  $password = "@PASSWORD"; //รหัสผ่านวอลเลต
  $access_token = "@TOKEN" //ได้รับหลังจากยืนยัน OTP

  $tw = new TrueWallet($phone, $password);
  
  /*
  
  #STEP1
  print_r($tw->RequestLoginOTP());
  
  #STEP2
  print_r($tw->SubmitLoginOTP('986378', $phone, 'WXXJ'));  
  
  */
  
  $tw->setAccessToken($access_token);
  $data = $tw->GetTransaction();
  print_r($data);
  
?>
