<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <title>Invest</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Fredoka+One">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
        <link rel="stylesheet" href="{{asset('css/stylesheet.css')}}">
        @yield('css-view')

    </head>

    <body>
        @include('templates.menu-lateral')

        <section id="view-conteudo">
            @yield('conteudo-view')
        </section>    

        @yield('js-view')
    </body>
</html>