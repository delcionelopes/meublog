<!doctype html>
<html lang="pt">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">    

        <!-- CSRF Token -->    
        <meta name="_token" content="{{ csrf_token() }}">

        <title>meu Blog - Painel Administrativo</title>
        <link rel="icon" type="image/x-icon" href="{{asset('assets/favicon.ico')}}"/>       

        <link rel="stylesheet" href="{{asset('bootstrap-4.1.3-dist/css/bootstrap.min.css')}}"/>
        <link href="{{asset('fontawesome/css/all.css')}}" rel="stylesheet"/>                      
        
        <link href="{{asset('css/styles.css')}}" rel="stylesheet" /> 

    </head>
<body class="container mt-5">
     <!-- Navegação-->
     <nav class="navbar navbar-expand-lg navbar-dark bg-primary" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="{{route('page.master')}}">meu Blog</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarDropdown" aria-controls="navbarDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
                </button> 
                <div class="collapse navbar-collapse" id="navbarDropdown">
                    <ul class="navbar-nav ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="{{route('page.master')}}">Home</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="{{route('admin.artigos.index')}}">Artigos</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="{{route('admin.tema.index')}}">Temas</a></li>                        
                    </ul>
                </div>
            </div>
        </nav>             
      @yield('content')     
     <!--jQuery-->
     <script src="{{asset('jquery/jquery-3.6.0.js')}}"></script>            
     <!-- Bootstrap JS-->
     <script src="{{asset('bootstrap-4.1.3-dist/js/bootstrap.js')}}" type="text/javascript"></script>       
     <script src="{{asset('bootstrap-4.1.3-dist/js/bootstrap.min.js')}}" type="text/javascript"></script>     
     <script src="{{asset('js/scripts.js')}}"></script>     
      @yield('scripts')                          
</body>
</html>
