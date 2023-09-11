<?php   

$id_mesa = $_GET['id_mesa'];

require "functions.php";

$dados_mesa = dados_mesa($mysqli, $id_mesa);
$somas_mesa = somas_mesa($mysqli, $id_mesa);

//print_r($dados_mesa);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./arquivos_css/dados_mesa.css">
    <title>fechar mesa</title>
</head>
<body>
    <div class="table">
        <table>
            <thead>
                <tr>
                    <th class="conteudo">bebidas</th>
                    <th class="conteudo">valor_unitario</th>
                </tr>
            </thead>
            <?php 
            foreach($dados_mesa as $bebida) :   ?>
            <tbody>
                <tr>
                    <td class="conteudo"><?php echo $bebida['bebida']; ?></td>
                    <td class="conteudo"><?php echo $bebida['valor_unit']; ?></td>
                </tr>
            </tbody>
            <?php endforeach; ?>
            <thead>
                <tr>
                    <th class="conteudo">quantidade total</th>
                    <th class="conteudo">valor total</th>
                </tr>
            </thead>
            <?php 
            foreach($somas_mesa as $soma) :  ?>
            <tbody>
                <tr>
                    <td class="conteudo"><?php echo $soma['quantidade_t']; ?></td>
                    <td class="conteudo"><?php echo $soma['valor_t']; ?></td>
                </tr>
            </tbody>
            <?php endforeach; ?>
        </table>
        <a href="fechamento_mesa.php?id_mesa=<?php echo $id_mesa; ?>">
    <button class="button">
    <span class="button-content">fechar </span>
</button>
</a>
    </div>
    
</body>
</html>