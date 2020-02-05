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
    

<form method="POST" action="{{route('envoyer')}}">
<div class="row">   
<div class="form-group col-md-4">
<input type="email" id="email" name="email">
</div>
<div class="form-group col-md-4"> 
<input type="text" placeholder="votre message">
</div>
<div class="form-group col-md4">
<button class="btn btn-primary">envoyer</button>
</div>
</div>
</form>



</body>
</html>