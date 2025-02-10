<?php
     class Alunno 
    {
        protected $nome, $cognome, $eta;

        public function getNome()
        {
            return $this->nome;
        }

        public function getCognome()
        {
            return $this->cognome;
        }

        public function getEta()
        {
            return $this->eta;
        }

        public function setNome($nome) {
            $this->nome = $nome;
        }

        public function setCognome($cognome) {
            $this->cognome = $cognome;
        }

        public function setEta($eta) {
            $this->eta = $eta;
        }

        public function __construct($nome, $cognome, $eta) {
            $this->nome = $nome;
            $this->cognome = $cognome;
            $this->eta = $eta;
        }
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        
    ?>
</body>
</html>