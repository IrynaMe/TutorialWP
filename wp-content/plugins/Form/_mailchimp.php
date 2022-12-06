<?php

//in questo file integriamo  con mailchimp
//per farlo abbiamo bisogno di:
//-trasformare emai utente in un file.json
//-avere le chiavi di ingresso alla applicazione mailchimp
//               .API KEY
//             Audinece $list_id

// link a https://themewp.inform.click/it/integrazione-di-mailchimp-su-un-sito-web-utilizzando-l-api-mailchimp-e-php/
// https://www.cloudways.com/blog/mailchimp-php-api/
//https://curl.se
// chiavi di accesso//
// $email = 'EMAIL_ADDRESS';//
$list_id = '72bc0e391e'; //audience id in mailchimp!!
$api_key = 'b198a12c0b74547c2597606f7a68ba2d-us21'; //ID DEL UTENTE in mailchimp!!

//url della applicazione remota mailchimp
$data_center = substr($api_key, strpos($api_key, '-')+1);
$url = 'https://'. $data_center .'.api.mailchimp.com/3.0/lists/'. $list_id .'/members';

//trasforma email utente $email che ho catturato con $_POST in formto json
//https://www.w3schools.com/php/showphp.php?filename=demo_json_encode1
$json = json_encode([
'email_address' => $email,
//'Username' => $name,
'status' => 'subscribed', //pass 'subscribed' or 'pending'
]);

//trasmetto i dati con il metodo curl

try {
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_USERPWD, 'user:'. $api_key);
    curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
    $result = curl_exec($ch);

    //https://it.wikipedia.org/wiki/Codici_di_stato_HTTP
    $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);
    echo   $status_code;
} catch(Exception $e) {
    echo $e->getMessage();
}
