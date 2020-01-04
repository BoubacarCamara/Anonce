<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>modifier</title>
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
<form action="{{route('edit_propriete',['id'=>$propriete->id ?? ''])}} " method="post" enctype="multipart/form-data"><div>
@csrf
@method('patch')
                   <input type="text" name="localisation" class="form-control" placeholder="localite" value={{$propriete->localisation}} >
               </div>
             
               <div>
                   <input type="text" name="prix_min" class="form-control" placeholder="prix_min" value={{$propriete->prix_min}}>
               </div>
               <div>
                   <input type="text" name="prix_max" class="form-control" placeholder="prix_max" value={{$propriete->prix_max}}>
               </div>
               </div>
               
               <div>
                   <input type="text" name="superficie" class="form-control" placeholder="superficie"  value={{$propriete->superficie}}>
               </div>
               <div>
                   <input type="text" name="type_anonce" class="form-control" placeholder="type d'anonce" value="{{$propriete->type_anonce}}">
               </div>
               <div>
                   <input type="text" name="description" class="form-control" placeholder="description" value="{{$propriete->description}}">
               </div>
               <div>
               <select name="Type_de_proprietes_id" id="Type_de_proprietes_id" class="form-control" >
                    <option value="">type de proprietes</option>
                    @foreach($Type_de_propriete as $key => $value)
                    <option value="{{$key}}">{{$value}}</option>
                    @endforeach
                </select>
                </div>
<div class="row">
   <div class="col-6 text-right"><img src="{{asset($propriete->image)}}"  width="100"></div><div class="col-6"><h3>Chargez une autre image pour remplacer celle-ci</h3></div>
</div>
<div>
   <input type="file" name="image" class="form-control">
</div>
<button class="btn btn-primary" type="submit">Enregistrer</button>

</form>
</body>
</html> -->