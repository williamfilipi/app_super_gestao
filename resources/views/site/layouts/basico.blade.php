<!DOCTYPE html>
    <html lang="pt-br">
        <head>
            <title>Super Gestão - @yield('titulo')</title>
            <meta charset="utf-8">
            <link rel="stylesheet" href="{{asset('css/estilo_basico.css')}}">
        </head>

        <body>
            {{-- Include olha diretamente dentro da view,estamos incluido código do endereço do arquivo nesse exato ponto --}}
            @include('site.layouts._partials.topo')
            @yield('conteudo')
        </body>
</html>