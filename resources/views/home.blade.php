<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    <div class="container my-5">
        <div class="row">
            <div class="col-12 text-center">

            </div>
            <div class="col-12">
                <table class="table table-striped">
                    <tr>
                       <td><strong>Azienda</strong></td>
                       <td><strong>Stazione di partenza</strong></td>
                       <td><strong>Stazione di arrivo</strong></td>
                       <td><strong>Orario Partenza</strong></td>
                       <td><strong>Codice treno</strong></td>
                       <td><strong>Data di partenza</strong></td>
                    </tr>
                    @foreach ($Trains as $Train)
                        <tr>
                            <td>{{ $Train->azienda}}</td>
                            <td>{{ $Train->stazione_partenza}}</td>
                            <td>{{ $Train->stazione_arrivo}}</td>
                            <td>{{ $Train->orario_partenza}}</td>
                            <td>{{ $Train->codice_treno}}</td>
                            <td>{{ $Train->data_partenza}}</td>

                        </tr>
                    @endforeach
                  </table>
            </div>
        </div>
    </div>

</body>

</html>