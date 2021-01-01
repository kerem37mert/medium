<?php

try {

    $db = new PDO("mysql:host=localhost;dbname=anlikveri;charset=utf8", "root", "");
    //echo "Bağlantı başarılı";

} catch(PDOException $e) {

    $e->getMessage();

}

if (isset($_POST['metin'])) {
	
	$metin = $_POST['metin'];

	$verikaydet = $db->prepare("UPDATE metintablosu set metin=:metin where id=1");

	$vk = $verikaydet->execute(["metin" => $metin]);

}

?>
