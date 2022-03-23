<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Psiqui | Login</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
      
      <a href="../../../../index.html"><img src="img/logo.png" alt="some text" width=200 height=200></a>
  </div>

  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Registre uma nova assinatura</p>

      <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="input-group mb-3">
        <input id="name" type="text" name="name"  autocomplete="Luciano" placeholder="Sobrenome" autofocus>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
          
         <div class="input-group mb-3">
            <input type="text" name="surname"  autocomplete="Luciano" placeholder="Sobrenome" autofocus>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
          
        <div class="input-group mb-3">
            <input id="cpf" type="text" class="form-control @error('cpf') is-invalid @enderror" name="cpf" required title="Digite um CPF no formato: xxx.xxx.xxx-xx" pattern="\d{3}\.?\d{3}\.?\d{3}-?\d{2}" placeholder="CPF" autofocus>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>

          <h20>Data de Nascimento</h20>
            <div class="input-group mb-3">  
              <input id="birth" name="birth" type="date" class="form-control" placeholder="Data de nascimento" value="Data de nascimento" autocomplete="06/08/1992">
                <div class="input-group-append">
                  <div class="input-group-text">
                <span class="fas fa-date"></span>
              </div>
            </div>
          </div>

          <div class="input-group mb-3">
            <label>Gênero
            </label>
              <select id="sex" name="sex" class="select2" data-placeholder="Any" style="width: 100%;">
                <option>Masculino</option>
                <option>Feminino</option>
              </select>    
          </div>
          
          <div class="input-group mb-3">
          <input id="city" type="text" class="form-control @error('city') is-invalid @enderror" name="city" required autocomplete="" placeholder="Cidade" autofocus>
          <div class="input-group-append">
            <div class="input-group-text">  
            </div>
          </div>
        </div>
          
          <div class="input-group mb-3">
          <input id="state" type="text" class="form-control @error('state') is-invalid @enderror" name="state" required autocomplete="" placeholder="Estado" autofocus>
          <div class="input-group-append">
            <div class="input-group-text">
              
            </div>
          </div>
        </div>
          
          <div class="input-group mb-3">
            <input id="cep" type="text" class="form-control @error('cep') is-invalid @enderror" name="cep" required autocomplete="CEP" title="Digite um CEP no formato: xxxxx-xxx" pattern="[0-9]{5}-[0-9]{3}"  placeholder="CEP" autofocus>
          <div class="input-group-append">
            <div class="input-group-text">
            </div>
          </div>
        </div>
            
          <div class="input-group mb-3">
          <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" required autocomplete="" placeholder="Endereço" autofocus>
          <div class="input-group-append">
            <div class="input-group-text">
              
            </div>
          </div>
        </div>
          
          <div class="input-group mb-3">
          <input id="telephone" type="text" class="form-control @error('telephone') is-invalid @enderror" pattern="\([0-9]{2}\)[0-9]{4,6}-[0-9]{3,4}$" title="Digite um TELEFONE no formato: (xx)xxxxx-xxxx" pattern="\d{3}\.?\d{3}\.?\d{3}-?\d{2}" placeholder="Telefone" name="telephone" required autocomplete="" placeholder="Telefone" autofocus>
          <div class="input-group-append">
            <div class="input-group-text">
            </div>
          </div>
        </div> 
          
          
        <div class="input-group mb-3">
          <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="E-mail" autofocus>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
         <input class="form-control" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Repetir senha">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="agreeTerms" name="terms" value="agree" required>
              <label for="agreeTerms">
              eu concordo com o <a href="#">termo</a>
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary"> {{ __('Register') }}</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <a href="{{ route('login') }}" class="text-center">
Eu já sou membro</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>
