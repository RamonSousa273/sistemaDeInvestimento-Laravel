<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login | Investindo</title>
    <link rel="stylesheet" href="{{asset('css/stylesheet.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Fredoka+One">
  </head>
  <body>

    <section id="conteudo-view" class="login">

      <h1>Investindo</h1>
      <h3>O nosso gerenciador de investimento</h3>

      {!! Form::open(['route' =>  'user.login', 'method' => 'post']) !!}
        <p>Acesse o sistema</p>
        <label>
          {!! Form::text('username', null, ['class' => 'input', 'placeholder' => "Usuario"]) !!}
        </label>
        <label>
          {!! Form::Password ('password', ['placeholder' => "Senha"]) !!}
        </label>

        {!! Form::submit('Entrar') !!}

      {!! Form::close() !!}

    </section>

  </body>
</html>
