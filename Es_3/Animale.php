<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        class Animale{
            private $verso;
            public function __construct($verso) {
                $this->verso = $verso;
            }

            public function getVerso() {
                return $this->verso;
            }
        }
    ?>
</body>
</html>