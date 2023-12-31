<?php

$temperatura = $_POST['temperatura'];
$umidita = $_POST['umidita'];
$luce = $_POST['luce'];

$url = 'http://server remoto.com/raccolta_dati.php';
$data = array('temperatura' => $temperatura, 'umidita' => $umidita, 'luce' => $luce);

$result = file_get_contents($url, false, stream_context_create(['http' => ['header'  => "Content-type: application/x-www-form-urlencoded\r\n", 'method'  => 'POST', 'content' => http_build_query($data)]]));

if ($result === FALSE) {
    echo 'Errore nell\'invio dei dati';
} else {
    echo 'Dati inviati con successo';
}

?>