<?php 

require "conex.php";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="arquivos_css/nav_barr.css">
    <link rel="stylesheet" type="text/css" href="arquivos_css/estoque.css">
    <title>cadastro bebida</title>
</head>
<body>

<?php include 'nav_bar.php'; ?>
<br>

    <table>
        <thead>
            <tr>
                <th class="conteudo">descricao</th>
                <th class="conteudo">quantidade</th>
                <th class="conteudo">valor unit</th>
                <th class="acoes">atualizar</th>
            </tr>
        </thead>
<?php 

$sqlcode = "SELECT * FROM bebidas";
$sqlquery = $mysqli->query($sqlcode);

while($dados = $sqlquery->fetch_assoc()){
    $id_bebida = $dados['id'];
    $descricao = $dados['descricao'];
    $quantidade = $dados['quantidade'];
    $valor_unitario = $dados['valor_unitario'];

    ?>

    <tbody>
        <tr>
            <td class="conteudo"><?php echo $descricao ?></td>
            <td class="conteudo"><?php echo $quantidade ?></td>
            <td class="conteudo"><?php echo $valor_unitario ?></td>
            <td class="acoes"><a href="atualizar_bebida.php?id=<?php echo $id_bebida; ?>"> 
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="16" fill="currentColor" class="bi bi-capslock-fill" viewBox="0 0 16 16">
            <path d="M7.27 1.047a1 1 0 0 1 1.46 0l6.345 6.77c.6.638.146 1.683-.73 1.683H11.5v1a1 1 0 0 1-1 1h-5a1 1 0 0 1-1-1v-1H1.654C.78 9.5.326 8.455.924 7.816L7.27 1.047zM4.5 13.5a1 1 0 0 1 1-1h5a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1h-5a1 1 0 0 1-1-1v-1z"/>
            </svg></a></td>
        </tr>
    </tbody>

    <?php

}

?>

    </table>
</body>
</html>