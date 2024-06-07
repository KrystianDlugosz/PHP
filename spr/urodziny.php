<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="get" action="dzialania.php">
        Imie: <input type="text" name="imie"><br>
        Nazwisko: <input type="text" name="nazwisko"><br>
        Data urodzenia: <input type="date" name="data"><br>
        Komentarz: <input type="textarea" name="komentarz"><br>
        Wyslij: <button type="submit" name="wyslij">Wyślij</button><br>
    </form>

    <?php
        $imiona = array("Ania", "Asia", "Jan", "Tomek", "Adam");

        array_push($imiona, "Bartek", "Dominik");

        foreach($imiona as $imie){
            echo $imie. " ";
        }
        echo "<br>";
        rsort($imiona);
            foreach($imiona as $imie){
                echo $imie. " ";
            }

            echo "<br>";
            echo "<br>";   
            
            $sciezka = "C:\Users\uczeń";

            if(is_dir($sciezka)){
                $pliki = scandir($sciezka);
            }
            foreach ($pliki as $plik){
                    echo $plik . " ";   
                }
            echo "<br>";
            echo "<br>";   
            sort($pliki);
                foreach ($pliki as $plik){
                    echo $plik . " ";   
                }
            
            echo "<br>";   
            echo "<br>";   
            rsort($pliki);
            foreach ($pliki as $plik){
                echo $plik . " ";   
            }

    ?>

</body>
</html>