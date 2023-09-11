<?php 

include "conex.php";
include "functions.php";

$id = $_GET['id'];

$valores = pesquisar_bebida($mysqli, $id);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="arquivos_css/cadastros.css">
    <title>Document</title>
</head>
<body>
    
<p><?php ?></p>

<form class="form" method="post">
       <p class="form-title">cadastro bebidas</p>
        <div class="input-container">
          <input type="number" placeholder="quantidade" name="quantidade" value="<?php echo $valores[0]['quantidade']; ?>">
          <span>
          </span>
      </div>
      <div class="input-container">
          <input type="hidden" name="id" value="<?php echo $valores[0]['id']; ?>">
        </div>
      <div class="input-container">
          <input type="number" step="0.01" placeholder="valor unitario" name="valor_unit" 
          value="<?php echo $valores[0]['valor_unitario']; ?>">
        </div>
         <button type="submit" class="submit" name="atualizar" value="atualizar">
        atualizar
      </button>
   </form>

<?php 

$atualizar = [
  'id'            => $_POST['id'],
  'quantidade'    => $_POST['quantidade'],
  'valor_unitario'=> $_POST['valor_unit']
];

atualizar_bebida($mysqli, $atualizar);

?>

</body>
</html>