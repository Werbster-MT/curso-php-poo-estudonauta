<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
        <?php 
            require_once "Mamifero.php";
            require_once "Reptil.php";
            require_once "Peixe.php";
            require_once "Ave.php";
            require_once "Canguru.php";
            require_once "Cachorro.php";
            require_once "Cobra.php";
            require_once "Tartaruga.php";
            require_once "GoldFish.php";
            require_once "Arara.php";

            $a = new Ave();
            $m = new Mamifero();
            $r = new Reptil();
            
            $c = new Canguru();
            $k = new Cachorro();
            $t = new Tartaruga();
        
            $m->locomover();
            $c->locomover();
            $k->locomover();
            $t->locomover();

            $m->emitirSom();
            $k->emitirSom();
        ?>
    </pre>
</body>
</html>