<!-- banner da pagina inicial -->
<?php 
$sql = "SELECT * FROM banners";
$qry = mysqli_query($con, $sql) or die("ERRO AO CONSULTAR");


$dados = [];
$i = 0;
while($data = mysqli_fetch_assoc($qry)){
    $dados[$i] = $data;
    $i++;
}


/* $dados = [
    [
        "title" => "Curso de programação PHP",
        "description" => "O melhor curso do Brasil",
        "img" => "b1.webp",
        "mobile" => "m1.png" 
    ],
    [
        "title" => "Curso lógica de programação",
        "description" => "Vamos descobrir os conceitos básicos que norteiam as linguagens de programação",
        "img" => "b2.webp",
        "mobile" => "m2.jpg",
    ],
    [
        "title" => "Curso lógica de programação",
        "description" => "Vamos descobrir os conceitos básicos que norteiam as linguagens de programação",
        "img" => "b3.webp",
        "mobile" => "m3.jpeg",
    ]
] */
?>

<div id="carouselExampleCaptions" class="carousel slide">
    <div class="carousel-inner">
        <?php foreach($dados as $ch => $b){
            $active = ($ch == 0) ? "active" : "";
            $img = ($isMobile) ? $b["mobile"] : $b["img"];
            ?>
        <div class="carousel-item <?php echo $active?>">
            <img src="<?php echo URL_SITE."img/".$img?>" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5><?php echo $b["title"]?></h5>
                <p><?php echo $b["description"]?></p>
                <a href="#" class="btn btn-success">ASSINE JÁ</a>
            </div>
        </div>
        <?php }?>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<!-- stacks -->
<?php
$stacks = [
    [
        "title" => "PHP",
        "description" => "18 anos de experiência",
        "img" => "img/php.png",
        "btnAction" => "https://google.com",
        "btnLabel" => "visitar site"
    ],
    [
        "title" => "MYSQL",
        "description" => "22 anos de experiência",
        "img" => "img/mysql.png",
        "btnAction" => "https://google.com",
        "btnLabel" => "visitar site"
    ],
    [
        "title" => "JAVASCRIPT",
        "description" => "6 anos de experiência",
        "img" => "img/javascript.png",
        "btnAction" => "https://google.com",
        "btnLabel" => "visitar site"
    ],
    [
        "title" => "NODE JS",
        "description" => "12 anos de experiência",
        "img" => "img/nodejs.png",
        "btnAction" => "https://google.com",
        "btnLabel" => "visitar site"
    ]
]

?>

<div class="container pt-4">
    <div class="row">
        <?php foreach($stacks as $stack){?>
            <div class="col col-sm-12 col-md-4">
                <div class="card">
                    <img src="<?php echo $stack['img']?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text"><?php echo $stack['description']?></p>
                        <a href="<?php echo $stack['btnAction']?>" class="btn btn-primary"><?php echo $stack['btnLabel']?></a>
                    </div>
                </div>
            </div>
        <?php }?>
    </div>
</div>