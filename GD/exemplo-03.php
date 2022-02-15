<?php

$image = imagecreatefromjpeg("certificado.jpg");

$titlecolor = imagecolorallocate($image, 0, 0, 0);
$gray = imagecolorallocate($image, 100, 100, 100);

imagettftext($image, 32, 0, 450, 150, $titlecolor,"fonts" .DIRECTORY_SEPARATOR ."Bevan" .DIRECTORY_SEPARATOR ."Bevan-Regular.ttf", "CERTIFICADO");
imagettftext($image, 32, 0, 450, 350, $titlecolor, "fonts" .DIRECTORY_SEPARATOR ."Playball" .DIRECTORY_SEPARATOR ."Playball-Regular.ttf", "Divanei Aparecido");
imagestring($image, 3, 450, 400, utf8_decode("Concluído em: ") .date("d/m/Y"), $gray);

header("Content-Type: image/jpeg");

imagejpeg($image, "certificado-" .date("Y-m-d H-i-s") .".jpg", );

imagedestroy($image);




?>