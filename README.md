# TEXTNG SMS API - GET REQUEST

https://dev.textng.xyz/

The API is used when you want to programatically send SMS to your people/customers. This can be integrated in your application to get the job done. Basically you are required to call (GET) the give URL.

Basic Usage:
https://textng.xyz/api/sendsms/?key=YOUR-ACCOUNT-KEY&sender=YOUR-SENDER-NAME&phone=PHONE-NUMBER&message=TEXT-MESSAGE

Bulk SMS Usage:
https://textng.xyz/api/sendsms/?key=YOUR-ACCOUNT-KEY&sender=YOUR-SENDER-NAME&phone=PHONE-NUMBER-1,PHONE-NUMBER-2,PHONE-NUMBER-3&message=TEXT-MESSAGE

Rate: 
There is no limit to how many times you can call the API. Just avoid sending the exact same message to the same number under the time frame of 10mins


# Sample (Php)

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
  
  
  //ALTERNATIVELY using cURL
  < ? php
    // Get cURL resource
    $curl = curl_init();
    // Set some options - we are passing in a useragent too here
    curl_setopt_array($curl, [
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_URL => 'https://textng.xyz/api/sendsms/?key=YOUR-ACCOUNT-KEY&sender=YOUR-SENDER-NAME&phone=PHONE-NUMBER&message=TEXT-MESSAGE',
        CURLOPT_USERAGENT => 'TEXTNG'
    ]);
    // Send the request & save response to $resp
    $resp = curl_exec($curl);
    // Close request to clear up some resources
    curl_close($curl);
  ? >


Respnse Type: Plain Text


Expected Responses:

Response on successful for single sms
x units used|| Status:Successful|| Route:6/5/2|| Type:single number|| Reference:##########

Response on successful for multiple sms
x units used|| Status:Successful|| Route:6/5/2|| Type:Multiple numbers(X)|| Reference:##########

Response on error for Invalid Key
ERROR invalid KEY

Response on error for insufficient SMS units
ERROR insufficient units

Response on other errors
ERROR (the error description would be displayed here)
