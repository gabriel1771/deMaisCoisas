<?php

$image = imagecreatefromjpeg("certificado.jpg");

$titlecolor = imagecolorallocate($image, 0, 0, 0);
$gray = imagecolorallocate($image, 100, 100, 100);

imagestring($image, 5, 450, 150, "CERTIFICADO", $titlecolor);
imagestring($image, 5, 450, 350, "Divanei Aparecido", $titlecolor);
imagestring($image, 3, 450, 400, utf8_decode("Concluído em: ") .date("d/m/Y"), $gray);

header("Content-Type: image/jpeg");

imagejpeg($image, "certificado-" .date("Y-m-d H-i-s") .".jpg", 10);

imagedestroy($image);




?>