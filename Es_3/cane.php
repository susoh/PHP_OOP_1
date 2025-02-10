<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        require "Animale.php";
        class Cane extends Animale{
            public function __construct()
            {
                parent::__construct('Woof');
            }
        }
        $cane = new Cane();
        echo $cane->getVerso();
    ?>
</body>
</html>