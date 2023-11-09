<?php
session_start();

if (isset($_SESSION['nome'])) {
    $nome = $_SESSION['nome'];
} else {
    $nome = "Convidado";
}

$HBO = "https://images-optimized.idinheiro.com.br/product/Sem_t_tulo_1654913259364_150x150.webp";
$Amazon = "https://images-optimized.idinheiro.com.br/product/amazon_637738023473440962_1651248966373_150x150.webp";
$Netflix = "https://images-optimized.idinheiro.com.br/product/netflix_1673549991272_150x150.webp";
$Globoplay = "https://images-optimized.idinheiro.com.br/product/globoplay_1673550154330_150x150.webp";
$Star = "https://images-optimized.idinheiro.com.br/product/21101730596070_1687892047173_150x150.webp";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Streming</title>
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
      .seta{
        width: 30px;
        height: 30px;
        float: right;
        margin: 10px;
      }
      img{
        width: 200px;
        height: 200px;
        border-radius: 8px;
      }
      .container{
        display: flex;
        justify-content: space-around;
        margin: 100px 50px;
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
        <nav>
            <a href="index.php">Home</a>
            <a href="contato.php">Contato</a>
            <a href="projeto.php">Projeto</a>
        </nav>
    </header>
    <main>
      <a href="series.php"><img class="seta" src="img/vire-a-esquerda.png" alt="Descrição da Imagem"></a>
      <h1>Melhores Plataformas de Streming para você, <?php echo $nome; ?>!</h1>
      <div class="container">
              
        <div>
          <img class="star" src="<?php echo $Netflix; ?>"  alt="Descrição da Imagem">
          <p>Netflix</p>
        </div>
        <div>
          <img class="star" src="<?php echo $HBO; ?>"  alt="Descrição da Imagem">
          <p>HBO Max</p>
        </div>
        <div>
          <img class="star" src="<?php echo $Amazon; ?>"  alt="Descrição da Imagem">
          <p>Amazon Prime</p>
        </div>
        <div>
          <img class="star" src="<?php echo $Globoplay; ?>"  alt="Descrição da Imagem">
          <p>Globoplay</p>
        </div>
        <div>
          <img class="star" src="<?php echo $Star; ?>"  alt="Descrição da Imagem">
          <p>Star+</p>
        </div>
        
      </div>
    
     </main>
    <footer>
        <p>&copy; <?php echo date("Y"); ?> CineSerial. | Contato: contato@CineSerial.com | Instagram: CineSerial</p>
    </footer>

</body>
</html>