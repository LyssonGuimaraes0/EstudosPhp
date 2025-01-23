<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
         <img src="images/home_icon.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
          <a class="navbar-brand" href="index.html">Home</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="page2.html">Noticias</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="page3.html">Sobre nós</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="page4.php">Contatos</a>
              </li>
              
            </ul>
          </div>
        </div>
      </nav>
<div class="container text-align: center">
    <header><h1>Calcule sua Conversão de moeda</h1></header>
    <br>
    <strong>
      <h2>Descubra o Valor da sua moeda para viagens incrivel</h2>
    </strong>

<div class="container text-align: center p-3 mb-2 bg-dark-subtle text-dark-emphasis">
    <p>
      <p>Digite aqui o Valor em reais para dolar:</p>

      <section>
        <div class="container text-align: center">
            <form action="conf.php" method="post">

                <label for="reais">Reais</label>
                <input type="number" name="reais">
                <input type="submit" value="Calcule">

            </form>
        </div>
      </section>
    </div>
    <?php 
    
    if (isset($_GET['mensagem'])) {
      echo "<strong>" . htmlspecialchars($_GET['mensagem']) ."";
  }    
    
    ?>

    <nav aria-label="Page navigation example">
        <ul class="pagination">
          <li class="page-item"><a class="page-link" href="page3.html">Voltar</a></li>
          <li class="page-item"><a class="page-link" href="index.html">1</a></li>
          <li class="page-item"><a class="page-link" href="page2.html">2</a></li>
          <li class="page-item"><a class="page-link" href="page3.html">3</a></li>
          <li class="page-item"><a class="page-link" href="#">4</a></li>
        </ul>
      </nav>
      <script src="js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>