<?php



// $file = $_FILES['file'];


// $algo = $_POST['algo'];

file_put_contents('exemple.txt', 'Le rapide goupil brun sauta par dessus le chien paresseux.');

$file = 'exemple.txt';

$algo = 'SHA256';

$md5HashFile = md5_file($file);

$sha256HashFile = hash_file(SHA256, $file);


?>