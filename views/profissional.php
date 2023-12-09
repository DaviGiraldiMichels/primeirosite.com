<div class="row pt-5">
    <div class="col-sm-12 col-md-4">
        <img src="<?php echo URL_SITE?>img/profissional.jpeg" alt="" srcset="" class="img-fluid">

    </div>
    <div class="col-sm-12 col-md-8">
        <h2>Davi Giraldi Michels</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque amet architecto voluptate pariatur veritatis ea, eos natus beatae harum facere, ullam dicta. Cumque non ad excepturi aliquid vero accusantium similique.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique in veniam omnis reiciendis aliquam facilis numquam soluta, eum ducimus modi voluptatum aspernatur tempora voluptas deleniti amet, consectetur sapiente sunt atque.</p>
    </div>
</div>

<?php
$atuacao = [
    [
        "title" => "PHP",
        "icon" => "bi-filetype-php",
        "text" => "Experiência de 1 ano trabalhando com PHP orientando objetos"
    ],
    [
        "title" => "MYSQL",
        "icon" => "bi-database",
        "text" => "Ampla experiência com várias base de dados com MYSQL, POSTGREE e ORACLE"
    ],
    [
        "title" => "JQUERY",
        "icon" => "bi-filetype-js",
        "text" => "Biblioteca javascript para frontend"
    ],
    [
        "title" => "JAVA",
        "icon" => "bi-filetype-java",
        "text" => "Eu aprendi mas não uso essa merda"
    ],
];
?>
<div class="row pt-5">
    <?php
    foreach($atuacao as $area){
        echo <<<HTML
            <div class="col-sm-12 col-md-3">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <i class="bi {$area['icon']} fs-1"></i>
                        <h3>{$area['title']}</h3>
                        <p>{$area['text']}</p>
                    </div>
                </div>
            </div>
        HTML;
    }
    ?>
</div>
<!-- <div class="row pt-5">
    <div class="col-sm-12 col-md-3">
        <div class="card">
            <div class="card-body text-center">
                <i class="bi bi-filetype-php fs-1"></i>
                <h3>PHP</h3>
                <p>experiência de 1 ano trabalhando com PHP orientando objetos</p>
            </div>
        </div>
    </div>
</div> -->