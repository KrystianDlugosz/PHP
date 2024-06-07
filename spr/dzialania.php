<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $imie = $_GET['imie'];
    $nazwisko = $_GET['nazwisko'];
    $data_urodzin = $_GET['data'];

    function ileDni($data_urodzin){
    $data_aktualna = date('Y-m-d');
    $data_urodzin = date('Y-m-d', strtotime($data_urodzin));

    $dzien_tygodnia = date("l", strtotime($data_urodzin));
    $roznica = (strtotime($data_aktualna) - strtotime($data_urodzin)) /(60*60*24); 
    echo "Od:". $data_urodzin . " minęło: ". $roznica ." dni <br>";
    echo "Był to: " .$dzien_tygodnia;
    }
    if(empty($imie) && empty($nazwisko) && empty($data_urodzin)){
        Echo "Uzupełnij formularz.";
    }else{
        if(empty($imie)){
            Echo "Uzupełnij imie. <br>.";
        }else{
            if(empty($nazwisko))
            Echo "Uzupełnij nazwisko. <br>.";
            else{
                if(empty($data_urodzin)){
                    Echo "Wpisz date urodzenia.";
                }else{
                    ileDni($data_urodzin);
                }
            }
        }
    }

    ?>
</body>
</html>