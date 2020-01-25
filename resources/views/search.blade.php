@extends('layout.app')
@section("contenu_de_la_page")

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Resultat recherche</title>
</head>
<body>
    

<div class="container">
    @foreach ($orders as $proprietes)
        {{ $proprietes->localisation }}
        {{ $proprietes->type_de_proprietes }}
        {{ $proprietes->type_anonce }}
    @endforeach
</div>

{{ $orders->links() }}
</body>
</html>