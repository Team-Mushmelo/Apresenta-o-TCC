<?php
include_once './class/URL.php';
$caminho = Url::getBase();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php include_once 'head.php'; ?>
</head>

<body>

    <body>
        <?php include_once 'nav.php'; ?>
        <?php include_once 'contato.php' ?>
        <?php
        $p = (Url::getURL(0) != null ? Url::getURL(0) : "home");

        if (file_exists($p . ".php")) {
            include_once $p . ".php";
            //echo Url::getURL(1) . "<br>";
            //echo Url::getURL(2);
        } else {
            include_once "erro404.php";
        }
        ?>
        </div>
        </div>
        </div>
        <?php include_once 'footer.php'; ?>
        <?php include_once 'scripts.php'; ?>
    </body>

</html>