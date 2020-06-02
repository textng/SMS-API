//Using file_get_contents
  < ? php
  $arrContextOptions=array(
        "ssl"=>array(
            "verify_peer"=>false,
            "verify_peer_name"=>false,
        ),
    );
  file_get_contents("https://textng.xyz/api/sendsms/?key=YOUR-ACCOUNT-KEY&sender=YOUR-SENDER-NAME&phone=PHONE-NUMBER&message=TEXT-MESSAGE", false, stream_context_create($arrContextOptions));
  ? >
