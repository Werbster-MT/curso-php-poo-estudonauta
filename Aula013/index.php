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
            require_once "Lobo.php";
            require_once "Cachorro.php";

            $c = new Cachorro();
            $c->reagirFrase("Ola");
            $c->reagirFrase("Vai apanhar");
            
            $c->reagirHora(11, 45);
            $c->reagirHora(21, 00);
            
            $c->reagirIdadePeso(2, 12.5);
            $c->reagirIdadePeso(17, 4.5);

            $c->reagirDono(true);
            $c->reagirDono(false);

        ?>
    </pre>
</body>
</html>