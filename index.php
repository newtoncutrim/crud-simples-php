<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>cadastro</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Cadastro</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="?page=novo">Novo usuario</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="?page=listar">Listar usuarios</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <div class="container">
        <?php
        include("config.php");
          switch(@$_REQUEST['page']) {
            case "novo":
              include("novo-usuario.php");
            break;
            case "listar":
              include("listar-usuario.php");
            break;
            case "salvar":
              include("salvar-usuario.php");
            break;
            case "editar":
              include("editar-usuario.php");
            break;
            default:
              echo " <h1>BEM VINDO !</h1>";
          }
        ?>
      </div>


    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>