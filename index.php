<?php
const URL_SITE = "http://localhost/primeirosite.com/"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Davi Giraldi Michels Desenvolvedor Full Stack - Bombinhas/sc</title>
    <link rel="stylesheet" href="<?php echo URL_SITE?>css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="<?php echo URL_SITE?>css/app.css">
</head>
<body>
    <main>
        <?php require_once "componentes/nav.php"?>
        <div class="container">
            <div class="row">
                <?php
                require_once "views/{$page}.php";
                ?>
            </div>
        </div>
        <?php require_once "componentes/footer.php"?>
    </main>







    <script src="<?php echo URL_SITE?>js/bootstrap.bundle.min.js"></script>
</body>
</html>