<?php 

include 'conex.php';

$msg = "";

if(isset($_POST['descricao']) && isset($_POST['quantidade']) && isset($_POST['valor_unitario'])){
    if (strlen($_POST['descricao']) == 0){
        $msg = "digite um nome";
    } else if(strlen($_POST['quantidade']) == 0){
        $msg = "digite a quantidade";
    } else if(strlen($_POST['valor_unitario']) == 0){
        $msg = "digite um valor";
    } else{


        $descricao = $_POST['descricao'];
        $quantidade = $_POST['quantidade'];
        $valor_unitario = $_POST['valor_unitario'];

        $sqlselect = "SELECT*FROM bebidas where descricao = '$descricao'";
        $queryselect = $mysqli->query($sqlselect);

        $linhas = $queryselect->num_rows;

        if($linhas > 0){
            $msg = "cadastro ja existe";
        } else{

        $sqlcode = "INSERT INTO bebidas (descricao, quantidade, valor_unitario) VALUES ('$descricao', $quantidade,
        '$valor_unitario')";
        $sqlquery = $mysqli->query($sqlcode);

        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="arquivos_css/cadastros.css">
    <link rel="stylesheet" type="text/css" href="arquivos_css/nav_barr.css">
    <link rel="stylesheet" type="text/css" href="arquivos_css/botao_c.css">
    <title>cadastro bebida</title>
    <style>
        p{
            color: white;
        }
    </style>
</head>
<body>

<?php include 'nav_bar.php'; 

?>

<button class="button" onclick="clicar1()">
    <span class="button-content">bebida  </span>
</button>
<button class="button" onclick="clicar2()">
    <span class="button-content">garçom </span>
</button>


<div id="card1">
<form class="form" method="post">
       <p class="form-title">cadastro bebidas</p>
        <div class="input-container">
          <input type="text" placeholder="nome" name="descricao">
          <span>
          </span>
      </div>
      <div class="input-container">
          <input type="number" placeholder="quantidade" name="quantidade">
          <span>
          </span>
      </div>
      <div class="input-container">
          <input type="number" step="0.01" placeholder="valor unitario" name="valor_unitario">
        </div>
         <button type="submit" class="submit" name="cadastrar" value="cadastrar">
        cadastrar
      </button>
   </form>
</div>



<?php 

if(isset($_POST['nome']) && isset($_POST['senha']) && isset($_POST['cadastrarf'])){
    if(strlen($_POST['nome']) == 0){
        $msg = "escreva o nome";
    } else if(strlen($_POST['senha']) == 0){
        $msg = "digite uma senha";
    } else{
        
        $nome = $_POST['nome'];
        $senha = $_POST['senha'];

        $sqlselect = "SELECT * FROM login_funcionarios WHERE nome = '$nome'";
        $queryselect = $mysqli->query($sqlselect);

        $linhas = $queryselect->num_rows;

        if($linhas > 0){
            $msg = "garçom ja cadastrado";
        } else{

            $sqlcode = "INSERT INTO login_funcionarios (nome, senha) VALUES ('$nome', '$senha')";
            $sqlquery = $mysqli->query($sqlcode);

        }

    }
}



?>
<p><?php echo $msg; ?></p>

<div id="card2">
<form class="form" method="post">
       <p class="form-title">cadastro garçom</p>
        <div class="input-container">
          <input type="text" placeholder="nome" name="nome">
          <span>
          </span>
      </div>
      <div class="input-container">
          <input type="password" placeholder="senha" name="senha">
          <span>
          </span>
      </div>
         <button type="submit" class="submit" name="cadastrarf" value="cadastrarf">
        cadastrar
      </button>
   </form>
</div>
    
<script>
      document.getElementById('card1').style.display = 'none'
      document.getElementById('card2').style.display = 'none'

     function clicar1(){

	  document.getElementById('card1').style.display = 'block'
	  document.getElementById('card2').style.display = 'none'
      			
	}

    function clicar2(){
      document.getElementById('card2').style.display = 'block'
      document.getElementById('card1').style.display = 'none'
    }

</script>

</body>
</html>


