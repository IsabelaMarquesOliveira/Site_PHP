<?php
session_start();

if (isset($_SESSION['nome'])) {
    $nome = $_SESSION['nome'];
} else {
    $nome = "Convidado";
}

$contorno = "img/star-contorno.png";
$full = "img/star-full.png";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Séries</title>
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
      .container{
        display: flex;
        justify-content: space-around;
      }
      .card-container {
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
        width: 260px;
        height: 370px;
      }

      img{
        width: 100%;
        height: 200px;
        border-radius: 8px 8px 0 0;
      }
      .card-container h2 {
        color: #fff;
        text-align: center;
        font-size: 16px;
        font-weight: 700;
        margin-bottom: 10px;
      }
      
      .star{
        height: 30px;
        display: flex;
        justify-content: auto;
        margin: 0px;
      }
      .seta{
        width: 30px;
        height: 30px;
        float: right;
        margin: 10px;
      }
      
    </style>
</head>
<body>
    <header>
      <h1>Bem-vindo, <?php echo $nome; ?>!</h1>
        <nav>
            <a href="index.php">Home</a>
            <a href="contato.php">Contato</a>
            <a href="projeto.php">Projeto</a>
        </nav>
    </header>
    <main>
      <a href="Streming.php"><img class="seta" src="img/seta-direita.png" alt="Descrição da Imagem"></a>
      
      <h1>Romance</h1>
      <div class="container">
        
          <div class="card-container">
            <?php
            // URL da imagem da internet
            $emily = "https://i0.wp.com/cinemaepixels.com.br/wp-content/uploads/2022/09/emily-em-paris-poster-netflix.jpg?ssl=1";
            ?>

            <img src="<?php echo $emily; ?>" alt="Descrição da Imagem">
            <h2>Emily em Paris</h2>
            <div class="card-inf">
              <h2>5.0</h2>
              
              <div class="star">
              <img class="star" src="<?php echo $full; ?>"  alt="Descrição da Imagem">
              <img class="star" src="<?php echo $full; ?>" alt="Descrição da Imagem">
              <img class="star" src="<?php echo $full; ?>" alt="Descrição da Imagem">
              <img class="star" src="<?php echo $full; ?>" alt="Descrição da Imagem">
              <img class="star" src="<?php echo $full; ?>" alt="Descrição da Imagem">
              </div>
              <h2>Avaliação</h2>
            </div>
          </div>

        <div class="card-container">
          <?php
          // URL da imagem da internet
          $Virginriver = "https://m.media-amazon.com/images/M/MV5BNjcyMjE5NDAtZjRlMy00MjNhLWEwMGEtNWJlMmIwYWQ1MWZlXkEyXkFqcGdeQXVyMTUwMjg2Nzg0._V1_FMjpg_UX1000_.jpg";
          ?>

          <img src="<?php echo $Virginriver; ?>" alt="Descrição da Imagem">
          <h2>Virgin river</h2>
          <div class="card-inf">
            <h2>4.0</h2>
            
            <div class="star">
            <img class="star" src="<?php echo $full; ?>"  alt="Descrição da Imagem">
            <img class="star" src="<?php echo $full; ?>" alt="Descrição da Imagem">
            <img class="star" src="<?php echo $full; ?>" alt="Descrição da Imagem">
            <img class="star" src="<?php echo $full; ?>" alt="Descrição da Imagem">
            <img class="star" src="<?php echo $contorno; ?>" alt="Descrição da Imagem">
            </div>
            <h2>Avaliação</h2>
          </div>
        </div>

        <div class="card-container">
          <?php
          // URL da imagem da internet
          $you = "https://br.web.img3.acsta.net/pictures/18/12/31/02/49/2373131.jpg";
          ?>

          <img src="<?php echo $you; ?>" alt="Descrição da Imagem">
          <h2>You</h2>
          <div class="card-inf">
            <h2>3.0</h2>
            
            <div class="star">
            <img class="star" src="<?php echo $full; ?>"  alt="Descrição da Imagem">
            <img class="star" src="<?php echo $full; ?>" alt="Descrição da Imagem">
            <img class="star" src="<?php echo $full; ?>" alt="Descrição da Imagem">
            <img class="star" src="<?php echo $contorno; ?>" alt="Descrição da Imagem">
            <img class="star" src="<?php echo $contorno; ?>" alt="Descrição da Imagem">
            </div>
            <h2>Avaliação</h2>
          </div>
        </div>
       </div>

      <h1>Comédia</h1>
      <div class="container">

          <div class="card-container">
            <?php
            // URL da imagem da internet
            $Friends = "https://br.web.img2.acsta.net/c_310_420/pictures/19/12/20/21/27/3055482.jpg";
            ?>

            <img src="<?php echo $Friends; ?>" alt="Descrição da Imagem">
            <h2>Friends</h2>
            <div class="card-inf">
              <h2>5.0</h2>

              <div class="star">
              <img class="star" src="<?php echo $full; ?>"  alt="Descrição da Imagem">
              <img class="star" src="<?php echo $full; ?>" alt="Descrição da Imagem">
              <img class="star" src="<?php echo $full; ?>" alt="Descrição da Imagem">
              <img class="star" src="<?php echo $full; ?>" alt="Descrição da Imagem">
              <img class="star" src="<?php echo $full; ?>" alt="Descrição da Imagem">
              </div>
              <h2>Avaliação</h2>
            </div>
          </div>

        <div class="card-container">
          <?php
          // URL da imagem da internet
          $OsSimpsons = "https://br.web.img3.acsta.net/c_310_420/medias/nmedia/18/79/96/51/19694367.jpg";
          ?>

          <img src="<?php echo $OsSimpsons; ?>" alt="Descrição da Imagem">
          <h2>Os Simpsons</h2>
          <div class="card-inf">
            <h2>4.0</h2>

            <div class="star">
            <img class="star" src="<?php echo $full; ?>"  alt="Descrição da Imagem">
            <img class="star" src="<?php echo $full; ?>" alt="Descrição da Imagem">
            <img class="star" src="<?php echo $full; ?>" alt="Descrição da Imagem">
            <img class="star" src="<?php echo $full; ?>" alt="Descrição da Imagem">
            <img class="star" src="<?php echo $contorno; ?>" alt="Descrição da Imagem">
            </div>
            <h2>Avaliação</h2>
          </div>
        </div>

        <div class="card-container">
          <?php
          // URL da imagem da internet
          $Suits = "https://br.web.img3.acsta.net/c_310_420/pictures/14/03/28/10/18/433386.jpg";
          ?>

          <img src="<?php echo $Suits; ?>" alt="Descrição da Imagem">
          <h2>Suits</h2>
          <div class="card-inf">
            <h2>3.0</h2>

            <div class="star">
            <img class="star" src="<?php echo $full; ?>"  alt="Descrição da Imagem">
            <img class="star" src="<?php echo $full; ?>" alt="Descrição da Imagem">
            <img class="star" src="<?php echo $full; ?>" alt="Descrição da Imagem">
            <img class="star" src="<?php echo $contorno; ?>" alt="Descrição da Imagem">
            <img class="star" src="<?php echo $contorno; ?>" alt="Descrição da Imagem">
            </div>
            <h2>Avaliação</h2>
          </div>
        </div>
       </div>


      <h1>Suspense</h1>
      <div class="container">

          <div class="card-container">
            <?php
            // URL da imagem da internet
            $StrangerThings = "https://uauposters.com.br/media/catalog/product/2/0/201906131333-uau-posters-series-seriado-stranger-things.jpg";
            ?>

            <img src="<?php echo $StrangerThings; ?>" alt="Descrição da Imagem">
            <h2>Stranger Things</h2>
            <div class="card-inf">
              <h2>5.0</h2>
              <div class="star">
              <img class="star" src="<?php echo $full; ?>"  alt="Descrição da Imagem">
              <img class="star" src="<?php echo $full; ?>" alt="Descrição da Imagem">
              <img class="star" src="<?php echo $full; ?>" alt="Descrição da Imagem">
              <img class="star" src="<?php echo $full; ?>" alt="Descrição da Imagem">
              <img class="star" src="<?php echo $full; ?>" alt="Descrição da Imagem">
              </div>
              <h2>Avaliação</h2>
            </div>
          </div>

        <div class="card-container">
          <?php
          // URL da imagem da internet
          $PrisonBreak = "https://images.justwatch.com/poster/213197734/s718/prison-break.jpg";
          ?>

          <img src="<?php echo $PrisonBreak; ?>" alt="Descrição da Imagem">
          <h2>Prison Break</h2>
          <div class="card-inf">
            <h2>4.0</h2>
            <div class="star">
            <img class="star" src="<?php echo $full; ?>"  alt="Descrição da Imagem">
            <img class="star" src="<?php echo $full; ?>" alt="Descrição da Imagem">
            <img class="star" src="<?php echo $full; ?>" alt="Descrição da Imagem">
            <img class="star" src="<?php echo $full; ?>" alt="Descrição da Imagem">
            <img class="star" src="<?php echo $contorno; ?>" alt="Descrição da Imagem">
            </div>
            <h2>Avaliação</h2>
          </div>
        </div>

        <div class="card-container">
          <?php
          // URL da imagem da internet
          $Sherlock = "https://br.web.img2.acsta.net/pictures/14/01/06/14/35/382626.jpg";
          ?>

          <img src="<?php echo $Sherlock; ?>" alt="Descrição da Imagem">
          <h2>Sherlock</h2>
          <div class="card-inf">
            <h3>3.0</h3>
            <div class="star">
            <img class="star" src="<?php echo $full; ?>"  alt="Descrição da Imagem">
            <img class="star" src="<?php echo $full; ?>" alt="Descrição da Imagem">
            <img class="star" src="<?php echo $full; ?>" alt="Descrição da Imagem">
            <img class="star" src="<?php echo $contorno; ?>" alt="Descrição da Imagem">
            <img class="star" src="<?php echo $contorno; ?>" alt="Descrição da Imagem">
            </div>
            <h2>Avaliação</h2>
          </div>
        </div>
       </div>


      
      <h1>Terror</h1>
      <div class="container">

          <div class="card-container">
            <?php
            // URL da imagem da internet
            $AMaldiçãodaResidênciaHill = "https://br.web.img2.acsta.net/pictures/18/09/19/18/09/2669292.jpg";
            ?>

            <img src="<?php echo $AMaldiçãodaResidênciaHill; ?>" alt="Descrição da Imagem">
            <h2>A Maldição da Residência Hill</h2>
            <div class="card-inf">
              <h2>5.0</h2>
              <div class="star">
              <img class="star" src="<?php echo $full; ?>"  alt="Descrição da Imagem">
              <img class="star" src="<?php echo $full; ?>" alt="Descrição da Imagem">
              <img class="star" src="<?php echo $full; ?>" alt="Descrição da Imagem">
              <img class="star" src="<?php echo $full; ?>" alt="Descrição da Imagem">
              <img class="star" src="<?php echo $full; ?>" alt="Descrição da Imagem">
              </div>
              <h2>Avaliação</h2>
            </div>
          </div>

        <div class="card-container">
          <?php
          // URL da imagem da internet
          $AmericanHorrorStory = "https://uauposters.com.br/media/catalog/product/3/7/377320211103-uau-posters-american-horror-story-murder-house-historia-de-horror-americana-ahs-series.jpg";
          ?>

          <img src="<?php echo $AmericanHorrorStory; ?>" alt="Descrição da Imagem">
          <h2>American Horror Story</h2>
          <div class="card-inf">
            <h2>4.0</h2>
            <div class="star">
            <img class="star" src="<?php echo $full; ?>"  alt="Descrição da Imagem">
            <img class="star" src="<?php echo $full; ?>" alt="Descrição da Imagem">
            <img class="star" src="<?php echo $full; ?>" alt="Descrição da Imagem">
            <img class="star" src="<?php echo $full; ?>" alt="Descrição da Imagem">
            <img class="star" src="<?php echo $contorno; ?>" alt="Descrição da Imagem">
            </div>
            <h2>Avaliação</h2>
          </div>
        </div>

        <div class="card-container">
          <?php
          // URL da imagem da internet
          $Wandinha = "https://pausadrammatica.files.wordpress.com/2022/11/wandinha.png?w=1400";
          ?>

          <img src="<?php echo $Wandinha; ?>" alt="Descrição da Imagem">
          <h2>Wandinha</h2>
          <div class="card-inf">
            <h2>3.0</h2>
            <div class="star">
            <img class="star" src="<?php echo $full; ?>"  alt="Descrição da Imagem">
            <img class="star" src="<?php echo $full; ?>" alt="Descrição da Imagem">
            <img class="star" src="<?php echo $full; ?>" alt="Descrição da Imagem">
            <img class="star" src="<?php echo $contorno; ?>" alt="Descrição da Imagem">
            <img class="star" src="<?php echo $contorno; ?>" alt="Descrição da Imagem">
            </div>
            <h2>Avaliação</h2>
          </div>
        </div>
       </div>

      <h1>Ação</h1>
      <div class="container">

          <div class="card-container">
            <?php
            // URL da imagem da internet
            $Blindspot = "https://cinema10.com.br/upload/featuredImage.php?url=https%3A%2F%2Fcinema10.com.br%2Fupload%2Fseries%2Fseries_846_MV5BMDIyYzUwNjgtNDA1Mi00ZmQ3LThhNWQtN2RjZjczNjRlZmQ3XkEyXkFqcGdeQXVyNjMxNzcwOTI%40._V1_.jpg";
            ?>

            <img src="<?php echo $Blindspot; ?>" alt="Descrição da Imagem">
            <h2>Blindspot</h2>
            <div class="card-inf">
              <h2>5.0</h2>
              <div class="star">
              <img class="star" src="<?php echo $full; ?>"  alt="Descrição da Imagem">
              <img class="star" src="<?php echo $full; ?>" alt="Descrição da Imagem">
              <img class="star" src="<?php echo $full; ?>" alt="Descrição da Imagem">
              <img class="star" src="<?php echo $full; ?>" alt="Descrição da Imagem">
              <img class="star" src="<?php echo $full; ?>" alt="Descrição da Imagem">
              </div>
              <h2>Avaliação</h2>
            </div>
          </div>

        <div class="card-container">
          <?php
          // URL da imagem da internet
          $ChicagoFire = "https://upload.wikimedia.org/wikipedia/pt/a/a2/Chicago_Fire_temporada_9.jpg";
          ?>

          <img src="<?php echo $ChicagoFire; ?>" alt="Descrição da Imagem">
          <h2>Chicago Fire</h2>
          <div class="card-inf">
            <h2>4.0</h2>
            <div class="star">
            <img class="star" src="<?php echo $full; ?>"  alt="Descrição da Imagem">
            <img class="star" src="<?php echo $full; ?>" alt="Descrição da Imagem">
            <img class="star" src="<?php echo $full; ?>" alt="Descrição da Imagem">
            <img class="star" src="<?php echo $full; ?>" alt="Descrição da Imagem">
            <img class="star" src="<?php echo $contorno; ?>" alt="Descrição da Imagem">
            </div>
            <h2>Avaliação</h2>
          </div>
        </div>

        <div class="card-container">
          <?php
          // URL da imagem da internet
          $Narcos = "https://s2.glbimg.com/0na_Cml0vNo_fj8K5ebZ6VjU-2A=/s.glbimg.com/jo/g1/f/original/2015/08/28/narcos-wagner-moura.jpg";
          ?>

          <img src="<?php echo $Narcos; ?>" alt="Descrição da Imagem">
          <h2>Narcos</h2>
          <div class="card-inf">
            <h2>3.0</h2>
            <div class="star">
            <img class="star" src="<?php echo $full; ?>"  alt="Descrição da Imagem">
            <img class="star" src="<?php echo $full; ?>" alt="Descrição da Imagem">
            <img class="star" src="<?php echo $full; ?>" alt="Descrição da Imagem">
            <img class="star" src="<?php echo $contorno; ?>" alt="Descrição da Imagem">
            <img class="star" src="<?php echo $contorno; ?>" alt="Descrição da Imagem">
            </div>
            <h2>Avaliação</h2>
          </div>
        </div>
       </div>
      

     </div>
     </main>
      
</body>
</html>