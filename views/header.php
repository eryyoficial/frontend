
<?php
$title = "Only Header";
require_once __DIR__ . '/head.php';
require_once __DIR__ . '/../../../config/database.php';
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InLib</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Estilização para o menu */
        .nav-link {
            position: relative;
            padding: 0.5rem 1rem;
            transition: color 0.3s ease;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 100%;
            height: 3px;
            background-color: #ffc107; /* Amarelo do Bootstrap */
            transform: scaleX(0);
            transition: transform 0.3s ease;
            transform-origin: bottom right;
        }

        .nav-link:hover::after,
        .nav-link.active::after {
            transform: scaleX(1);
            transform-origin: bottom left;
        }

        .nav-link.active {
            color: #212529; /* Cor do texto no ativo */
        }
    </style>
</head>
<body>
<header class="p-3 bg-dark text-light">
  <div class="container">
    <div class="d-flex flex-wrap align-items-center justify-content-between">
      <a href="/inlib" class="d-flex align-items-center mb-2 mb-lg-0 text-light text-decoration-none">
        <img src="/inlib/public/images/logo.png" alt="inlib_logo" class="bi me-3" width="40" role="img" aria-label="inlib">
      </a>

      <nav class="d-flex flex-wrap align-items-center justify-content-center mb-2 mb-md-0">
        <ul class="nav list-unstyled d-flex flex-row">
          <?php if (isset($_SESSION['estudante_id'])): ?>
          <li><a href="/inlib/home" class="nav-link px-2 text-light">Início</a></li>
          <li><a href="/inlib/todasestantes" class="nav-link px-2 text-light">Livros</a></li>
          <li><a href="/inlib/myprofile" class="nav-link px-2 text-light">Meu Perfil</a></li>
            <li><a href="/inlib/minhasavaliacoes" class="nav-link px-2 text-light">Minhas Avaliações</a></li>
            <li><a href="/inlib/favoritos" class="nav-link px-2 text-light">Favoritos</a></li>
            <li><a href="/inlib/suporte" class="nav-link px-2 text-light">Suporte Técnico</a></li>
            <?php else: ?>
          <li><a href="/inlib/home" class="nav-link px-2 text-light">Início</a></li>
          <li><a href="/inlib/todasestantes" class="nav-link px-2 text-light">Livros</a></li>
          <li><a href="/inlib/avaliacoes" class="nav-link px-2 text-light">Avaliações</a></li>
          <?php endif; ?>
        </ul>
      </nav>

      <form class="d-flex mb-3 mb-lg-0" role="search">
        <input type="search" class="form-control form-control-dark me-2" placeholder="Pesquisar..." aria-label="Search">
      </form>

      <div class="text-end">
        <?php if (isset($_SESSION['estudante_id'])): ?>
          <a href="/inlib/terminarsessao" class="btn btn-outline-light me-2">Logout</a>
        <?php else: ?>
          <a href="/inlib/auth/logar" class="btn btn-outline-light me-2">Entrar</a>
          <a href="/inlib/auth/cadastrar" class="btn btn-warning">Cadastrar-se</a>
        <?php endif; ?>
      </div>
    </div>
  </div>
</header>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    const links = document.querySelectorAll('.nav-link');
    
    // Marcar o link ativo
    links.forEach(link => {
      if (link.href === window.location.href) {
        link.classList.add('active');
      }
    });
  });
</script>
</body>
</html>



<!--
<header class="py-3 mb-4 border-bottom">
  <div class="container d-flex flex-wrap justify-content-center">
    <a href="/inlib/app/views/home.php" class="d-flex align-items-center mb-3 mb-lg-0 me-lg-auto link-body-emphasis text-decoration-none">
      <svg class="bi me-2" width="40" height="32">
        <use xlink:href="#bootstrap" />
      </svg>
      <span class="fs-4">inlib</span>
    </a>
    <form class="col-12 col-lg-auto mb-3 mb-lg-0" role="search">
      <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
    </form>
  </div>
</header>
-->
<div class="b-example-divider"></div>