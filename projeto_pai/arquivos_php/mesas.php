<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="arquivos_css/nav_barr.css">
    <link rel="stylesheet" type="text/css" href="arquivos_css//mesas.css">
    <title>cadastro bebida</title>
    <style>
        p{
            color: white;
        }
    </style>
</head>
<body>

<?php 
include 'nav_bar.php';

require "functions.php";

$todas_mesas = pesquisar_mesas($mysqli);


    foreach($todas_mesas as $mesa) : ?>

        <table>
            <thead>
                <tr>
                    <th class="conteudo">nome da mesa</th>
                    <th class="acoes">fechar mesa</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="conteudo"><?php echo $mesa['nome_mesa']; ?></td>
                    <td class="acoes"><a href="dados_mesa.php?id_mesa=<?php echo $mesa['id']; ?>"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 16 16">
                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
                    </svg></a></td>
                </tr>
            </tbody>
        </table>
    <?php endforeach; ?>

</body>
</html>