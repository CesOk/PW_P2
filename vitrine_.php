<!DOCTYPE html>
<html>
    <head>
        <title>Projeto P1/P2 - Programação Web</title>
        <!--Bootstrap-->
        <link rel="stylesheet" href="vitrine_css.css" />
        <!--Javascript-->
        <script lang="javascript" src="vitrine_.js"></script>
        <!---->
        <!--Bootstrap-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
        <!---->
    </head>
    <body>
        <!-- LOGO, BUSCA, LOGIN -->
        <div class="container-fluid" 
            id="header1"
            align="center">
            <div class="row">
                <div class="col" id="logo">
                    <br/>
                    <img src="https://uploaddeimagens.com.br/images/004/041/416/thumb/Fatec_burguer.png?1664423097" 
                    height="180" 
                    width="200">
                </div>
                <div class="col" id="busca_bar">
                    <input type="text" placeholder="Digite aqui o produto que deseja buscar" size="50"/>
                    <button type="button" id="busca_btn">BUSCAR</button>
                </div>
                <div class="col">
                    <button type="button" id="perfil_btn">
                        <img src="https://uploaddeimagens.com.br/images/004/164/147/original/icone.png?1668556847" 
                        height="100" 
                        width="100">
                        <br/>LOGIN
                    </button>
                </div>
            </div>
        </div>
        <!---->
        <!-- MENU -->
        <div class="container-fluid" 
            id="header2"
            align="center">
            <div class="row p-13">
                <div class ="col">
                    <button type="button" id="menu_btn"><p id="letra_maior">LANCHES</p></button>
                </div>
                <div class ="col">
                    <button type="button" id="menu_btn"><p id="letra_maior">BEBIDAS</p></button>
                </div>
                <div class ="col">
                    <button type="button" id="menu_btn"><p id="letra_maior">ACOMPANHAMENTOS</p></button>
                </div>
                <div class ="col">
                    <button type="button" id="menu_btn"><p id="letra_maior">SOBREMESAS</p></button>
                </div>
            </div>
        </div>
        <!---->
        <!-- CARROSEL -->     
        <div id="vitrinecarrossel">
            <div id="demo" class="carousel slide" data-bs-ride="carousel">
                
                <!-- Indicators/dots -->
                <div class="carousel-indicators">
                <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
                </div>
            
                <!-- The slideshow/carousel -->
                <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://i.ibb.co/gFq5Xgx/Bossini-1.png" 
                    alt="BOSSINI BURGUER" 
                    class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="https://i.ibb.co/WnMFxjM/Amigo-1.png"  
                    alt="PROMO AMIGOS" 
                    class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="https://i.ibb.co/ynwP87W/Festival-1.png"
                    alt="FESTIVAL" 
                    class="d-block w-100">
                </div>
                </div>
            
                <!-- Left and right controls/icons -->
                <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
                </button>
            </div>
        </div>
        <div class="container-fluid" 
            id="header2"
            align="center">
            <div class="row">
                <div class ="col">
                    <p id="letra_maior">MAIS DESTAQUES<p>
                </div>
            </div>
        </div>
        <BR/>  
        <!---->
        <!-- CARDS -->
        <div class="container-fluid"
            align="center">
            <div class="row">
                <div class="col">
                    <div class="card bg-info" style="width:400px">
                        <img class="card-img-top" src="https://i.ibb.co/5KLvxxK/Xburguer-vitrine.png" alt="Card image">
                        <div class="card-body">
                        <?php pesquisarDescricao('5') ?>
                        <a name="b1" class="btn btn-primary" id="btn_comprar" onclick="descricao('5');">VER MAIS</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card bg-info" style="width:400px">
                        <img class="card-img-top" src="https://i.ibb.co/T1xYYRq/Outback-vitrine.png" alt="Card image">
                        <div class="card-body">
                        <?php pesquisarDescricao('4') ?>
                        <a name="b2" class="btn btn-primary" id="btn_comprar" onclick="descricao('4');">VER MAIS</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card bg-info" style="width:400px">
                        <img class="card-img-top" src="https://i.ibb.co/nrY64mJ/Batatas-vitrine.png" alt="Card image">
                        <div class="card-body">
                        <?php pesquisarDescricao('3') ?>
                        <a name="b3" class="btn btn-primary" id="btn_comprar" onclick="descricao('3');">VER MAIS</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card bg-info" style="width:400px">
                        <img class="card-img-top" src="https://i.ibb.co/Dkgm8Vt/Suco-vitrine.png" alt="Card image">
                        <div class="card-body">
                        <?php pesquisarDescricao('2') ?>
                        <a name="b4" class="btn btn-primary" id="btn_comprar" onclick="descricao('2');">VER MAIS</a>
                        </div>
                    </div>
                </div>
            </div>
            <br/>
            <div class="row">
                <div class="col">
                    <div class="card bg-info" style="width:400px">
                        <img class="card-img-top" src="https://i.ibb.co/wKtqYPt/Sorvete-vitrine.png" alt="Card image">
                        <div class="card-body">
                        <?php pesquisarDescricao('1') ?>
                        <a name="b5" class="btn btn-primary" id="btn_comprar" onclick="descricao('1');">VER MAIS</a>
                    </div>    
                </div>
            </div>
            <br/>
        </div>
        <br/><br/>    
        <!---->
        <!-- RODAPE -->
        <div class="container-fluid px-0"
            id="footer1"
            align="center">
            <div class="row">
                <div>
                    Site produzido por: Breno M, Raphael R, César K
                </div>    
            </div>
        </div>
        <!---->
    </body>
</html>
<?php
function pesquisarDescricao($codigo){
    $conexao = new mysqli("localhost", "root", "", "pwebp2");

    $sql = "select nome_produto, descricao_produto from produtos where cod_produto='$codigo'";
    $ret = mysqli_query($conexao, $sql);
    if($reg = mysqli_fetch_array($ret)){
        echo "<h4 class='card-title'>". $reg["nome_produto"] ."</h4>";
        echo "<p class='card-text'>". $reg["descricao_produto"] ."</p>";
    } else {
        echo "<h4>Registro não existe!</h4>";
    }
    mysqli_close($conexao);
}
?>