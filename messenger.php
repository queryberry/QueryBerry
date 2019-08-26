<?php

  $name = $_POST["name"];

  $email = $_POST["email"];

  $text = $_POST["text"];

define('TELEGRAM_TOKEN', '988044873:AAEE-g0u76QE2z1CcXwIsyN35iYwZ1M_eco');

define('TELEGRAM_CHATID', '207289792');

message_to_telegram($name);

message_to_telegram($email);

message_to_telegram($text);

function message_to_telegram($text)
{
    $ch = curl_init();
    curl_setopt_array(
        $ch,
        array(
            CURLOPT_URL => 'https://api.telegram.org/bot' . TELEGRAM_TOKEN . '/sendMessage',
            CURLOPT_POST => TRUE,
            CURLOPT_RETURNTRANSFER => TRUE,
            CURLOPT_TIMEOUT => 10,
            CURLOPT_POSTFIELDS => array(
                'chat_id' => TELEGRAM_CHATID,
                'text' => $text,
            ),
        )
    );
    curl_exec($ch);
 }

 header("Location: https://queryberry.github.io/QueryBerry/");
