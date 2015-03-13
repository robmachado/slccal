<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SLCCal</title>

    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/sticky-footer-navbars.css') }}" rel="stylesheet">
    <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
</head>
<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ url('/') }}">SLCCal</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('home') }}">Home</a></li>
                    @if (! Auth::guest())
                    <li class="dropdown"><a href="{{ url('admin') }}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Administração <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Cadastro</a></li>
                        <li><a href="#">Tecnicos</a></li>
                        <li><a href="#">Classes de Balanças</a></li>
                        <li class="divider"></li>
                        <li class="dropdown-header">Massas Padrões</li>
                        <li><a href="#">Classes de Massas</a></li>
                        <li><a href="#">Massas</a></li>
                        <li><a href="#">Calibração das Massas</a></li>
                        <li><a href="#">Termohigrômetros</a></li>
                    </ul>
                    </li>
                    <li class="dropdown"><a href="{{ url('calib') }}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Calibrações <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Nova Calibração</a></li>
                        <li><a href="#">Lista</a></li>
                        <li><a href="#">Clientes</a></li>
                        <li><a href="#">Dispositivos</a></li>
                    </ul>
                    </li>    
                    <form class="navbar-form navbar-left" role="search">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Certificado">
                        </div>
                        <button type="submit" class="btn btn-default">Busca</button>
                    </form>    
                    @endif    
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    @if (Auth::guest())
                        <li><a href="{{ url('/auth/login') }}">Login</a></li>
                        <li><a href="{{ url('/auth/register') }}">Novo Usuário</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/auth/logout') }}">Logout</a></li>
                            </ul>
                        </li>
                        
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')
    
    <footer class="footer">
      <div class="container">
        <p class="text-muted">
            @if (Auth::guest())
                Copyright &copy; {{ date('Y') }} SLC Balanças Ltda.
            @else
                Benvindo, {{ Auth::user()->username }}  Copyright &copy; {{ date('Y') }} SLC Balanças Ltda.
            @endif
        </p>
      </div>
    </footer>    
    
    <!-- Scripts -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>
