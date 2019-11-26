<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>formulário de cadastro</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


	<style type="text/css">
		
             #tamanhoContainer {
             	width: 500px
             }


             #botão {
             	background-color: #541F80; /*cor de fundo*/
             	color: #ffffff; /*cor da letra*/
             	font-weight: bold;
             	
             }

	</style>

</head>
<body>
<form>

	<div class="container" id="tamanhoContainer" style="margin-top: 40px">
	<h4>Formulário de cadastro</h4>
	<form action="_inserir_produto.php" method="post" style="margin-top: 20px"> 
	<div class="form-group">
    <label>Número de registro</label>
    <input type="number" class="form-control" name="nroproduto" placeholder="insira o número do produto"  required>
    </div>

     <div class="form-group">
    <label>Produto</label>
    <input type="text" class="form-control" name="nomeproduto" placeholder="insira o nome do produto" autocomplete="off" required>
    </div>

<div class="form-group">
    <label>Categoria</label>
    <select class="form-control" name="categoria" placeholder="insira a categoria do produto" autocomplete="off" required>
      <option>Negócios</option>
      <option>Ciência</option>
      <option>Literatura</option>
      <option>Games</option>
      <option>Música</option>
    </select>
  </div>


  <div class="form-group" >
    <label>Quantidade</label>
    <input type="number" class="form-control" name="quantidade" placeholder="insira a quantidade do produto" autocomplete="off" required>
</div>

 <div class="form-group">
    <label>Fornecedor</label>
    <select class="form-control" name="fornecedor" autocomplete="off" required> 
      <option>fornecedor A</option>
      <option>fornecedor B</option>
      <option>fornecedor C</option>
    </select>
  </div>
<div style="text-align: right;">
  <button type="submit" id="botão" class="btn btn-sm">Cadastrar</button>
</div>

</form>
</div>





<script type="text/javascript" src="js/bootstrap" ></script>
</body> 
</html>