<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title> ajouter_propriete</title>
</head>
<body>
    <h1>creation d'une alerte</h1>
<div class="container">
@if(session('success'))
   <div class="alert alert-success">{{session('success')}}</div>
@endif

@if($errors->any())
   @foreach($errors->all() as $error)
       <div class="alert alert-danger">{{$error}}</div>
   @endforeach
@endif

       <div class="container">
           <form action="{{route('ajouter_alert')}}" method="post" enctype="multipart/form-data">
               @csrf
               <div>
                   <input type="text" name="date" class="form-control" placeholder="date" >
               </div>
             
             
               <div>
                <select name="personnes_id" id="personnes_id" class="form-control" >
                    <option value="">le client</option>
                    @foreach($perso as $key => $value)
                        <option value="{{$key}}">{{$value}}</option>
                    @endforeach
                </select>
                </div>
               <div>
                   <button class="btn btn-primary">Enregistrer</button>
               </div>
           </form>
</body>
</html>