<!DOCTYPE html>
<head>
    <title>Document</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
</head>
<body>
<div class="container text-center">
  <div class="row">
    <div class="col">
      <nav class="navbar bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img src="img/bootstrap-logo.svg" alt="" width="30" height="24" class="d-inline-block align-text-top">
              Bootstrap
          </a>
        </div>
      </nav>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Sistema Web Brabo</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">Cadastrar</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Consultar</a>
                </li>
              </ul>
            </div>
        </div>
      </nav>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Cep:</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="00000-000">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Cidade:</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Sua Cidade">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Estado:</label>
        <select class="form-select" aria-label="Default select example">
          <option selected></option>
          <option value="1">AC</option>
          <option value="1">AL</option>
          <option value="1">AP</option>
          <option value="1">AM</option>
          <option value="1">BA</option>
          <option value="1">CE</option>
          <option value="1">ES</option>
          <option value="1">GO</option>
          <option value="1">MA</option>
          <option value="1">MT</option>
          <option value="1">MS</option>
          <option value="1">MG</option>
          <option value="1">PA</option>
          <option value="1">PB</option>
          <option value="1">PR</option>
          <option value="1">PE</option>
          <option value="1">PI</option>
          <option value="1">RJ</option>
          <option value="1">RN</option>
          <option value="1">RS</option>
          <option value="1">RO</option>
          <option value="1">RR</option>
          <option value="1">SC</option>
          <option value="1">SP</option>
          <option value="1">SE</option>
          <option value="1">TO</option>
          <option value="1">DF</option>
        </select>
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Login:</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Senha:</label>
        <input type="password" class="form-control" id="exampleFormControlInput1" ></textarea>
      </div>
    </div>
  </div>
</div>
</body>
</html>