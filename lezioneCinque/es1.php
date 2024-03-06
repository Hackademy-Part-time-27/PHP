<?php

// DEVE CONTENERE ALMENO 8 CARATTERI;
// DEVE CONTENERE UNA LETTERA MAIUSCOLA;
// DEVE CONTENERE UN CARATTERE NUMERICO;
// DEVE CONTENERE ALMENO UN CARATTERE SPECIALE

$pass = readline('Per favore inserisci la tua password: '); //! 1
$response = checkMyPass($pass); //! 2
echo $response;

function checkMyPass($password)
{
    $checkLunghezza = false;
    $checkCapitalLetter = false;

    //! controllo lunghezza
    function checkLenght($password)
    {
        //! la prima valutazione -> lunghezza
        if (strlen($password) >= 8) {
            return true;
        }
        return false;
    }

    //! controllo lettera maiuscola
    function checkUpperCaseLetter($password)
    {
        for ($i = 0; $i < strlen($password); $i++) {
            if (ctype_upper($password[$i])) {
                return true;
            }
        }
    }

    $checkLunghezza = checkLenght($password);
    $checkCapitalLetter = checkUpperCaseLetter($password);

    if ($checkLunghezza) {
        echo "Lunghezza OK! \n";
    } else {
        echo "Password non valida, non rispetta la lunghezza desiderata \n";
    }

    if ($checkCapitalLetter) {
        echo "Maiuscola trovata nalla pass \n";
    } else {
        echo "La pass deve contenere almeno una lettera maiuscola! \n";
    }

    //! valutiamo entrambe le condizioni
    if ($checkLunghezza && $checkCapitalLetter) {
        return "Login effettuato! \n";
    } else {
        return "Password non valida! \n";
    }
}
