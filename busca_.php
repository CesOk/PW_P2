<!DOCTYPE html>
<html>
    <head>
        <title>Projeto P1/P2 - Programação Web</title>
        <!--Bootstrap-->
        <link rel="stylesheet" href="vitrine_css.css" />
        <!---->
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
                    <form name="frm1" method="post">
                        <input type="text" id="busca" name="busca" placeholder="Digite aqui o produto que deseja buscar" size="50"/>
                        <button name="btn_busca" type="submit" id="busca_btn">BUSCAR</button>
                    </form>
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
        <!-- RESULTADO DA BUSCA -->
        <br>
        <div class="container-fluid" 
            id="result_busca"
            align="center">
            <table class="table">
                <tbody">
                    <?php
                        listar()
                    ?>
                </tbody>
            </table>
        <br>
        </div>
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
function listar(){
    if(isset($_POST["btn_busca"])){
        $busca = $_POST["busca"];
        $conexao = new mysqli("localhost", "root", "", "pwebp2");
        $sql = "select * from produtos where nome_produto like '%$busca%' or palavra_chave like '%$busca%'";
        $resultado = mysqli_query($conexao, $sql);
        while($reg = mysqli_fetch_array($resultado)){
            $cod_produto = $reg["cod_produto"];
            $palavra_chave = $reg["palavra_chave"];
            $nome_produto = $reg["nome_produto"];
            $descricao_produto = $reg["descricao_produto"];
            $preco_produto = $reg["preco_produto"];
            $link_imagem = $reg["link_imagem"];
            // <td><img width='10%' src=". $link_imagem. "></td>
            echo "<tr align=center>
                        <td>$nome_produto</td>
                        <td>$preco_produto</td>
                        <td><button id='busca_btn' onclick='descricao($cod_produto)'>VER DETALHES</button></td>
                </tr>";              
        }
    }
}
?>