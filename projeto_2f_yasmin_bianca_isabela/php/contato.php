<?php
session_start();

if (isset($_SESSION['nome'])) {
    $nome = $_SESSION['nome'];
} else {
    $nome = "Convidado";
};

if (isset($_POST['submit'])) {
    $nome = $_POST['nome'];
    $_SESSION['nome'] = $nome;
    header("Location:series.php");
    exit();
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Contato</title>
    <script>
        function exibirPopup() {
            alert("Avaliação enviada com sucesso!"); // Exibe um popup de alerta
        }
    </script>
    <style>
      body {
          font-family: Arial, sans-serif;
          background-color: #f2f2f2;
          color: #fff;
  text-align: center;
          margin: 0;
          padding: 0;
          background-image: url("https://media2.giphy.com/media/U3qYN8S0j3bpK/giphy.gif?cid=ecf05e47i71pyk991adgmmkdu2mqy6leufb1fhxhw30m1tou&rid=giphy.gif&ct=g");
      }
      header {
          color: #fff;
          padding: 10px;
          text-align: center;
          background-color: #0a032ef5;
          height: 60px;
          display: flex;
          align-items: center;
          justify-content: space-around;
      }
      nav a {
          color: #fff;
          text-decoration: none;
          margin: 0 10px;
      }
        nav a:hover {
            text-decoration: underline; 
        }
      .container{
        align-items: center;
        text-align: center;
        justify-content: space-around;
      }
      form {
          text-align: center; /* Alinhamento do texto no centro do formulário */align-items: center;
          border-radius: 0 0 8px 8px;
          background: #fffafa40;
          border-radius: 16px;
          box-shadow: 0 4px 30px rgb(0 0 0 / 10%);
          backdrop-filter: blur(5px);
         -webkit-backdrop-filter: blur(5px);
           color: #fff;
        margin: 10px 100px;
      }
      input[type="text"] {
          width: 200px; /* Largura do campo */
          padding: 10px; /* Espaçamento interno */
          border: 1px solid #ccc; /* Borda sólida com cor cinza */
          border-radius: 5px; /* Cantos arredondados */
          font-size: 16px; /* Tamanho da fonte */
          color: #333; /* Cor do texto */
          background-color: #f4f4f4; /* Cor de fundo */
          margin: 20px;
      }
      input[type="submit"] {
        background-color: #0a032ef5; /* Cor de fundo azul */
          color: #fff; /* Cor do texto branco */
          padding: 10px 20px; /* Espaçamento interno superior/inferior e direita/esquerda */
          border: none;
          border-radius: 5px;
          font-size: 16px;
          cursor: pointer;
          margin: 30px;
      }
      input[type="submit"]:hover {
      background-color: #b4d4f3f5;
      color: #0a032ef5;

      /* Estilização para rótulos (labels) associados aos campos */
      label {
          font-weight: bold; /* Deixa o texto em negrito */
          display: inline-block; /* Coloca o rótulo em uma nova linha */
          margin-bottom: 5px; /* Espaço entre os rótulos */
      }
        select {
            padding: 5px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin: 20px;
        }

        /* Estilos para as opções do select */
        select option {
            font-size: 14px;
        }
        footer{
          align-items: center;
          text-align: center;
          position: absolute;
          bottom: 0;
          width: 100%;
          text-align: center;
          background-color: #333;
          color: #fff;
          padding: 10px 0;
        }
    </style>
</head>
<body>
    <header>
      <h1>CineSerial</h1>
        <nav>
            <a href="index.php">Home</a>
            <a href="contato.php">Contato</a>
            <a href="projeto.php">Projeto</a>
        </nav>
    </header>
    <main>
      <div class="container">
        <h1>ADICIONE AS SUAS SÉRIES FAVORITAS, <?php echo $nome; ?>!</h1>
        <?php
          echo "<form method='post'>";
          echo "E-mail: <input type='text' name='nome'><br>";
          echo "Série: <input type='text' name='email'><br>";
          echo "<label for='opcao'>Avaliação da Série: 
 </label>";
          echo "<select name='opcao' id='opcao'>";
          echo "<option value='opcao1'>Nota 1</option>";
          echo "<option value='opcao1'>Nota 2</option>";
          echo "<option value='opcao1'>Nota 3</option>";
          echo "<option value='opcao1'>Nota 3</option>";
          echo "<option value='opcao1'>Nota 5</option>";
          echo "</form><br>";

          if ($_SERVER["REQUEST_METHOD"] == "POST") {
              // Processar o envio dos dados aqui (adicionar seu código PHP para processamento)
              // ...
          
              // Depois de processar os dados, chame a função JavaScript para exibir o popup
              echo "<script>exibirPopup();</script>";
          }
          ?>
            <br>
            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <!-- Seu formulário aqui -->
                <input type="submit" value="Enviar">
            </form>

      </div>
     </main>
  <footer>
      <p>&copy; <?php echo date("Y"); ?> CineSerial. | Contato: contato@CineSerial.com | Instagram: CineSerial</p>
  </footer>
</body>
</html>