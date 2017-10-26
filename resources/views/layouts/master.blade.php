<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <!-- Stylesheet -->
  <link href="{{ asset('css/prueba.css') }}" rel="stylesheet">

  <title>AniMaster</title>
</head>
<body>
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="home">AniMaster</a>
      </div>
      <ul class="nav navbar-nav">
        <li @if(Request::path() == '/') class="active" @endif>
          <a href="#"><span class="glyphicon glyphicon-home"></span></a>
        </li>
        <li @if(Request::path() == 'hechizos') class="active" @endif>
          <a href="hechizos">Hechizos</a>
        </li>
        <li @if(Request::path() == '/page2') class="active" @endif>
          <a href="#">Page 2</a>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </nav><!-- Nav bar -->

  @section('content')
    <p>default</p>
  @show

</body>
</html>
