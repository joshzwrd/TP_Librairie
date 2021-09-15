<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">


        <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">            
 
        <title>@yield('page-title')</title>

    </head>

    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
    
                        <li class="nav-item ">
                            <a class="nav-link active" href="/">Accueil</a>

                        </li>
    
                        <li class="nav-item ">
                            <a class="nav-link active" href="/peoples">Liste des personnes</a>

                        </li>
    
                        <li class="nav-item ">
                            <a class="nav-link active" href="/books">Liste des livres</a>
                        </li>
    
                    </ul>
                </div>
            </div>
        </nav>

        <section id="page-container">
            @yield('page-content')
        </section>
    </body>
    <style>
        #page-containter{
            text-align: center;
            margin: 20px 10px
        }
    </style>
</html>
