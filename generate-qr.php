<?php

include 'phpqrcode/qrlib.php';

// The URL your QR will point to
$menuURL = 'https://al-murjan-ala-menu.github.io/qr-pdf/';

// Optional: file name to save the QR temporarily
$filename = 'qr-menu.png';

// Generate the QR code and save it as a PNG file
QRcode::png($menuURL, $filename, 'H', 8, 2);

// Now serve it to the browser with download headers
header('Content-Description: File Transfer');
header('Content-Type: image/png');
header('Content-Disposition: attachment; filename="'.basename($filename).'"');
header('Content-Transfer-Encoding: binary');
header('Expires: 0');
header('Cache-Control: must-revalidate');
header('Pragma: public');
header('Content-Length: ' . filesize($filename));

// Read the file and output it
readfile($filename);

// Optional: delete the file after download (if you don't want to keep it on server)
// unlink($filename);
exit;
?>
