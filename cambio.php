<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $euro = $_GET['EUR'];
        $conversione = 0;
        $valuta = $_GET['valuta'];
        $cambio = 0;

        if(date('l') == "Saturday" || date('l') == "Sunday") {
            $cambio = 0.05;
        } else {
            $cambio = 0.025;
        } 
        
        switch($valuta) {
            case "USD":
                $conversione = $euro * 1.08;
                break;
            case "JPY":
                $conversione = $euro * 165.93 ;
                break;
            case "CHF":
                $conversione = $euro * 0.94;
                break;
            case "GBP":
                $conversione = $euro * 0.83;
                break;
        }

        date_default_timezone_set('Europe/Rome');
        echo "Conversione effettuata: " . date("d/m/Y ") . calcolaGiono(date("l")) . "<br>";
        echo "Valore in euro: " . $euro . "<br>";
        echo "Valore conversione in " . $valuta . ": " . $conversione . " SENZA COMMISSIONI <br>";
        if ($cambio == 0.025) {
            echo "Commissioni pari a: 2,5% , NON MAGGIORATA<br>";
        } else {
            echo "Commissioni pari a: 5% , MAGGIORATA <br>";
        }
        echo "Valore conversione in " . $valuta . ": " . $conversione - ($conversione * $cambio) . " CON COMMISSIONI <br>";
    ?>

    <?php
        function calcolaGiono($day) {
            switch($day) {
                case "Sunday":
                    return "Domenica";
                case "Monday":
                    return "Lunedì";
                case "Tuesday":
                    return "Martedì";
                case "Wednesday":
                    return "Mercoledì";
                case "Thursday":
                    return "Giovedì";
                case "Friday":
                    return "Venerdì";
                case "Saturday":
                    return "Sabato";
            }
        }
    ?>
<body>
</body>
</html>