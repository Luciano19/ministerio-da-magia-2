<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ministério de Magia</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
</head>
<body>
<div class="container-fluid">
  <div class="row no-gutter">
    <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
    <div class="col-md-8 col-lg-6">
      <div class="login d-flex align-items-center py-5">
        <div class="container">
          <div class="row">
            <div class="col-md-9 col-lg-8 mx-auto">
              <h3 class="login-heading mb-4">Cadastro de Salas!</h3>
              <form>
                <div class="form-label-group">
                  <input type="text" id="inputID" class="form-control" placeholder="ID address" required autofocus>
                  <label for="inputID">Insira o ID da sala</label>
                </div>

                <div class="form-label-group">
                  <input type="text" id="inputLocal" class="form-control" placeholder="local address" required autofocus>
                  <label for="inputLocal">Informe a localização</label>
                </div>

                <button class="btn btn-lg btn-danger btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit">Cadastrar</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>