<html>
    <head>
        <title>Produtos</title>
        <style>
            #body {
              background-color: #FFB6C1;
            }
        </style>
    </head>
    <body id="body">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Menu</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="{{ url('/home') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/contato') }}">Contato</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="{{ url('/produtos') }}">Produtos</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="{{ url('/empresa') }}">Empresa</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

</body>

</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>