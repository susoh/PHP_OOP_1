<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        require "Alunno.php";
        $alunno1 = new Alunno("Gabriel", "Siano", 20);
        $alunno2 = new Alunno("Fabio", "Zavataro", 19);
        $alunno3 = new Alunno("Matteo", "Ciardi", 21);
        $alunni = array($alunno1, $alunno2, $alunno3);
        foreach ($alunni as $alunno) {
            echo "Nome: " . $alunno->getNome() . "<br>";
            echo "Cognome: " . $alunno->getCognome() . "<br>";
            echo "Età: " . $alunno->getEta() . "<br><br>";
        }
    ?>
</body>
</html>