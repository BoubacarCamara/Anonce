<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>modifier alerte</title>
</head>
<body>
<div class="container">
@if(session('success'))
   <div class="alert alert-success">{{session('success')}}</div>
@endif

@if($errors->any())
   @foreach($errors->all() as $error)
       <div class="alert alert-danger">{{$error}}</div>
   @endforeach
@endif
<form action="{{route('edit_alert',['id'=>$alert->id ?? ''])}} " method="post" enctype="multipart/form-data"><div>
@csrf
@method('patch')
            <div>
                   <input type="text" name="date" class="form-control" placeholder="date" value={{$alert->date}} >
               </div>
             
              
               <div>
               <select name="personnes_id" id="personnes_id" class="form-control" >
                    <option value="">client</option>
                    @foreach($perso as $key => $value)
                    <option value="{{$key}}">{{$value}}</option>
                    @endforeach
                </select>
                </div>

</div>
<button class="btn btn-primary" type="submit">Enregistrer</button>

</form>
</body>
</html>