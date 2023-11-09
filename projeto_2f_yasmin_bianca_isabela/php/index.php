<?php
session_start();

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
    <title>Home</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
  text-align: center;
        color: #fff;
        background-image: url("https://media2.giphy.com/media/U3qYN8S0j3bpK/giphy.gif?cid=ecf05e47i71pyk991adgmmkdu2mqy6leufb1fhxhw30m1tou&rid=giphy.gif&ct=g");
    }
    header {
        background-color: #666;
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
        color: #fff; /* Cor dos links */
        text-decoration: none; /* Removendo sublinhado padrão dos links */
        margin: 0 10px;
    }
      nav a:hover {
          text-decoration: underline; /* Adicionando sublinhado ao passar o mouse sobre os links */
      }
      main {
          display: flex;
          justify-content: space-around;
          margin: 20px;
          height: 400px;
      }
      .column {
          flex: 45%;
          color: #fff;
          text-align: center;
          padding: 100px 100px;
      }
      
      nav {
          display: flex;
          justify-content: space-between;
          align-items: right;
          color: #fff;
        }
      input[type="text"] {
          width: 200px; /* Largura do campo */
          padding: 10px; /* Espaçamento interno */
          border: 1px solid #ccc; /* Borda sólida com cor cinza */
          border-radius: 5px; /* Cantos arredondados */
          font-size: 16px; /* Tamanho da fonte */
          color: #333; /* Cor do texto */
          background-color: #f4f4f4; /* Cor de fundo */
          display: inline-block;
      }
      input[type="submit"] {
        background-color: #0a032ef5; /* Cor de fundo azul */
          color: #fff; /* Cor do texto branco */
          padding: 10px 20px; /* Espaçamento interno superior/inferior e direita/esquerda */
          border: none; /* Sem borda */
          border-radius: 5px;
          font-size: 16px;
          display: flex;
          cursor: pointer; /* Transforma o cursor em uma mão ao passar o mouse */
          display: inline-block;
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

      /* Estilização para o botão */
      .form-button {
          display: block; /* Coloca o botão em uma nova linha */
      }
      footer{
          align-items: center;
          text-align: center;
          position: absolute;
          bottom: 0;
          width: 100%;
          text-align: center;
          color: #fff;
          padding: 10px 0;
      }
      </style>
</head>
<body>
    <header>
        <h1>CineSerial</h1>
        <nav className="dsmovie-contact-container">
            <a href="index.php">Home</a>
            <a href="contato.php">Contato</a>
            <a href="projeto.php">Projeto</a>
        </nav>
    </header>
    <main>
        <div class="column form-field">
            <?php

              echo "<p>Preparado para conferir as Séries com as melhores avaliações?</p>";
              echo "<h2>Informe seu nome para começar!</h2>";
                ?>
            <form method="post">
              <input type="text" id="nome" name="nome" value="Convidado">
              <input type="submit" name="submit" value="Começar">
          </form>
        </div>
   </main>
  <footer>
      <p>&copy; <?php echo date("Y"); ?> CineSerial. | Contato: contato@CineSerial.com | Instagram: CineSerial</p>
  </footer>
</body>
</html>