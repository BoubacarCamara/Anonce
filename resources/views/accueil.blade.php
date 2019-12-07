
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<a href="/propriete" class="btn btn-primary">ajouter une proprietee</a>
@foreach($propriete as $a)
          <h2>{{$a->localisation}}</h2>
          <h2>{{$a->image}}</h2> 
          @endforeach


</body>
</html>