<?php

require('barcode/vendor/autoload.php');
$code = $_GET['code'];
$height = $_GET['height'];
$width = $_GET['width'];

$generator = new Picqer\Barcode\BarcodeGeneratorPNG();
file_put_contents('barcode.png', $generator->getBarcode($code, $generator::TYPE_CODE_128_B, $width, $height));
header("Content-Type: image/png");
echo file_get_contents("barcode.png");
