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

    echo $text;

    ?>
</html>
