
<?php

if( $_REQUEST['btn']=="decipher"){
    if( isset($_POST['text']) ) {
        if (is_numeric($_POST['casas'])){
            decifrar($_POST['text'], $_POST['casas']);
        }
    }
}

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
    echo $decrypted_text;
}




?>