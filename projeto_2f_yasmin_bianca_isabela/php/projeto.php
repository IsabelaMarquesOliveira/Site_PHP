<!DOCTYPE html>
<html>
<head>
    <title>Projeto</title>
    <style>
      body {
          font-family: Arial, sans-serif;
          background-color: #f2f2f2;
          margin: 0;
          padding: 0;
          color: #fff;
          text-align: center;
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
          display: flex;
          justify-content: space-around;
          margin-top: 50px;
        }
        .card-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        color: #fff;
        width: 500px;
        height: 500px;
        }

        img{
          width: 300px;
          height: 300px;
          border-radius: 50%;
        }
        .card-container h2 {
          color: #fff;
          text-align: center;
          font-size: 16px;
          font-weight: 700;
        }
        .card-inf{
          justify-content: center;
          align-items: center;

        }
      .github{
        width: 30px;
        height: 30px;
        margin-left: 50px;

      }
      .container-inf {
        display: flex;
          flex-direction: column;
          align-items: center;
          border-radius: 0 0 8px 8px;
          background: #fffafa40;
          border-radius: 16px;
          box-shadow: 0 4px 30px rgb(0 0 0 / 10%);
          backdrop-filter: blur(5px);
         -webkit-backdrop-filter: blur(5px);
           color: #fff;
            width: auto;
            height: 440px;
      }
      
    </style>
</head>
<body>
    <header>
      <h1>Membros do Grupo</h1>
        <nav>
            <a href="index.php">Home</a>
            <a href="contato.php">Contato</a>
            <a href="projeto.php">Projeto</a>
        </nav>
    </header>
    <main>
      <div class="container">

          <div class="card-container">
            <?php
            // URL da imagem da internet
            $Yasmin = "img/eu.jpeg";
            $a = "img/github.png";
            ?>

            <img src="<?php echo $Yasmin; ?>" alt="Descrição da Imagem">
            <?php
            echo "<h1>Yasmin Benicio</h1>";
            echo "<div class='inf'>
              <p>RGM: 33542996</p>";

              ?>
            <a href="https://github.com/yasxxv"><img class="github" src="<?php echo $a; ?>" alt="Descrição da Imagem"></a>
            </div>
          </div>

        <div class="card-container">
          <?php
          // URL da imagem da internet
          $Bianca = "img/bianca.jpeg";
          ?>

          <img src="<?php echo $Bianca; ?>" alt="Descrição da Imagem">
          <?php
          echo "<h1>Bianca Cassia</h1>";
          echo "<div class='inf'>
            <p>RGM: 32635541</p>";
          ?>
          <a href=""><img class="github" src="<?php echo $a; ?>" alt="Descrição da Imagem"></a>
          </div>
        </div>

        <div class="card-container">
          <?php
          // URL da imagem da internet
          $Isa = "img/isa.jpeg";
          ?>

          <img src="<?php echo $Isa; ?>" alt="Descrição da Imagem">
          <?php
          echo "<h1>Isabela Marques</h1>";
          echo "<div class='inf'>
            <p>RGM: 32635613</p>";
          ?>
          <a href="https://github.com/IsabelaMarquesOliveira"><img class="github" src="<?php echo $a; ?>" alt="Descrição da Imagem"></a>
          </div>
        </div>
       </div>
      
      <div class="container-inf">
        <h2>
          ✏️ Sobre o projeto
        </h2>
        <p>O projeto foi desenvolvido para aula de Programação WEB, realizada pelas alunas Yasmin, Bianaca e Isabela, onde concluímos um Site web com avaliacões de séries formado por um Ranking de melhores séries por gêneros, quanto mais avaliado a série for, mais estrelinhas ela terá. Mesclamos o PHP com o HTML sempres que possível durante a aplicação, no formulario usamos a função exibirPopup para chamar o pop-up sempre que o usuário envia uma nova séria com a avaliação para os nossos administradores também utilizamos á variavel global "Session" para guardar o nome do usuario que é preenchido na pagina Index.PHP para iniciar a vizualição das séries avaliadas, Toda vez que a Session é chamada validamos se a variavel já existe, caso não utilizamos a palavra "Convidado".</p>
        <h2>
          💻 Tecnologias utilizadas
        </h2>
        <p>PHP</p>
        <p>HTML</p>
        <p>CSS</p>
        
      </div>
        
     </main>
  <footer>
      <p>&copy; <?php echo date("Y"); ?> CineSerial. | Contato: contato@CineSerial.com | Instagram: CineSerial</p>
  </footer>
</body>
</html>
