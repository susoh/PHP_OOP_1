<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
class Persona {
    private $nome;
    private $cognome;

    public function __construct($nome, $cognome) {
        $this->nome = $nome;
        $this->cognome = $cognome;
    }

    public function presentati() {
        return "Ciao, mi chiamo " . $this->nome . " " . $this->cognome . ".";
    }
}

    ?>
</body>
</html>