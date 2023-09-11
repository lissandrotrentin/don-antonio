<?php 


require "conex.php";

////////////////////////////////////////////////////////////////////////////////////////////////////
// essa funcao e para o arquivo "mesas.php" e vai mostrar as mesas abertas

function pesquisar_mesas($mysqli){

    $sqlcode = "SELECT * FROM mesa";
    $sqlquery = $mysqli->query($sqlcode);

    $mesas = [];

    while($dados = $sqlquery->fetch_assoc()){
        $mesas[] = $dados;
    }

    return $mesas;
};
////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////

// essa funcao e para o aquivo "fechar_mesas.php" vai trazer as bebidas consumidas

function dados_mesa($mysqli, $id_mesa){

    $bebidas = [];

    $sqlcode = "SELECT * FROM vender_bebidas WHERE id_mesa = $id_mesa";
    $sqlquery = $mysqli->query($sqlcode);

    while($dados = $sqlquery->fetch_assoc()){
        $bebidas[] = $dados;
    }
    return $bebidas;
}

// essa funcao vai somar a quantidade de bebida e valor total da mesa

function somas_mesa($mysqli, $id_mesa){

    $somas_t = [];

    $sqlcode = "SELECT id_mesa, sum(quantidade) AS quantidade_t, sum(valor_unit) AS valor_t 
    FROM vender_bebidas WHERE id_mesa = '$id_mesa'";
    $sqlquery = $mysqli->query($sqlcode);

    while($dados = $sqlquery->fetch_assoc()){
        $somas_t[] = $dados;
    }
    return $somas_t;
}

///////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////

// funcao para a pagina atualizar_quantidade.php faz o select para escrever nos inputs

function pesquisar_bebida($mysqli, $id){

    $sqlcode = "SELECT * FROM bebidas WHERE id = $id";
    $query = $mysqli->query($sqlcode);
    
    $bebidav = [];

    while ($bebida = mysqli_fetch_assoc($query)){
        $bebidav[] = $bebida;
    }

    return $bebidav;
    
}

// atualiza a bebida

function atualizar_bebida($mysqli, $atualizar){
    
        $sqlup = "UPDATE bebidas SET 
        quantidade      = {$atualizar['quantidade']}, 
        valor_unitario  = '{$atualizar['valor_unitario']}' 
        WHERE id        = {$atualizar['id']} ";

        $mysqli->query($sqlup);

        header('Location:estoque.php');

}
/////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////

?>