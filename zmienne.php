<html>
    <head>
        <meta charset="UTF-8"/>
    </head>
    <body>

    </body>
    <?php
        $liczba = 10;
        $_liczba = 10;
        $imię = "Janusz";

        $prawda = true;
        $całkowita = 10;
        $hex = 0xA;
        $oct = 010;
        $bin = 0b1010;

        echo $hex,',',$bin,',',$oct;

        echo '<hr/>',$bin,'<hr/>';
        echo '<hr/>','$bin','<hr/>';

    //składania heredoc
    $imie = "Jan";
    $nazwisko = "Kowalski";

    $text = <<< TEKST
    Twoje imię: $imie
    TEKST;

     $text2 = <<< tt
     <hr/>
    Twoje imię: $imie
    </br>
    Twoje nazwisko: $nazwisko
    tt;

    echo $text;
    echo $text2;

    echo <<< ETYKIETA
    <h3>
    jakiś tekst
    </h3>
    ETYKIETA;

    $miasto = 'Poznań';
    echo <<< E
    Miasto: $miasto<hr>
    E;

    //składnia nowdoc

      echo <<< 'E'
    Miasto: $miasto<hr>
    E;

    echo "Nazwa zmiennej: $miasto";
    echo '</br>';
    echo "Nazwa zmiennej: \$miasto";

    ?>
</html>
