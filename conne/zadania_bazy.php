<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
                table, td{
            border: 1px solid black;
            border-collapse: collapse;
            padding: 5px    ;
        }
        </style>
</head>
<body>
    <?php
    
    require_once "db_connect.php";

    $pol = mysqli_connect($host, $user, $pass,$db);

    if(mysqli_connect_errno()){
        exit("Błąd połączenia");
    }
    else{
        echo "Polączyłes sie z baza danych <br>";
    }
    
    //z1
    // $imiona = mysqli_query($pol,'SELECT imie, nazwisko FROM uczen WHERE id_klasa=10 ORDER BY nazwisko ASC');

    // echo "<ol>";
    // while ($result = mysqli_fetch_array($imiona))
    // {
    //     echo "<li>" . $result['nazwisko']." " . $result['imie']. "</li>";
    // }
    // echo "</ol> <br>";


    //z2
    // $pyt = mysqli_query($pol,'SELECT nazwisko, imie, data_urodzenia FROM nauczyciel ORDER BY data_urodzenia DESC');

    // echo "<table>";
    // echo "<tr><th>Nazwisko</th><th>Imie</th><th>Data</th></tr>";
    // while ($result = mysqli_fetch_array($pyt))
    // {
    //     echo "<tr>" ."<td>". $result['nazwisko']."</td>". "<td>".$result['imie']. "</td>"."<td>". $result['data_urodzenia']."</td>"."</tr>";
    // }
    // echo "</table> <br>";

    //z3
    $sprawdzanie = "SELECT * FROM nauczyciel WHERE YEAR(data_urodzenia) < 1950";
    $result = mysqli_query($pol, $sprawdzanie);

    if ($result) {
        $usuniete = mysqli_num_rows($result);

        if ($usuniete > 0) {
            echo "Znaleziono " . $usuniete . " nauczycieli do usunięcia.<br>";
        } else {
            echo "Nie znaleziono nauczycieli do usunięcia.";
        }

    } else {
        echo "Błąd podczas pobierania nauczycieli.";
    }

    $usuwanie = "DELETE FROM nauczyciel WHERE data_urodzenia < 1950";
    $czy_usuniete = mysqli_query($pol, $usuwanie);
    if($czy_usuniete){
        echo "Nauczyciele poniżej 1950 zostali usunieci.";
    }else{
        echo "Nauczyciele poniżej 1950 NIE zostali usunieci.";
    }

    mysqli_close($pol);
?>
</body>
</html>