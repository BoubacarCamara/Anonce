@extends('layout.app')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Messaget</title>
</head>
<body>
    

<form action="{{route('ajouter_message')}}" method="post" enctype="multipart/form-data">
@csrf
<div class="row">   

<div class="form-group col-md-4">
<label for="">Email</label>
<input type="email" id="email" name="email">
</div><br>
<label for="">Messge</label>
<div class="form-group col-md-4"> 
<input type="textarea" placeholder="votre message">
</div><br>
<div class="form-group col-md4  width=20 ">
<button type="submit" class="btn btn-primary">envoyer</button>
</div>
</div>
</form>



</body>
</html>