<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faça seu pedido - Pizzaria EBI</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="https://images.vexels.com/media/users/3/345234/isolated/preview/59a838b64d074089a3f60aee1004921c-fatia-de-pizza-duotone.png" type="image/x-icon">
</head>
<body>

<nav>
<div class="logo">
    
<img src="https://images.vexels.com/media/users/3/345234/isolated/preview/59a838b64d074089a3f60aee1004921c-fatia-de-pizza-duotone.png" alt="logo pizza"><h1>Pizzaria EBI</h1>
</div>
<ul class="nav-links">
<li><a href="#home">Home</a></li>
<li><a href="#pedido">Pedido</a></li>
</ul>
</nav>

<section id="home" class="ebi">
    
<h2>Bem-vindo à Pizzaria Ebi</h2>
    <p>Criando sorrisos a cada mordida!</p>
</section>


<section class="sabores">
<img type="button" name="submit" value="Clique-me" onclick="primeiraFuncao()"src="img\pizza.png" alt="">
    <h3>Sabores de Pizzas</h3>
    <br>
    <br>
    <br>
<div class="precos">
    <td>
        <tr>Mussarela...........$50,00</tr>
    </td>
    <br>
    <br>

    <td>
        <tr>
            Frango c/ catupiry..........................$50,00
        </tr>
    </td>
    <br>
    <br>

    <td>
        <tr>Calabresa...........$50,00</tr>
    </td>
    <br>
    <br>

    <td>
        <tr>Marguerita...........$50,00</tr>
    </td>
</div>
</section>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pizzaria";

$conn = new mysqli($servername, $username, $password, $dbname);
// if($conn-> connect_error){
//     die("Connection failed :" . $conn->connect_error);
// }



if($_SERVER["REQUEST_METHOD"] == "POST"){
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];
    $endereco = $_POST["endereco"];
    $descricao_pedido = $_POST["descricao_pedido"];
    $valor = $_POST["valor"];


    $sql = "INSERT INTO clientes (nome, email, telefone, endereco) VALUES ('$nome', '$email', '$telefone', '$endereco')";

   if($conn->query($sql) === TRUE){
        echo "<h4>Novo registro criado com sucesso:)</h4>";
    }else{
        echo "<h5>Erro:</h5>" .$sql . "<br>" . $conn->error;
    }
    
    $sql1 = "INSERT INTO pedidos (descricao_pedido, valor) VALUES ('$descricao_pedido', '$valor')";

    if($conn->query($sql1) === TRUE){
        echo "";
    }else{
        echo "Erro: " .$sql1 . "<br>" . $conn->error;
    }


}


?>



    <div class="container">
        <h3>Faça seu pedido:</h3>
        <form action="index.php" method="POST" id="pedido">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="telefone">Telefone:</label>
                <input type="tel" id="telefone" name="telefone" required>
            </div>
            <div class="form-group">
                <label for="endereco">Endereço:</label>
                <textarea id="endereco" name="endereco" required></textarea>
            </div>

            <div class="form-group">
                <label for="descricao_pedido">Descrição do Pedido:</label>
                <select id="descricao_pedido" name="descricao_pedido"required>
                <option value="Mussarela">Mussarela</option>
                <option value="Frango com catupiry" selected>Frango com catupiry</option>
                <option value="Calabresa">Calabresa</option>
                <option value="Marguerita">Marguerita</option>
                </select>

            </div>

            <div class="form-group">
                <label for="valor">Valor:</label>
                <input type="number" id="valor" name="valor" value="50.00" step="0.01" readonly>
            </div>
            
            <button type="submit">Enviar Pedido</button>
        </form>
    </div>


    <!-- usando bootstrap -->
    <section class="">
  <footer class="text-center text-white" style="background-color: #ff5722;">
    <div class="container p-4 pb-0">

      <section class="">
        <p class="d-flex justify-content-center align-items-center">
       
          <button data-mdb-ripple-init type="button" class="btn btn-outline-light btn-rounded" >
           <a href="#home">Home</a> 
          </button>
          <button data-mdb-ripple-init type="button" class="btn btn-outline-light btn-rounded" >
            <a href="#pedido">Pedido</a> 
          </button>

        </p>
      </section>
    
    </div>
 
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    Desenvolvido por Gabriela Padilha e Emily &copy; 2024 
      <!-- <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com for the footer</a> -->
    </div>

  </footer>

</section>



    <!-- <footer>Desenvolvido por Gabriela Padilha e Emily &copy; 2024 || Todos os direitos reservados</footer> -->


    <script src="script.js"></script>

    <script src="https://cdn.userway.org/widget.js" data-account="kCDHqw9ltL"></script>
    <div vw class="enabled">
        <div vw-access-button class="active"></div>
        <div vw-plugin-wrapper>
            <div class="vw-plugin-top-wrapper"></div>
        </div>
    </div>
    <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
    <script>
        new window.VLibras.Widget('https://vlibras.gov.br/app');
    </script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>


