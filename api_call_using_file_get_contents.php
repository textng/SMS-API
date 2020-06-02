//Using file_get_contents
  < ? php
     
  //get the parameters here
  $key="XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX"; //YOUR-ACCOUNT-KEY
  $sender="Textng"; //YOUR-SENDER-NAME
  $phone="080XXXXXXXXXX; //PHONE-NUMBER
  $message=urlencode("Text Message"); //TEXT-MESSAGE
  $route="6"; //MESSAGE-ROUTE
   
  //set your array context options.
  $arrContextOptions=array(
        "ssl"=>array(
            "verify_peer"=>false,
            "verify_peer_name"=>false,
        ),
    );
  $response=file_get_contents("https://textng.xyz/api/sendsms/?key=$key&sender=$sender&phone=$phone&message=$message&route=$route", false, stream_context_create($arrContextOptions));
  ? >
