
<?php

function decifrar($str, $casas) {
    $decrypted_text = "";
    $casas = $casas % 26;
    if($casas < 0) {
        $casas += 26;
    }
    $i = 0;
    while($i < strlen($str)) {
        $c = strtolower($str{$i}); 
        if(($c >= "a") && ($c <= 'z')) {
            if((ord($c) - $casas) < ord("a")) {
                $decrypted_text .= chr(ord($c) - $casas + 26);
        } else {
            $decrypted_text .= chr(ord($c) - $casas);
        }
        } else if($c == "'"){
            $decrypted_text .= "'";
        }else if($c == "."){
            $decrypted_text .= ".";
        }else if($c == ","){
            $decrypted_text .= ",";
        } else{
            $decrypted_text .= " ";
        }
      $i++;
    }
    return $decrypted_text;
}

$url = 'answer.json';
$data = file_get_contents($url);
$char = json_decode($data);

$casas = $char->numero_casas;
$enc = $char->cifrado;

$decifrado = decifrar($enc, $casas);
$char->decifrado = $decifrado;
$resumo = sha1($decifrado);
$char->resumo_criptografico = $resumo;

$njs = json_encode($char);
file_put_contents('answer.json', $njs);

echo $enc;
echo "<br />";
echo decifrar($enc, $casas);
echo "<br />";
echo sha1($decifrado);


?>