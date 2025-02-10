<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
class Veicolo {
    private $marca;
    private $anno;

    public function __construct($marca, $anno) {
        $this->marca = $marca;
        $this->anno = $anno;
    }

    public function getMarca() {
        return $this->marca;
    }

    public function getAnno() {
        return $this->anno;
    }
}

    ?>
</body>
</html>