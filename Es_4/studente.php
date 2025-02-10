<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        require "persona.php";
class Studente extends Persona {
    private $matricola;

    public function __construct($nome, $cognome, $matricola) {
        parent::__construct($nome, $cognome);
        $this->matricola = $matricola;
    }

    public function getMatricola() {
        return $this->matricola;
    }

    public function setMatricola($matricola) {
        $this->matricola = $matricola;
    }
}
    $persona1 = new Studente("Matteo", "Ciardi", 123456);
    echo $persona1->presentati() . "<br>";
    echo "Matricola: " . $persona1->getMatricola() . "<br>";
    ?>
</body>
</html>