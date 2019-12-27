<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Demende</title>
</head>
<body>
<table class="table table-striped">
       <tr>
           <th>#</th><th>date demande</th>  <th
>personne</th>           <th>propriete</th>
       </tr>
       @foreach($demand as $demande)
           <tr>
               <th>#</th>
               <th>{{$demande->date}}</th>
              
               <th></th>
           </tr>
       @endforeach
   </table>
</body>
</html>
