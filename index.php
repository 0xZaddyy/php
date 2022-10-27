<?php
// Read the variables sent via POST from our API
$sessionId   = $_POST["sessionId"];
$serviceCode = $_POST["serviceCode"];
$phoneNumber = $_POST["phoneNumber"];
$text        = $_POST["text"];

if ($text == "") {
    // This is the first request. Note how we start the response with CON
    $response  = "CON welcome to icare\n";
    $response .= "1. enter 1 to continue \n";
    // $response .= "2. EMERGENCY RESPONSE";

} else if ($text == "1") {
    // Business logic for first level response
    $response = "CON this is K-Doc your health guide, choose preffeerred language \n";
    $response .= "1. English \n";
    $response .= "2. Hausa \n";
    $response .= "3. Pidgin \n";
} else if ($text == "1") {
    // Business logic for first level response
    $response = "CON How do identify \n";
    $response .= "1. Male\n";
    $response .= "2. Female \n";
    $response .= "0 to cancel \n";
} else if ($text == "1") {
    // Business logic for first level response
    $response = "CON What service do you want \n";
    $response .= "1. Talk to Consultant\n";
    $response .= "2. book consultant\n";
    $response .= "0 to cancel \n";

    // $response .= "3. Pidgin \n";


} else if ($text == "1") {
    // Business logic for first level response
    // This is a terminal request. Note how we start the response with END
    $response = "call placement in progress...".$phoneNumber;

} else if($text == "1*1") { 
    // This is a second level response where the user selected 1 in the first instance
    $accountNumber  = "call placement in progress....";

    // This is a terminal request. Note how we start the response with END
    // $response = "END Your account number is ".$accountNumber;

}

// Echo the response back to the API
header('Content-type: text/plain');
echo $response;