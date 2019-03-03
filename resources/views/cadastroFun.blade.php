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
              <h3 class="login-heading mb-4">Cadastro de Funcionários!</h3>
              <form>
                <div class="form-label-group">
                  <input type="text" id="inputNome" class="form-control" placeholder="nome address" required autofocus>
                  <label for="inputNome">Insira o nome</label>
                </div>

                <div class="form-label-group">
                  <input type="text" id="inputSexo" class="form-control" placeholder="Sexo" required>
                  <label for="inputSexo">Informe o sexo</label>
                </div>

                <div class="form-label-group">
                  <input type="text" id="inputEndereco" class="form-control" placeholder="Endereco" required>
                  <label for="inputEndereco">Informe o Endereço</label>
                </div>

                <div class="form-label-group">
                  <input type="text" id="inputRUB" class="form-control" placeholder="RUB" required>
                  <label for="inputRUB">Informe o RUB (Registro Único do Bruxo)</label>
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