<?php
// Include the phpqrcode library
include 'phpqrcode/qrlib.php';

// The URL you want to encode
$menuURL = 'https://al-murjan-ala-menu.github.io/qr-pdf/';

// Output the QR code directly to browser
header('Content-Type: image/png');
QRcode::png($menuURL, false, 'H', 8, 2);
?>
