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
    //     class Uzytkownik {
    //         public $nazwa, $id;
        
    //     public function ustawNazwe($wartosc){
    //         $this->nazwa = $wartosc;
    //     }
    //     public function pobierzNazwe()
    //     {
    //       return $this->nazwa;
    //     }
    //     public function ustawId($wartosc)
    
    //     {
    //       $this->id = $wartosc;
    //     }
    //     public function pobierzId()
    
    //     {
    //       return $this->id;
    //     }
    // }
    // $user1 = new Uzytkownik();
    // $user2 = new Uzytkownik();

    // $user1-> nazwa ='j.kowalski';
    // $user2-> ustawNazwe('a.nowak');

    // echo $user1->nazwa;
    // echo "<br>";
    // echo $user2->pobierzNazwe();

    // class Punkt {
    //     public $zmienna1, $zmienna2;

    //         public function przypiszX($wartosc){
    //         $this->zmienna1 = $wartosc;
    //     }

    //     public function przypiszY($wartosc){
    //         $this->zmienna2 = $wartosc;
    //     }

    //      public function pobierzX()
    //     {
    //       return $this->zmienna1;

    //     }

    //     public function pobierzY()
    //     {
    //       return $this->zmienna2;
    //     }
    // }

    // $punkt = new Punkt();

    // $punkt-> przypiszX(53);
    // $punkt-> przypiszY(12);

    // echo $punkt->pobierzX(). ", " .$punkt->pobierzY();


    class Osoba{
         private $imie, $miasto;

        public function przypiszImie($wartosc){
            $this->imie = $wartosc;
        }

        public function przypiszMiasto($wartosc){
            $this->miasto = $wartosc;
        }

        public function getImie()
        {
          return $this->imie;
        }

        public function getMiasto()
        {
          return $this->miasto;
        }
    }

    $czlowiek = new Osoba();

    $czlowiek-> przypiszImie("Tomasz");
    $czlowiek-> przypiszMiasto("Nowy Sącz");

    echo $czlowiek->getImie(). " pochodzi z: " .$czlowiek->getMiasto();
    ?>
</body>     
</html>